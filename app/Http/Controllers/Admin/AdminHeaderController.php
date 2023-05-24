<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\AdminHomeHeaderUploadRequest;
use App\Models\AboutUsPage;
use App\Models\BlogPage;
use App\Models\Causes;
use App\Models\CausesPage;
use App\Models\ContactPage;
use App\Models\EventsPage;
use App\Models\GalleryPage;
use App\Models\Home;
use Illuminate\Http\Request;

class AdminHeaderController extends Controller
{
    public function indexPage(){
        $causes = Causes::orderBy('id', 'desc')->get();
        $headers = Home::orderBy('created_at', 'desc')->get();
        return view('admin.pages.home.index', [
            'causesData' => $causes,
            'headersData' => $headers
        ]);
    }


    function uploadHomeHeader(AdminHomeHeaderUploadRequest $request){
        // $slider_img = $request->safe()->only(['slider_img']);
        // dd($slider_img['slider_img']);
        $imageName = time().'.'.$request->slider_img->extension();   ;
        // dd($imageName);
         
        $request->slider_img->move(public_path('admin_assets/images/uploads/homeHeaders'), $imageName);

        Home::create([
            'home_slider_img' => $imageName,
            'home_slider_caption' => $request->caption,
            'home_slider_text' => $request->description,
            'donation_cause' => $request->donation_cause,
            'video_link' => $request->video_link
        ]);

        return redirect()->back()->with('success', 'Header Uploaded Successfully');
        
    }

    function deleteHomeHeader(Request $request){
       Home::where('id', $request->id)->delete();
       return redirect()->back()->with('success', 'Header Deleted');
    }

    function uploadOtherPagesHeader(){
        $aboutus = AboutUsPage::select('header_img', 'id')
        ->selectRaw("'About Page' as 'page'")->get()->toArray();
        $causes = CausesPage::select('header_img', 'id')
        ->selectRaw("'About Page' as 'page'")->get()->toArray();
        $events = EventsPage::pluck('header_img')->first();
        $blog = BlogPage::pluck('header_img')->first();
        $gallery = GalleryPage::pluck('header_img')->first();
        $contactpage = ContactPage::pluck('header_img')->first();
        // array_push($aboutus, 'About Page');
        // dd($aboutus);

        $data = [
            'aboutUs' => $aboutus,
            'causes' => $causes
        ];

        return view('admin.pages.home.other-pages', [
            'results' => $data,
            // 'about' => $aboutus
        ]);
    }
}
