@if ($higgest_marks == 0)


<div class="d-flex align-items-center justify-content-center" style="height: 350px">
    <div class="row justify-content-center">
        <div class="col-8 col-lg-8 text-center">

            <h2 class="mb-1 mt-1 font-weight-bold cust-dstc-nav-color text-center">sorry no results.</h2>
            <div class="md-form form-sm text-center">
                <a href="{{ env('APP_URL') }}/quiz/completed" class="white-text">
                    <button class="btn cust-dstc-nav-background white-text text-center">

                        <i class="fas fa-allergies fa-lg"></i>
                        Finish
                    </button>
                </a>
            </div>
        </div>
    </div>
</div>



{{ dd() }}

@endif


@if ( $higgest_subjects != null && $higgest_subjects[0]->branch_subject == "Logic Ability" && ( $higgest_subjects->count() == 1) )
<div class="d-flex align-items-center justify-content-center" style="height: 350px">
    <div class="row justify-content-center">
        <div class="col-8 col-lg-8 text-center">

            <h2 class="mb-1 mt-1 font-weight-bold cust-dstc-nav-color text-center">sorry no results.</h2>
            <div class="md-form form-sm text-center">
                <a href="{{ env('APP_URL') }}/quiz/completed" class="white-text">
                    <button class="btn cust-dstc-nav-background white-text text-center">

                        <i class="fas fa-allergies fa-lg"></i>
                        Finish
                    </button>
                </a>
            </div>
        </div>
    </div>
</div>

@endif

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

@foreach ($levels as $index => $level)

@if ($marks[ $index ] >= $higgest_marks && $marks[ $index ] >= $level->Elite)
<div class="card mt-3" id="randomQuestionForm">

    <div class="row justify-content-md-center">

        <div class="col-6 col-lg-3">

            <div class="symmentric-padding-2 mr-2 ml-2">
                <form class="grey-text">
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
                <form class="grey-text">
                    <div class="md-form form-sm">
                        {{--  <input type="text" id="form3" class="form-control form-control-sm" required>  --}}
                        {{--  <input type="file" style="display: none" id="questionImageFile">  --}}

                        <div class="md-form form-sm">
                            <i class="fab fa-angellist prefix"></i>
                            {{--  <input type="number" name="passing-marks" id="passingMarks" class="form-control form-control-sm" required>  --}}
                            <label for="passing" class="grey-text font-weight-bolder"
                                id="passingLabel">{{ $marks[ $index ] }} out of
                                {{ count($level->questions) }}</label>
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


                            <h6 for="passingMsg" class="ml-5 cust-dstc-nav-color font-weight-bold">
                                {{ $level->Elite_msg }} </h6>

                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    {{--  over passing section  --}}
</div>

@elseif ($marks [$index] >= $higgest_marks && $marks[ $index ] >= $level->passing)
<div class="card mt-3" id="randomQuestionForm">

    <div class="row justify-content-md-center">

        <div class="col-6 col-lg-3">

            <div class="symmentric-padding-2 mr-2 ml-2">
                <form class="grey-text">
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
                <form class="grey-text">
                    <div class="md-form form-sm">
                        {{--  <input type="text" id="form3" class="form-control form-control-sm" required>  --}}
                        {{--  <input type="file" style="display: none" id="questionImageFile">  --}}

                        <div class="md-form form-sm">
                            <i class="fab fa-angellist prefix"></i>
                            {{--  <input type="number" name="passing-marks" id="passingMarks" class="form-control form-control-sm" required>  --}}
                            <label for="passing" class="grey-text font-weight-bolder"
                                id="passingLabel">{{ $marks[ $index ] }} out of
                                {{ count($level->questions) }}</label>
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


                            <h6 for="passingMsg" class="ml-5 cust-dstc-nav-color font-weight-bold">
                                {{ $level->passing_msg }} </h6>

                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    {{--  over passing section  --}}
</div>


@endif

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
                            <label for="EliteMarks" class="grey-text font-weight-bolder"
                                id="EliteMarksLabel">{{ $marks[ $index ] }} out of
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



@endif
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
