<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\UploadCausesRequest;
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

    public function createCause(UploadCausesRequest $request)
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
            'author_name' => 'Blaise Mennia'
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
        // dd($id);
        $causes = Causes::where('id', $id)->get();
        return view('admin.pages.causes.cause-update-page',[
            'causeData' => $causes
        ]);
    }

    public function editCause(UploadCausesRequest $request)
    {
        if($request->image){
            $imageName = time().'.'.$request->image->extension();
            $request->image->move(public_path('admin_assets/images/uploads/causes'), $imageName);
        }

        $cause = Causes::find($request->id);

        if(isset($imageName)){
            $cause->main_img = 'admin_assets/images/uploads/causes/'.$imageName;
        }
        $cause->caption = $request->caption;
        $cause->goal = $request->goal;
        $cause->money_raised = $request->money_raised;
        $cause->excerpt = $request->excerpt;
        $cause->body = $request->body;
        $cause->save();

        return redirect()->back()->with('success', 'Cause Editted Successfully');
    }
}
