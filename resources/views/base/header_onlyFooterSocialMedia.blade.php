@extends('base.base') 


@section('content')

<!--header-->
<header>
    <!--Navbar-->
    <nav class="navbar navbar-expand-lg navbar-dark success-color fixed-top">

        <div class="container">

            <!-- Navbar brand -->
            <a class="navbar-brand" href="#">Dr. Subhas Technical Campus</a>

            <!-- Collapse button -->
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#basicExampleNav"
                aria-controls="basicExampleNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            
            <!-- Collapsible content -->
            <div class="collapse navbar-collapse" id="basicExampleNav">

                <!-- Links -->
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="#">Home
                            <span class="sr-only">(current)</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Features</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Pricing</a>
                    </li>

                    <!-- Dropdown -->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown"
                            aria-haspopup="true" aria-expanded="false">Dropdown</a>
                        <div class="dropdown-menu dropdown-primary" aria-labelledby="navbarDropdownMenuLink">
                            <a class="dropdown-item" href="#">Action</a>
                            <a class="dropdown-item" href="#">Another action</a>
                            <a class="dropdown-item" href="#">Something else here</a>
                        </div>
                    </li>

                </ul>
                <!-- Links -->

                <form class="form-inline">
                    <div class="md-form my-0">
                        <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
                    </div>
                </form>
            </div>
            <!-- Collapsible content -->

        </div>

    </nav>
    <!--/.Navbar-->

</header>
<!--header-->
<br class="mb-5">
<div class="mb-5"></div>
@yield('main-content')

{{--  <br class="mt-5">  --}}
<div class="mt-5"></div>
<!--Footer-->
<footer class="page-footer font-small blue">

    <!-- Social buttons -->
    <div class="success-color">
        <div class="container">
            <!--Grid row-->
            <div class="row py-4 d-flex align-items-center">

                <!--Grid column-->
                <div class="col-md-6 col-lg-5 text-center text-md-left mb-4 mb-md-0">
                    <h6 class="mb-0 white-text">Get connected with us on social networks!</h6>
                </div>
                <!--Grid column-->

                <!--Grid column-->
                <div class="col-md-6 col-lg-7 text-center text-md-right">
                    <!--Facebook-->
                    <a class="fb-ic ml-0" href="https://facebook.com/drsubhashtech">
                        <i class="fab fa-facebook-f white-text mr-4"> </i>
                    </a>
                    <!--Instagram-->
                    <a class="ins-ic" href="https://instagram.com/dstc_junagadh">
                        <i class="fab fa-instagram white-text mr-4"> </i>
                    </a>
                    <!--Youtube -->
                    <a class="ins-ic" href="https://youtube.com/c/DrSubhashTechnicalCampus">
                        <i class="fab fa-youtube white-text mr-lg-4"> </i>
                    </a>
                </div>
                <!--Grid column-->

            </div>
            <!--Grid row-->
        </div>
    </div>

</footer>
<!--Footer-->


@endsection