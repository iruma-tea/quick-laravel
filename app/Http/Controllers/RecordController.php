<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class RecordController extends Controller
{
    // findアクション
    public function find()
    {
        return Book::find(1)->title;
    }

    // whereアクション
    public function where()
    {
        $result = Book::where('publisher', '走跳社')->get();
        // 大小比較
        // $result = Book::where('price', '<', 3000)->get();
        // 部分一致
        // $result = Book::where('title', 'LIKE', '%JAVA%')->get();
        // 範囲検索(1)
        // $result = Book::whereIn('publisher', ['ジャパンIT', '走跳社', 'IT Emotion'])->get();
        // 範囲検索(2)
        // $result = Book::whereBetween('price', [1000, 3000])->get();
        // Nullチェック
        // $result = Book::whereNull('publisher')->get();
        // 日付検索
        // $result = Book::whereYear('published', '2022')->get();
        // AND
        // $result = Book::where('publisher', '走跳社')->where('price', '<', 3000)->get();
        // OR
        // $result = Book::where('publisher', '走跳社')->orWhere('price', '<', 2500)->get();
        // 生のSQL
        // $result = Book::whereRaw('publisher = ? AND price < ?', ['走跳社', 3000])->get();
        // ソート
        // $result = Book::orderBy('price', 'desc')->orderBy('published', 'asc')->get();
        // 取得範囲の指定
        // $result = Book::orderBy('published', 'desc')->offset(2)->limit(3)->get();
        // 取得列の制約
        // $result = Book::select('title', 'publisher')->get();
        // スコープの利用(1)
        // $result = Book::published()->get();
        // スコープの利用(2)
        // $result = Book::publisher('走跳社')->get();
        return view('hello.list', ['records' => $result]);

        // データのグループ化
        // $result = Book::groupBy('publisher')->selectRaw('publisher, AVG(price) AS price_avg')->get();
        // グループ化列の絞り込み
        // $result = Book::groupBy('publisher')->having('price_avg', '<', 2500)->selectRaw('publisher, AVG(price) AS price_avg')->get();
        // SQL命令のデバック(1)
        // $result = Book::groupBy('publisher')->having('price_avg', '<', 2500)->selectRaw('publisher, AVG(price) AS price_avg')->dump()->get();
        // SQL命令のデバック(2)
        // $result = Book::groupBy('publisher')->having('price_avg', '<', 2500)->selectRaw('publisher, AVG(price) AS price_avg')->dd()->get();
        // return view('record.where', ['records' => $result]);

        // データの集計
        // $result = Book::where('publisher', '走跳社')->max('price');
        // return $result;
    }

    public function hasmany()
    {
        return view('record.hasmany', [
            'book' => Book::find(1)
        ]);
    }
}
