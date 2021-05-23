<?php

namespace App\Http\Controllers;

use App\Models\ReportBug;
use Illuminate\Http\Request;

class ReportBugController extends Controller
{
    public function index()
    {
        return view('pages.reportbug');
    }


    public function store(Request $request)
    {

        $this->validate($request, [
            'bug_desc' => 'required',
        ]);


        ReportBug::where('id', auth()->user()->id)->create([

            'bug_desc' => $request->bug_desc,
            'user_id' => auth()->user()->id,
        ]);


        return back();
    }
}
