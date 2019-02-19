<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Storage;
class HomeController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }
    public function index(){
        $user = Auth::user();
        if($user->name == 'admin'){
            $link = "<a href='".route('admins')."'>Новые админы</a>";
            $link2 = "<a href='".route('allAdmins')."'>Активные админы</a>";
        }
        else {
            $link ='';
            $link2 ='';
            $data = DB::table('users')->where(['id'=>$user->id,'active' => 1])->get();
            $active = false;
            foreach($data as $value){
                $active=true;
            }
            if($active == false) {
                Auth::logout();
                return redirect("/login");
            }
        }
        return view('home',compact('link', 'link2'));
    }
    public function show(){
        $users = DB::table('users')->whereNull('active')->whereNull('accessRights')->get();
        return view('users', compact('users'));
    }
    public function showAll(){
        $users = DB::table('users')->where('active', 1)->where('accessRights','!=', null)->get();
        return view('users', compact('users'));
    }
    public function activeUsers(Request $request){
        $access = $request->access;
        for($i = 0;$i<count($access);$i++){
            if(isset($access[$i])){
                $arrayValues = explode("|", $access[$i]);
                DB::table('users')->where('id', $arrayValues[1])->update(array('active' => 1, 'accessRights' => $arrayValues[0]));
            }
        }
        return Redirect::back();
    }
    public function showInfo(){
        $link1 = '<a href="#" onclick="showAndHideDivs(\'info\',\'logo\');">Общее инфо </a>';
        $link2 = '<a href="#" style="margin-left:10px;" onclick="showAndHideDivs(\'logo\',\'info\');"> Лого</a>';
        $info = DB::table('texts')->paginate(5);
        $logos = DB::table('logos')->paginate(5);
        return view('info.info',compact('info','link1','link2','logos'));
    }
    public function showPageEditInfo($id){
        $data = DB::table('texts')->where('id',$id)->first();
        return view('info.editInfo',compact('data'));
    }
    public function editInfo(Request $request){
        $data = $this->validate(request(), [
            'title' =>'required',
            'id' =>'required|min:1|numeric',
            'text' =>'required',
        ]);
        DB::table('texts')->where('id', $data['id'])->update(array('title' => $data['title'], 'description' => $data['text']));
        return redirect()->route('info');
    }
    public function showPageCreateLogo(){
        return view('logo.createLogo');
    }
    public function createLogo(Request $request){
        $this->validate(request(), [
            'place' =>'required',
            'img' => 'required|max:2048|image|mimes:jpeg,png,jpg,gif',
        ]);
        $path = $request->file('img')->store('uploads', 'public');
        DB::table('logos')->where('place', $request->place)->update(array('status' => 0));
        DB::table('logos')->insert(['logo' => $path, 'place' => $request->place,'status' => 1]);
        return redirect()->route('info');
    }
    public function deleteLogo($id){
        $logo = DB::table('logos')->where('id',$id)->first();
        Storage::disk('public')->delete($logo->logo);
        DB::table('logos')->where('id',$id)->delete();
        return redirect()->route('info');
    }
    public function showEditLogoPage($id){
        $logo = DB::table('logos')->where('id',$id)->first();
        return view('logo.editLogo', compact('logo'));
    }
    public function editLogo(Request $request){
        $this->validate(request(), [
            'img' => 'max:2048|image|mimes:jpeg,png,jpg,gif',
            'place' => 'required'
        ]);
        if(isset($request->status)) {
            $status = $request->status;
            DB::table('logos')->where('place', $request->place)->update(array('status' => 0));
        }
        else $status = 0;
        if($request->file('img')){
            $logo = DB::table('logos')->where('id',$request->id)->first();
            Storage::disk('public')->delete($logo->logo);
            $path = $request->file('img')->store('uploads', 'public');
            DB::table('logos')->where('id', $request->id)->update(array('place' => $request->place, 'logo' => $path, 'status' => $status));
        }
        else {
            DB::table('logos')->where('id', $request->id)->update(array('place' => $request->place, 'status' => $status));
        }
        return redirect()->route('info');
    }
    public function showNewsPage(){
        $news = DB::table('news')->paginate(5);
        return view('news.news', compact('news'));
    }
    public function showCreateNewsPage(){
        return view('news.creaeNews');
    }
    public function createNews(Request $request){
        $this->validate(request(), [
            'title' =>'required',
            'preview' =>'required',
            'article' =>'required',
            'img' =>'required|max:2048|image|mimes:jpeg,png,jpg,gif',
        ]);
        $path = $request->file('img')->store('news', 'public');
        DB::table('news')->insert([
            'title' => $request->title, 
            'preview' => $request->preview,
            'text' => $request->article,
            'type'=>$request->type, 
            'active'=>$request->active,
            'foto'=>$path,
            'created_at'=>now()
        ]);
        return redirect()->route('newsa');
    }
    public function showEditNewsPage($id){
        $news = DB::table('news')->where('id', $id)->first();
        return view('news.editNews', compact('news'));
    }
    public function deleteNews($id){
        $news = DB::table('news')->where('id',$id)->first();
        Storage::disk('public')->delete($news->foto);
        DB::table('news')->where('id',$id)->delete();
        return redirect()->route('newsa');
    }
    public function editNews(Request $request){
        $this->validate(request(), [
            'title' =>'required',
            'preview' =>'required',
            'article' =>'required',
            'active' => 'required',
            'type' => 'required',
            'img' =>'max:2048|image|mimes:jpeg,png,jpg,gif',
        ]);
        if($request->file('img')){
            $path = $request->file('img')->store('news', 'public');
            $news = DB::table('news')->where('id',$request->id)->first();
            Storage::disk('public')->delete($news->foto);
            DB::table('news')->where('id', $request->id)->update(['title' => $request->title, 'preview' => $request->preview,'text' => $request->article,'type'=>$request->type, 'active'=>$request->active,'foto'=>$path,'updated_at'=>now()]);
        }
        else{
            DB::table('news')->where('id', $request->id)->update(['title' => $request->title, 'preview' => $request->preview,'text' => $request->article,'type'=>$request->type, 'active'=>$request->active,'updated_at'=>now()]);
        }
        return redirect()->route('newsa');
    }
    public function showPageGallery(){
        $pictiries = DB::table('gallery')->paginate(10);
        return view('gallery.gallery', compact('pictiries'));
    }
    public function showPageCreateFotoGallery(){
        return view('gallery.createFoto');
    }
    public function createFotoGallery(Request $request){
        $this->validate(request(), [
            'section' =>'required',
            'img' =>'required|max:2048|image|mimes:jpeg,png,jpg,gif',
        ]);
        $path = $request->file('img')->store('gallery', 'public');
        DB::table('gallery')->insert(['section' => $request->section, 'foto' => $path]);
        return redirect()->route('gallery');
    }
    public function showEditGalleryPage($id){
        $picture = DB::table('gallery')->where('id', $id)->first();
        return view('gallery.editGallery', compact('picture'));
    }
    public function deleteGallery($id){
        $picture = DB::table('gallery')->where('id',$id)->first();
        Storage::disk('public')->delete($picture->foto);
        DB::table('gallery')->where('id',$id)->delete();
        return redirect()->route('gallery');
    }
    public function editGallery(Request $request){
        $this->validate(request(), [
            'section' =>'required',
            'img' =>'max:2048|image|mimes:jpeg,png,jpg,gif',
        ]);
        if($request->file()){
            $path = $request->file('img')->store('gallery', 'public');
            $foto = DB::table('gallery')->where('id',$request->id)->first();
            Storage::disk('public')->delete($foto->foto);
            DB::table('gallery')->where('id', $request->id)->update(['section'=>$request->section,'foto'=>$path]);
        }
        else DB::table('gallery')->where('id', $request->id)->update(['section'=>$request->section]);
        return redirect()->route('gallery');
    }
    public function showSlidesPage(){
        $slides = DB::table('sliders')->paginate(10);
        return view('slides.slides', compact('slides'));
    }
    public function showCreateSlidesPage(){
        return view('slides.createSlides');
    }
    public function createSlide(Request $request){
        $this->validate(request(), [
            'title' =>'required',
            'text' =>'required',
            'url' =>'required',
            'textButton' =>'required',
            'slider' =>'required',
            'img' =>'max:2048|image|mimes:jpeg,png,jpg,gif',
        ]);
        $path = $request->file('img')->store('slides', 'public');
        DB::table('sliders')->insert([
            'title' => $request->title, 
            'url' => $request->url,
            'body' => $request->text,
            'textButton'=>$request->textButton, 
            'slider'=>$request->slider,
            'foto'=>$path,
        ]);
        return redirect()->route('slides');
    }
    public function showEditSlidePage($id){
        $slide = DB::table('sliders')->where('id', $id)->first();
        return view('slides.editSlide', compact('slide'));
    }
    public function deleteSlide($id){
        $slide = DB::table('sliders')->where('id', $id)->first();
        Storage::disk('public')->delete($slide->foto);
        DB::table('sliders')->where('id', $id)->delete();
        return redirect()->route('slides');
    }
    public function editSlide(Request $request){
        $this->validate(request(), ['img' =>'max:2048|image|mimes:jpeg,png,jpg,gif','title' => 'required','textButton' => 'required','url' => 'required']);
        if($request->file('img')){
            $path = $request->file('img')->store('slides', 'public');
            $slide = DB::table('sliders')->where('id', $request->id)->first();
            Storage::disk('public')->delete($slide->foto);
            DB::table('sliders')->where('id', $request->id)->update([
                'title' => $request->title, 
                'url' => $request->url,
                'body' => $request->text,
                'textButton'=>$request->textButton, 
                'slider'=>$request->slider,
                'foto'=>$path,
            ]);
        }
        else{
            DB::table('sliders')->where('id', $request->id)->update(['title' => $request->title, 'url' => $request->url,'body' => $request->text,'textButton'=>$request->textButton, 'slider'=>$request->slider,]);
        }
        return redirect()->route('slides');
    }
    public function showRoomsPage(){
        $rooms =  DB::table('rooms')->paginate(10);
        return view('rooms.rooms', compact('rooms'));
    }
    public function showCreateRoomPage(){
        return view('rooms.createRoom');
    }
    public function createRoom(Request $request){
        $this->validate(request(), [
            'name' =>'required',
            'cost' =>'required|numeric',
            'number' =>'required|numeric',
            'img' =>'required|max:2048|image|mimes:jpeg,png,jpg,gif',
        ]);
        $path = $request->file('img')->store('rooms', 'public');
        DB::table('rooms')->insert([
            'name' => $request->name, 
            'cost' => $request->cost,
            'number' => $request->number,
            'foto'=>$path
        ]);
        return redirect()->route('rooms');
    }
    public function showEditRoomPage($id){
        $room = DB::table('rooms')->where('id', $id)->first();
        return view('rooms.editRoom', compact('room'));
    }
    public function editRoom(Request $request){
        $this->validate(request(), [
            'cost' =>'required|numeric',
            'number' =>'required|numeric',
            'img' =>'max:2048|image|mimes:jpeg,png,jpg,gif',
        ]);
        if($request->file('img')){
            $path = $request->file('img')->store('rooms', 'public');
            $room = DB::table('rooms')->where('id', $request->id)->first();
            Storage::disk('public')->delete($room->foto);
            DB::table('rooms')->where('id', $request->id)->update(['name' => $request->name, 'cost' => $request->cost,'number' => $request->number,'foto'=>$path]);
        }
        else{
            DB::table('rooms')->where('id', $request->id)->update(['name' => $request->name, 'cost' => $request->cost,'number' => $request->number]);
        }
        return redirect()->route('rooms');
    }
    public function deleteRoom($id){
        $room = DB::table('rooms')->where('id', $id)->first();
        Storage::disk('public')->delete($room->foto);
        DB::table('rooms')->where('id', $id)->delete();
        return redirect()->route('rooms');
    }
    public function showCatigoriesDishes(){
         $catigories = DB::table('dishes_categories')->get();
        return view('catigories.dishes', compact('catigories'));
    }
    public function showCreateCatigoryPage(){
        $catigories = DB::table('dishes_categories')->get();
        return view('catigories.createCatigory', compact('catigories'));
    }
    public function createCatigory(Request $request){
        $this->validate(request(), [
            'name' =>'required',
            'parrents' =>'required',
        ]);
        DB::table('dishes_categories')->insert(['name' => $request->name, 'parrents' => $request->parrents]);
        return redirect()->route('catigoriesDishes');
    }
    public function showEditCategoryPage($id){
        $catigory = DB::table('dishes_categories')->where('id',$id)->first();
        $catigories = DB::table('dishes_categories')->get();
        return view('catigories.edit', compact('catigory','catigories'));
    }
    public function deleteCategory($id){
        $catigory = DB::table('dishes_categories')->where('id',$id)->first();
        DB::table('dishes_categories')->where('parrents', $catigory->name)->update(['parrents' => "Корень категорий"]);
        DB::table('dishes_categories')->where('id',$id)->delete();
        return redirect()->route('catigoriesDishes');
    }
    public function editCategory(Request $request){
        $this->validate(request(), [
            'name' =>'required',
            'parrents' =>'required',
        ]);
        DB::table('dishes_categories')->where('parrents',$request->oldName)->update(['parrents' => $request->name]);
        DB::table('dishes_categories')->where('id',$request->id)->update(['name' => $request->name, 'parrents' => $request->parrents]);
        return redirect()->route('catigoriesDishes');
    }
    public function showDishesPage(){
        $dishes = DB::table('dishes')->paginate(10);
        $catigories = DB::table('dishes_categories')->get();
        return view('dishes.dishes', compact('dishes', 'catigories'));
    }
    public function showCreateDishesPage(){
        $catigories = DB::table('dishes_categories')->get();
        return view('dishes.createDishes', compact('catigories'));
    }
    public function createDishes(Request $request){
        $this->validate(request(), [
            'name' =>'required',
            'cost' =>'required|numeric',
            'weight' =>'required|numeric',
            'rating' =>'required|numeric',
            'slider' =>'required|numeric',
            'status' =>'required',
            'catigory' =>'required',
            'description' =>'required'
        ]);
        $catigory = DB::table('dishes_categories')->where('id', $request->catigory)->first();
        DB::table('dishes')->insert(['name'=>$request->name,'cost'=>$request->cost,'weight'=>$request->weight,'rating'=>$request->rating,'slider'=>$request->slider,'status'=>$request->status,'catigory'=>$request->catigory,'catigoryParrents' => $catigory->parrents,'description'=>$request->description]);
        return redirect()->route('dishes');
    }
    public function showDishesImagesPage($id){
        $images = DB::table('dishes_images')->where('idDishes', $id)->get();
        return view('dishes.dishesImages', compact('id','images'));
    }
    public function createDishesImages(Request $request){
        $this->validate(request(), ['main' =>'required','img' =>'required|max:2048|image|mimes:jpeg,png,jpg,gif','id' =>'required|numeric']);
        $path = $request->file('img')->store('dishes', 'public');
        DB::table('dishes_images')->insert(['main' => $request->main, 'idDishes' => $request->id,'foto'=>$path]);
        return redirect()->route('dishes');
    }
    public function deleteDishesImages($id){
        $foto = DB::table('dishes_images')->where('id', $id)->first();
        Storage::disk('public')->delete($foto->foto);
        DB::table('dishes_images')->where('id', $id)->delete();
        return redirect()->route('dishes');
    }
    public function showEditDishesPage($id){
        $catigories = DB::table('dishes_categories')->get();
        $dishes = DB::table('dishes')->where('id', $id)->first();
        return view('dishes.editDishes', compact('dishes','catigories'));
    }
    public function editDishes(Request $request){
        $this->validate(request(), [
            'name' =>'required',
            'cost' =>'required|numeric',
            'weight' =>'required|numeric',
            'rating' =>'required|numeric',
            'slider' =>'required|numeric',
            'status' =>'required',
            'catigory' =>'required',
            'description' =>'required'
        ]);
        $catigory = DB::table('dishes_categories')->where('id', $request->catigory)->first();
        DB::table('dishes')->update(['name'=>$request->name,'cost'=>$request->cost,'weight'=>$request->weight,'rating'=>$request->rating,'slider'=>$request->slider,'status'=>$request->status,'catigory'=>$request->catigory,'catigoryParrents' => $catigory->parrents,'description'=>$request->description]);
        return redirect()->route('dishes');
    }
    public function deleteDishes($id){
        DB::table('dishes')->where('id', $id)->delete();
        $foto = DB::table('dishes_images')->where('idDishes', $id)->get();
        foreach($foto as $value){
           Storage::disk('public')->delete($value->foto); 
           DB::table('dishes_images')->where('id', $value->id)->delete();
        }
        return redirect()->route('dishes');
    }
}
