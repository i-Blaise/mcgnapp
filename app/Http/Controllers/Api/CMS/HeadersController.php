<?php

namespace App\Http\Controllers\Api\CMS;

use App\Http\Controllers\Controller;
use App\Models\Home;
use Illuminate\Http\Request;

class HeadersController extends Controller
{
    public function getHomeHeaders(){
        $header = Home::get();

        return response()->json([
            'status' => true,
            'data' => $header
        ]);
    }
}
