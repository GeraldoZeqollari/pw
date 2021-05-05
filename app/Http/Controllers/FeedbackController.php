<?php

namespace App\Http\Controllers;

use App\Models\Feedback;
use Illuminate\Http\Request;

class FeedbackController extends Controller
{
   public function index(){

        $feedbacks=Feedback::paginate(2);
       return view('feedbacks.feedbackform', [
           'feedbacks'=>$feedbacks
       ]);
   }

   public function store(Request $request){

    $this->validate($request, [
        'body' => 'required'
    ]);
       
    $request->user()->feedbacks()->create($request->only('body'));

    return back();
   }
}
