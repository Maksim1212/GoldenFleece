<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Storage;

class FeedbackController extends Controller{
    public function showFeedbackPage(){
        $feedbacks = DB::table('feedback')->where('active', 1)->orderBy('created_at', 'DESC')->paginate(10);
        $topLogo = DB::table('logos')->where('status', 1)->where('place', 'Верхнее меню')->first();
        $bottomLogo = DB::table('logos')->where('status', 1)->where('place', 'Нижнее меню')->first();
        return view('pages.feedback', compact('feedbacks', 'topLogo', 'bottomLogo'));
    }
    public function createFeedback(Request $request){
        $this->validate(request(), [
            'feedback_attach' => 'max:2048|image|mimes:jpeg,png,jpg,gif',
            'feedback_title' => 'required',
            'feedback_name' => 'required',
            'feedback_text' => 'required',
            'feedback_prices' => 'required|numeric',
            'feedback_service' => 'required|numeric',
            'feedback_interier' => 'required|numeric'
        ]);
        if($request->file('feedback_attach')){
            $path = $request->file('feedback_attach')->store('feedback', 'public');
        }
        else $path = 'feedback/user.png';
        DB::table('feedback')->insert([
            'feedback_attach' => $path,
            'feedback_title' => $request->feedback_title,
            'feedback_name' => $request->feedback_name,
            'feedback_text' => $request->feedback_text,
            'feedback_prices' => $request->feedback_prices,
            'feedback_service' => $request->feedback_service,
            'feedback_interier' => $request->feedback_interier,
            'active' => 0,
            'created_at' => now()
        ]);
        return redirect()->route('feedback');
    }
    public function showFeedbackPageAdmin(){
        $feedbacks = DB::table('feedback')->where('active', 0)->paginate(10);
        $feedbacksApproved = DB::table('feedback')->where('active', 1)->paginate(10);
        return view('feedback.feedback', compact('feedbacks','feedbacksApproved'));
    }
    public function activeFeedback($id){
        DB::table('feedback')->where('id',$id)->update(['active' => 1]);
        return redirect()->route('feedbacksAdmin');
    }
    public function deleteFeedback($id){
        $feedback = DB::table('feedback')->where('id', $id)->first();
        if(!empty($feedback->feedback_attach)){
            Storage::disk('public')->delete($feedback->feedback_attach);
        }
        DB::table('feedback')->where('id', $id)->delete();
        return redirect()->route('feedbacksAdmin');
    }
    public function showEditFeedbackPage($id){
        $feedback = DB::table('feedback')->where('id', $id)->first();
        return view('feedback.editFeedback', compact('feedback'));
    }
    public function editFeedback(Request $request){
        $this->validate(request(), [
            'feedback_attach' => 'max:2048|image|mimes:jpeg,png,jpg,gif',
            'feedback_title' => 'required',
            'feedback_name' => 'required',
            'feedback_text' => 'required',
            'feedback_prices' => 'required|numeric',
            'feedback_service' => 'required|numeric',
            'feedback_interier' => 'required|numeric'
        ]);
        if($request->file('feedback_attach')){
            $path = $request->file('feedback_attach')->store('feedback', 'public');
            if($request->path != "feedback/user.png"){
                Storage::disk('public')->delete($request->path);
            }
        }
        else $path = $request->path;
        if($request->active == 'on')$active = 1;
        else $active = 0;
        DB::table('feedback')->where('id', $request->id)->update([
            'feedback_attach' => $path,
            'feedback_title' => $request->feedback_title,
            'feedback_name' => $request->feedback_name,
            'feedback_text' => $request->feedback_text,
            'feedback_prices' => $request->feedback_prices,
            'feedback_service' => $request->feedback_service,
            'feedback_interier' => $request->feedback_interier,
            'active' => $active,
        ]);
        return redirect()->route('feedbacksAdmin');
    }
}
