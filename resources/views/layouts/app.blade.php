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
      <a href={{ route('home') }}>
        <svg width="140" height="35" viewBox="0 0 140 35" fill="none" xmlns="http://www.w3.org/2000/svg">
          <g id="main_logo">
          <rect width="140" height="35" fill="white"/>
          <g id="paintbrush">
          <path d="M34.3385 15.6922C35.7864 15.0434 36.4603 11.5908 36.6163 9.94556L37.3911 9.94756L37.3565 25.6167L36.5816 25.6147C36.5851 24.0407 36.1395 20.681 34.3293 19.8349C32.0666 18.7773 29.5019 19.5005 27.7726 19.818C27.3269 19.8998 21.3051 21.3825 18.3495 22.1977C13.5 22.8506 12.0698 19.6915 12.0001 18.2962C11.9791 13.4021 16.2373 12.9624 18.3691 13.3542L27.7818 15.6753C29.3641 15.9513 32.8906 16.341 34.3385 15.6922Z" fill="black"/>
          <path d="M39.619 26.61L39.6584 8.79432L38.6253 8.79165L38.5858 26.6073L39.619 26.61Z" fill="black"/>
          <path d="M45.266 25.8512L45.3015 9.77416L41.0099 9.76307L40.9743 25.8401L45.266 25.8512Z" fill="black"/>
          <path d="M48.1453 25.8556L48.1815 9.52097C51.8638 9.50902 63.2717 6.70588 65 6L64.9899 9.82197C60.4894 9.75 56.4347 11.5794 54.0912 11.7967C57.2213 12.469 63.8723 11.7967 64.9855 11.7967L65 14.25C62.6957 14.4706 58.1957 15.7941 60.5 16.5C59.9239 16.5936 63.8478 17.2941 64.9436 17.2941L65 20.25C62.4772 20.0217 55.7455 20.2624 54.0912 20.7904C57.6186 22.25 63.8478 22.6793 64.9614 22.6793L65 24.9813C62.6957 24.9813 58.6318 25.3293 58.234 25.5C60.5696 27.1904 63.2717 27.1765 64.9436 27.5625L65 30C61.2214 28.5879 52.5153 26.382 48.1453 25.8556Z" fill="black"/>
          <path d="M46.7098 8.81084L46.6704 26.6265M54.0912 11.7967C56.4347 11.5794 60.4894 9.75 64.9899 9.82197L65 6C63.2717 6.70588 51.8638 9.50902 48.1815 9.52097L48.1453 25.8556C52.5153 26.382 61.2214 28.5879 65 30L64.9436 27.5625C63.2717 27.1765 60.5696 27.1904 58.234 25.5C58.6318 25.3293 62.6957 24.9813 65 24.9813L64.9614 22.6793C63.8478 22.6793 57.6186 22.25 54.0912 20.7904C55.7455 20.2624 62.4772 20.0217 65 20.25L64.9436 17.2941C63.8478 17.2941 59.9239 16.5936 60.5 16.5M54.0912 11.7967C53.5808 11.844 53.8695 12.1214 53.5796 12.05C53.9432 12.0598 53.6462 11.7883 54.0912 11.7967ZM54.0912 11.7967C57.2213 12.469 63.8723 11.7967 64.9855 11.7967L65 14.25C62.6957 14.4706 58.1957 15.7941 60.5 16.5M60.5 16.5C59.5 17 58.8875 17.1889 58.663 16.5882C58.8875 16.483 60 16.5 60.5 16.5ZM36.6163 9.94556C36.4603 11.5908 35.7864 15.0434 34.3385 15.6922C32.8906 16.341 29.3641 15.9513 27.7818 15.6753L18.3691 13.3542C16.2373 12.9624 11.9791 13.4021 12.0001 18.2962C12.0698 19.6915 13.5 22.8506 18.3495 22.1977C21.3051 21.3825 27.3269 19.8998 27.7726 19.818C29.5019 19.5005 32.0666 18.7773 34.3293 19.8349C36.1395 20.681 36.5851 24.0407 36.5816 25.6147L37.3565 25.6167L37.3911 9.94756L36.6163 9.94556ZM39.6584 8.79432L39.619 26.61L38.5858 26.6073L38.6253 8.79165L39.6584 8.79432ZM45.3015 9.77416L45.266 25.8512L40.9743 25.8401L41.0099 9.76307L45.3015 9.77416Z" stroke="black"/>
          </g>
          <g id="letter_e">
          <rect id="Rectangle 1" x="70" y="6" width="19.0041" height="4.21422" fill="black"/>
          <rect id="Rectangle 3" x="70" y="24.3741" width="19.0041" height="4.21422" fill="black"/>
          <rect id="Rectangle 2" x="70" y="15.187" width="14.324" height="4.21422" fill="black"/>
          </g>
          <path id="letter_a" d="M115.148 6H111.73L104 28.59H108.394L113.561 13.1476L118.321 28.59H123L115.148 6Z" fill="black"/>
          <path id="letter_c" d="M103 27C97.4772 27 93 22.7467 93 17.5C93 12.2533 97.4772 8 103 8" stroke="black" stroke-width="4"/>
          </g>
          </svg>

          <svg width="60" height="35" viewBox="0 0 60 35" class="svg_logo_mobile" fill="none" xmlns="http://www.w3.org/2000/svg">
            <g id="main_logo">
            <rect width="60" height="35" fill="white"/>
            <g id="letter_e_mobile">
            <rect id="Rectangle 1" x="3" y="6" width="19.0041" height="4.21422" fill="black"/>
            <rect id="Rectangle 3" x="3" y="24.3741" width="19.0041" height="4.21422" fill="black"/>
            <rect id="Rectangle 2" x="3" y="15.187" width="14.324" height="4.21422" fill="black"/>
            </g>
            <path id="letter_a_mobile" d="M48.1478 6H44.7302L37 28.59H41.394L46.561 13.1476L51.3212 28.59H56L48.1478 6Z" fill="black"/>
            <path id="letter_c_mobile" d="M36 27C30.4772 27 26 22.7467 26 17.5C26 12.2533 30.4772 8 36 8" stroke="black" stroke-width="4"/>
            </g>
            </svg>
            
      </a>
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
          <a href={{ route('user_profile') }}><li><i class="fas fa-user-circle"></i> My Profile</li></a>
          <a href={{ route('user_settings') }}><li><i class="fas fa-user-cog"></i> Edit Profile</li></a>
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
  @yield('userSettings')
  @yield('userProfile')
  @yield('search')


  <footer class="footer">
    <div class="container">
      <div class="footer-row">
        <div class="footer-col">

          <a href={{ route('home') }}>
            <svg width="179" height="130" viewBox="0 0 179 130" fill="none" xmlns="http://www.w3.org/2000/svg">
              <rect width="179" height="130" fill="#E5E5E5"/>
              <g id="Frame 1">
              <rect width="179" height="130" fill="white"/>
              <path id="Vector_1_footer" d="M2 51.5V2H176.5V51.5" stroke="black" stroke-width="2"/>
              <path id="Vector_2_footer" d="M2 79V128.5H176.5V79" stroke="black" stroke-width="2"/>
              <g id="letter_e_footer">
              <rect id="Rectangle 1" x="45" y="47" width="23.5922" height="4.59259" fill="black"/>
              <rect id="Rectangle 3" x="45" y="73.4074" width="23.5922" height="4.59259" fill="black"/>
              <rect id="Rectangle 2" x="45" y="59.6296" width="17.7822" height="4.59259" fill="black"/>
              </g>
              <path id="letter_a_footer" d="M123.495 47H119.358L110 78H115.319L121.574 56.8086L127.336 78H133L123.495 47Z" fill="black"/>
              <path id="letter_c_footer" d="M96 77C88.268 77 82 70.5081 82 62.5C82 54.4919 88.268 48 96 48" stroke="black" stroke-width="4"/>
              <path id="EVERYBODY CAN ART" d="M29.6699 101.144H27.0419V103.112H30.1137V104H25.9301V97.6016H30.0829V98.498H27.0419V100.265H29.6699V101.144ZM35.7034 102.607L37.3294 97.6016H38.551L36.2483 104H35.1716L32.8777 97.6016H34.095L35.7034 102.607ZM45.4459 101.144H42.8179V103.112H45.8897V104H41.7061V97.6016H45.859V98.498H42.8179V100.265H45.4459V101.144ZM51.5761 101.535H50.3368V104H49.225V97.6016H51.475C52.2133 97.6016 52.7831 97.7671 53.1845 98.0981C53.5858 98.4292 53.7865 98.9082 53.7865 99.5352C53.7865 99.9629 53.6825 100.322 53.4745 100.612C53.2694 100.899 52.9823 101.12 52.6132 101.275L54.0502 103.943V104H52.8593L51.5761 101.535ZM50.3368 100.643H51.4794C51.8544 100.643 52.1474 100.549 52.3583 100.361C52.5692 100.171 52.6747 99.9116 52.6747 99.5835C52.6747 99.2407 52.5766 98.9756 52.3803 98.7881C52.1869 98.6006 51.8969 98.5039 51.5102 98.498H50.3368V100.643ZM59.1477 100.634L60.6198 97.6016H61.8503L59.7058 101.645V104H58.5896V101.645L56.4406 97.6016H57.6755L59.1477 100.634ZM64.9746 104V97.6016H67.1675C67.8912 97.6016 68.4419 97.7466 68.8199 98.0366C69.1978 98.3267 69.3868 98.7588 69.3868 99.333C69.3868 99.626 69.3077 99.8896 69.1495 100.124C68.9912 100.358 68.7598 100.54 68.4551 100.669C68.8008 100.763 69.0674 100.94 69.2549 101.201C69.4454 101.458 69.5406 101.769 69.5406 102.132C69.5406 102.733 69.3472 103.194 68.9605 103.517C68.5767 103.839 68.0259 104 67.3081 104H64.9746ZM66.0865 101.113V103.112H67.3213C67.67 103.112 67.9424 103.026 68.1387 102.853C68.335 102.68 68.4331 102.44 68.4331 102.132C68.4331 101.467 68.0933 101.127 67.4136 101.113H66.0865ZM66.0865 100.295H67.1763C67.522 100.295 67.7915 100.218 67.9849 100.062C68.1812 99.9043 68.2793 99.6816 68.2793 99.3945C68.2793 99.0781 68.1885 98.8496 68.0069 98.709C67.8282 98.5684 67.5484 98.498 67.1675 98.498H66.0865V100.295ZM78.1888 100.968C78.1888 101.595 78.0804 102.146 77.8636 102.62C77.6468 103.092 77.3363 103.455 76.932 103.71C76.5306 103.962 76.0677 104.088 75.5433 104.088C75.0248 104.088 74.5619 103.962 74.1546 103.71C73.7504 103.455 73.4369 103.093 73.2142 102.625C72.9945 102.156 72.8832 101.615 72.8802 101.003V100.643C72.8802 100.019 72.9901 99.4678 73.2098 98.9902C73.4325 98.5127 73.7445 98.1479 74.1459 97.896C74.5502 97.6411 75.013 97.5137 75.5345 97.5137C76.056 97.5137 76.5174 97.6396 76.9188 97.8916C77.3231 98.1406 77.6351 98.501 77.8548 98.9727C78.0746 99.4414 78.1859 99.9878 78.1888 100.612V100.968ZM77.077 100.634C77.077 99.9248 76.9422 99.3813 76.6727 99.0034C76.4061 98.6255 76.0267 98.4365 75.5345 98.4365C75.0541 98.4365 74.6776 98.6255 74.4051 99.0034C74.1356 99.3784 73.9979 99.9102 73.9921 100.599V100.968C73.9921 101.671 74.1283 102.214 74.4007 102.598C74.6761 102.982 75.057 103.174 75.5433 103.174C76.0355 103.174 76.4134 102.986 76.6771 102.611C76.9437 102.236 77.077 101.688 77.077 100.968V100.634ZM81.7262 104V97.6016H83.6159C84.1813 97.6016 84.6823 97.7275 85.1188 97.9795C85.5583 98.2314 85.8981 98.5889 86.1384 99.0518C86.3786 99.5146 86.4987 100.045 86.4987 100.643V100.963C86.4987 101.57 86.3771 102.103 86.134 102.563C85.8937 103.023 85.5495 103.377 85.1012 103.626C84.6559 103.875 84.1447 104 83.5676 104H81.7262ZM82.8381 98.498V103.112H83.5632C84.1462 103.112 84.5929 102.931 84.9035 102.567C85.217 102.201 85.3766 101.677 85.3825 100.994V100.638C85.3825 99.9438 85.2316 99.4136 84.9299 99.0474C84.6281 98.6812 84.1901 98.498 83.6159 98.498H82.8381ZM91.9302 100.634L93.4023 97.6016H94.6328L92.4883 101.645V104H91.3721V101.645L89.2231 97.6016H90.458L91.9302 100.634ZM107.311 101.917C107.246 102.6 106.994 103.133 106.555 103.517C106.115 103.897 105.531 104.088 104.801 104.088C104.292 104.088 103.842 103.968 103.452 103.728C103.066 103.484 102.767 103.14 102.556 102.695C102.345 102.25 102.235 101.732 102.226 101.144V100.546C102.226 99.9424 102.333 99.4106 102.547 98.9507C102.761 98.4907 103.067 98.1362 103.465 97.8872C103.867 97.6382 104.33 97.5137 104.854 97.5137C105.56 97.5137 106.129 97.7056 106.559 98.0894C106.99 98.4731 107.24 99.0151 107.311 99.7153H106.203C106.151 99.2554 106.016 98.9243 105.799 98.7222C105.585 98.5171 105.27 98.4146 104.854 98.4146C104.371 98.4146 103.999 98.5918 103.738 98.9463C103.48 99.2979 103.348 99.8149 103.342 100.498V101.064C103.342 101.756 103.465 102.283 103.712 102.646C103.961 103.01 104.324 103.191 104.801 103.191C105.238 103.191 105.566 103.093 105.786 102.897C106.006 102.701 106.145 102.374 106.203 101.917H107.311ZM114.32 102.51H111.841L111.323 104H110.167L112.584 97.6016H113.582L116.003 104H114.843L114.32 102.51ZM112.153 101.614H114.008L113.081 98.9595L112.153 101.614ZM124.238 104H123.126L120.274 99.4604V104H119.162V97.6016H120.274L123.135 102.159V97.6016H124.238V104ZM136.235 102.51H133.756L133.238 104H132.082L134.499 97.6016H135.497L137.918 104H136.758L136.235 102.51ZM134.068 101.614H135.923L134.996 98.9595L134.068 101.614ZM143.428 101.535H142.189V104H141.077V97.6016H143.327C144.066 97.6016 144.635 97.7671 145.037 98.0981C145.438 98.4292 145.639 98.9082 145.639 99.5352C145.639 99.9629 145.535 100.322 145.327 100.612C145.122 100.899 144.835 101.12 144.466 101.275L145.903 103.943V104H144.712L143.428 101.535ZM142.189 100.643H143.332C143.707 100.643 144 100.549 144.211 100.361C144.422 100.171 144.527 99.9116 144.527 99.5835C144.527 99.2407 144.429 98.9756 144.233 98.7881C144.039 98.6006 143.749 98.5039 143.363 98.498H142.189V100.643ZM153.527 98.498H151.532V104H150.429V98.498H148.451V97.6016H153.527V98.498Z" fill="black"/>
              </g>
              </svg>              
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
            <a href="#"><i class="fab fa-facebook-f" style="color: rgb(64,100,172)"></i></a>
            <a href="#"><i class="fab fa-youtube" style="color: rgb(246,1,1)"></i></a>
            <a href="#"><i class="fab fa-instagram" style="color:rgb(167,49,150)"></i></a>
            <a href="#"><i class="fab fa-twitter" style="color: rgb(28,157,235)"></i></a>
            <a href="#"><i class="fab fa-linkedin" style="color: rgb(10,98,189)"></i></a>
          </div>
        </div>
      </div>
    </div>
  </footer>
</body>

</html>