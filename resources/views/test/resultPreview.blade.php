@extends('base.header_onlyFooterSocialMedia')

@section('main-content')

<h2 class="mb-1 mt-1 font-weight-bold cust-dstc-nav-color text-center">Results are here.</h2>


@if ( $higgest_subjects != null)


    <div class="row justify-content-center">
        <div class="col-12 col-lg-6">
            <h4 class="mb-1 mt-1 font-weight-bold cust-dstc-nav-color text-center">Most Suitable branch for you
                @foreach ($higgest_subjects as $subject)
                <div class="card mt-2 font-weight-bolder green-text p-2">

                {{ $subject->branch_subject }} <br>
                </div>
                @endforeach

            </h4>
        </div>
    </div>

    {{-- only display higgest marks info and its marks --}}

    @foreach ($higgest_subjects as $subject)

    <div class="card mt-3" id="randomQuestionForm">

        <div class="row justify-content-md-center">

            <div class="col-6 col-lg-3">

                <div class="symmentric-padding-2 mr-2 ml-2">
                    <form class="grey-text">
                        <div class="md-form form-sm">
                            {{--  <input type="text" id="form3" class="form-control form-control-sm" required>  --}}
                            {{--  <input type="file" style="display: none" id="questionImageFile">  --}}
                            <h5 class="grey-text font-weight-bolder">{{ $subject->branch_subject }}

                            </h5>
                        </div>
                    </form>
                </div>
            </div>

            <div class="col-6 col-lg-3">
                <div class="symmentric-padding-2 mr-2 ml-2">
                    <form class="grey-text">
                        <div class="md-form form-sm">
                            {{--  <input type="text" id="form3" class="form-control form-control-sm" required>  --}}
                            {{--  <input type="file" style="display: none" id="questionImageFile">  --}}

                            <div class="md-form form-sm">
                                <i class="fab fa-angellist prefix"></i>
                                {{--  <input type="number" name="passing-marks" id="passingMarks" class="form-control form-control-sm" required>  --}}
                                <label for="passing" class="grey-text font-weight-bolder" id="passingLabel">{{ $higgest_marks }} out of
                                    {{ count($subject->questions) }}</label>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>


        <div class="row justify-content-md-center">

            <div class="col-md-12 col-lg-6">
                <div class="symmentric-padding-2 mr-2 ml-2">
                    <form class=" grey-text">
                        <div class="md-form form-sm">
                            {{--  <input type="text" id="form3" class="form-control form-control-sm" required>  --}}
                            {{--  <input type="file" style="display: none" id="questionImageFile">  --}}
                            <div class="md-form form-sm">


                                <h6 for="passingMsg" class="ml-5 cust-dstc-nav-color font-weight-bold"> {{ $subject->Elite_msg }} </h6>

                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        {{--  over passing section  --}}
    </div>

    @endforeach

@else

    {{-- in this section we will give failed students that they got 0 marks --}}
    @foreach ($levels as $index => $level)
        {{--  Fail section  --}}
        <div class="card mt-3" id="randomQuestionForm">

        <div class="row justify-content-md-center">

            <div class="col-6 col-lg-3">

                <div class="symmentric-padding-2 mr-2 ml-2">
                    <form class="p-1 grey-text">
                        <div class="md-form form-sm">
                            {{--  <input type="text" id="form3" class="form-control form-control-sm" required>  --}}
                            {{--  <input type="file" style="display: none" id="questionImageFile">  --}}
                            <h5 class="grey-text font-weight-bolder">{{ $level->branch_subject }}

                            </h5>

                        </div>
                    </form>
                </div>
            </div>

            <div class="col-6 col-lg-3">
                <div class="symmentric-padding-2 mr-2 ml-2">
                    <form class="p-1 grey-text">
                        <div class="md-form form-sm">
                            {{--  <input type="text" id="form3" class="form-control form-control-sm" required>  --}}
                            {{--  <input type="file" style="display: none" id="questionImageFile">  --}}

                            <div class="md-form form-sm">
                                <i class="fab fa-angellist prefix"></i>
                                {{--  <input type="number" name="Elite-marks" id="EliteMarks" class="form-control form-control-sm" required>  --}}
                                <label for="EliteMarks" class="grey-text font-weight-bolder" id="EliteMarksLabel">{{ $marks[ $index ] }} out of
                                    {{ count($level->questions) }}</label>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        </div>
        {{--  over fail section  --}}

        @endforeach
        <div class="row justify-content-center">
            <div class="col-6 col-lg-3 text-center">
                <div class="symmentric-padding">
                    <form class="grey-text">
                        <div class="md-form form-sm">
                            {{--  <input type="text" id="form3" class="form-control form-control-sm" required>  --}}
                            {{--  <input type="file" style="display: none" id="questionImageFile">  --}}

                            <div class="md-form form-sm text-center">
                                <button class="btn cust-dstc-nav-background white-text text-center">
                                    <a href="{{ env('APP_URL') }}/quiz/completed" class="white-text">

                                        <i class="fas fa-allergies fa-lg"></i>
                                        Finish
                                    </a>
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>





@endif

@endsection
