<?php

namespace App\Http\Controllers;

use App\Models\Image;
use App\Models\Order;
use Illuminate\Http\Request;

class ImageDetailsController extends Controller
{
    public function index(Image $image)
    {
        // dd($image);


        return view('pages.artdetail', [
            'image' => $image,
        ]);
    }

    public function store(Request $request)
    {

        $image = Image::all();

        $subset = $image->map(function ($image) {
            return collect($image->toArray())
                ->only(['id', 'stock', 'price'])
                ->all();
        });

        Order::where('user_id', auth()->user()->id)->create([
            'user_id' => auth()->user()->id,
            'image_id' => $subset[0]['id'],
            'stock' => $subset[0]['stock'],
            'price' => $subset[0]['price'],
            'id' => $request->id
        ]);

        return back();
    }
}
