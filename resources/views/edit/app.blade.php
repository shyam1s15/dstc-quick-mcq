@extends('base.header_onlyFooterSocialMedia') 


@section('main-content')



<main id="cover" >
    <div class="container" id="formCreateContent">
        <div class="row justify-content-center" id="parentRow">
            <div class="col-md-12 col-lg-8">
                <div class="card" id="app_createForm1">
                    <div class="">
                        <!--Section: Contact-->
                        <section id="contact">
                            <!-- Heading -->

                            <h2 class="mb-1 mt-1 font-weight-bold text-center grey-text">Edit Application in real time</h2>

                            {{--  <form action="#" method="get" name="createAppForm">  --}}
                            <!--Grid row-->
                            <div class="row justify-content-md-center">
                                <!--Grid column-->
                                <div class="col-md-8 col-lg-10">
                                    <div class="symmentric-padding-2 mr-2 ml-2">
                                        {{--  changed from form to span  --}}
                                        <form class="p-1 grey-text">
                                            <div class="md-form form-sm"> <i class="fas fa-user prefix yellow-text"></i>
                                                <input type="text" class="form-control form-control-sm" required
                                                    id="app_head">
                                                <label for="app_head" class="required">{{ $app->app_head }}</label>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <!--Grid row-->

                            <!--Grid row-->
                            <div class="row justify-content-md-center">

                                <!--Grid column-->
                                <div class="col-md-4 col-lg-5">
                                    <div class="symmentric-padding-2 mr-2 ml-2">
                                        <form class="p-1 grey-text">
                                            <div class="md-form form-sm"><i class="fas fa-pen prefix yellow-text"></i>
                                                <input type="text" class="form-control form-control-sm" required
                                                    id="title1">
                                                <label for="title1" class="required">{{ $app->title1 }}</label>
                                            </div>
                                        </form>
                                    </div>
                                </div>


                                <!--Grid column-->
                                <div class="col-md-4 col-lg-5">
                                    <div class="symmentric-padding-2 mr-2 ml-2">
                                        <form class="p-1 grey-text">
                                            <div class="md-form form-sm"> <i class="fas fa-pen prefix yellow-text"></i>
                                                <input type="text" class="form-control form-control-sm" required
                                                    id="title2">
                                                <label for="title2" class="required">{{ $app->title2 }}</label>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <!--Grid row-->
                            <!--Grid row-->
                            <div class="row justify-content-md-center">

                                <!--Grid column-->
                                <div class="col-md-4 col-lg-5">
                                    <div class="symmentric-padding-2 mr-2 ml-2">
                                        <form class="p-1 grey-text">
                                            <div class="md-form form-sm"> <i class="fas fa-clock prefix yellow-text"></i>
                                                <input type="date" name="start_date" id="start_date"
                                                    class="form-control form-control-sm">
                                                <label for="start_date" class="required">Start Date: {{ $app->created_at }} </label>

                                            </div>
                                        </form>
                                    </div>
                                </div>


                                <!--Grid column-->
                                <div class="col-md-4 col-lg-5">
                                    <div class="symmentric-padding-2 mr-2 ml-2">
                                        <form class="p-1 grey-text">
                                            <div class="md-form form-sm"> <i class="fas fa-clock prefix yellow-text"></i>
                                                <input type="date" name="" id="finish_date"
                                                    class="form-control form-control-sm">
                                                <label for="finish_date" class="required">Finish Date: {{ $app->finish_at }}</label>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <!--Grid row-->
                            <div class="row">
                                <div class="col-6 align-content-center  previous">
                                    <button type="submit" class="btn btn-danger float-right" id="form1Btn">
                                        Save Edit
                                        <i class="fas fa-hand-sparkles"></i> 

                                    </button>
                                </div>
                                <div class="col-6 align-content-center  next">
                                    <button type="submit" class="btn btn-warning float-right" id="form1Btn">
                                        continue 
                                        <i class="fas fa-arrow-right ml-2 fa-lg"></i>
                                    </button>
                                </div>
                            </div>
                        </section>
                        <!--Section: Contact-->

                        <a href="#">
                            <div class="mask rgba-white-slight"></div>
                        </a>
                    </div>
                    <!--Card content-->
                    <div class="card-body">
                        <!--Title-->
                        <h4 class="card-title  green-text">Application created by professor: </h4>
                        <!--Text-->
                        <p class="card-text">Here in the DSTC, we respect the knowledge, Our goals are straight for
                            sharing and caring of knowledge</p>
                    </div>
                </div>

            </div>
        </div>

</main>




@endsection