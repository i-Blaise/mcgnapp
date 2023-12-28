<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Gallery;
use App\Models\GalleryCategory;
use Illuminate\Http\Request;

class AdminGalleryController extends Controller
{
    // IMAGE CATEGORY AND IMAGE ALBUM ARE THE SAME!!


    public function galleryCategoriesPage()
    {
        $galleryCategoryList = GalleryCategory::all();
        $catListArray = [];
        foreach($galleryCategoryList as $category){
            $numOfImages = Gallery::where('category_id', $category->category_id)->count();
            $tempArray = [
                'category' => $category->category,
                'numOfImages' => $numOfImages,
                'category_id' => $category->category_id
            ];
            array_push($catListArray, $tempArray);
        }
        return view('admin.pages.gallery.index', [
            'categories' => $catListArray
        ]);
    }

    public function addImageCategory(Request $request)
    {
        $request->validate([
            'category' => 'required|string|max:100',
        ]);
        // $category_id = rand ( 000 , 999 );

        // Check if the category ID already exists
        $existingCatID = true;
        while ($existingCatID) {
            $category_id = rand ( 000 , 999 );
            $existingCatID = GalleryCategory::where('category_id', $category_id)->first();
        }
        // dd($category_id);

        $galleryCat = GalleryCategory::create([
            'category' => $request->input('category'),
            'category_id' => $category_id,
        ]);

        return redirect()->back()->with('success', 'Image Category Added!');
    }

    public function editImageCategoryPage($category_id)
    {
        $galleryAlbum = Gallery::where('category_id', $category_id)->orderBy('created_at', 'desc')->get();
        $numOfImages = Gallery::where('category_id', $category_id)->count();
        $galleryCategory = GalleryCategory::where('category_id', $category_id)->get();
        return view('admin.pages.gallery.edit', [
            'galleries' => $galleryAlbum,
            'numOfImages' => $numOfImages,
            'galleryCat' => $galleryCategory
        ]);
    }

    public function uploadImage(Request $request)
    {
        $request->validate([
            'image' => 'required|image',
        ]);
        $imageName = time().'.'.$request->image->extension();
        $request->image->move(public_path('admin_assets/images/uploads/galleryImages'), $imageName);

        Gallery::create([
            'image' => $imageName,
            'category' => $request->category,
            'category_id' => $request->category_id,
        ]);

        // dd('done');s

        return redirect()->back()->with('success', 'Header Uploaded Successfully');
    }

    public function deleteImage(Request $request)
    {
        Gallery::destroy($request->id);

        return redirect()->back()->with('success', 'Image Deleted');
    }

    public function deleteImageCategory($category_id)
    {
        $catArray = array($category_id);
        Gallery::whereIn('category_id', $catArray)->delete();
        GalleryCategory::where('category_id', $category_id)->delete();
        return redirect()->back()->with('success', 'Images in category deleted');
    }

}
