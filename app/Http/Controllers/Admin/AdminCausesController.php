<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Causes;
use Illuminate\Http\Request;

class AdminCausesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function addCause()
    {
        return view('admin.pages.causes.add-cause');
    }

    public function createCause(Request $request)
    {
        // dd($request);
        $imageName = time().'.'.$request->image->extension();
        $request->image->move(public_path('admin_assets/images/uploads/causes'), $imageName);


        Causes::create([
            'main_img' => 'admin_assets/images/uploads/causes/'.$imageName,
            'caption' => $request->caption,
            'goal' => $request->goal,
            'money_raised' => $request->money_raised,
            'excerpt' => $request->excerpt,
            'body' => $request->body,
        ]);

        return redirect()->back()->with('success', 'Cause Created Successfully');
    }


    public function causeList()
    {
        $causes = Causes::orderBy('id', 'desc')->get();
        return view('admin.pages.causes.cause-list',[
            'causeData' => $causes
        ]);
    }

    public function updatePage($id)
    {
        $causes = Causes::pluck('main_img')->where('id', $id)->get();
        return view('admin.pages.causes.cause-list',[
            'causeData' => $causes
        ]);
    }
}
