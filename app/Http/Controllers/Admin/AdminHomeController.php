<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Causes;
use Illuminate\Http\Request;

class AdminHomeController extends Controller
{
    public function indexPage(){
        $causes = Causes::orderby('id', 'desc')->get();
        return view('admin.pages.home.index', [
            'causesData' => $causes
        ]);
    }
}
