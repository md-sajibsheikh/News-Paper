<header>
    <!-- Header Start -->
    <div class="header-area">
        <div class="main-header ">

            <div class="header-mid gray-bg">
                <div class="container">
                    <div class="row d-flex align-items-center">
                        <!-- Logo -->
                        <div class="col-xl-3 col-lg-3 col-md-3 d-none d-md-block">
                            <div class="logo">
                                <a href="index.html"><img src="/frontend/assets/img/logo/logo.png" alt=""></a>
                            </div>
                        </div>
                        <div class="col-xl-9 col-lg-9 col-md-9">
                            <div class="header-banner f-right ">
                                <img src="/frontend/assets/img/gallery/header_card.png" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="header-bottom header-sticky">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-xl-8 col-lg-8 col-md-12 header-flex">
                            <!-- sticky -->
                            <div class="sticky-logo">
                                <a href="{{route('home')}}"><img src="/frontend/assets/img/logo/" width="100px"  alt=""></a>
                            </div>
                            <!-- Main-menu -->
                            <div class="main-menu d-none d-md-block">
                                <nav>
                                    <ul id="navigation">
                                        <li><a href="{{url('/')}}">Home</a></li>
                                        <li><a href="{{url('about')}}">about</a></li>
                                        <li><a href="{{url('categori')}}">Category</a></li>
                                        <li><a href="{{url('latest_news')}}">Latest News</a></li>
                                        <li><a href="{{url('blog')}}">Blog</a></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-4 col-md-4">
                            <div class="header-right f-right d-none d-lg-block">
                                <!-- Heder social -->
                                <ul class="header-social">
                                    <li><a href="https://www.fb.com/sai4ull"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                    <li> <a href="#"><i class="fab fa-youtube"></i></a></li>
                                </ul>



                                @if(Auth::Check())

                                <a href="{{route('logout')}}" class="p-2 ">LOGOUT</a>
                                @else
                                <a href="{{route('signup')}}" class="p-2 ">SINGUP</a>
                                <span class="text-white">|</span>
                                <a href="{{route('login')}}" class="p-2 ">LOGIN</a>
                                @endif



                            </div>

                        </div>

                        <!-- Mobile Menu -->
                        <div class="col-12">
                            <div class="mobile_menu d-block d-md-none"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Header End -->
</header>