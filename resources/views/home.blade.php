@include('fronend.common.head')

<body>
    <!-- Preloader Start -->
    @include('fronend.common.preloader')

    <!-- Preloader Start -->
    @include('fronend.common.header')

    @include('sweetalert::alert')




    @yield('main-content')



    @include('fronend.common.footer')
    <!-- Search model Begin -->

    <div class="search-model-box">
        <div class="d-flex align-items-center h-100 justify-content-center">
            <div class="search-close-btn">+</div>
            <form class="search-model-form">
                <input type="text" id="search-input" placeholder="Searching key.....">
            </form>
        </div>
    </div>

    <!-- JS here -->
    @include('fronend.common.script')

</body>

</html>