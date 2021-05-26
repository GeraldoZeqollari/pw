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

            <h1>{{ Auth::user()->username}}</h1>

        </div>
    </div>

    <div class="profile_dash">
        <div class="profile_dash__left">
            <h1>John Doe</h1>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Natus molestiae, vitae repellat nam repudiandae, deserunt doloribus alias ex veniam voluptate corporis accusamus, voluptatum repellendus ipsa rerum officiis suscipit animi culpa.</p>
            <h2>Gender: Male</h2>
            <h2>Location: Russia</h2>
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