<?php

namespace App\Http\Controllers\Api\CMS;

use App\Http\Controllers\Controller;
use App\Models\Causes;
use App\Models\Home;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class HeadersController extends Controller
{
    public function getHomeHeaders(){
        $header = Home::get();

        return response()->json([
            'status' => true,
            'data' => $header
        ]);
    }


    public function getCasusesForDonateButton(){
        $header = Causes::select('id', 'caption')->get();

        // return $header;

        return response()->json([
            'status' => true,
            'data' => $header
        ]);
    }


    public function addHeaderSlide(Request $request){
        // dd($request);
        // dd($this->storeImage($request));
        // dd($request->file);
        $request->validate([
            'imageLink' => 'required|string',
            'caption' => 'required|string|max:50',
            'desc' => 'required|string|max:150',
            'donation_cause' => 'nullable',
            'video_link' => 'url|nullable'
        ]);

        // $image_path = $request->file('home_slider_img')->store('image', 'public');


        $home_header = new Home;

        $home_header->home_slider_img = $request->imageLink;;
        $home_header->home_slider_caption = $request->caption;
        $home_header->home_slider_text = $request->desc;
        $home_header->video_link = $request->video_link;
        $home_header->donation_cause = $request->donation_cause;



        // $data = Home::create([
        //     'home_slider_img' => $this->storeImage($request),
        //     'home_slider_caption' => $request->caption,
        //     'home_slider_text' => $request->desc,
        //     'video_link' => $request->video_link,
        //     'donation_cause' => $request->donation_cause,
        // ]);




        if($home_header->save()){
            $response = ([
                'status' => true,
                'message' => 'New Header Added to Homepage'
            ]);
            $status = json_encode($response);
            // return response($status, Response::HTTP_CREATED);
            return response($status);
        }else{
            return response($status = false);
        }
    }



    public function storeImage($request)
    {
        $newImageName = uniqid(). '-' .$request->caption . '.' .$request->slider_img->extension();
        $append = 'https://mcgnapp.test/home-header-image/';
        $img_final_path = $append.$newImageName;
        $request->slider_img->move('home-header-image', $img_final_path);
        return $img_final_path;
    }
}
