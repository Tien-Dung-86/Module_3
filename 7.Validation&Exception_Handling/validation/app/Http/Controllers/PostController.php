<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function create()
    {
        return view('create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'number' => 'required|numeric',
            'number.require' => 'Only number please'
        ]);
        echo 'đã xác thực thành công';
    }
}
