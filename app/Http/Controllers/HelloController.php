<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;

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

    // listアクション
    public function list()
    {
        $data = [
            'records' => Book::all()
        ];
        return view('hello.list', $data);
    }
}
