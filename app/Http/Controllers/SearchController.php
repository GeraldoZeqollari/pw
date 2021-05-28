<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Image;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

class SearchController extends Controller
{

    public function search(Request $request)
    {

        $search = $request->input('search');
        dd($search);

        // $images = Image::query()
        //     ->where('image_title', 'LIKE', "%{$search}%")
        //     ->orWhere('image_description', 'LIKE', "%{$search}%")
        //     ->get();

        $images = Image::where('image_title', 'LIKE', '%' . $search . '%')
            ->orWhere('path_name', 'LIKE', '%' . $search . '%');

        dd($images);


        //return view('pages.search', compact($images));
    }
}
