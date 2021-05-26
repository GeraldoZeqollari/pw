@extends('layouts.app')

@section('userProfile')

<div class="profile_container">
    <div class="profile_cover">
        <div class="profile_cover__gradient">

        </div>
    </div>
    <div class="profile_pic">
        <img src="../images/john_doe.jpg" alt="">
        <form action="" class="change_pPic">
            <label for="file-upload-profile" class="custom-file-upload">
                <i class="fas fa-edit"></i>
            </label>
            <input id="file-upload-profile" type="file" />
        </form>
        <div class="profile_names">
            <h1>{{ Auth::user()->first_name}} {{ Auth::user()->last_name}}</h1>
            <p>{{'@'}}{{ Auth::user()->username}}</p>

        </div>
    </div>

    <div class="profile_dash">
        <div class="profile_dash__left">
            <h1>{{ Auth::user()->first_name}} {{ Auth::user()->last_name}}</h1>
            <p>{{ Auth::user()->Bio}}</p>
            <h2>Gender: 
            @switch(Auth::user()->gender)
                @case("M")
                    Male
                @break
                @case("F")
                    Female
                    @break
                @default
                    Other
            @endswitch           
            </h2>
            <h2>Location: {{ Auth::user()->country_name}}</h2>
        </div>
        <div class="profile_dash__right">
            <h1>What this user liked</h1>
            <div class="fav_user_imgs">
                <div class="profile_favs">
                    <a href="">
                        <img src="../images/cat_screaming.jpg" alt="">
                    </a>
                </div>
                <div class="profile_favs">
                    <a href="">
                        <img src="../images/cat_screaming.jpg" alt="">
                    </a>
                </div>
                <div class="profile_favs">
                    <a href="">
                        <img src="../images/cat_screaming.jpg" alt="">
                    </a>
                </div>
                <div class="profile_favs">
                    <a href="">
                        <img src="../images/cat_screaming.jpg" alt="">
                    </a>
                </div>
                <div class="profile_favs">
                    <a href="">
                        <img src="../images/cat_screaming.jpg" alt="">
                    </a>
                </div>
                <div class="profile_favs">
                    <a href="">
                        <img src="../images/cat_screaming.jpg" alt="">
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection