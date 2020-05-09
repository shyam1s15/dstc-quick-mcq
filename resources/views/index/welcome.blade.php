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
                                            <form class="grey-text">
                                                <div class="md-form form-sm"> <i
                                                        class="fas fa-user prefix green-text"></i>
                                                    <input type="text" id="form3" class="form-control form-control-sm"
                                                        required>
                                                    <label for="form3" class="required">Your Good name</label>
                                                </div>

                                                <div class="row justify-content-center">
                                                    <div class="col-6 previous">
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
                                                    <div class="col-6 next">

                                                        <div class="md-form form-sm"> <i
                                                                class="fa fa-book green-text prefix"
                                                                aria-hidden="true"></i>

                                                            <input type="text" id="form3"
                                                                class="form-control form-control-sm" required>
                                                            <label for="form3" class="required">Seat number</label>
                                                        </div>
                                                    </div>
                                                    <div class="col-6 previous">
                                                        <div class="md-form form-sm"> <i
                                                                class="fas fa-phone prefix green-text"></i>
                                                            <input type="number" id="form3"
                                                                class="form-control form-control-sm" required>
                                                            <label for="form3" class="required">Your Contact</label>
                                                        </div>

                                                    </div>
                                                    <div class="col-6 next">
                                                        <div class="md-form form-sm"><i
                                                                class="fas fa-map-marker-alt prefix green-text"></i>

                                                            <input type="text" id="form3"
                                                                class="form-control form-control-sm" required>
                                                            <label for="form3" class="required">Your city</label>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12 col-lg-8">
                                                        <div class="md-form form-sm"><i
                                                                class="fa fa-envelope green-text prefix"></i>

                                                            <input type="email" id="form3"
                                                                class="form-control form-control-sm">
                                                            <label for="form3" class="required">Your Email</label>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12 col-lg-8">
                                                        <button type="submit" class="btn purple-gradient">
                                                            
                                                            sign up
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
    $(function(){

        $(".dropdown-menu a").click(function(){
    
          $("#btnDropDown").text($(this).text());
       });
    
    });
</script>
{{--  ended drop down scrits  --}}


@endsection