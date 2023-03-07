<?php

namespace App\Http\Controllers\Api\CMS;

use App\Http\Controllers\Controller;
use App\Models\AboutUs;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function fetchAboutData(){
        $about = AboutUs::select('aboutus_caption', 'about', 'mission', 'vision', 'aboutus_desc_img')->get();

        return response()->json([
            'status' => true,
            'data' => $about
        ]);
    }
}
