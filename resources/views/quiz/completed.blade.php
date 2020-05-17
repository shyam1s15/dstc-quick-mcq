@extends('base.header_onlyFooterSocialMedia')


@section('main-content')

<h1> thankyou for showing intrest in our university </h1>

<script>

    $(document).ready(function(){
        var delay = 15000;
        var url = "https://www.google.com";
        setTimeout(function(){ window.location = url; }, delay);
    });
</script>





@endsection
