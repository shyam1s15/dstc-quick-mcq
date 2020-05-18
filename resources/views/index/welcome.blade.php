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

                            <h2 class="font-weight-bold text-center cust-dstc-nav-color pt-3">Welcome to DSTC</h2>

                            <!--Grid row-->
                            <div class="row justify-content-md-center">

                                <!--Grid column-->
                                <div class="col-md-8">
                                    <div class="row p-2">
                                        <!--Grid column-->
                                        <div class="col-md-12">
                                            <!-- Form contact -->
                                            <form action="{{ env('APP_URL') }}/welcome/newUser" method="POST"
                                                id="welcomeForm">
                                                @csrf
                                                <div class="md-form form-sm"> <i
                                                        class="fas fa-user prefix cust-dstc-nav-color"></i>
                                                    <input type="text" id="full_name"
                                                        class="form-control form-control-sm" name="full_name" required>
                                                    <label for="full_name" class="required" id="">Your Full name</label>
                                                </div>

                                                <div class="row justify-content-center">
                                                    <div class="col-12 previous">
                                                        <input type="hidden" name="qualification">
                                                        {{--  dropdown for education selection  --}}
                                                        <div class="btn-group" style="width:auto; display:block">
                                                            <button
                                                                class="btn cust-dstc-nav-background dropdown-toggle white-text"
                                                                id="btnDropDown" type="button" data-toggle="dropdown"
                                                                aria-haspopup="true" aria-expanded="false">
                                                                {{--  <i class="fas fa-book-open mr-2"></i>  --}}
                                                                Qualification</button>

                                                            <div
                                                                class="dropdown-menu cust-dstc-nav-background white-text">

                                                                <a
                                                                    class="dropdown-item cust-dstc-nav-dropDown-hover">10th</a>
                                                                <a class="dropdown-item cust-dstc-nav-dropDown-hover">12th
                                                                    Science (A group) </a>
                                                                <a class="dropdown-item cust-dstc-nav-dropDown-hover">12th
                                                                    Science (B group) </a>
                                                                <a class="dropdown-item cust-dstc-nav-dropDown-hover">12th
                                                                    commerce</a>
                                                                <a class="dropdown-item cust-dstc-nav-dropDown-hover">12th
                                                                    Arts</a>
                                                                <a
                                                                    class="dropdown-item cust-dstc-nav-dropDown-hover">Other</a>

                                                            </div>
                                                        </div>
                                                        {{--  dropdown ended  --}}

                                                    </div>
                                                    <div class="col-12 next">

                                                        <div class="md-form form-sm"> <i
                                                                class="fa fa-book cust-dstc-nav-color prefix"
                                                                aria-hidden="true"></i>

                                                            <input type="text" id="seat_number" name="seat_number"
                                                                class="form-control form-control-sm">
                                                            <label for="seat_number" class="required" id="seat_numberLabel">Seat
                                                                number</label>
                                                        </div>
                                                    </div>
                                                    <div class="col-12 previous">
                                                        <div class="md-form form-sm"> <i
                                                                class="fas fa-phone prefix cust-dstc-nav-color"></i>
                                                            <input type="text" id="contact" name="contact"
                                                                pattern="[1-9]{1}[0-9]{9}"
                                                                title="please Enter valid mobile number"
                                                                class="form-control form-control-sm" required>
                                                            <label for="contact" class="required" id="contactLabel">Your
                                                                Contact</label>
                                                        </div>

                                                    </div>
                                                    <div class="col-12 next">
                                                        <div class="md-form form-sm"><i
                                                                class="fas fa-map-marker-alt prefix cust-dstc-nav-color"></i>

                                                            <input type="text" id="city" name="city"
                                                                class="form-control form-control-sm" required>
                                                            <label for="city" class="required" id="">Your city</label>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12 col-lg-12">
                                                        <div class="md-form form-sm"><i
                                                                class="fa fa-envelope cust-dstc-nav-color prefix"></i>

                                                            <input type="email" id="email" name="email"
                                                                class="form-control form-control-sm">
                                                            <label for="email" class="required" id="">Your Email</label>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12 col-lg-5 text-center">

                                                        <button type="button"
                                                            class="btn cust-dstc-nav-background white-text"
                                                            id="submitWelcomeBtn">
                                                            <span>Next</span>
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
                        <h4 class="card-title cust-dstc-nav-color">DSTC</h4>
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
    var submit_conditions = {
        contact_condition : false,
        qualification_condition : false,
        seat_number_condition : false,
    };
    var seat_number_text = null;
</script>
{{--  variables ended  --}}

{{--  base driver query  --}}
<script>
</script>
{{--  ended  --}}

{{-- functional scripts --}}
<script>
    function ringQualificationBtn(){
        $("#btnDropDown").attr( "class","btn btn-danger dropdown-toggle" );
        $( "#btnDropDown" ).effect( "shake","slow",function(){
            $(this).attr("class","btn cust-dstc-nav-background dropdown-toggle white-text");
        } );
    }

    function validateQualification(){
        if( $("#btnDropDown").text().toLowerCase().trim() !== "qualification"){
            return 1;
        }
        console.log("please choose qualification");
        $( "#btnDropDown" ).fadeToggle(1000);
            $( "#btnDropDown" ).fadeToggle(1000);
        return 0;

    }

    function validateSeatNumber(){
        seat_number_text = $("#seat_number").text().trim();
        if( seat_number_text.charAt(0).match(/[A-Z]/i)   ){
            console.log("correct");
            return 1;
        }
        console.log( seat_number_text );

        $( "#seat_number, #seat_numberLabel" ).fadeToggle(1000);

            $( "#seat_number, #seat_numberLabel" ).fadeToggle(1000);

    }
    function validateContact(){
            $( "#contactLabel" ).fadeToggle(1000);
            $( "#contactLabel" ).fadeToggle(1000);

    }

    function tester(){


        console.log("ok5");
    }
</script>

{{--  drop down scripts  --}}
<script>
    var labelId;
    $(function(){

        $(".dropdown-menu a").click(function(){

          $("#btnDropDown").text($(this).text());
          $("input[name=qualification]").val($(this).text());
       });

    });

    $("#btnDropDown").click(function(){
        console.log("ok");
    });

    // $("#submitWelcomeBtn").click(function(){
    // //    validation 1 qualification is must:
    //     // submit_conditions.contact_condition = validateContact == 1 ? true : false;
    //     // if( submit_conditions.contact_condition == false ){
    //         // $('#contact').blur(function(event) {
    //         //         event.target.checkValidity();
    //         //     }).bind('invalid', function(event) {
    //         //     setTimeout(function() { $(event.target).focus(); }, 50);
    //         // });

    //     // }
    //             // tester();
    //             // validateQualification();
    //             validateSeatNumber();
    // //     submit_conditions.qualification_condition = validateQualification == 1 ? true : false;
    // //     submit_conditions.seat_number_condition = validateSeatNumber == 1 ? true : false;
    // //   ringQualificationBtn();
    //     // $("#welcomeForm").submit();
    // });

    $('label').click(function() {
        labelID = $(this).attr('for');
        $('#'+labelID).trigger('click');
 });

</script>
{{--  ended drop down scrits  --}}

{{--  validation scripts  --}}
<script>

</script>
@endsection
