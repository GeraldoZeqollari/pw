<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Image;
use Illuminate\Http\Request;

class LikeController extends Controller
{

    // public function __construct()
    // {
    //     $this->middleware(['auth']);
    // }

    public function store(Image $image, Request $request)
    {

        $image->likes()->create([
            'user_id' => auth()->user()->id,

        ]);

        return back();
    }

    public function destroy(Image $image, Request $request)
    {
        //auth()->user()->likes->where('image_id', $image->id)->delete();
        //dd(User::find(auth()->user()->image_id));
        //$request->user()->likes()->where('image_id', $image->id)->delete();
        return back();
    }
}
