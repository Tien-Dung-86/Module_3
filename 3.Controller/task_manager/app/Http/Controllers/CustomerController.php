<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

class CustomerController extends Controller
{
    public function index()
    {
        $customers = [
            [
                "id" => 1,
                "name" => "Tran Van A",
                "phone" => "0123456789",
                "email" => "email.test@gmail.com"
            ],
            [
                "id" => 2,
                "name" => "Tran Van B",
                "phone" => "0123456789",
                "email" => "email.test@gmail.com"
            ],
            [
                "id" => 3,
                "name" => "Nguyen Van C",
                "phone" => "0123456789",
                "email" => "email.test@gmail.com"
            ]
        ];
        return view('customer.index', compact('customers'));
    }

    public function create()
    {
        return view('customer.create');
    }

//    public function store(Request $request){
//        $customers = [
//            [
//                "id" => 1,
//                "name" => "Tran Van A",
//                "phone" => "0123456789",
//                "email" => "email.test@gmail.com"
//            ],
//            [
//                "id" => 2,
//                "name" => "Tran Van B",
//                "phone" => "0123456789",
//                "email" => "email.test@gmail.com"
//            ],
//            [
//                "id" => 3,
//                "name" => "Nguyen Van C",
//                "phone" => "0123456789",
//                "email" => "email.test@gmail.com"
//            ]
//        ];
//        $customers = $request->session()->get('key');
//    }
}
