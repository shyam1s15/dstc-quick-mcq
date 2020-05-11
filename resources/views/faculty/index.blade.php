@extends('base.header_onlyFooterSocialMedia')


@section('main-content')

<div class="container">
    <!-- Grid row -->
    <div class="row pt-4">

        <!-- Grid column -->
        <div class="col-lg-4 col-md-12">

            <!--Card-->
            <div class="card">

                <!--Card image-->
                <div class="">
                    <img src="https://mdbootstrap.com/img/Mockups/Lightbox/Thumbnail/img%20(67).jpg"
                        class="card-img-top" alt="photo">
                    <a href="#">
                        <div class="mask rgba-white-slight"></div>
                    </a>
                </div>

                <!--Card content-->
                <div class="card-body">
                    <!--Title-->
                    <h4 class="card-title">Applications Works</h4>
                    <!--Text-->
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                        card content.</p>
                    <a href="{{ env('APP_URL') }}/faculty/showApps" class="btn btn-primary">Explore</a>
                </div>

            </div>
            <!--/.Card-->

        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-lg-4 col-md-12">

            <!--Card-->
            <div class="card">

                <!--Card image-->
                <div class="">
                    <img src="https://mdbootstrap.com/img/Mockups/Lightbox/Thumbnail/img%20(67).jpg"
                        class="card-img-top" alt="photo">
                    <a href="#">
                        <div class="mask rgba-white-slight"></div>
                    </a>
                </div>

                <!--Card content-->
                <div class="card-body">
                    <!--Title-->
                    <h4 class="card-title">Manage Faculty</h4>
                    <!--Text-->
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                        card content.</p>
                    <a href="{{ env('APP_URL') }}/faculty/manage" class="btn btn-primary"> pilot </a>
                </div>

            </div>
            <!--/.Card-->

        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-lg-4 col-md-12">

            <!--Card-->
            <div class="card">

                <!--Card image-->
                <div class="">
                    <img src="https://mdbootstrap.com/img/Mockups/Lightbox/Thumbnail/img%20(67).jpg"
                        class="card-img-top" alt="photo">
                    <a href="#">
                        <div class="mask rgba-white-slight"></div>
                    </a>
                </div>

                <!--Card content-->
                <div class="card-body">
                    <!--Title-->
                    <h4 class="card-title">See Students view</h4>
                    <!--Text-->
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                        card content.</p>
                    <a href="{{ env('APP_URL') }}/student/showChoices" class="btn btn-primary"> Experience </a>
                </div>

            </div>
            <!--/.Card-->

        </div>
        <!-- Grid column -->

    </div>
    <!-- Grid row -->
</div>





@endsection