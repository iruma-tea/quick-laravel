<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CtrlController extends Controller
{
    // plainアクション
    public function plain()
    {
        return response('こんにちは、世界！', 200)->header('Content-Type', 'text/plain');
    }

    // headerアクション
    public function header()
    {
        // return response()->view('ctrl.header', ['msg' => 'こんにちは、世界！'], 200)->header('Content-Type', 'text/xml');
        return response()->view('ctrl.header', ['msg' => 'こんにちは、世界！'], 200)->withHeaders([
            'Content-Type' => 'text/xml',
            'X-Powered-FW' => 'Laravel/9',
        ]);
    }

    // outJsonアクション
    public function outJson()
    {
        return response()->json([
            'name' => 'Yoshihiro, YAMADA',
            'sex' => 'male',
            'age' => 18,
        ]);
        // JSONP形式
        // return response()->json([
        //     'name' => 'Yoshihiro, YAMADA',
        //     'sex' => 'male',
        //     'age' => 18,
        // ])->withCallback('callback');
        // return [
        //     'name' => 'Yoshihiro, YAMADA',
        //     'sex' => 'male',
        //     'age' => 18,
        // ];
    }

    // outFileアクション
    public function outFile()
    {
        return response()->download(
            'C:/data/data_log.csv',
            'download.csv',
            ['content-type' => 'text/csv']
        );
    }

    // outCsvアクション
    public function outCsv()
    {
        return response()->streamDownload(function () {
            print("1,2022/10/1,123\n" .
                "2,2022/10/2,116\n" .
                "3,2022/10/3,98\n" .
                "4,2022/10/4,102\n" .
                "5,2022/10/5,134\n");
        }, 'download.csv', ['content-type' => 'text/csv']);
    }

    // outImageアクション
    public function outImage()
    {
        return response()->file('C:/data/wings.png', ['content-type' => 'image/png']);
    }

    // リダイレクトアクション
    public function redirectBasic()
    {
        return redirect('hello/list');
        // return redirect()->route('list');
        // return redirect()->route('param', ['id' => 108]);
        // return redirect()->action('RouteController@param', ['id' => 108]);
        // return redirect()->away('https://wings.msn.to/');
    }

    // indexアクション
    public function index(Request $req)
    {
        return 'リクエストパス:' . $req->path();
    }

    // hogeアクション
    public function hoge(Request $request, $id)
    {
        return 'id値：' . $id;
    }

    // formアクション
    public function form()
    {
        return view('ctrl.form', ['result' => '']);
    }

    // resultアクション
    public function result(Request $req)
    {
        $name = $req->name;
        // $dt = $req->date('name', 'Y-m-d', 'Asia/Tokyo');
        // $name = $req->input('hoge', '名無権兵衛');
        // return view('ctrl.form', ['result' => 'こんにちは、' . $name . 'さん！']);
        if (empty($name) || mb_strlen($name) > 10) {
            return redirect('ctrl/form')->withInput()->with('alert', '名前は必須、または、10文字以内で入力してください。');
        } else {
            $req->flash();
            return view('ctrl.form', [
                'result' => 'こんにちは、' . $name . 'さん！'
            ]);
        }
    }

    // uploadアクション
    public function upload()
    {
        return view('ctrl.upload', ['result' => '']);
    }

    // uploadfile
    public function uploadfile(Request $req)
    {
        if (!$req->hasFile('upfile')) {
            return 'ファイルを指定してください。';
        }
        $file = $req->upfile;
        if (!$file->isValid()) {
            return 'アップロードに失敗しました。';
        }
        $name = $file->getClientOriginalName();
        $file->storeAs('files', $name); // storage/app/filesにアップロードファイルが格納される。
        return view('ctrl.upload', ['result' => $name . 'をアップロードしました。']);
    }
}
