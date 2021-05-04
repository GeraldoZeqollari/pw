@extends('layouts.app')

@section('content')
<section class="container-first">
    <div class="container-first-text">
      <h1 class="container1-title">
        Who are the biggest bitches of animal world Cats are!
      </h1>

      <p class="container1-txt">Wanna find out more stuff about cats?</p>

      <a href="#" class="button-type button-type-white"> Learn More </a>
    </div>
  </section>

  <section class="container-category">
    <h1 class="">Categories</h1>

    <div class="category-row">
      <div class="category-title">
        <h1>Modern Art</h1>
        <a href="#">Read More <i class="fas fa-angle-double-right"></i></a>
      </div>
      <div class="category-img">
        <img src="../images/big-cat.jpg" width="100%" alt="" />
      </div>
      <div class="category-img">
        <img src="../images/big-cat.jpg" width="100%" alt="" />
      </div>
      <div class="category-img">
        <img src="../images/big-cat.jpg" width="100%" alt="" />
      </div>
    </div>
    <div class="category-row">
      <div class="category-title">
        <h1>Realism</h1>
        <a href="#">Read More <i class="fas fa-angle-double-right"></i></a>
      </div>
      <div class="category-img">
        <img src="../images/big-cat.jpg" width="100%" alt="" />
      </div>
      <div class="category-img">
        <img src="../images/big-cat.jpg" width="100%" alt="" />
      </div>
      <div class="category-img">
        <img src="../images/big-cat.jpg" width="100%" alt="" />
      </div>
    </div>
    <div class="category-row loadMore">
      <div class="category-title">
        <h1>Medieval Art</h1>
        <a href="#">Read More <i class="fas fa-angle-double-right"></i></a>
      </div>
      <div class="category-img">
        <img src="../images/big-cat.jpg" width="100%" alt="" />
      </div>
      <div class="category-img">
        <img src="../images/big-cat.jpg" width="100%" alt="" />
      </div>
      <div class="category-img">
        <img src="../images/big-cat.jpg" width="100%" alt="" />
      </div>
    </div>
    <div class="category-row loadMore">
      <div class="category-title">
        <h1>Baroque</h1>
        <a href="#">Read More <i class="fas fa-angle-double-right"></i></a>
      </div>
      <div class="category-img">
        <img src="../images/big-cat.jpg" width="100%" alt="" />
      </div>
      <div class="category-img">
        <img src="../images/big-cat.jpg" width="100%" alt="" />
      </div>
      <div class="category-img">
        <img src="../images/big-cat.jpg" width="100%" alt="" />
      </div>
    </div>
    <div id="loadMore" style="text-align: right" class="loadMoreBtn">
      <a
        href="#"
        class="button-type-categories"
        id="loadMore-button"
        >Load More</a
      >
    </div>
  </section>

  <section class="join-us" id="joinUs">
    <div class="join-us-div">
      <h1>Join our creative community!</h1>
      <p>
        Our community is where art thrives. Explore over 333 million pieces
        of art while connecting to fellow artists and art enthusiasts.
      </p>
      <p>
        We are global art gallery featuing artwork, videography and
        photography. Additional features include groups and portfolios.
      </p>
      <p>
        Join us and get free access to millions pieces of art. Showcase,
        promote, sell & share your work with over 33 million members.
      </p>

      <a href={{ route('joinus')}} class="button-type button-type-border">Join us</a>
    </div>
  </section>

  <section class="our-goal" id="ourGoal">
    <div class="out-goal-img">
      <img src="../images/our-goal-img.jpeg" width="100%" alt="Error" />
    </div>
    <div class="our-goal-text">
      <h1 class="our-goal-h1">What we look forward to</h1>
      <p>
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Deserunt,
        soluta, modi vel quisquam eligendi nam ratione dolores inventore rem
        accusamus corporis fugit aliquid eos nihil sequi voluptas quis sint
        id!
      </p>
      <p>
        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Adipisci
        earum at aliquam, ad, natus quisquam excepturi aperiam qui ullam,
        tenetur impedit ut libero perferendis suscipit veniam in dolorem
        veritatis voluptas!
      </p>
      <p>
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Illum
        delectus dicta labore. Rem, iure eveniet consequuntur eius numquam
        deserunt voluptatem similique error laudantium molestias natus
        sapiente debitis eligendi inventore pariatur id ipsam ad laborum
        nisi quibusdam, necessitatibus illum dolore expedita.
      </p>
    </div>
  </section>

  <section class="our-goal our-team" id="ourTeam">
    <div class="our-goal-text">
      <h1 class="our-team-h1">With more than 200 years of experience</h1>
      <p>
        Lorem ipsum dolor, sit amet consectetur adipisicing elit.
        Repellendus assumenda quasi iusto optio, ipsum sint reiciendis
        pariatur quos earum rerum, ullam nisi temporibus dolorem?
        Reprehenderit doloremque veniam molestiae a dolorum et minima
        dolorem facilis provident, rerum ipsam, exercitationem facere
        doloribus.
      </p>
      <p>
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Numquam
        debitis ad excepturi sequi. Sapiente esse neque tenetur, ad unde
        itaque id velit odio beatae laborum, reprehenderit recusandae ut
        vero provident impedit deserunt, consectetur rerum maxime explicabo
        mollitia adipisci cum libero perferendis veniam. Ipsum, maxime! Rem,
        eum. Excepturi amet, exercitationem possimus sequi molestias
        nesciunt officia impedit qui esse tempora doloribus itaque.
      </p>
      <a href="" class="button-type button-type-border">learn more</a>
    </div>
    <div class="out-goal-img">
      <img src="../images/our-team-img.jpg" width="100%" alt="Error" />
    </div>
  </section>

  <section class="news" id="news">
    <div class="news-div">
      <h1 class="latest-news">Latest News</h1>

      <div class="update-news">
        <div class="news-patch-notes">
          <img src="../images/big-cat.jpg" width="100%" alt="" />
          <h1>News Article 1</h1>
          <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Iure
            tenetur laudantium natus quod aperiam veniam, eaque quia, illo
            voluptas voluptatum totam ratione dolores vero, ad sit nostrum
            fugit porro. Error?
          </p>
        </div>
        <div class="news-patch-notes">
          <img src="../images/big-cat.jpg" width="100%" alt="" />
          <h1>News Article 1</h1>
          <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Iure
            tenetur laudantium natus quod aperiam veniam, eaque quia, illo
            voluptas voluptatum totam ratione dolores vero, ad sit nostrum
            fugit porro. Error?
          </p>
        </div>
        <div class="news-patch-notes">
          <img src="../images/big-cat.jpg" width="100%" alt="" />
          <h1>News Article 1</h1>
          <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Iure
            tenetur laudantium natus quod aperiam veniam, eaque quia, illo
            voluptas voluptatum totam ratione dolores vero, ad sit nostrum
            fugit porro. Error?
          </p>
        </div>
      </div>
      <div class="newsletter">
        <h1>Sign up for our newsletter</h1>
        <p>
          and receive a regular update on newly contributed art pieces and
          works available to purchase
        </p>

        <div class="newsletter-form">
          <input
            type="email"
            name=""
            id=""
            placeholder="Enter your E-mail"
          />
          <button type="submit">
            <i class="far fa-newspaper"></i>
          </button>
        </div>
      </div>
    </div>
  </section>

  <script type="text/javascript" src="{{ asset('js/mainPage.js') }}" ></script>
@endsection