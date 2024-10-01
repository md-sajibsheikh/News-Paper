@include('admin.common.head')

<body>
    <div class="container-scroller">

        <!-- partial:partials/_sidebar.html -->
        @include('admin.common.sidebar')

        <!-- partial -->
        <div class="container-fluid page-body-wrapper">

            @include('sweetalert::alert')

            <!-- partial:partials/_navbar.html -->
            @include('admin.common.navbar')

            <!-- partial -->
            @yield('main-content')
        </div>

    </div>



    @include('admin.common.script')


</body>

</html>