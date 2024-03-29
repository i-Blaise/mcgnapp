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
use Illuminate\Support\Collection;

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
        $imageName = time().'.'.$request->slider_img->extension();
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
        ->selectRaw("'About Page' as 'page'")->get();
        $causes = CausesPage::select('header_img', 'id')
        ->selectRaw("'Causes Page' as 'page'")->get();
        $events = EventsPage::select('header_img', 'id')
        ->selectRaw("'Event Page' as 'page'")->get();
        $blog = BlogPage::select('header_img', 'id')
        ->selectRaw("'Blog Page' as 'page'")->get();
        $gallery = GalleryPage::select('header_img', 'id')
        ->selectRaw("'Gallery Page' as 'page'")->get();
        $contactpage = ContactPage::select('header_img', 'id')
        ->selectRaw("'Contact Page' as 'page'")->get();
        
        $combinedResults = new Collection();
        $combinedResults = $combinedResults->merge($aboutus);
        $combinedResults = $combinedResults->merge($causes);
        $combinedResults = $combinedResults->merge($events);
        $combinedResults = $combinedResults->merge($blog);
        $combinedResults = $combinedResults->merge($gallery);
        $combinedResults = $combinedResults->merge($contactpage);
        // return dd($combinedResults);

        return view('admin.pages.home.other-pages', [
            'results' => $combinedResults,
        ]);
    }

    public function singleHeaderUpdatePage($page){
        // dd($page);
        switch ($page) {
            case "About Page":
                $aboutus = AboutUsPage::pluck('header_img');
                return view('admin.pages.home.other-pages-update', ['data' => $aboutus]);
                break;
            case "Causes Page":
                $causes = CausesPage::pluck('header_img');
                return view('admin.pages.home.other-pages-update', ['data' => $causes]);
                break;
            case "Event Page":
                $event = EventsPage::pluck('header_img');
                return view('admin.pages.home.other-pages-update', ['data' => $event]);
                break;
            case "Blog Page":
                $blog = BlogPage::pluck('header_img');
                return view('admin.pages.home.other-pages-update', ['data' => $blog]);
                break;
                case "Gallery Page":
                    $gallery = GalleryPage::pluck('header_img');
                    return view('admin.pages.home.other-pages-update', ['data' => $gallery]);
                    break;
            case "Contact Page":
                $contact = ContactPage::pluck('header_img');
                return view('admin.pages.home.other-pages-update', ['data' => $contact]);
                break;
        }
    }

    public function updateSinglePageHeader(Request $request){
        // dd($request->header);
        $request->validate([
            'header' => 'required|image'
        ]);
        // dd($request->header);
        $imageName = time().'.'.$request->header->extension();
        // dd($imageName);

        switch ($request->page) {
            case "About Page":
                $about = AboutUsPage::find(1);
                $about->header_img = 'admin_assets/images/uploads/homeHeaders/'.$imageName;
                $about->save();
                break;
            case "Causes Page":
                $causes = CausesPage::find(1);
                $causes->header_img = 'admin_assets/images/uploads/homeHeaders/'.$imageName;
                $causes->save();
                break;
            case "Event Page":
                $event = EventsPage::find(1);
                $event->header_img = 'admin_assets/images/uploads/homeHeaders/'.$imageName;
                $event->save();
                break;
            case "Blog Page":
                $blog = BlogPage::find(1);
                $blog->header_img = 'admin_assets/images/uploads/homeHeaders/'.$imageName;
                $blog->save();
                break;
                case "Gallery Page":
                    $gallery = GalleryPage::find(1);
                    $gallery->header_img = 'admin_assets/images/uploads/homeHeaders/'.$imageName;
                    $gallery->save();
                    break;
            case "Contact Page":
                $contact = ContactPage::find(1);
                $contact->header_img = 'admin_assets/images/uploads/homeHeaders/'.$imageName;
                $contact->save();
                break;
        }
         
        $request->header->move(public_path('admin_assets/images/uploads/homeHeaders'), $imageName);
        return redirect()->back()->with('success', 'Header Uploaded Successfully');
    }
}
