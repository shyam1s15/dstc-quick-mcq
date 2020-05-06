@extends('base.header_onlyFooterSocialMedia')

<meta name="csrf-token" content="{{ csrf_token() }}">

@section('main-content')
<!-- Grid row -->
<div id="cover">
    <div class="row ustify-content-center">

        @foreach ($Apps as $App)

        <!-- Grid column -->
        <div class="col-lg-4 col-md-12 mt-3">

            <!--Card-->
            <div class="card">

                <!--Card image-->
                <div class="">
                    <h4 class="mb-1 mt-1 font-weight-bold text-center green-text text-capitalize">{{ $App->app_head }}
                    </h4>
                    <a href="#">
                        <div class="mask rgba-white-slight"></div>
                    </a>
                </div>

                <!--Card content-->
                <div class="card-body">
                    <!--Title-->
                    <h4 class="card-title red-text text-capitalize"><i class="fas fa-arrow-right"></i>
                        {{ $App->title1 }} </h4>
                    <!--Text-->

                    <p class="card-text">{{ $App->title2 }}</p>
                    {{--  here in button using id is not recommended as it have only 1 specific value   --}}
                    <button class="btn btn-success" value="{{ $App->id }}" name="btnApp"
                        id="{{ $App->id }}">Complete</button>
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
    $("#cover").delegate("#option11, #option21, #option31, #option41",  "click" ,function(){
        $("#option11, #option21, #option31, #option41").attr("class","fas fa-thumbs-up prefix red-text"); 
        $(this).attr("class","fas fa-thumbs-up prefix green-text");
        correctAns[0] = $(this).attr("id").slice(0,7);
        console.log(correctAns[0]);
    });

    $("#cover").delegate("#option12, #option22, #option32, #option42",  "click" ,function(){
        $("#option12, #option22, #option32, #option42").attr("class","fas fa-thumbs-up prefix red-text"); 
        $(this).attr("class","fas fa-thumbs-up prefix green-text");
        correctAns[1] = $(this).attr("id").slice(0,7);
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
        logic.obtainedSeries = [];
        $.get("{{ env('APP_URL') }}/generate/app/questionSeries",
            {
                questionSeries : logic.questionSeries,
                app_id: logic.app_id,
            },
            function(data){
                logic.rawQuestionData = data.questionSeries;
               
                $.each(data.questionSeries, function(index,value){
                    logic.obtainedSeries.push( value[0] );
                });
                

                console.log(logic.obtainedSeries);

                logic.questionSeries = $.merge( logic.questionSeries,logic.obtainedSeries );
                //console.log(data);
                $("#cover").empty();
                console.log(logic.rawQuestionData);

                $("#cover").load(
                    "{{ env('APP_URL') }}/complile/app/questions",
                    {   
                        Logic    :   logic.obtainedSeries , 
                    },
                    function(data){

                    });
                }
        );
    }

    function saveAndProceed(){
        console.log(correctAns);
        $.each(logic.rawQuestionData,function(index,value){
            if ( correctAns[index] == null ) correctAns[index] = "null";
            //logic.rawQuestionData[index] =  $.merge( logic.rawQuestionData[index],[ correctAns[index] ] );

            if( marks[ logic.rawQuestionData[index][1] ] == null) { marks [ logic.rawQuestionData[index][1] ] = 0;}else{
                marks[ logic.rawQuestionData[index][1] ] += logic.rawQuestionData[index][2] == correctAns[index] ? 1 : 0;  
            } 
        });
        console.log("data");
        console.log(logic.rawQuestionData);
        console.log( marks );
        loadAppQuestions();
        
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