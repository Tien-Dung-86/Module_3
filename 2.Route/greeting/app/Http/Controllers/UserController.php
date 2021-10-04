<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    function index()
    {
        $users = [
            [
                "id" => 1,
                "name" => "Van Thanh",
                "group" => "C0621G1",
                "address" => "Ha Noi"
            ],
            [
                "id" => 2,
                "name" => "Ba Thai",
                "group" => "C0621G1",
                "address" => "Ha Noi"
            ],
            [
                "id" => 3,
                "name" => "Tien Dung",
                "group" => "C0621G1",
                "address" => "Ha Noi"
            ],
        ];
        return view('users.list', compact('users'));
    }

    function detail($id){
        echo $id;
    }

    function getComment($idUser, $idComment = 1){}
}
