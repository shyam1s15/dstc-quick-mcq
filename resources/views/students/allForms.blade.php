@extends('base.header_onlyFooterSocialMedia')

<meta name="csrf-token" content="{{ csrf_token() }}">

@section('main-content')
<!-- Grid row -->
<div id="cover" class="p-2">
    <div class="row justify-content-center">

        @foreach ($Apps as $App)

        <!-- Grid column -->
        <div class="col-lg-4 col-md-12 mt-3">

            <!--Card-->
            <div class="card">

                <!--Card image-->
                <div class="">
                    <h4 class="font-weight-bold text-center cust-dstc-nav-color text-capitalize mt-4 mb-0">{{ $App->app_head }}
                    </h4>
                    <a href="#">
                        <div class="mask rgba-white-slight"></div>
                    </a>
                    
                </div>

                <!--Card content-->
                <div class="card-body">
                    <!--Title-->
                    <h4 class="card-title red-text text-capitalize text-center">
                        {{ $App->title1 }} </h4>
                    <!--Text-->

                    <p class="card-title text-center">{{ $App->title2 }}</p>
                    {{--  here in button using id is not recommended as it have only 1 specific value   --}}
                    <div class="row justify-content-center">
                        <button class="btn cust-dstc-nav-background white-text text-center" value="{{ $App->id }}" name="btnApp"
                            id="{{ $App->id }}">complete</button>
                    </div>
                </div>

            </div>
            <!--/.Card-->

        </div>
        <!-- Grid column -->
        @endforeach

    </div>
</div>



{{--  root levels scripts  --}}
<script>
    var logic = {
            branch : [],
            questionSeries : [],
            app_id : '',
            obtainedSeries : [],
            rawQuestionData : [],   

        }
        var correctAns = {

        };
        var marks = [];

        $(document).load(function(){
            pageFresh = true;
            logic.branch = [];
            logic.app_id = '';
            logic.questionSeries = [];
        });
</script>

{{--  mcq thumbs  --}}
<script>
    var temp = "";
    $("#cover").delegate("#optClick11, #optClick21, #optClick31, #optClick41","click",function(){
        temp = $(this).attr("id").slice(8);
        
        $("#option"+temp).click();
    });
    $("#cover").delegate("#optClick12, #optClick22, #optClick32, #optClick42","click",function(){
        temp = $(this).attr("id").slice(8);
        $("#option"+temp).click();
    });
    $("#cover").delegate("#optClick13, #optClick23, #optClick33, #optClick43","click",function(){
        temp = $(this).attr("id").slice(8);
        $("#option"+temp).click();
    });
    $("#cover").delegate("#optClick14, #optClick24, #optClick34, #optClick44","click",function(){
        temp = $(this).attr("id").slice(8);
        $("#option"+temp).click();
    });
    $("#cover").delegate("#optClick15, #optClick25, #optClick35, #optClick45","click",function(){
        temp = $(this).attr("id").slice(8);
        $("#option"+temp).click();
    });

    $("#cover").delegate("#option11, #option21, #option31, #option41",  "click" ,function(){
        $("#option11, #option21, #option31, #option41").attr("class","fas fa-thumbs-up prefix red-text"); 
        $(this).attr("class","fas fa-thumbs-up prefix green-text");
        correctAns[0] = $(this).attr("id").slice(0,7);
        {{--  console.log(correctAns[0]);  --}}
    });

    $("#cover").delegate("#option12, #option22, #option32, #option42",  "click" ,function(){
        $("#option12, #option22, #option32, #option42").attr("class","fas fa-thumbs-up prefix red-text"); 
        $(this).attr("class","fas fa-thumbs-up prefix green-text");
        correctAns[1] = $(this).attr("id").slice(0,7);
        {{--  console.log(correctAns[1]);  --}}
    });
    
    $("#cover").delegate("#option13, #option23, #option33, #option43",  "click" ,function(){
        $("#option13, #option23, #option33, #option43").attr("class","fas fa-thumbs-up prefix red-text"); 
        $(this).attr("class","fas fa-thumbs-up prefix green-text");
        correctAns[2] = $(this).attr("id").slice(0,7); 

    });
    
    $("#cover").delegate("#option14, #option24, #option34, #option44",  "click" ,function(){
        $("#option14, #option24, #option34, #option44").attr("class","fas fa-thumbs-up prefix red-text"); 
        $(this).attr("class","fas fa-thumbs-up prefix green-text");
        correctAns[3] = $(this).attr("id").slice(0,7);
    });

    $("#cover").delegate("#option15, #option25, #option35, #option45",  "click" ,function(){
        $("#option15, #option25, #option35, #option45").attr("class","fas fa-thumbs-up prefix red-text"); 
        $(this).attr("class","fas fa-thumbs-up prefix green-text");
        correctAns[4] = $(this).attr("id").slice(0,7);
    });
</script>
{{--  mcq thumbs over  --}}
{{--  root level scripts are over  --}}
<script>
    $.ajaxSetup({
            headers: {
              'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
          });
          
    
    function loadAppQuestions(){
        correctAns = [];
        logic.obtainedSeries = [];
        $.get("{{ env('APP_URL') }}/generate/app/questionSeries",
            {
                questionSeries : logic.questionSeries,
                app_id: logic.app_id,
            },
            function(data){
                logic.rawQuestionData = data.questionSeries;
                if( data.questionSeries.length == 0 ) {
                    endMcq();
                    return 0;
                }

                $.each(data.questionSeries, function(index,value){
                    logic.obtainedSeries.push( value[0] );
                });
                
                console.log("series obtained");
                console.log(logic.obtainedSeries);

                logic.questionSeries = $.merge( logic.questionSeries,logic.obtainedSeries );
                //console.log(data);
                $("#cover").empty();
                //console.log(logic.rawQuestionData);

                $("#cover").load(
                    "{{ env('APP_URL') }}/compile/app/questions",
                    {   
                        Logic    :   logic.obtainedSeries , 
                    },
                    function(data){

                    });
                }
                {{--  window.scrollTo(0, 0);  --}}
        );
    }
    function saveAndProceed(){
        //console.log(correctAns);
        $.each(logic.rawQuestionData,function(index,value){
            if ( correctAns[index] == null ) correctAns[index] = "null";
            //logic.rawQuestionData[index] =  $.merge( logic.rawQuestionData[index],[ correctAns[index] ] );

            if( marks[ logic.rawQuestionData[index][1] ] == null){
                marks [ logic.rawQuestionData[index][1] ] = 0;
            }// no else part
            
            marks[ logic.rawQuestionData[index][1] ] += logic.rawQuestionData[index][2] == correctAns[index] ? 1 : 0;  
             
            //console.log("correct ans");
            console.log("correct ans = " + correctAns[index]);
        });

        //console.log("data");
        console.log(logic.rawQuestionData);
        console.log("Below is the marks, note first value indicates unqiue level ID");
        console.log( marks );
        loadAppQuestions();
        
    }
    function endMcq(){
        $("#cover").load(
                    "{{ env('APP_URL') }}/compile/app/result",
                    {   
                        Marks    :   marks , 
                    },
                    function(data){

                    });
    }

    

    {{--  $("#cover").delegate("#optInp1, #optInp2, #optInp2, #optInp3,",  "click" ,function(){
        $("#option1, #option2, #option3, #option4").attr("class","fas fa-thumbs-up prefix red-text"); 
        
        $(this).attr("class","fas fa-thumbs-up prefix green-text");
        correctAns = $(this).attr("id");
    });  --}}

    $("#cover").delegate("#loadNextQuestions","click",saveAndProceed);

</script>
{{--  The Driver scripts  --}}
<script>
    $("button[name=btnApp]").click(function(){
        if(logic.app_id !== null){
            logic.app_id = $(this).val();
        }
        loadAppQuestions();
    });


</script>
{{--  Driver scirpts over  --}}

<!-- Grid row -->
@endsection