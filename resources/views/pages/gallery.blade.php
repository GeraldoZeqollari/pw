@extends('layouts.app')

@section('gallery')
<div class="gallery-container">
    <div class="view-categories">
      <h1>View Categories</h1>
    </div>

    <div class="category-select">
      <button
        class="button-type button-type-border notActive selected-button"
        >Modern Art</button
      >
      <button class="button-type button-type-border notActive">Realism</button>
      <button href="#" class="button-type button-type-border notActive"
        >Medieval Art</button
      >
      <button class="button-type button-type-border notActive">Baroque</button>
    </div>

    <div class="art-gallery modern">
      <div class="image">
        <a href="index.html">
          <img src="../images/big-cat.jpg" width="100%" alt="" />
          <h3 class="img-title">Big Chungus</h3>
          <h3 class="img-size">Digital, 6969x6969</h3>
          <h3 class="artist-name">Artist Name</h3>
          <h3 class="img-price">Price: $280</h3>
        </a>
        <span class="favorite-img"
            ><i class="fas fa-heart notLiked"></i
          ></span>
      </div>

      <div class="image">
        <a href="index.html">
          <img src="../images/big-cat.jpg" width="100%" alt="" />
          <h3 class="img-title">Big Chungus</h3>
          <h3 class="img-size">Digital, 6969x6969</h3>
          <h3 class="artist-name">Artist Name</h3>
          <h3 class="img-price">Price: $280</h3>
        </a>
        <span class="favorite-img"
            ><i class="fas fa-heart notLiked"></i
          ></span>
      </div>

      <div class="image">
        <a href="index.html">
          <img src="../images/big-cat.jpg" width="100%" alt="" />
          <h3 class="img-title">Big Chungus</h3>
          <h3 class="img-size">Digital, 6969x6969</h3>
          <h3 class="artist-name">Artist Name</h3>
          <h3 class="img-price">Price: $280</h3>
        </a>
        <span class="favorite-img"
            ><i class="fas fa-heart notLiked"></i
          ></span>
      </div>

      <div class="image">
        <a href="index.html">
          <img src="../images/big-cat.jpg" width="100%" alt="" />
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

    <div class="art-gallery realism">
      <div class="image">
        <a href="index.html">
          <img src="../images/our-goal.jpg" width="100%" alt="" />
          <h3 class="img-title">Big Chungus</h3>
          <h3 class="img-size">Digital, 6969x6969</h3>
          <h3 class="artist-name">Artist Name</h3>
          <h3 class="img-price">Price: $280</h3>
        </a>
        <span class="favorite-img"
            ><i class="fas fa-heart notLiked"></i
          ></span>
      </div>

      <div class="image">
        <a href="index.html">
          <img src="../images/our-goal.jpg" width="100%" alt="" />
          <h3 class="img-title">Big Chungus</h3>
          <h3 class="img-size">Digital, 6969x6969</h3>
          <h3 class="artist-name">Artist Name</h3>
          <h3 class="img-price">Price: $280</h3>
        </a>
        <span class="favorite-img"
            ><i class="fas fa-heart notLiked"></i
          ></span>
      </div>

      <div class="image">
        <a href="index.html">
          <img src="../images/our-goal.jpg" width="100%" alt="" />
          <h3 class="img-title">Big Chungus</h3>
          <h3 class="img-size">Digital, 6969x6969</h3>
          <h3 class="artist-name">Artist Name</h3>
          <h3 class="img-price">Price: $280</h3>
        </a>
        <span class="favorite-img"
            ><i class="fas fa-heart notLiked"></i
          ></span>
      </div>

      <div class="image">
        <a href="index.html">
          <img src="../images/our-goal.jpg" width="100%" alt="" />
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

    <div class="art-gallery medieval">
      <div class="image">
        <a href="index.html">
          <img src="../images/news.jpg" width="100%" alt="" />
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

    <div class="art-gallery baroque">
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

    <div id="footer-placeholder"></div>
    <script>
      $(function () {
        $("#footer-placeholder").load("footer.html");
      });
    </script>

    <script src="../js/gallery.js"></script>
  </div>
@endsection