<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Image;
use App\Models\Like;
use Illuminate\Http\Request;

class LikeController extends Controller
{

    // public function __construct()
    // {
    //     $this->middleware(['auth']);
    // }

    public function store(Image $image)
    {
        Like::where('user_id', auth()->user()->id)->create([

            'user_id' => auth()->user()->id,
            'image_id' => $image->id
        ]);

        return back();
    }

    public function destroy(Image $image)
    {

        // dd(Like::find(
        //     '15',
        //     'image_id'
        // ));



        Like::where([
            'user_id' => auth()->user()->id,
            'image_id' => $image->id,
        ])->delete();


        return back();
    }
}
