@extends('layouts.app')

@section('artDetail')
<div class="art_details">
    <div class="art_details__img">
        <img src="../storage/images/{{$image1->path_name}}" width="100%" alt="" />
    </div>

    <div class="art_details__desc">
        <div class="art_details__desc__header">
            <div class="art_details__desc__header__title">
                <h1>{{$image->image_title}}</h1>
                {{-- <p>Tooru,2021</p> --}}
            </div>

            <i class="fas fa-heart notLiked pl"></i>

            <a href="image.jpg" download="image.jpg"><i class="fas fa-cart-arrow-down"></i></a>

            <a href="image.jpg" download="image.jpg" class="download_btn"><i class="fas fa-download"></i></a>
        </div>
        <div class="art_details__desc__description">
            <p>
                {{$image->image_description}}
            </p>
        </div>
        <div class="art_details__desc__data">
            <h3>Details</h3>
            <ul>
                <li><b>Name:</b> {{$image->image_title}}</li>
                <li><b>Year of creation:</b> {{$image->year}}</li>
                <li><b>Resolution:</b> {{$image->resolution}}</li>
                <li><b>Medium:</b> digital</li>
                <li><b>Right:</b> Private collection</li>
                <li><b>Stock:</b> {{$image->stock}}</li>
                <li><b>Artist:</b> {{$image->author}}</li>
                <li><b>Price:</b> {{$image->price}}</li>
            </ul>
        </div>
    </div>
</div>
@endsection