<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;
use Illuminate\Support\Facades\DB;

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
            // 'records' => DB::select('SELECT * FROM books') // SQL命令の発行
        ];
        return view('hello.list', $data);
    }
}
