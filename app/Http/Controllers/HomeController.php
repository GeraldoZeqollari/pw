<?php

namespace App\Http\Controllers;

use App\Models\Feedback;
use App\Mail\PostLiked;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class HomeController extends Controller
{
    // public function __construct()
    // {
    //     $this->middleware(['auth']);
    // }

    public function index()
    {
        //dd(auth()->user()->feedbacks);
        return view('home');
    }
}
