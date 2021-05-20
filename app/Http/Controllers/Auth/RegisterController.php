<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function __construct()
    {
        $this->middleware(['guest']);
    }

    public function index()
    {
        return view('auth.register');
    }

    public function store(Request $request)
    {
        $this->validate($request, [

            'username' => 'required|max:255',
            'email' => 'required|email|max:255',
            'password' => [
                'required',
                'string'
            ],

            // 'min:8',
            //     'regex:/[a-z]/',
            //     'regex:/[A-Z]/',
            //     'regex:/[0-9]/',
            //     'confirmed'
        ]);

        User::create([

            'username' => $request->username,
            'email' => $request->email,
            'password' => Hash::make($request->password),
           
        ]);

        auth()->attempt($request->only('email', 'password'));

        return redirect()->route('home');
    }
}
