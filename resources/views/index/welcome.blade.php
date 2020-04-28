@extends('base.header_onlyFooterSocialMedia')

@section('main-content')
<main>
    <div class="container">
        
        <div class="row justify-content-md-center">
            
            <div class="col-md-8 col-lg-8 mt-5">
                <br class="mt-4">
                <div class="card">
                    <div class="">
                        <!--Section: Contact-->
                        <section id="contact">
                            <!-- Heading -->
                            
                            <h2 class="mb-5font-weight-bold text-center">Contact us</h2>

                            <!--Grid row-->
                            <div class="row justify-content-md-center">

                                <!--Grid column-->
                                <div class="col-md-8">
                                    <!--Grid column-->
                                    <div class="col-md-12">
                                        <!-- Form contact -->
                                        <form class="p-5 grey-text">
                                            <div class="md-form form-sm"> <i class="fas fa-user prefix"></i>
                                                <input type="text" id="form3" class="form-control form-control-sm" required>
                                                <label for="form3" class="required">Your Full name</label>
                                            </div>
                                            <div class="md-form form-sm"> <i class="fas fa-phone prefix"></i>
                                                <input type="text" id="form3" class="form-control form-control-sm" required>
                                                <label for="form3" class="required">Your Contact</label>
                                            </div>
                                            <div class="md-form form-sm"> <i class="fas fa-pencil-alt prefix"></i>
                                                <textarea type="text" id="form8"
                                                    class="md-textarea form-control form-control-sm"
                                                    rows="4"></textarea>
                                                <label for="form8">Any messages for us</label>
                                            </div>
                                            <button type="submit" class="btn btn-primary col-lg col-md">
                                                 <i class="fab fa-google-plus-g white-text fa-lg mr-2"></i>
                                                 sign up
                                            </button>
                                        </form>
                                        <!-- Form contact -->
                                    </div>
                                    <!--Grid column-->


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

                        <a href="#">
                            <div class="mask rgba-white-slight"></div>
                        </a>
                    </div>
                    <!--Card content-->
                    <div class="card-body">
                        <!--Title-->
                        <h4 class="card-title">DSTC welcome&#39;s you to club</h4>
                        <!--Text-->
                        <p class="card-text">Here in the DSTC, we respect the knowledge, Our goals are straight for sharing and caring of knowledge</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

</main>

@endsection