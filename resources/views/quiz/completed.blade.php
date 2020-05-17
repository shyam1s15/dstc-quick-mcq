@extends('base.header_onlyFooterSocialMedia')


@section('main-content')

<h1> thankyou for showing intrest in our university </h1>

<script>

    $(document).ready(function(){
        var delay = 5000;
        var url = "{{ env('APP_URL') }}/student/showChoices";
        setTimeout(function(){ window.location = url; }, delay);
    });
</script>





@endsection
