<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HelloController extends Controller
{
    // indexアクション
    public function index()
    {
        return 'こんにちは、世界！';
    }

    // viewアクション
    public function view()
    {
        $data = [
            'msg' => 'こんにちは、世界!'
        ];
        return view('hello.view', $data);
    }
}
