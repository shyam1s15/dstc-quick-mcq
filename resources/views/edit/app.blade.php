@extends('base.header_onlyFooterSocialMedia')

<meta name="csrf-token" content="{{ csrf_token() }}">
@section('main-content')



<main id="">
    <div class="container" id="formCreateContent">
        <div id="addtionalComponentsTop"></div>
        <div class="cover pt-4" id="cover">
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
                            <h4 class="card-title  cust-dstc-nav-color">Application created by professor: </h4>
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
        <div id="addtionalComponents"></div>
        <div id="endPageMessage"></div>
</main>

<script>
    var correctAns = "unknown";//this variable have id of correct ans
    var temp;

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
    var app_level_info = {
        level_id : '',//it is different than of create App, as we want to edit level
        branch_name : '',
        passing_marks : '',
        passing_message : '',
        elite_marks :'',
        elite_message : '',
   }
   var question_series = [];

    $.ajaxSetup({
        headers: {
          'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
      });
    application.app_id = "{{ $app->id }}";
    
    $("#cover").delegate("#option1, #option2, #option3, #option4","click",function(){
        $("#option1, #option2, #option3, #option4").attr("class","fas fa-thumbs-up prefix red-text"); 
        $(this).attr("class","fas fa-thumbs-up prefix green-text");
        correctAns = $(this).attr("id");
    });
    
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
        
        application.app_head = $('#app_head').val() != "" ?  $('#app_head').val() : " {{ $app->app_head }} "  ;
        application.title1 = $('#title1').val() != "" ? $('#title1').val() : "{{ $app->title1 }}";
        application.title2 = $("#title2").val()  != "" ? $('#title2').val() : "{{ $app->title2 }}";
       
        default_date = new Date( $("#start_date").val() == "" ? "{{ $app->created_at }}" : $("#start_date").val()  );
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

{{--  level editing  --}}
<script>
    function editLevel(id){
        console.log("yeah questions : " + id);
        $("#cover").load("{{ env('APP_URL') }}/edit/level",{ level_id : id });

    }
    function editLevelQuestions(lev_id){
        console.log("yeah questions : " + lev_id);
        {{--  //the below script will load the series and as soon the series --}}
            {{--  // onbtains  the next request will load the  view  --}}
        $.post("{{ env('APP_URL') }}/edit/load/linearQuestionSeries",{ level_id : lev_id, series : question_series },function(data){
            $.each(data.questionSeries,function(index,value){
                question_series.push( value );
            });

            $("#cover").load("/edit/app/level/questions",{ questionSeries : question_series });
        });
        $("#addtionalComponents").load("{{ env('APP_URL') }}/additionalComponents/singleLinedBtns2",
        {
            leftBtnName : 'exit', rightBtnName : 'makeQuestions'
        });

        
    }
    function saveEditLevel(id){
        app_level_info.level_id = id;
        app_level_info.branch_name = $('#branchName').val() != "" ?  $('#branchName').val() : "null5"  ;
        app_level_info.passing_marks = $("#passingMarks").val() != "" ? $("#passingMarks").val() : "null";
        app_level_info.passing_message = $("#passingMsg").val() != "" ? $("#passingMsg").val() : "null";
        app_level_info.elite_marks = $("#EliteMarks").val() != "" ? $("#EliteMarks").val() : "null";
        app_level_info.elite_message = $("#EliteMsg").val() != "" ? $("#EliteMsg").val() : "null";

        $.post('{{ env("APP_URL") }}/edit/app/save/level',{level:app_level_info},function(data){
            console.log(data.success_msg);
            {{--  app_level_info.app_id = data.success_msg;  --}}
            {{--  Question.app_id = data.success_msg;  --}}
        });
        //console.log(id);
    }
    function saveEditLevelAndLoadQuestions(id){

        console.log(id);
    }
    function makeNewLevel(){
        $("#cover").load("{{ env('APP_URL') }}/faculty/create/app/nextLevel",function(){
        });
        $("#addtionalComponents").load("{{ env('APP_URL') }}/addtionalComponents/singleLinedBtns",{
            leftBtnName : 'saveLevel', rightBtnName : 'makeQuestions'
        });
        $("#endPageMessage").load("{{ env('APP_URL') }}/additionalComponents/pageRefreshMessage",
        { message: "Hit Save and refresh the page to see it live" });
    }

    function saveNewLevel(application_id){
        app_level_info.branch_name = $('#branchName').val() != "" ?  $('#branchName').val() : "null5"  ;
        app_level_info.passing_marks = $("#passingMarks").val() != "" ? $("#passingMarks").val() : "null";
        app_level_info.passing_message = $("#passingMsg").val() != "" ? $("#passingMsg").val() : "null";
        app_level_info.elite_marks = $("#EliteMarks").val() != "" ? $("#EliteMarks").val() : "null";
        app_level_info.elite_message = $("#EliteMsg").val() != "" ? $("#EliteMsg").val() : "null";

        $.post('{{ env("APP_URL") }}/edit/app/save/level',{level:app_level_info, app_id : application_id},function(data){
            console.log(data.success_msg);
            app_level_info.level_id = data.success_msg;
            {{--  app_level_info.app_id = data.success_msg;  --}}
            {{--  Question.app_id = data.success_msg;  --}}
        });
        
    }
    function addNewQuestions(){
        console.log( "level_id = " + app_level_info.level_id );
        correctAns = '';
        //only one by one questions allowed
        $("#cover").load("/edit/make/newQuestion");
    }
    function saveNewQuestionOfLevel( lev_id ){
            

        Question.question = $("#oriQuestion").val() != "" ? $("#oriQuestion").val() : "undefined";
        Question.option1 =  $("input[name=option1").val();
        Question.option2 =  $("input[name=option2").val();
        Question.option3 =  $("input[name=option3").val();
        Question.option4 =  $("input[name=option4").val();
        Question.correctAns = correctAns;
        
        console.log(Question);
        
        $.post("{{ env('APP_URL') }}/edit/store/newQuestion",{ que: Question, level_id : lev_id, app_id : "{{ $app->id }}" }, 
        function(data){
            console.log(data.success_msg);
        });

        
        $("#oriQuestion").val('');
        $("input[name=option1]").val('');
        $("input[name=option2]").val('');
        $("input[name=option3]").val('');
        $("input[name=option4]").val('');

    }
</script>
{{--  ended level editing  --}}

{{--  driver codes  --}}
<script>
    $("#saveAppFinish").click(function(){
        makeApp();
    });
    $("#SaveAndLoadMore").click(function(){
        makeApp();
        console.log( application.app_id );
        $("#cover").load("{{ env('APP_URL') }}/edit/show/levels",{ app_id : application.app_id });
    });
    $("#cover").delegate(" span[name=editLevel]","click", function(){
        editLevel( $(this).attr("id").slice(7) ) ;
    });
    $("#cover").delegate(" span[name=editLevelQuestions]","click", function(){
        app_level_info.level_id = $( this ).attr("id").slice(7);
        editLevelQuestions( app_level_info.level_id );
    }); 
    
    $("#cover").delegate(" button[name=saveLevelAndLoadQuestions]","click", () => saveEditLevelAndLoadQuestions( $("button[name=saveLevelAndLoadQuestions]").attr("id") ));
    $("#cover").delegate(" button[name=saveLevel]","click", () => saveEditLevel( $("button[name=saveLevel]").attr("id") ));

    $("#cover").delegate("#addNewLevelBtn","click", function(){
        makeNewLevel();
    } );
    
    $("#addtionalComponents").delegate("button[name=saveLevel]","click",function(){
        saveNewLevel({{ $app->id }});
        console.log("hii");
    });

    $("#addtionalComponents").delegate("button[name=makeQuestions]","click",function(){
        if(! app_level_info.level_id ){
            console.log( " here " );
            saveNewLevel( {{ $app->id }} );
        }
        $("#addtionalComponents").empty();
        addNewQuestions();
    });
    $("#cover").delegate("#saveQuesBtn","click",function(){
        $( this ).attr( "class","btn btn-success white-text float-left ml-5" );
        $( this ).effect( "shake","slow",function(){
            $(this).attr("class","btn cust-dstc-nav-background white-text float-left ml-5");
        } );
        console.log ( app_level_info.level_id );
        saveNewQuestionOfLevel( app_level_info.level_id );
    });

</script>
{{--  driver codes  --}}
@endsection