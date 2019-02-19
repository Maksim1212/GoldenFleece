<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DeliveriesController extends Controller
{
    public function showDeliveriesPage(){
        $orders = DB::table('checkout_eat')->whereNull('active')->get();
        $activeOrders = DB::table('checkout_eat')->where('active', 1)->get();
        $rejectOrders = DB::table('checkout_eat')->where('active', 2)->get();
        return view('reservation.deliveries', compact('orders', 'activeOrders', 'rejectOrders'));
    }
    public function showOrder($id){
        $order = DB::table('checkout_eat')->where('id', $id)->first();
        $names = explode("|",$order->dish_name);
        $costs = explode("|",$order->dish_cost);
        $counts = explode("|",$order->dish_count);
        $totalPrice = $order->dish_cost_total;
        return view('reservation.showOrder', compact('names', 'costs', 'counts', 'totalPrice', 'id'));
    }
    public function activeOrder($id){
        DB::table('checkout_eat')->where('id', $id)->update(['active'=>1]);
        return redirect()->route('deliveries');
    }
    public function rejectOrder($id){
        DB::table('checkout_eat')->where('id', $id)->update(['active'=>2]);
        return redirect()->route('deliveries');
    }
    public function showTablePage(){
        $tables = DB::table('restaurant_tables')->where('confirmed', 0)->get();
        $tablesActive = DB::table('restaurant_tables')->where('confirmed', 1)->get();
        $tablesReject = DB::table('restaurant_tables')->where('confirmed', 2)->get();
        return view('reservation.table', compact('tables', 'tablesActive', 'tablesReject'));
    }
    public function activeTable($id){
        DB::table('restaurant_tables')->where('id', $id)->update(['confirmed'=>1]);
        return redirect()->route('table');
    }
    public function rejectTable($id){
        DB::table('restaurant_tables')->where('id', $id)->update(['confirmed'=>2]);
        return redirect()->route('table');
    }
    public function showOrderRoomsPage(){
        $rooms = DB::table('hotel_rooms')->whereNull('active')->get();
        $activeRooms = DB::table('hotel_rooms')->where('active', 1)->get();
        $rejectRooms = DB::table('hotel_rooms')->where('active', 2)->get();
        return view('reservation.rooms', compact('rooms', 'activeRooms', 'rejectRooms'));
    }
    public function activeRooms($id){
        DB::table('hotel_rooms')->where('id', $id)->update(['active' => 1]);
        return redirect()->route('orderRoomsPage');
    }
    public function rejectRooms($id){
        DB::table('hotel_rooms')->where('id', $id)->update(['active' => 2]);
        return redirect()->route('orderRoomsPage');
    }
}
