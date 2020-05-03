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
        $(this).attr("class","fas fa-thumbs-up prefix green-text");
        correctAns = $(this).attr("id");
    });

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
@endsection