<?php

namespace App\Http\Controllers;

use App\Models\Like;
use App\Models\Image;
use Illuminate\Http\Request;

class FavouriteController extends Controller
{
    public function index()
    {
        $likes = Like::get();

        return view('pages.userprofile')->with('likes', $likes);
    }
}
