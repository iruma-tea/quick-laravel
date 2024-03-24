<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class SaveController extends Controller
{
    // 入力フォームの生成
    public function create()
    {
        return view('save.create');
    }

    // フォームからの入力値をデータベースに登録
    public function store(Request $req)
    {
        $b = new Book();
        $b->fill($req->except('_token'))->save();
        return redirect('save/create');
    }
}
