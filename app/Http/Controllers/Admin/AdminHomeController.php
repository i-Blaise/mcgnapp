<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\AdminHomeHeaderUploadRequest;
use App\Models\Causes;
use App\Models\Home;
use Illuminate\Http\Request;

class AdminHomeController extends Controller
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

        // dd($request->input('name', 'sal'));
        $imageName = time().'.'.$request->image->extension();  
         
        $request->image->move(public_path('images'), $imageName);

        Home::create([
            'name' => $request->name,
            'phone_num' => $request->phone_number,
            'email' => $request->email,
            'subject' => $request->subject,
            'message' => $request->user_message
        ]);

        return back()->with('success', 'Your Request Was Sent Successfully');
        
    }
}
