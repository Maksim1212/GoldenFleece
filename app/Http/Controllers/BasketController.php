<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
class BasketController extends Controller{
    public function deleteOldGoods(){
        $goods = DB::table('basket')->get();
        foreach($goods as $value){
            if(($value->time+1440) < time()){
                DB::table('basket')->where('id', $value->id)->delete();
            }
        }
    }
    public function addedInBasket(Request $request){
        $this->validate($request, [
            'idGood' => 'required|numeric|min:1|unique:basket'
        ]);
        $dish = DB::table('dishes')->where('id', $request->idGood)->first();
        $image = DB::table('dishes_images')->where('idDishes', $request->idGood)->first();
        DB::table('basket')->insert(['idGood'=>$dish->id, 'name'=>$dish->name,'foto'=>$image->foto, 'cost'=>$dish->cost, 'weight' => $dish->weight, 'token'=>$request->_token, 'time'=>time(), 'count' => 1]);
        echo "Блюдо добавлено в корзину";
    }
    public function showBasketPage(){
        $this->deleteOldGoods();
        $info = DB::table('texts')->where('id', 3)->first();
        $topLogo = DB::table('logos')->where('status', 1)->where('place', 'Верхнее меню')->first();
        $bottomLogo = DB::table('logos')->where('status', 1)->where('place', 'Нижнее меню')->first();
        $catigories = DB::table('dishes_categories')->get();
        $token = Session::token();
        $dishes = DB::table('basket')->where('token', $token)->get();
        $count = count($dishes);
        return view('pages.basket', compact('info', 'topLogo', 'bottomLogo', 'catigories', 'dishes', 'count'));
    }
    public function deleteGood($id){
        DB::table('basket')->where('idGood', $id)->delete();
        return redirect()->back();
    }
    public function delivery(){
        $topLogo = DB::table('logos')->where('status', 1)->where('place', 'Верхнее меню')->first();
        $bottomLogo = DB::table('logos')->where('status', 1)->where('place', 'Нижнее меню')->first();
        return view('pages.details', compact('topLogo', 'bottomLogo', 'request'));
    }
    public function checkout(Request $request){
        $this->validate($request, [
            'user_name' => 'required',
            'user_phone' => 'required|numeric|min:10',
            'user_email' => 'required|email',
            'user_street' => 'required',
            'user_house' => 'required|numeric|min:1',
            'user_apartment' => 'required|numeric|min:1',
            'user_comment' => 'required',
            'user_painment' => 'required',
        ]);
        $token = Session::token();
        $dishes = DB::table('basket')->where('token', $token)->get();
        $name = '';
        $count = '';
        $cost = '';
        $price = 0;
        foreach($dishes as $value){
            $name .= $value->name."|";
            $count .= $value->count."|";
            $cost .= $value->cost."|";
            $price += $value->cost;
            DB::table('basket')->where('id', $value->id)->delete();
        }
        DB::table('checkout_eat')->insert([
            'name' => $request->user_name,
            'phone' => $request->user_phone,
            'email' => $request->user_email,
            'street' => $request->user_street,
            'house' => $request->user_house,
            'apartment' => $request->user_apartment,
            'comment' => $request->user_comment,
            'pay' => $request->user_painment,
            'dish_name' => $name,
            'dish_count' => $count,
            'dish_cost' => $cost,
            'dish_cost_total' => $price
        ]);
        return redirect()->route('delivery');
    }
    public function updateGood(Request $request){
        if($request->do == "+"){
            DB::table('basket')->where('idGood',$request->idGood)->increment('count');
        }
        else if($request->do == "-"){
            DB::table('basket')->where('idGood',$request->idGood)->where('count','>',1)->decrement('count');
        }
    }
}
