<div id="cover">
    <div class="row justify-content-center" id="parentRow">
        <div class="col-md-12 col-lg-8">
            <h2 class="mb-1 mt-1 font-weight-bold text-center cust-dstc-nav-color">All the best
            </h2>

            @foreach ($questions as $index => $question)

            <div class="card mt-3" id="randomQuestionForm">
                <div class="">
                    <!--Section: Contact-->
                    <section id="question-page">
                        <!-- Heading -->
                        <div class="row justify-content-md-center">

                        </div>

                        <div id="futureAppendQuestionPage">
                            <!--Questioning Page-->
                            <div id="questionPage">
                                <!--Grid row-->
                                <div class="row justify-content-md-center">

                                    <!--Grid column-->
                                    <div class="col-md-8 col-lg-10">
                                        <div class="symmentric-padding-2 mr-2 ml-2">
                                            <form class="mt-1 grey-text">
                                                <div class="md-form form-sm"> <i
                                                        class="fas fa-question prefix cust-dstc-nav-color fa-lg"></i>
                                                    <h6 for="oriQuestion"
                                                        class="required ml-5 card-title cust-dstc-nav-color">
                                                        {{ $question->question }}</h6>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>


                                <!--Grid row-->

                                <!--Grid row-->
                                <div class="row justify-content-md-center">

                                    @if (!empty($question->option1) > 0)

                                    <!--Grid column-->
                                    <div class="col-md-4 col-lg-5">
                                        <div class="symmentric-padding-2 mr-2 ml-2">
                                            <form class="pr-1 pl-1 grey-text form-check">
                                                <div class="md-form form-sm"> <i
                                                        class="fas fa-thumbs-up prefix red-text mr-5"
                                                        id="option1{{ $index+1 }}"></i>
                                                    <button class="btn btn-outline-primary ml-5 btn-block" type="button" id="optClick1{{ $index+1 }}" style="text-transform: unset !important;">
                                                        <h6 class="required card-text text-center"
                                                            >{{ $question->option1 }}
                                                        </h6>
                                                    </button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>

                                    @endif

                                    @if (!empty($question->option2) > 0)

                                    <!--Grid column-->

                                    <div class="col-md-4 col-lg-5">
                                        <div class="symmentric-padding-2 mr-2 ml-2">
                                            <form class="pr-1 pl-1 grey-text">
                                                <div class="md-form form-sm"> <i
                                                        class="fas fa-thumbs-up prefix red-text"
                                                        id="option2{{ $index+1 }}"></i>
                                                    <button class="btn btn-outline-primary ml-5 btn-block" type="button" id="optClick2{{ $index+1 }}" style="text-transform: unset !important;">

                                                        <h6 for="form3" class="required card-text text-center"
                                                            >{{ $question->option2 }}
                                                        </h6>
                                                    </button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <!--Grid row-->
                                @endif


                                @if (!empty($question->option3) > 0)

                                <!--Grid row-->
                                <div class="row justify-content-md-center">

                                    <!--Grid column-->
                                    <div class="col-md-4 col-lg-5">
                                        <div class="symmentric-padding-2 mr-2 ml-2">
                                            <form class="pr-1 pl-1 grey-text">
                                                <div class="md-form form-sm"> <i
                                                        class="fas fa-thumbs-up prefix red-text"
                                                        id="option3{{ $index+1 }}"></i>
                                                    <button class="btn btn-outline-primary ml-5 btn-block" type="button" id="optClick3{{ $index+1 }}" style="text-transform: unset !important;">

                                                        <h6 for="form3" class="required card-text text-center"
                                                            >{{ $question->option3 }}
                                                        </h6>
                                                    </button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                    @endif

                                    @if (!empty($question->option4) > 0)

                                    <!--Grid column-->
                                    <div class="col-md-4 col-lg-5">
                                        <div class="symmentric-padding-2 mr-2 ml-2">
                                            <form class="pr-1 pl-1 grey-text">
                                                <div class="md-form form-sm"> <i
                                                        class="fas fa-thumbs-up prefix red-text"
                                                        id="option4{{ $index+1 }}"></i>
                                                    <button class="btn btn-outline-primary ml-5 btn-block" type="button" id="optClick4{{ $index+1 }}" style="text-transform: unset !important;">

                                                        <h6 for="form3" class="required card-text text-center"
                                                            >{{ $question->option4 }}
                                                        </h6>
                                                    </button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <!--Grid row-->
                                @endif

                                <a href="#">
                                    <div class="mask rgba-white-slight"></div>
                                </a>
                                {{--  </div>  --}}

                            </div>
                            <!--Questioning Page-->
                        </div>
                </div>
                </section>
                <!--Section: Contact-->
            </div>

            @endforeach

            <!--Card content-->
            <div class="card-body">

                <div class="row">

                    <div class="col-12 justify-content-center pb-4">
                        <div class="nextLevel align-content-center">
                            <button class="btn cust-dstc-nav-background white-text float-lg-right mr-5"
                                id="loadNextQuestions" name="btnApp">
                                <i class="fa-lg">Save & Proceed</i>
                                <i class="fas fa-angle-double-right orange-text fa-lg ml-3"></i>
                            </button>
                        </div>
                    </div>
                </div>

                <!--Title-->
                <h4 class="card-title  cust-dstc-nav-color">
                    <span id="levelIndicator"> Giving Up is never an option, Good luck </span>
                    <i class="fas fa-lightbulb yellow-text ml-2"></i>
                </h4>
                <!--Text-->
                <p class="card-text" id="">Here in the DSTC, we respect the knowledge, Our goals
                    are
                    straight
                    for
                    sharing and caring of knowledge</p>

            </div>


        </div>
    </div>
</div>
