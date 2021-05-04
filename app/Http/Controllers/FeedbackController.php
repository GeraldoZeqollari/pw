<?php

namespace App\Http\Controllers;

use App\Models\Feedback;
use Illuminate\Http\Request;

class FeedbackController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth'])->only(['store', 'destroy']);
    }

    public function index()
    {
        $feedbacks = Feedback::latest()->with(['user', 'likes'])->paginate(20);

        return view('feedbacks.index', [
            'feedbacks' => $feedbacks
        ]);
    }

    public function show(Feedback $feedback)
    {
        return view('feedbacks.show', [
            'feedback' => $feedback
        ]);
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'body' => 'required'
        ]);

        $request->user()->posts()->create($request->only('body'));

        return back();
    }

    public function destroy(Feedback $feedback)
    {
        $this->authorize('delete', $feedback);

        $feedback->delete();

        return back();
    }
}
