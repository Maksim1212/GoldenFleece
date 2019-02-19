<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class PagesController extends Controller
{
    public  function menu(){
        $info = DB::table('texts')->where('id', 3)->first();
        $topLogo = DB::table('logos')->where('status', 1)->where('place', 'Верхнее меню')->first();
        $bottomLogo = DB::table('logos')->where('status', 1)->where('place', 'Нижнее меню')->first();
        return view('pages.menu', compact('info', 'topLogo', 'bottomLogo'));
    }

            /*public function feedback()
            {
                return view('pages.feedback');
            }*/

        public function contacts(){
            $topLogo = DB::table('logos')->where('status', 1)->where('place', 'Верхнее меню')->first();
            $bottomLogo = DB::table('logos')->where('status', 1)->where('place', 'Нижнее меню')->first();
            return view('pages.contacts', compact('topLogo', 'bottomLogo'));
        }

            public function cart()
            {
                return view('pages.cart');
            }
    public function main(){
        $info = DB::table('texts')->where('id', 2)->first();
        $merop = DB::table('texts')->where('id', 4)->first();
        $about = DB::table('texts')->where('id', 5)->first();
        $hotel = DB::table('texts')->where('id', 6)->first();
        $rest = DB::table('texts')->where('id', 8)->first();
        $topLogo = DB::table('logos')->where('status', 1)->where('place', 'Верхнее меню')->first();
        $bottomLogo = DB::table('logos')->where('status', 1)->where('place', 'Нижнее меню')->first();
        $slides = DB::table('sliders')->where('slider', 'на главной')->get();
        $news = DB::table('news')->where('active', 'yes')->get();
        return view('index', compact('info', 'merop', 'about', 'hotel', 'rest', 'topLogo', 'bottomLogo', 'slides', 'news'));
    }

}
