<?php

namespace App\Http\Controllers;

use App\HotelRooms;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class HotelRoomsController extends Controller
{
    public function index(){
        $topLogo = DB::table('logos')->where('status', 1)->where('place', 'Верхнее меню')->first();
        $info = DB::table('texts')->where('id', 7)->first();
        $bottomLogo = DB::table('logos')->where('status', 1)->where('place', 'Нижнее меню')->first();
        $rooms = DB::table('rooms')->get();
        return view('pages.hotel', compact('info','topLogo', 'bottomLogo', 'rooms'));
    }


    public function roomOrder(Request $request)
    {

        $data = $this->validate($request, [

            'start-date'=>'required',

            'finish-date'=>'required',

            'hotel_type_select'=>'required',

            'persons'=>'required|Regex:/^[1-9]+$/i|min:1',

            'name_surname' =>'required|Regex:/^[\D]+$/i|max:100',

            'phone' =>'required|min:10|numeric',

        ]);

        HotelRooms::create($data);


        return redirect('/hotel');

    }


}
