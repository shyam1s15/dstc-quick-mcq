@extends('base.header_onlyFooterSocialMedia')


@section('main-content')


<main>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-8">
                <div class="card" id="app_createForm1">
                    <div class="">
                        <!--Section: Contact-->
                        <section id="contact">
                            <!-- Heading -->

                            <h2 class="mb-1 mt-1 font-weight-bold text-center green-text">Create Application Form</h2>

                            <!--Grid row-->
                            <div class="row justify-content-md-center">

                                <!--Grid column-->
                                <div class="col-md-8 col-lg-10">
                                    <div class="symmentric-padding-2 mr-2 ml-2">
                                        <form class="p-1 grey-text">
                                            <div class="md-form form-sm"> <i class="fas fa-user prefix green-text"></i>
                                                <input type="text" id="form3" class="form-control form-control-sm"
                                                    required>
                                                <label for="form3" class="required">Specify Application Heading</label>
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
                                                <input type="text" id="form3" class="form-control form-control-sm"
                                                    required>
                                                <label for="form3" class="required">Application title 1</label>
                                            </div>
                                        </form>
                                    </div>
                                </div>


                                <!--Grid column-->
                                <div class="col-md-4 col-lg-5">
                                    <div class="symmentric-padding-2 mr-2 ml-2">
                                        <form class="p-1 grey-text">
                                            <div class="md-form form-sm"> <i class="fas fa-pen prefix green-text"></i>
                                                <input type="text" id="form3" class="form-control form-control-sm"
                                                    required>
                                                <label for="form3" class="required">Application title 2</label>
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
                                                <input type="date" name="" id="" class="form-control form-control-sm">
                                                <label for="form3" class="required">When your form must start?</label>

                                            </div>
                                        </form>
                                    </div>
                                </div>


                                <!--Grid column-->
                                <div class="col-md-4 col-lg-5">
                                    <div class="symmentric-padding-2 mr-2 ml-2">
                                        <form class="p-1 grey-text">
                                            <div class="md-form form-sm"> <i class="fas fa-clock prefix green-text"></i>
                                                <input type="date" name="" id="" class="form-control form-control-sm">
                                                <label for="form3" class="required">When your form must end?</label>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <!--Grid row-->
                            <div class="row">
                                <div class="col-md-10">
                                    <button type="submit" class="btn btn-primary float-right mr-5" id="form1Btn">
                                        create
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
                            <div class="row">
                                <div class="col-6 align-content-center">
                                    <button type="submit" class="btn btn-danger float-left ml-5" id="">
                                        <i class="fas fa-hand-paper fa-lg mr-2"></i>
                                        Finish
                                    </button>
                                </div>
                                <div class="col-6">
                                    <button type="submit" class="btn btn-primary float-right mr-5" id="nextLevelBtn">
                                        Next Level
                                        <i class="fas fa-arrow-right ml-2 fa-lg"></i>
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
                                                            class="fas fa-user prefix green-text"></i>
                                                        <input type="text" id="form3"
                                                            class="form-control form-control-sm" required>
                                                        <label for="form3" class="required">A question is What is
                                                            Question
                                                            ??</label>
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
        {{--  alert($(id).val());  --}}
        temp = $("input[name="+correctAns+"]").val();
        alert(temp);
    }

    function nextLevelPage(){
        if (coin == 0){
            detachedQuestionPage = $("#questionPage").detach();
            coin++;
            $("#nextLevelPage").load("{{ config('APP_URL') }}/faculty/create/app/nextLevel",function(){
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
@endsection