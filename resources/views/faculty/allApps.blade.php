@extends('base.header_onlyFooterSocialMedia')
<style>


</style>

@section('main-content')


<!--Apps section-->
<div id="AppSection">
    <div class="row justify-content-md-center ">

        <div class="col-md-12 col-lg-4 mb-3 mt-3  align-items-stretch">
            <div class="card" id="app_createForm1">
                <div class="">
                    <!--Card body-->
                    
                    <a href="#">
                        <div class="mask rgba-white-slight"></div>
                    </a>
                </div>
                <!--Card content-->
                <div class="card-body">
                    <!--Title-->
                    <h4 class="card-title  green-text">Lets Create An Application </h4>
                    <!--Text-->
                    <div class="card-text">Here You can create Application, Make it more attractive by uploading images
                        using image icon next to Question</div>
                    <a href="{{ env('APP_URL') }}/faculty/create/app">
                        <button class="btn btn-success" id="btnCreate">
                            create
                            <i class="fas fa-plus-square fa-lg ml-2"></i>
                        </button>
                    </a>
                </div>
            </div>
        </div>

        @foreach ($Apps as $App)
            
        <div class="col-md-12 col-lg-4 mb-3 mt-3  align-items-stretch mb-3">
            <div class="card z-depth-1" id="app_createForm1">
                <div class="view overlay">
                    <!--Card body-->
                    <h2 class="mb-1 mt-1 text-center red-text">{{ $App->app_head }}</h2>
                    <h4 class="mb-1 mt-1 text-center blue-text">- {{ $App->title1 }}</h4>
                    <h4 class="mb-1 mt-1 text-center blue-text">- {{ $App->title2 }}</h4>
                    <a href="#">
                        <div class="mask rgba-white-slight"></div>
                    </a>
                </div>
                <!--Card content-->
                <div class="card-body">
                    <!--Title-->
                    <h4 class="card-title  green-text">Application created by professor: </h4>
                    <!--Text-->
                    <p class="card-text">Here You can Edit Your Application, It will be directly reflected, it is always
                        recommended to Edit once</p>
                    <button class="btn btn-warning">
                        Edit
                        <i class="far fa-edit ml-2 fa-lg"></i>
                    </button>
                </div>

            </div>
        </div>
   
        @endforeach
    </div>
</div>
<!--Apps section Ended-->



<script>
</script>

@endsection