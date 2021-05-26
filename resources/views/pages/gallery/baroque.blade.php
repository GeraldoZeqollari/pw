@extends('layouts.app')

@section('gallery_baroque')
<div class="gallery-container">
  <div class="view-categories">
    <h1>View Categories</h1>
  </div>

  <div class="category-select">
    <a href={{route('modernart')}} class="button-type button-type-border notActive ">Modern Art</a>
    <a href={{route('realism')}} class="button-type button-type-border notActive">Realism</a>
    <a href={{route('medievalart')}} class="button-type button-type-border notActive">Medieval Art</a>
    <a href="#" class="button-type button-type-border notActive selected-button">Baroque</a>
  </div>

  <div class="art-gallery">
    @foreach ($images as $image)
    @if($image->category_id==4)
    <div class="image">
      <a href="index.html">
        <img src="../images/cGr5ti9eljsMCfSK5ZzfXJ7dhiZtdgrbAZ0LkS91.jpg" width="100%" alt="" />
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