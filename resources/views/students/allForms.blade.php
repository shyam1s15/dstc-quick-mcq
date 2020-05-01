@extends('base.header_onlyFooterSocialMedia')


@section('main-content')
<!-- Grid row -->
<div class="row">

    @foreach ($Apps as $App)

    <!-- Grid column -->
    <div class="col-lg-4 col-md-12 mt-3">

        <!--Card-->
        <div class="card">

            <!--Card image-->
            <div class="">
                <h4 class="mb-1 mt-1 font-weight-bold text-center green-text text-capitalize">{{ $App->app_head }}</h4>
                <a href="#">
                    <div class="mask rgba-white-slight"></div>
                </a>
            </div>

            <!--Card content-->
            <div class="card-body">
                <!--Title-->
                <h4 class="card-title red-text text-capitalize"><i class="fas fa-arrow-right"></i> {{ $App->title1 }} </h4>
                <!--Text-->
                
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                    card content.</p>
                <a href="#" class="btn btn-success">Complete</a>
            </div>

        </div>
        <!--/.Card-->

    </div>
    <!-- Grid column -->
    @endforeach

</div>
<!-- Grid row -->
@endsection