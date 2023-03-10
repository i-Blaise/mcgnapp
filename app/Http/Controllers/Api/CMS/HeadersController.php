<?php

namespace App\Http\Controllers\Api\CMS;

use App\Http\Controllers\Controller;
use App\Http\Requests\HeadersRequest;
use App\Models\AboutUs;
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
    

    // public function fetchAllPageHeaders(){
    //     $aboutus = AboutUs::get('header_img');
    //     $causes = Causes::get('main_img');

    //     $about_header = $aboutus[0]->header_img;


    //     return response()->json([
    //         'status' => true,
    //         'about' => $about_header
    //     ]);
    // }


    public function getCasusesForDonateButton(){
        $header = Causes::select('id', 'caption')->get();

        return response()->json([
            'status' => true,
            'data' => $header
        ]);
    }


    public function addHeaderSlide(HeadersRequest $request){


        $home_header = new Home;

        $home_header->home_slider_img = $request->imageLink;;
        $home_header->home_slider_caption = $request->caption;
        $home_header->home_slider_text = $request->desc;
        $home_header->video_link = $request->video_link;
        $home_header->donation_cause = $request->donation_cause;


        if($home_header->save()){
            $response = ([
                'status' => true,
                'message' => 'New Header Added to Homepage'
            ]);
            $status = json_encode($response);
            return response($status);
        }else{
            return response($status = false);
        }
    }


    public function deleteHeader($id){
        $header = Home::destroy($id);

        $response = ([
            'status' => true,
            'message' => 'Header Deleted.'
        ]);
        $status = json_encode($response);
        return response($status);
        
    }



    // public function storeImage($request)
    // {
    //     $newImageName = uniqid(). '-' .$request->caption . '.' .$request->slider_img->extension();
    //     $append = 'https://mcgnapp.test/home-header-image/';
    //     $img_final_path = $append.$newImageName;
    //     $request->slider_img->move('home-header-image', $img_final_path);
    //     return $img_final_path;
    // }
}
