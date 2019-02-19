<?php

namespace App\Http\Controllers;

use App\CallOrder;
use Illuminate\Http\Request;
use Mail;

class CallOrderController extends Controller
{

    public function callOrder(Request $request)
    {

        $data = $this->validate($request, [

            'user_name' =>'required|Regex:/^[\D]+$/i|max:100',

            'phone_number' =>'required|min:10|numeric',

        ]);

        CallOrder::create($data);


        Mail::send(['text' => 'mail'], ['name', 'Sarthak'], function ($message) {
            $message->to('itBlogSupp@gmail.com', 'To itBlogSupp')->subject('Золотое Руно');
            $message->from('itBlogSupp@gmail.com', 'Золотое Руно');

        });

        return redirect('/hotel');
    }
}
