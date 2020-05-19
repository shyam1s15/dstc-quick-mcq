@extends('base.header_onlyFooterSocialMedia')


@section('main-content')
<div class="d-flex align-items-center justify-content-center" style="height: 350px">



    <div class="row justify-content-center">
        <div class="col-8 col-lg-6 text-center">
            <h2 class="mb-1 mt-1 font-weight-bold cust-dstc-nav-color text-center">Thank you for attempting.</h2>
        </div>
    <button class="btn btn-primary" id="start_again">Start Again</button>

    </div>

</div>
<script>
    $("#start_again").click(function(){
        var delay = 0;
        var url = "{{ env('APP_URL') }}/student/showChoices";
        setTimeout(function(){ window.location = url; }, delay);
    });
</script>





@endsection