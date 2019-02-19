<?php

namespace App\Http\Controllers;

use App\RestaurantTables;
use Illuminate\Http\Request;
use Symfony\Component\Console\Helper\Table;
use Illuminate\Support\Facades\DB;

class RestaurantTablesController extends Controller
{
    public function index(){
        $info = DB::table('texts')->where('id', 9)->first();
        $topLogo = DB::table('logos')->where('status', 1)->where('place', 'Верхнее меню')->first();
        $bottomLogo = DB::table('logos')->where('status', 1)->where('place', 'Нижнее меню')->first();
        $slides = DB::table('sliders')->where('slider', 'на странице ресторана')->get();
        return view('pages.restaurant', compact('info', 'topLogo', 'bottomLogo', 'slides'));
    }

    public function tableOrder(Request $request)
    {

        $data = $this->validate($request, [

            'name' =>'required|Regex:/^[\D]+$/i|max:100',

            'phone' =>'required|min:10|numeric',

            'email' =>'required|email|max:255',

        ]);

        RestaurantTables::create($data);
        return redirect('/restaurant');
    }
}
