<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\AboutUs;
use App\Models\Team;
use Illuminate\Http\Request;

class AdminAboutUsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function aboutPage()
    {
        $about = AboutUs::select('aboutus_desc_img', 'about', 'mission', 'vision')->get();
        // dd($about);

        return view('admin.pages.aboutus.about', [
            'aboutus' => $about
        ]);
    }

    public function updateAboutDescImage(Request $request){
        $request->validate([
            'image' => 'required|image'
        ]);
        $imageName = time().'.'.$request->image->extension();


        $about = AboutUs::find(1);
        $about->aboutus_desc_img = 'admin_assets/images/uploads/aboutus/'.$imageName;
        $about->save();

        $request->image->move(public_path('admin_assets/images/uploads/aboutus'), $imageName);
        return redirect()->back()->with('success', 'Header Uploaded Successfully');
    }


    public function updateAboutMissionVision(Request $request){

        $about = AboutUs::find(1);

        switch ($request->submit){
            case 'about':
                $about->about = $request->about;
                break;
            case 'mission':
                $about->mission = $request->mission;
                break;
            case 'vision':
                $about->vision = $request->vision;
                break;
        }
        $about->save();
        return redirect()->back()->with('success', ucfirst($request->submit).' Desc Updated Successfully');

    }



    public function meetTeamPage(){
        $team = Team::all();

        return view('admin.pages.aboutus.meet-team', [
            'teams' => $team
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
