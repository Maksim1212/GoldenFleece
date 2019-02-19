<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class NewsEventsController extends Controller
{
    public function index(){
        $topLogo = DB::table('logos')->where('status', 1)->where('place', 'Верхнее меню')->first();
        $bottomLogo = DB::table('logos')->where('status', 1)->where('place', 'Нижнее меню')->first();
        $news = DB::table('news')->where('active','yes')->get();
        return view('pages.news', compact('topLogo', 'bottomLogo', 'news'));
    }
}
