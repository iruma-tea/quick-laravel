<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;

class StateController extends Controller
{
    // クッキーの保存アクション
    public function recCookie()
    {
        // @see (EncryptCookies.phpの$exceptの配列にクッキーのキー文字列を指定すると、暗号化されずに保存される。)
        return response()->view('state.view')->cookie('app_title', 'laravel', 60 * 24 * 30);
    }

    // クッキーの削除
    public function delCookie()
    {
        // Cookie::expire('app_title'); // Responseオブジェクトが無い場合はこのロジックでCookieを削除する
        return response()->view('state.view')->withoutCookie('app_title');
    }

    // クッキーの取得
    public function readCookie(Request $req)
    {
        return view('state.readcookie', [
            'app_title' => $req->cookie('app_title'),
        ]);
    }
}
