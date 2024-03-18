<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RouteController extends Controller
{
    // paramアクション
    public function param(int $id = 1)
    {
        return 'id値：' . $id;
    }
}
