<?php

namespace App\Http\Controllers;

use App\Models\Image;
use App\Models\Order;
use Illuminate\Http\Request;

class ImageDetailsController extends Controller
{
    public function index(Image $image)
    {
        //dd($image);


        return view('pages.artdetail', [
            'image' => $image,
        ]);
    }

    public function store(Request $request, Image $image)
    {


        Order::where('user_id', auth()->user()->id)->create([
            'user_id' => auth()->user()->id,
            'image_id' => $image->id,
            'price' => $image->price,
            'id' => $request->id
        ]);

        Image::where('id', $image->id)->update([
            'stock' => $image->stock - 1,
        ]);


        return back();
    }
}
