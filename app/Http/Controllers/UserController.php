<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Image;
use App\Models\ReportBug;
use App\Models\card_details;
use Illuminate\Http\Request;
use App\Rules\MatchOldPassword;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

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


    public function changePassword(Request $request)
    {

        $request->validate([
            'current_password' => ['required', new MatchOldPassword],
            'new_password' => ['required'],
            'new_confirm_password' => ['same:new_password'],
        ]);

        User::find(auth()->user()->id)->update(['password' => Hash::make($request->new_password)]);
    }


    public function delete()
    {
        User::find(auth()->user()->id)->delete();

        auth()->logout();

        return redirect()->route('home');
    }

    public function deleteByAdmin(Request $request)
    {
        User::find($request->only('currentID'))->first()->delete();

        return redirect()->route('user_settings');
    }

    public function userprofile()
    {
        $userprofile = User::get();
        return view('pages.userprofile')->with('userprofile', $userprofile);
    }


    public function upload(Request $request)
    {
        $this->validate($request, [

            'image_title' => 'required',
            'year' => 'required',
            'resolution' => 'required',
            'stock' => 'required',
            'price' => 'required',
            'image_description' => 'required',
            'author' => 'required',
            'category_id' => 'required',
        ]);

        Image::where('id', auth()->user()->id)->create([

            "path_name" => $request->path_name->hashName(),
            'image_title' => $request->image_title,
            'year' => $request->year,
            'resolution' => $request->resolution,
            'stock' => $request->stock,
            'price' => $request->price,
            'image_description' => $request->image_description,
            'author' => $request->author,
            'category_id' => $request->category_id,

        ]);
        return back();
    }
}
