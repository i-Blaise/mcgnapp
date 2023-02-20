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


    public function addHeaderSlide(Request $request){
        $request->validate([
            // 'slider_img' => 'required',
            // 'caption' => 'required|string|max:50',
            'desc' => 'required|string|max:150',
            'donation_cause' => 'nullable',
            'video_link' => 'url|nullable'
        ]);

        Home::create([
            // 'home_slider_img' => $request->slider_img,
            // 'home_slider_caption' => $request->caption,
            'home_slider_text' => $request->desc,
            'video_link' => $request->video_link,
            'donation_cause' => $request->donation_cause,
        ]);

        return response()->json([
            'status' => true,
            'data' => 'New Slider Successfully Added'
        ]);
    }
}
