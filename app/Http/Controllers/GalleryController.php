<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class GalleryController extends Controller
{
    public function show(){   
        $topLogo = DB::table('logos')->where('status', 1)->where('place', 'Верхнее меню')->first();
        $bottomLogo = DB::table('logos')->where('status', 1)->where('place', 'Нижнее меню')->first();
        $images = DB::table('gallery')->get();
        return view('pages.gallery', compact('topLogo', 'bottomLogo', 'images'));
    }
}
