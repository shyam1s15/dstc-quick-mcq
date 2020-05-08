@extends('base.header_onlyFooterSocialMedia')

<meta name="csrf-token" content="{{ csrf_token() }}">
@section('main-content')



<main id="">
    <div class="container" id="formCreateContent">
        <div class="cover" id="cover">
            <div class="row justify-content-center" id="">
                <div class="col-md-12 col-lg-8">
                    <div class="card" id="app_createForm1">
                        <div class="">
                            <!--Section: Contact-->
                            <section id="contact">
                                <!-- Heading -->

                                <h2 class="mb-1 mt-1 font-weight-bold text-center grey-text">Edit Application in real
                                    time</h2>

                                {{--  <form action="#" method="get" name="createAppForm">  --}}
                                <!--Grid row-->
                                <div class="row justify-content-md-center">
                                    <!--Grid column-->
                                    <div class="col-md-8 col-lg-10">
                                        <div class="symmentric-padding-2 mr-2 ml-2">
                                            {{--  changed from form to span  --}}
                                            <form class="p-1 grey-text">
                                                <div class="md-form form-sm"> <i
                                                        class="fas fa-user prefix yellow-text"></i>
                                                    <input type="text" class="form-control form-control-sm" required
                                                        id="app_head">
                                                    <label for="app_head" class="required">{{ $app->app_head }}</label>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <!--Grid row-->

                                <!--Grid row-->
                                <div class="row justify-content-md-center">

                                    <!--Grid column-->
                                    <div class="col-md-4 col-lg-5">
                                        <div class="symmentric-padding-2 mr-2 ml-2">
                                            <form class="p-1 grey-text">
                                                <div class="md-form form-sm"><i
                                                        class="fas fa-pen prefix yellow-text"></i>
                                                    <input type="text" class="form-control form-control-sm" required
                                                        id="title1">
                                                    <label for="title1" class="required">{{ $app->title1 }}</label>
                                                </div>
                                            </form>
                                        </div>
                                    </div>


                                    <!--Grid column-->
                                    <div class="col-md-4 col-lg-5">
                                        <div class="symmentric-padding-2 mr-2 ml-2">
                                            <form class="p-1 grey-text">
                                                <div class="md-form form-sm"> <i
                                                        class="fas fa-pen prefix yellow-text"></i>
                                                    <input type="text" class="form-control form-control-sm" required
                                                        id="title2">
                                                    <label for="title2" class="required">{{ $app->title2 }}</label>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <!--Grid row-->
                                <!--Grid row-->
                                <div class="row justify-content-md-center">

                                    <!--Grid column-->
                                    <div class="col-md-4 col-lg-5">
                                        <div class="symmentric-padding-2 mr-2 ml-2">
                                            <form class="p-1 grey-text">
                                                <div class="md-form form-sm"> <i
                                                        class="fas fa-clock prefix yellow-text"></i>
                                                    <input type="date" name="start_date" id="start_date"
                                                        class="form-control form-control-sm">
                                                    <label for="start_date" class="required">Start Date:
                                                        {{ $app->created_at }} </label>

                                                </div>
                                            </form>
                                        </div>
                                    </div>


                                    <!--Grid column-->
                                    <div class="col-md-4 col-lg-5">
                                        <div class="symmentric-padding-2 mr-2 ml-2">
                                            <form class="p-1 grey-text">
                                                <div class="md-form form-sm"> <i
                                                        class="fas fa-clock prefix yellow-text"></i>
                                                    <input type="date" name="" id="finish_date"
                                                        class="form-control form-control-sm">
                                                    <label for="finish_date" class="required">Finish Date:
                                                        {{ $app->finish_at }}</label>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
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
                            <h4 class="card-title  green-text">Application created by professor: </h4>
                            <!--Text-->
                            <p class="card-text">Refresh the page if you want to cancel editing</p>
                        </div>
                    </div>

                </div>
            </div>
            <div class="row">
                <div class="col-6 align-content-center  previous">
                    <button type="submit" class="btn btn-danger float-right" id="saveAppFinish">
                        Save Edit
                        <i class="fas fa-check fa-lg"></i>
    
                    </button>
                </div>
                <div class="col-6 align-content-center  next">
                    <button type="submit" class="btn btn-warning float-left" id="SaveAndLoadMore">
                        continue
                        <i class="fas fa-arrow-right ml-2 fa-lg"></i>
                    </button>
                </div>
            </div>
        </div>
        
</main>

<script>
    var application = {
        app_id : '',
        app_head : '',
        title1 : '',
        title2 : '',
        start_date : '',
        finis_date : '',
        created_by : '',

    }
    var Question = {
        question : "unknown",
        option1 : "unknown",
        option2 : "unknown",
        option3 : "unknown",
        option4 : "unknown",
        correctAns : "unknown",
        questionImage: "",
        app_id : '',//it will be added later
    }
    $.ajaxSetup({
        headers: {
          'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
      });
    application.app_id = "{{ $app->id }}";
    
</script>

{{--  making of app  --}}
<script>
    var default_date,date,month,year,dateStr;
    
    
    function makeApp(){
        default_date = new Date();
        date = default_date.getDate();
        month = default_date.getMonth() + 1; // Since getMonth() returns month from 0-11 not 1-12
        year = default_date.getFullYear();
        dateStr = year + "/" + month + "/" + date;
        
        application.app_head = $('#app_head').val() != "" ? $('#app_head').val() : " {{ $app->app_head }} ";
        application.title1 = $('#title1').val() != "" ? $('#title1').val() : "{{ $app->title1 }}";
        application.title2 = $("#title2").val()  != "" ? $('#title2').val() : "{{ $app->title2 }}";
       
        default_date = new Date( $("#start_date").val() == "" ?  $("#start_date").val() : "{{ $app->created_at }}" );
        date = default_date.getDate();
        month = default_date.getMonth() + 1; // Since getMonth() returns month from 0-11 not 1-12
        year = default_date.getFullYear();
        dateStr = year + "-" + month + "-" + date;
        application.start_date = dateStr; // != "" ? $('#start_date').val() : dateStr;
        
        console.log(dateStr);


        default_date = new Date( $("#finish_date").val() == "" ? "{{ $app->finish_at }}" : $("#finish_date").val() );
        date = default_date.getDate();
        month = default_date.getMonth() + 1; // Since getMonth() returns month from 0-11 not 1-12
        year = default_date.getFullYear();
        dateStr = year + "-" + month + "-" + date;
        
        application.finis_date = dateStr //!= "" ? $('#start_date').val() : dateStr;
        console.log(dateStr);
        
        console.log(application);
        $.post('{{ env("APP_URL") }}/edit/app',{app:application},function(data){
            console.log(data.success_msg);
            {{--  app_level_info.app_id = data.success_msg;  --}}
            {{--  Question.app_id = data.success_msg;  --}}
        });
    }

    {{--  application.created_by =   --}}
</script>

{{--  app maker ended  --}}


{{--  driver codes  --}}
<script>
    $("#saveAppFinish").click(function(){
        makeApp();
    });
    $("#SaveAndLoadMore").click(function(){
        console.log( application.app_id );
        $("#cover").load("{{ env('APP_URL') }}/edit/show/levels",{ app_id : application.app_id });
    });
</script>
{{--  driver codes  --}}
@endsection