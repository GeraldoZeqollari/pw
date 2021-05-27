@extends('layouts.app')

@section('pwresetlink')


<form action=" {{ url('/new_password/' .$user->email.'/'.$code) }}" method="POST"
    style="min-height: 100vh;  padding-top:200px">
    @csrf
    <h2>{{$user->email}}</h2>
    {{-- shfaq erroert e validimit --}}
    <div class="current_pw disabled_pw">
        <input type="password" placeholder="Enter your new password" name="new_password" id="new_password">
        <input type="password" placeholder="Confirm password" name="new_confirm_password" id="new_confirm_password">
    </div>

    <div class="current_pw sub_new_pw">
        <input type="submit" class="new_pw" value="Submit" style="border: 2px solid black">
    </div>
</form>

@endsection