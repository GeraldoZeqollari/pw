<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.10.2/css/all.css" />

  <link href="{{ asset('css/index.css') }}" rel="stylesheet" type="text/css">
  <script src="https://code.jquery.com/jquery-1.10.2.js"></script>
  <title>ECA</title>
</head>

<body>
  <nav>
    <div class="logo">
      <a href={{ route('home') }}>NIP</a>
    </div>
    <ul class="nav-links">
      <li class="about-submenu">About</li>

      <div class="header-submenu">
        <div class="header-submenu-row">
          <a class="header-fade-down" href={{ route('ourGoal') }}>
            <div class="header-submenu-pic">
              <img src="../images/our-goal.jpg" width="100%" alt="" />
            </div>
            <span class="header-nav-title">Our Goal</span>
          </a>
          <a class="header-fade-down" href="#news">
            <div class="header-submenu-pic">
              <img src="../images/news.jpg" width="100%" alt="" />
            </div>
            <span class="header-nav-title">News</span>
          </a>
          <a class="header-fade-down" href="#joinUs">
            <div class="header-submenu-pic">
              <img src="../images/wanna-join.jpg" width="100%" alt="" />
            </div>
            <span class="header-nav-title">Join Us</span>
          </a>
          <a class="header-fade-down" href="#ourTeam">
            <div class="header-submenu-pic">
              <img src="../images/our-team.jpg" width="100%" alt="" />
            </div>
            <span class="header-nav-title">Our Team</span>
          </a>
        </div>
      </div>

      <li class="temporary-subheaders"><a href="#ourGoal">Our Goal</a></li>
      <li class="temporary-subheaders"><a href="#news">News</a></li>
      <li class="temporary-subheaders"><a href="#joinUs">Join Us</a></li>
      <li class="temporary-subheaders"><a href="#ourTeam">Our Team</a></li>
      <li><a href={{ route('modernart') }}>Gallery</a></li>
      <li><a href={{ route('feedback') }}>Community</a></li>

      <li class="mobile-socialMedia mobileLogIn">

        <a href={{ route('login') }}>Log in</a>
      </li>
      <li class="mobile-socialMedia">
        <a href="#"><i class="fab fa-facebook-f"></i></a>
      </li>
      <li class="mobile-socialMedia">
        <a href="#"><i class="fab fa-youtube"></i></a>
      </li>
      <li class="mobile-socialMedia">
        <a href="#"><i class="fab fa-instagram"></i></a>
      </li>
      <li class="mobile-socialMedia">
        <a href="#"><i class="fab fa-twitter"></i></a>
      </li>
      <li class="mobile-socialMedia">
        <a href="#"><i class="fab fa-linkedin"></i></a>
      </li>
    </ul>
    <div class="search-nest">
      <div class="search-bar">
        <input type="text" name="" id="" class="search-bar-input" placeholder="Find your Art" aria-label="search" />
        <button class="search-bar-submit" aria-label="submit search">
          <i class="fas fa-search"></i>
        </button>
      </div>
    </div>
    <div class="logIn">
      @auth
      <i class="fas fa-user user_icon"></i>
{{--  onclick='user_submenu()' --}}
      <div class="user_dropdown">
        <ul>
          <a href=""><li><i class="fas fa-user-circle"></i> My Profile</li></a>
          <a href=""><li><i class="fas fa-user-cog"></i> Edit Profile</li></a>
          <a href={{ route('reportBug')}}><li><i class="fas fa-question-circle"></i>Report bug</li></a>
          {{-- <li><i class="fas fa-sign-out-alt"></i>
          
          </li> --}}
          <form action="{{ route('logout') }}" method="POST">
            @csrf
            <button id="user_btn" type="submit" class="logout-button">Log Out</button>
            </form>
        </ul>
      </div>

      @endauth

      @guest
      <a href={{ route('login') }}>Log in</a>
      @endguest

    </div>
    <div class="mobile-nav">
      <div class="line1"></div>
      <div class="line2"></div>
      <div class="line3"></div>
    </div>
  </nav>

  <section class="social-media">
    <a href="#"><i class="fab fa-facebook-f"></i></a>
    <a href="#"><i class="fab fa-youtube"></i></a>
    <a href="#"><i class="fab fa-instagram"></i></a>
    <a href="#"><i class="fab fa-twitter"></i></a>
    <a href="#"><i class="fab fa-linkedin"></i></a>
  </section>

  <script type="text/javascript" src="{{ asset('js/nav.js') }}"></script>

  @yield('login')
  @yield('content')
  @yield('register')
  @yield('joinUs')
  @yield('pwreset')
  @yield('feedback')
  @yield('gallery_modernart')
  @yield('gallery_realism')
  @yield('gallery_medieval')
  @yield('gallery_baroque')
  @yield('artDetail')
  @yield('reportBug')


  <footer class="footer">
    <div class="container">
      <div class="footer-row">
        <div class="footer-col">

          <a href={{ route('home') }}>
            <h1>NIP</h1>
          </a>
        </div>
        <div class="footer-col">
          <h2>Company</h2>
          <ul>
            <li><a href={{ route('modernart') }}>Gallery</a></li>
            <li><a href="#ourGoal">Our Goal</a></li>
            <li><a href="#news">News</a></li>
            <li><a href="#joinUs">Join Us</a></li>
            <li><a href="#ourTeam">Our Team</a></li>
          </ul>
        </div>
        <div class="footer-col">
          <h2>Support</h2>
          <ul>
            <li><a href={{ route('login') }}>Log in</a></li>
            <li><a href="#">Registration</a></li>
            <li><a href="#">Terms & Policies</a></li>
          </ul>
        </div>
        <div class="footer-col">
          <h2>Find us also</h2>
          <div class="socialMedia-footer">
            <a href="#"><i class="fab fa-facebook-f"></i></a>
            <a href="#"><i class="fab fa-youtube"></i></a>
            <a href="#"><i class="fab fa-instagram"></i></a>
            <a href="#"><i class="fab fa-twitter"></i></a>
            <a href="#"><i class="fab fa-linkedin-in"></i></a>
          </div>
        </div>
      </div>
    </div>
  </footer>
</body>

</html>