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
        $this->validate($req, Book::$rules);
        $b = new Book();
        $b->fill($req->except('_token'))->save();
        return redirect('save/create');
    }

    // 指定された書籍情報を取得
    public function edit($id)
    {
        return view('save.edit', [
            'b' => Book::findOrFail($id)
        ]);
    }

    // 指定された書籍情報を更新
    public function update(Request $req, $id)
    {
        $b = Book::findOrFail($id);
        $b->fill($req->except('_token'))->save();
        return redirect('hello/list');
    }

    public function show($id)
    {
        return view('save.show', [
            'b' => Book::findOrFail($id)
        ]);
    }

    public function destroy($id)
    {
        $b = Book::findOrFail($id);
        $b->delete();
        return redirect('hello/list');
    }
}
