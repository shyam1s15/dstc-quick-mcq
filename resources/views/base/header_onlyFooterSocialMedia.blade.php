@extends('base.base')

<style>
    .navbar, .footer-color{
        background-color: #071752 !important;
    }

    .cust-dstc-nav-color{
        color: #071752 !important
    }

    .cust-dstc-nav-background{
        background-color: #071752 !important
    }
    .cust-dstc-nav-dropDown-hover:hover{
        background-color: #183cc4 !important
    }
    .small-font{
        font-size: 20px !important;
    }
    .first-letter-capital{
        text-transform: capitalize;
    }

</style>
<title> DSTC </title>
@section('content')

<!--header-->
<header>
    <!--Navbar-->
    <nav class="navbar navbar-expand-lg navbar-dark  fixed-top">

        <div class="container">

            <!-- Navbar brand -->
            <img src="{{ url('/logos/cleared_logo.png ') }}" width="160" alt="" class="d-inline-block align-middle mr-2">

            <span class="navbar-brand font-weight-bold white-text"></span>

            <!-- Collapse button -->
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#basicExampleNav"
                aria-controls="basicExampleNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <!-- Collapsible content -->
            <div class="collapse navbar-collapse" id="basicExampleNav">

                <!-- Links -->
                <ul class="navbar-nav mr-auto">

                    @if (Cookie::get('s_name') ))

                    <li class="nav-item active">
                        <a class="nav-link first-letter-capital" href="#">
                            welcome {{ Cookie::get('s_name') }}
                            <span class="sr-only">(current)</span>
                        </a>
                    </li>
                    @endif


                    <!-- Dropdown -->
                    {{-- <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle font-weight-bolder" id="navbarDropdownMenuLink" data-toggle="dropdown"
                            aria-haspopup="true" aria-expanded="false">Navigation </a>
                        <div class="dropdown-menu dropdown-primary cust-dstc-nav-background" aria-labelledby="navbarDropdownMenuLink">
                            <a class="dropdown-item font-weight-bolder white-text cust-dstc-nav-dropDown-hover" href="{{ env('APP_URL') }}/faculty">Faculty works</a>
                            <a class="dropdown-item font-weight-bolder white-text cust-dstc-nav-dropDown-hover" href="{{ env('APP_URL') }}/student/showChoices">Student Management</a>
                            <a class="dropdown-item font-weight-bolder white-text cust-dstc-nav-dropDown-hover" href="#">Results</a>
                        </div>
                    </li> --}}
                    {{-- <li class="nav-item">
                        <a class="nav-link font-weight-bolder" href="{{ env('APP_URL') }}/welcome">student Login</a>
                    </li> --}}
                    @if (Cookie::get('s_name') ))

                    <li class="nav-item active">
                        <a class="nav-link" href="{{ env('APP_URL') }}/signout">
                            sign out
                            <span class="sr-only">(current)</span>
                        </a>
                    </li>
                    @endif

                </ul>
                <!-- Links -->

                {{--  <form class="form-inline">
                    <div class="md-form my-0">
                        <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
                    </div>
                </form>  --}}
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
<div class="mt-4"></div>
<!--Footer-->
<footer class="page-footer font-small blue">

    <!-- Social buttons -->
    <div class="footer-color">
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
                    <a class="fb-ic ml-0" href="https://facebook.com/Dr.SubhashTech">
                        <i class="fab fa-facebook-f white-text mr-4"> </i>
                    </a>
                    <!--Instagram-->
                    <a class="ins-ic" href="instagram://user?username=Dr.SubhashTech">
                        <i class="fab fa-instagram white-text mr-4"> </i>
                    </a>
                    <!--Youtube -->
                    <a class="ins-ic" href="https://youtube.com/DrSubhashTech">
                        <i class="fab fa-youtube white-text mr-lg-4"> </i>
                    </a>
                </div>
                <!--Grid column-->

            </div>
            <!--Grid row-->
            <div class="row justify-content-center">
                <div class="col-md-4 col-lg-8 col-xl-3 text-center mt-2">
                    <h6 class="font-weight-bold white-text">
                        <strong>Helpline Number</strong>
                    </h6>
                    <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">

                    <p>
                        <i class="fas fa-phone mr-3"></i> 8511188222
                    </p>
                </div>
            </div>
        </div>
    </div>

</footer>
<!--Footer-->


@endsection
