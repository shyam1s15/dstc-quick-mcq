@extends('base.header_onlyFooterSocialMedia')

<style>

</style>
@section('main-content')
<main>
    <div class="container">

        <div class="row justify-content-md-center">

            <div class="col-md-8 col-lg-8">
                <br class="mt-4">
                <div class="card">
                    <div class="">
                        <!--Section: Contact-->
                        <section id="contact">
                            <!-- Heading -->

                            <h2 class="font-weight-bold text-center green-text">Welcome to DSTC</h2>

                            <!--Grid row-->
                            <div class="row justify-content-md-center">

                                <!--Grid column-->
                                <div class="col-md-8">
                                    <div class="row p-2">
                                        <!--Grid column-->
                                        <div class="col-md-12">
                                            <!-- Form contact -->
                                            <form action="{{ env('APP_URL') }}/welcome/newUser" method="POST" id="welcomeForm">
                                                @csrf
                                                <div class="md-form form-sm"> <i
                                                        class="fas fa-user prefix green-text"></i>
                                                    <input type="text" id="full_name" class="form-control form-control-sm" name="full_name"
                                                        required>
                                                    <label for="full_name" class="required" id="">Your Good name</label>
                                                </div>

                                                <div class="row justify-content-center">
                                                    <div class="col-12 previous">
                                                        <input type="hidden" name="qualification">
                                                        {{--  dropdown for education selection  --}}
                                                        <div class="btn-group" style="width:auto; display:block">
                                                            <button class="btn btn-success dropdown-toggle"
                                                                id="btnDropDown" type="button" data-toggle="dropdown"
                                                                aria-haspopup="true" aria-expanded="false">
                                                                {{--  <i class="fas fa-book-open mr-2"></i>  --}}
                                                                Qualification</button>

                                                            <div class="dropdown-menu">

                                                                <a class="dropdown-item">10th</a>
                                                                <a class="dropdown-item">12th Science group A</a>
                                                                <a class="dropdown-item">12th Science group B</a>
                                                                <a class="dropdown-item">commerce</a>
                                                                <a class="dropdown-item">Arts</a>
                                                                <a class="dropdown-item">Other</a>

                                                            </div>
                                                        </div>
                                                        {{--  dropdown ended  --}}

                                                    </div>
                                                    <div class="col-12 next">

                                                        <div class="md-form form-sm"> <i
                                                                class="fa fa-book green-text prefix"
                                                                aria-hidden="true"></i>

                                                            <input type="text" id="seat_number" name="seat_number"
                                                                class="form-control form-control-sm">
                                                            <label for="seat_number" class="required" id="">Seat number</label>
                                                        </div>
                                                    </div>
                                                    <div class="col-12 previous">
                                                        <div class="md-form form-sm"> <i
                                                                class="fas fa-phone prefix green-text"></i>
                                                            <input type="number" id="contact" name="contact"
                                                                class="form-control form-control-sm" required>
                                                            <label for="contact" class="required" id="">Your Contact</label>
                                                        </div>

                                                    </div>
                                                    <div class="col-12 next">
                                                        <div class="md-form form-sm"><i
                                                                class="fas fa-map-marker-alt prefix green-text"></i>

                                                            <input type="text" id="city" name="city"
                                                                class="form-control form-control-sm" required>
                                                            <label for="city" class="required" id="">Your city</label>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12 col-lg-12">
                                                        <div class="md-form form-sm"><i
                                                                class="fa fa-envelope green-text prefix"></i>

                                                            <input type="email" id="email" name="email"
                                                                class="form-control form-control-sm">
                                                            <label for="email" class="required" id="">Your Email</label>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12 col-lg-5">
                                                        <button type="submit" class="btn purple-gradient" id="submitWelcomeBtn">
                                                            
                                                            Go Go Go
                                                        </button>
                                                    </div>
                                                </div>

                                            </form>
                                            <!-- Form contact -->
                                        </div>
                                        <!--Grid column-->
                                    </div>

                                </div>
                                <!--Grid column-->

                                <!--Grid column-->
                                <div class="col-lg-7 col-md-12">



                                </div>
                                <!--Grid column-->

                            </div>
                            <!--Grid row-->



                        </section>
                        <!--Section: Contact-->

                        <a>
                            <div class="mask rgba-white-slight"></div>
                        </a>
                    </div>
                    <!--Card content-->
                    <div class="card-body">
                        <!--Title-->
                        <h4 class="card-title green-text">DSTC welcome&#39;s you to club</h4>
                        <!--Text-->
                        <p class="card-text">Here in the DSTC, we respect the knowledge, Our goals are straight for
                            sharing and caring of knowledge</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

</main>


{{--  global variables  --}}
<script>

</script>
{{--  variables ended  --}}

{{--  base driver query  --}}
<script>
</script>
{{--  ended  --}}

{{--  drop down scripts  --}}
<script>
    var labelId;
    $(function(){

        $(".dropdown-menu a").click(function(){
    
          $("#btnDropDown").text($(this).text());
          $("input[name=qualification]").val($(this).text());
       });
    
    });
    $("#submitWelcomeBtn").click(function(){
        $("#welcomeForm").submit();
    });

    $('label').click(function() {
        labelID = $(this).attr('for');
        $('#'+labelID).trigger('click');
 });
 
</script>
{{--  ended drop down scrits  --}}


@endsection