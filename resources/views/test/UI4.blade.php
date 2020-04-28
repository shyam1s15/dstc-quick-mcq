@extends('base.base')

<style>
    
</style>

@section('content')

<header>
    <!--Navbar-->
    <nav class="navbar navbar-expand-lg navbar-dark primary-color fixed-top">

        <div class="container">

            <!-- Navbar brand -->
            <a class="navbar-brand" href="#">Navbar</a>

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
<main>
    <div class="container">
        
        <div class="row justify-content-md-center">
            
            <div class="col-md-8 col-lg-8 mt-5">
                <br class="mt-4">
                <div class="card">
                    <div class="">
                        <!--Section: Contact-->
                        <section id="contact">
                            <!-- Heading -->
                            
                            <h2 class="mb-5font-weight-bold text-center">Contact us</h2>

                            <!--Grid row-->
                            <div class="row justify-content-md-center">

                                <!--Grid column-->
                                <div class="col-md-8">
                                    <!--Grid column-->
                                    <div class="col-md-12">
                                        <!-- Form contact -->
                                        <form class="p-5 grey-text">
                                            <div class="md-form form-sm"> <i class="fas fa-user prefix"></i>
                                                <input type="text" id="form3" class="form-control form-control-sm" required>
                                                <label for="form3" class="required">Your Full name</label>
                                            </div>
                                            <div class="md-form form-sm"> <i class="fas fa-phone prefix"></i>
                                                <input type="text" id="form3" class="form-control form-control-sm" required>
                                                <label for="form3" class="required">Your Contact</label>
                                            </div>
                                            <div class="md-form form-sm"> <i class="fas fa-pencil-alt prefix"></i>
                                                <textarea type="text" id="form8"
                                                    class="md-textarea form-control form-control-sm"
                                                    rows="4"></textarea>
                                                <label for="form8">Any messages for us</label>
                                            </div>
                                            <button type="submit" class="btn btn-primary col-lg col-md"> sign up</button>
                                        </form>
                                        <!-- Form contact -->
                                    </div>
                                    <!--Grid column-->


                                </div>
                                <!--Grid column-->

                                <!--Grid column-->
                                <div class="col-lg-7 col-md-12">



                                </div>
                                <!--Grid column-->

                            </div>
                            <!--Grid row-->



                        </section>
                        <!--Section: Contact-->

                        <a href="#">
                            <div class="mask rgba-white-slight"></div>
                        </a>
                    </div>
                    <!--Card content-->
                    <div class="card-body">
                        <!--Title-->
                        <h4 class="card-title">DSTC welcome&#39;s you to club</h4>
                        <!--Text-->
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of
                            the
                            card content.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

</main>


@endsection