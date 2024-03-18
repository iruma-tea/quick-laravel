<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class ViewController extends Controller
{
    // escapeアクション
    public function escape()
    {
        return view('view.escape', [
            'msg' => '<img src="https://wings.msn.to/image/wings.jpg" title="ロゴ"><p>WINGSへようこそ</p>'
        ]);
    }

    // commentアクション
    public function comment()
    {
        return view('view.comment');
    }

    // ifアクション
    public function if()
    {
        return view('view.if', [
            'random' => random_int(0, 100)
        ]);
    }

    // unlessアクション
    public function unless()
    {
        return view('view.unless', [
            'random' => random_int(0, 100)
        ]);
    }

    // issetアクション
    public function isset()
    {
        return view('view.isset', [
            'msg' => 'こんにちは、世界！',
        ]);
    }

    // switchアクション
    public function switch()
    {
        return view('view.switch', [
            'random' => random_int(1, 5)
        ]);
    }

    // whileアクション
    public function while()
    {
        return view('view.while');
    }

    // forアクション
    public function for()
    {
        return view('view.for');
    }

    // foreach_assocアクション
    public function foreach_assoc()
    {
        return view('view.foreach_assoc', [
            'member' => [
                'name' => 'YAMADA, Yoshihiro',
                'sex' => '男',
                'birth' => '1923-11-10'
            ]
        ]);
    }

    // foreach_loopアクション
    public function foreach_loop()
    {
        return view('view.foreach_loop', [
            'weeks' => ['月', '火', '水', '木', '金', '土', '日'],
        ]);
    }

    // forelseアクション
    public function forelse()
    {
        $data = [
            // 'records' => Book::all(),
            'records' => Book::whereIn('id', ['100', '101', '102']),
        ];
        return view('view.forelse', $data);
    }

    // style_classアクション
    public function style_class()
    {
        return view('view.style_class', [
            'isEnabled' => true
        ]);
    }

    // checkedアクション
    public function checked()
    {
        return view('view.checked', [
            'isEnabled' => true
        ]);
    }
}
