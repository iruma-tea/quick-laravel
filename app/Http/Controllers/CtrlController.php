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
}
