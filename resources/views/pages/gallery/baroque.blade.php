@extends('layouts.app')

@section('gallery_baroque')
<div class="gallery-container">
    <div class="view-categories">
        <h1>View Categories</h1>
    </div>

    <div class="category-select">
        <a href={{route('modernart')}} class="button-type button-type-border notActive ">Modern Art</a>
        <a href={{route('realism')}} class="button-type button-type-border notActive">Realism</a>
        <a href={{route('medievalart')}}  class="button-type button-type-border notActive">Medieval Art</a>
        <a href="#" class="button-type button-type-border notActive selected-button">Baroque</a>
    </div>
    
    <div class="art-gallery">
        <div class="image">
          <a href="index.html">
            <img src="../images/our-team.jpg" width="100%" alt="" />
            <h3 class="img-title">Big Chungus</h3>
            <h3 class="img-size">Digital, 6969x6969</h3>
            <h3 class="artist-name">Artist Name</h3>
            <h3 class="img-price">Price: $280</h3>
          </a>
          <span class="favorite-img"
              ><i class="fas fa-heart notLiked"></i
            ></span>
        </div>
      </div>
    




</div>
@endsection