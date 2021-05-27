<?php

namespace App\Http\Controllers;
use App\Models\Image;


use Illuminate\Http\Request;

class ImageDetailsController extends Controller
{
    public function index(Image $image){
        // dd($image);


        return view('pages.artdetail', [
            'image' => $image,
        ]);
    }
}
