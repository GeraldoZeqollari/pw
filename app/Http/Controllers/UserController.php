<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\ReportBug;
use App\Models\card_details;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function index()
    {
        return view('user.usersettings');
    }

    public function carddetails(Request $request)
    {
        $this->validate($request, [
            'card_number' => 'required',
            'address1' => 'required',
            'expiration_dateM' => 'required',
            'expiration_dateY' => 'required',
            'csc' => 'required',
            'zip_code' => 'required',
            'payment_id' => 'required',
        ]);

        card_details::where('id', auth()->user()->id)->create([

            'user_id' => auth()->user()->id,
            'card_number' => $request->card_number,
            'address1' => $request->address1,
            'expiration_dateM' => $request->expiration_dateM,
            'expiration_dateY' => $request->expiration_dateY,
            'csc' => $request->csc,
            'zip_code' => $request->zip_code,
            'payment_id' => $request->payment_id,

        ]);

        return back();
    }

    public function userdetails(Request $request)
    {

        User::where('id', auth()->user()->id)->update([

            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'phone' => $request->phone,
            'gender' => $request->gender,
            'age' => $request->age,
            'country_name' => $request->country_name,
        ]);

        return back();
    }



    public function usersettings()
    {
        $users = User::paginate(3);
        $bugs = ReportBug::paginate(3);

        return view('users.usersettings')->with('users', $users)->with('bugs', $bugs);
    }
}
