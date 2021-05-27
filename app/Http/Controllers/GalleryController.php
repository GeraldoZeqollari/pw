<?php

namespace App\Http\Controllers;

use App\Models\Image;
use Illuminate\Http\Request;

class GalleryController extends Controller
{
    public function images_1()
    {
        $images = Image::get();
        return view('pages.gallery.modernart')->with('images', $images);
    }

    public function images_3()
    {
        $images = Image::get();
        return view('pages.gallery.medievalart')->with('images', $images);
    }

    public function images_4()
    {
        $images = Image::get();
        return view('pages.gallery.baroque')->with('images', $images);
    }

    public function images_2()
    {
        $images = Image::get();
        return view('pages.gallery.realism')->with('images', $images);
    }


    public function artdetails(Request $request)
    {

        // $image = Image::get()->first();
        
        // dd(Image::find(11));
        
       dd(Image::where('id',$request->only('image_id'))->first());
        // return view('pages.artdetail', [
        //     'image' => $image
        // ]);
    }
}
