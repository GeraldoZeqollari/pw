@extends('layouts.app')

@section('gallery_modernart')
<div class="gallery-container">
    <div class="view-categories">
        <h1>View Categories</h1>
    </div>

    <div class="category-select">
        <a href="#" class="button-type button-type-border notActive selected-button">Modern Art</a>
        <a href={{route('realism')}} class="button-type button-type-border notActive">Realism</a>
        <a href={{route('medievalart')}} class="button-type button-type-border notActive">Medieval Art</a>
        <a href={{route('baroque')}} class="button-type button-type-border notActive">Baroque</a>
    </div>

    <div class="art-gallery">

        @foreach ($images as $image)
        @if($image->category_id==1)
        <div class="image">
            <a href={{route('art_detail', $image->id)}}>

                <img src="../storage/images/{{$image->path_name}}" width="100%" height="175px" alt="" />

                <h3 class="img-title">{{$image->image_title}}</h3>

                <h3 class="img-size">Digital, {{$image->resolution}}</h3>
                <h3 class="artist-name">Artist: {{$image->author}}</h3>
                <h3 class="img-price">Price: ${{$image->price}}</h3>
            </a>
            <span class="favorite-img"><i class="fas fa-heart notLiked"></i></span>
        </div>
        @endif

        @endforeach

    </div>
</div>
@endsection