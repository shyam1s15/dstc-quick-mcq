@extends('base.header_onlyFooterSocialMedia')

@section('csrf')
<meta name="csrf-token" content="{{ csrf_token() }}">
@endsection
@section('main-content')


<main>
    <div class="container" id="formCreateContent">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-8">
                <div class="card" id="app_createForm1">
                    <div class="">
                        <!--Section: Contact-->
                        <section id="contact">
                            <!-- Heading -->

                            <h2 class="mb-1 mt-1 font-weight-bold text-center green-text">Create Application Form</h2>

                            {{--  <form action="#" method="get" name="createAppForm">  --}}
                            <!--Grid row-->
                            <div class="row justify-content-md-center">
                                <!--Grid column-->
                                <div class="col-md-8 col-lg-10">
                                    <div class="symmentric-padding-2 mr-2 ml-2">
                                        {{--  changed from form to span  --}}
                                        <form class="p-1 grey-text">
                                            <div class="md-form form-sm"> <i class="fas fa-user prefix green-text"></i>
                                                <input type="text" class="form-control form-control-sm" required
                                                    id="app_head">
                                                <label for="app_head" class="required">Specify Application
                                                    Heading</label>
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
                                            <div class="md-form form-sm"><i class="fas fa-pen prefix green-text"></i>
                                                <input type="text" class="form-control form-control-sm" required
                                                    id="title1">
                                                <label for="title1" class="required">Application title 1</label>
                                            </div>
                                        </form>
                                    </div>
                                </div>


                                <!--Grid column-->
                                <div class="col-md-4 col-lg-5">
                                    <div class="symmentric-padding-2 mr-2 ml-2">
                                        <form class="p-1 grey-text">
                                            <div class="md-form form-sm"> <i class="fas fa-pen prefix green-text"></i>
                                                <input type="text" class="form-control form-control-sm" required
                                                    id="title2">
                                                <label for="title2" class="required">Application title 2</label>
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
                                            <div class="md-form form-sm"> <i class="fas fa-clock prefix green-text"></i>
                                                <input type="date" name="start_date" id=""
                                                    class="form-control form-control-sm">
                                                <label for="start_date" class="required">When your form must
                                                    start?</label>

                                            </div>
                                        </form>
                                    </div>
                                </div>


                                <!--Grid column-->
                                <div class="col-md-4 col-lg-5">
                                    <div class="symmentric-padding-2 mr-2 ml-2">
                                        <form class="p-1 grey-text">
                                            <div class="md-form form-sm"> <i class="fas fa-clock prefix green-text"></i>
                                                <input type="date" name="" id="finish_date"
                                                    class="form-control form-control-sm">
                                                <label for="finish_date" class="required">When your form must
                                                    end?</label>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <!--Grid row-->
                            <div class="row">
                                <div class="col-md-10">
                                    <button type="submit" class="btn btn-primary float-right mr-5" id="form1Btn">
                                        Make
                                        <i class="fas fa-arrow-right ml-2 fa-lg"></i>
                                    </button>
                                </div>
                            </div>
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
                        <p class="card-text">Here in the DSTC, we respect the knowledge, Our goals are straight for
                            sharing and caring of knowledge</p>
                    </div>
                </div>

                <div class="card" id="app_createForm2">
                    <div class="">
                        <!--Section: Contact-->
                        <section id="question-page">
                            <!-- Heading -->
                            <div class="row justify-content-md-center">
                                <div class="col-6 align-content-center  previous">
                                    <button type="submit" class="btn btn-danger float-left ml-5 " id="">
                                        <i class="fas fa-hand-paper fa-md mr-2"></i>
                                        Finish
                                    </button>
                                </div>
                                <div class="col-6  align-content-center next">
                                    <button type="submit" class="btn btn-primary float-right mr-5 " id="nextLevelBtn">
                                        Next Level
                                        <i class="fas fa-arrow-right ml-2 fa-md"></i>
                                    </button>
                                </div>
                            </div>

                            <div id="futureAppendQuestionPage">
                                <!--Questioning Page-->
                                <div id="questionPage">
                                    <h2 class="mb-1 mt-1 font-weight-bold text-center green-text">Make Your Questions
                                    </h2>
                                    <!--Grid row-->
                                    <div class="row justify-content-md-center">

                                        <!--Grid column-->
                                        <div class="col-md-8 col-lg-10">
                                            <div class="symmentric-padding-2 mr-2 ml-2">
                                                <form class="p-1 grey-text">
                                                    <div class="md-form form-sm"> <i
                                                            class="fas fa-image prefix red-text"
                                                            id="questionImageBtn"></i>
                                                        <input type="text" id="form3"
                                                            class="form-control form-control-sm" required>
                                                        <input type="file" style="display: none" id="questionImageFile">
                                                        <label for="form3" class="required">A question is What is
                                                            Question ??</label>
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
                                                <form class="p-1 grey-text form-check">
                                                    <div class="md-form form-sm"> <i
                                                            class="fas fa-thumbs-up prefix red-text" id="option1"></i>
                                                        <input type="text" id="form3"
                                                            class="form-control form-control-sm" name="option1"
                                                            required>
                                                        <label for="form3" class="required">Option 1 ??</label>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>


                                        <!--Grid column-->
                                        <div class="col-md-4 col-lg-5">
                                            <div class="symmentric-padding-2 mr-2 ml-2">
                                                <form class="p-1 grey-text">
                                                    <div class="md-form form-sm"> <i
                                                            class="fas fa-thumbs-up prefix red-text" id="option2"></i>
                                                        <input type="text" id="form3"
                                                            class="form-control form-control-sm" name="option2"
                                                            required>
                                                        <label for="form3" class="required">Option 2 ??</label>
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
                                                            class="fas fa-thumbs-up prefix red-text" id="option3"></i>
                                                        <input type="text" id="form3"
                                                            class="form-control form-control-sm" name="option3"
                                                            required>
                                                        <label for="form3" class="required">Option 3 ??</label>

                                                    </div>
                                                </form>
                                            </div>
                                        </div>


                                        <!--Grid column-->
                                        <div class="col-md-4 col-lg-5">
                                            <div class="symmentric-padding-2 mr-2 ml-2">
                                                <form class="p-1 grey-text">
                                                    <div class="md-form form-sm"> <i
                                                            class="fas fa-thumbs-up prefix red-text" id="option4"></i>
                                                        <input type="text" id="form3"
                                                            class="form-control form-control-sm" name="option4"
                                                            required>
                                                        <label for="form3" class="required">Option 4 ??</label>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                    <!--Grid row-->
                                    <div class="row">
                                        <div class="col-md-10">
                                            <button type="submit" class="btn btn-primary float-left ml-5"
                                                id="saveQuesBtn">
                                                <i class="fas fa-smile ml-2 fa-lg mr-2"></i>
                                                Save
                                            </button>
                                        </div>
                                    </div>

                                    <a href="#">
                                        <div class="mask rgba-white-slight"></div>
                                    </a>
                                    {{--  </div>  --}}
                                    <!--Card content-->
                                    <div class="card-body">
                                        <!--Title-->
                                        <h4 class="card-title  green-text">
                                            <span id="levelIndicator">Your Application is in Level 1</span>
                                            <i class="fas fa-lightbulb yellow-text ml-2"></i>
                                        </h4>
                                        <!--Text-->
                                        <p class="card-text" id="">Here in the DSTC, we respect the knowledge, Our goals
                                            are
                                            straight
                                            for
                                            sharing and caring of knowledge</p>

                                    </div>
                                </div>
                                <!--Questioning Page-->
                            </div>
                            <div id="nextLevelPage"></div>
                    </div>
                    </section>
                    <!--Section: Contact-->
                </div>
            </div>
        </div>

</main>

{{--  class script  --}}
<script>
    function Question(){
        this.question = "unknown";
        this.option1 = "unknown";
        this.option2 = "unknown";
        this.option3 = "unknown";
        this.option4 = "unknown";
        this.correctAns = "unknown";
    }
</script>
{{--  class script over  --}}

{{--  the below script is for validation  --}}
<script>
    var temp;
    var coin = 0;
    var detachedQuestionPage;

    function validateSave(id){
        temp = $("input[name="+correctAns+"]").val();

    }

    function nextLevelPage(){
        if (coin == 0){
            detachedQuestionPage = $("#questionPage").detach();
            coin++;
            $("#nextLevelPage").load("{{ env('APP_URL') }}/faculty/create/app/nextLevel",function(){
            });
        }else{
                $("#futureAppendQuestionPage").append(detachedQuestionPage);
                coin--;
                detachedQuestionPage = $("#nextLevelPage").empty();
        }
    }
</script>

{{--  validation over  --}}

<script>
    var level = 1;
    var correctAns = "unknown";//this variable have id of correct ans

    $(document).ready(function() {
        $("#app_createForm2").hide();
        $("#app_createForm1").show();
    });

    $("#form1Btn").click(function(){
        console.log( );
       
            $("#app_createForm2").fadeToggle();
            $("#app_createForm1").fadeToggle();
        
    });
    $("#form1BtnBack").click(function(){
        $("#app_createForm2").fadeToggle();
        $("#app_createForm1").fadeToggle();
        
    });

    $("#option1, #option2, #option3, #option4").click(function(){
        $("#option1, #option2, #option3, #option4").attr("class","fas fa-thumbs-up prefix red-text"); 
        $(this).attr("class","fas fa-thumbs-up prefix green-text");
        correctAns = $(this).attr("id");
    });
    
    $( "#saveQuesBtn" ).click(function() {
        $( this ).attr( "class","btn btn-success float-left ml-5" );
        $( this ).effect( "shake","slow",function(){
            $(this).attr("class","btn btn-primary float-left ml-5");
        } );
        validateSave($(this).attr("id"));
      });
</script>

<script>
    $("#nextLevelBtn").click(function(){
        level++;
        $("#levelIndicator").text("Your Application is in level " + level);
        nextLevelPage();
    });
</script>

<script>
    $("#unique").click(function(){
        console.log("clicked");
        $(this).load("http://localhost:8000/test/opData");
    });
</script>

<script>
    var fileSelected = false;
    $("#questionImageBtn").click(function(){
        $("#questionImageFile").click();
    });

    $("#questionImageFile").change(function(){
        if(fileSelected == false){
            $("#questionImageBtn").attr("class","fas fa-image prefix green-text");
            fileSelected = true;
        }else{
            $("#questionImageBtn").attr("class","fas fa-image prefix red-text");
            fileSelected = false;
        }
    })
    {{--  var $img = $($("#questionImageFile").val());  --}}
    
      {{--  $img.next().attr()  $("#questionImageFile").attr("class","fas fa-image prefix green-text");  --}}
    
</script>

{{--  Make request to server to create Application  --}}
<script>
    var default_date,date,month,year,dateStr;
    var application = {
        app_head : '',
        title1 : '',
        title2 : '',
        start_date : '',
        finis_date : '',
        created_by : ''
    }

    
    function makeApp(){
        default_date = new Date();
        date = default_date.getDate();
        month = default_date.getMonth() + 1; // Since getMonth() returns month from 0-11 not 1-12
        year = default_date.getFullYear();
        dateStr = date + "/" + month + "/" + year;
        
        application.app_head = $('#app_head').val() != "" ? $('#app_head').val() : "No Heading";
        application.title1 = $('#title1').val() != "" ? $('#title1').val() : "No title";
        application.title2 = $("#title2").val()  != "" ? $('#title2').val() : "No title";
        application.start_date = $("#start_date").val()  != null? $('#start_date').val() : dateStr;
        application.finis_date = $("#finish_date").val() != null? $('#start_date').val() : dateStr;
        
        $.ajaxSetup({
            headers: {
              'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
          });
        $.post('{{ env("APP_URL") }}/faculty/make/app',{app:application},function(data){
            //console.log( data.success_msg == "done" );
        });
    }

    {{--  application.created_by =   --}}
</script>
{{--  Application req ended  --}}

@endsection