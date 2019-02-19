<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class RestaurantDishesController extends Controller
{
    public function delivery(){
        $token = Session::token();
        $info = DB::table('texts')->where('id', 1)->first();
        $topLogo = DB::table('logos')->where('status', 1)->where('place', 'Верхнее меню')->first();
        $bottomLogo = DB::table('logos')->where('status', 1)->where('place', 'Нижнее меню')->first();
        $catigories = DB::table('dishes_categories')->get();
        $dishes = DB::table('dishes')->get();
        $images = DB::table('dishes_images')->get();
        $dishesInBsket = DB::table('basket')->where('token', $token)->get();
        $count = count($dishesInBsket);
        return view('pages.delivery', compact('info', 'topLogo', 'bottomLogo', 'catigories', 'dishes', 'images', 'count'));
    }
    public function showDishes($id){
        $token = Session::token();
        $info = DB::table('texts')->where('id', 1)->first();
        $topLogo = DB::table('logos')->where('status', 1)->where('place', 'Верхнее меню')->first();
        $bottomLogo = DB::table('logos')->where('status', 1)->where('place', 'Нижнее меню')->first();
        $catigories = DB::table('dishes_categories')->get();
        $dishesInBsket = DB::table('basket')->where('token', $token)->get();
        $count = count($dishesInBsket);
        if($id >0){
            $first = DB::table('dishes')->where('catigoryParrents', $id);
            $dishes = DB::table('dishes')->where('catigory', $id)->union($first)->get();
            $images = DB::table('dishes_images')->get();
        }
        else{
            $dishes = DB::table('dishes')->get();
            $images = DB::table('dishes_images')->get();
        }
        return view('pages.deliveryDishes', compact('info', 'topLogo', 'bottomLogo', 'catigories', 'dishes', 'images', 'count'));
    }
}
