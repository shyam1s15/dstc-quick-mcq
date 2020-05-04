

<div id="cover">
    <div class="row justify-content-center" id="parentRow">
        <div class="col-md-12 col-lg-8">
            <h2 class="mb-1 mt-1 font-weight-bold text-center green-text">All the best
            </h2>

            @foreach ($questions as $index => $question)
            
            <div class="card mt-3" id="randomQuestionForm">
                <div class="">
                    <!--Section: Contact-->
                    <section id="question-page">
                        <!-- Heading -->
                        <div class="row justify-content-md-center">

                        </div>

                        <div id="futureAppendQuestionPage">
                            <!--Questioning Page-->
                            <div id="questionPage">
                                <!--Grid row-->
                                <div class="row justify-content-md-center">

                                    <!--Grid column-->
                                    <div class="col-md-8 col-lg-10">
                                        <div class="symmentric-padding-2 mr-2 ml-2">
                                            <form class="p-1 grey-text">
                                                <div class="md-form form-sm"> <i
                                                        class="fas fa-question prefix green-text"></i>
                                                    <input type="text" id="oriQuestion"
                                                        class="form-control form-control-sm" disabled>
                                                    <input type="file" style="display: none" id="questionImageFile">
                                                    <label for="oriQuestion"
                                                        class="required">{{ $question->question }}</label>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>


                                <!--Grid row-->

                                <!--Grid row-->
                                <div class="row justify-content-md-center">

                                    @if (!empty($question->option1) > 0)

                                    <!--Grid column-->
                                    <div class="col-md-4 col-lg-5">
                                        <div class="symmentric-padding-2 mr-2 ml-2">
                                            <form class="p-1 grey-text form-check">
                                                <div class="md-form form-sm"> <i
                                                        class="fas fa-thumbs-up prefix red-text" id="option1{{ $index+1 }}"></i>
                                                    <input type="text" id="form3" class="form-control form-control-sm"
                                                        name="option1{{ $index+1 }}" disabled>
                                                    <label for="form3" class="required">{{ $question->option1 }}
                                                        </label>
                                                </div>
                                            </form>
                                        </div>
                                    </div>

                                    @endif

                                    @if (!empty($question->option2) > 0)

                                    <!--Grid column-->
                                    <div class="col-md-4 col-lg-5">
                                        <div class="symmentric-padding-2 mr-2 ml-2">
                                            <form class="p-1 grey-text">
                                                <div class="md-form form-sm"> <i
                                                        class="fas fa-thumbs-up prefix red-text" id="option2{{ $index+1 }}"></i>
                                                    <input type="text" id="form3" class="form-control form-control-sm"
                                                        name="option2{{ $index+1 }}" disabled>
                                                    <label for="form3" class="required">{{ $question->option2 }}
                                                        </label>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <!--Grid row-->
                                @endif


                                @if (!empty($question->option3) > 0)

                                <!--Grid row-->
                                <div class="row justify-content-md-center">

                                    <!--Grid column-->
                                    <div class="col-md-4 col-lg-5">
                                        <div class="symmentric-padding-2 mr-2 ml-2">
                                            <form class="p-1 grey-text">
                                                <div class="md-form form-sm"> <i
                                                        class="fas fa-thumbs-up prefix red-text" id="option3{{ $index+1 }}"></i>
                                                    <input type="text" id="form3" class="form-control form-control-sm"
                                                        name="option3{{ $index+1 }}" disabled>
                                                    <label for="form3" class="required">{{ $question->option3 }}
                                                        </label>

                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                    @endif

                                    @if (!empty($question->option4) > 0)

                                    <!--Grid column-->
                                    <div class="col-md-4 col-lg-5">
                                        <div class="symmentric-padding-2 mr-2 ml-2">
                                            <form class="p-1 grey-text">
                                                <div class="md-form form-sm"> <i
                                                        class="fas fa-thumbs-up prefix red-text" id="option4{{ $index+1 }}"></i>
                                                    <input type="text" id="form3" class="form-control form-control-sm"
                                                        name="option4{{ $index+1 }}" disabled>
                                                    <label for="form3" class="required">{{ $question->option4 }}
                                                        </label>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <!--Grid row-->
                                @endif

                                <a href="#">
                                    <div class="mask rgba-white-slight"></div>
                                </a>
                                {{--  </div>  --}}

                            </div>
                            <!--Questioning Page-->
                        </div>
                </div>
                </section>
                <!--Section: Contact-->
            </div>

            @endforeach

            <!--Card content-->
            <div class="card-body">
                <!--Title-->
                <h4 class="card-title  green-text">
                    <span id="levelIndicator"> Giving Up is never an option, Good luck </span>
                    <i class="fas fa-lightbulb yellow-text ml-2"></i>
                </h4>
                <!--Text-->
                <p class="card-text" id="">Here in the DSTC, we respect the knowledge, Our goals
                    are
                    straight
                    for
                    sharing and caring of knowledge</p>

            </div>

            <div class="nextLevel align-content-center">
                <button class="btn btn-success float-right mr-5" name="btnApp">
                    <i class="fa-lg">Save & Proceed</i>
                    <i class="fas fa-angle-double-right orange-text fa-lg ml-3"></i>
                </button>
            </div>

        </div>
    </div>
</div>





{{--  root levels scripts  --}}
<script>
    var logic = {
            branch : [],
            questionSeries : [],
            app_id : '',
        }
        var correctAns;
        var pageFresh = true;

        $(document).load(function(){
            pageFresh = true;
            logic.branch = [];
            logic.app_id = '';
            logic.questionSeries = [];
        });
</script>

{{--  root level scripts are over  --}}
<script>
    $.ajaxSetup({
            headers: {
              'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
          });
          
    function loadAppQuestions(){
        $("#cover").empty();
        
        $("#cover").load(
            "{{ env('APP_URL') }}/test/app/questions",
            {   
                Logic    :   logic, 

            },
            function(data){
                logic.questionSeries = data.questionSeries;
        });
    }

    $("#cover").delegate("#option1, #option2, #option3, #option4",  "click" ,function(){
        $("#option1, #option2, #option3, #option4").attr("class","fas fa-thumbs-up prefix red-text"); 
        $( this ).attr("class","fas fa-thumbs-up prefix green-text");
        correctAns = $(this).attr("id");
    });

    {{--  $("#cover").delegate("#optInp1, #optInp2, #optInp2, #optInp3,",  "click" ,function(){
        $("#option1, #option2, #option3, #option4").attr("class","fas fa-thumbs-up prefix red-text"); 
        
        $(this).attr("class","fas fa-thumbs-up prefix green-text");
        correctAns = $(this).attr("id");
    })  --}}

    $("cover").delegate("button [name=btnApp]",loadAppQuestions);
</script>
{{--  The Driver scripts  --}}
<script>
    $("button[name=btnApp]").click(function(){
        logic.app_id = $(this).val();
        loadAppQuestions();
    });

</script>
{{--  Driver scirpts over  --}}

<!-- Grid row -->
