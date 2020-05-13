<h2 class="mb-1 mt-1 font-weight-bold text-center cust-dstc-nav-color">The Results are now Out.</h2>

@foreach ($levels as $index => $level)

@if ( $marks[$index] >= $level->passing && $marks[ $index ] < $level->Elite)

    {{--  passing section  --}}
    <div class="row justify-content-md-center">
        <div class="col-4 col-lg-3">
            <div class="symmentric-padding-2 mr-2 ml-2">
                <form class="grey-text">
                    <div class="md-form form-sm">
                        {{--  <input type="text" id="form3" class="form-control form-control-sm" required>  --}}
                        {{--  <input type="file" style="display: none" id="questionImageFile">  --}}
                        <h5 class="required">{{ $level->branch_subject }}

                        </h5>

                    </div>
                </form>
            </div>
        </div>

        <div class="col-4 col-lg-3">
            <div class="symmentric-padding-2 mr-2 ml-2">
                <form class="grey-text">
                    <div class="md-form form-sm">
                        {{--  <input type="text" id="form3" class="form-control form-control-sm" required>  --}}
                        {{--  <input type="file" style="display: none" id="questionImageFile">  --}}

                        <div class="md-form form-sm">
                            <i class="fab fa-angellist prefix"></i>
                            {{--  <input type="number" name="passing-marks" id="passingMarks" class="form-control form-control-sm" required>  --}}
                            <label for="passing" class="required" id="passingLabel">{{ $marks[ $index ] }} out of
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
                            <i class="far fa-comments prefix fa-2x"></i>
                            <h6 for="passingMsg" class="required ml-5"> {{ $level->passing_msg }} </h6>
                            
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    {{--  over passing section  --}}

    @elseif ( $marks[ $index ] >= $level->Elite)


    {{--  Elite section  --}}
    <div class="row justify-content-md-center">
        <div class="col-4 col-lg-3">
            <div class="symmentric-padding-2 mr-2 ml-2">
                <form class="grey-text">
                    <div class="md-form form-sm">
                        {{--  <input type="text" id="form3" class="form-control form-control-sm" required>  --}}
                        {{--  <input type="file" style="display: none" id="questionImageFile">  --}}
                        <h5 class="required">{{ $level->branch_subject }}

                        </h5>

                    </div>
                </form>
            </div>
        </div>

        <div class="col-4 col-lg-3">
            <div class="symmentric-padding-2 mr-2 ml-2">
                <form class="grey-text">
                    <div class="md-form form-sm">
                        {{--  <input type="text" id="form3" class="form-control form-control-sm" required>  --}}
                        {{--  <input type="file" style="display: none" id="questionImageFile">  --}}

                        <div class="md-form form-sm">
                            <i class="fab fa-angellist prefix"></i>
                            {{--  <input type="number" name="Elite-marks" id="EliteMarks" class="form-control form-control-sm" required>  --}}
                            <label for="EliteMarks" class="required" id="EliteMarksLabel">{{ $marks[ $index ] }} out of
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
                <form class="grey-text">
                    <div class="md-form form-sm">
                        {{--  <input type="text" id="form3" class="form-control form-control-sm" required>  --}}
                        {{--  <input type="file" style="display: none" id="questionImageFile">  --}}
                        <div class="md-form form-sm">
                            <i class="far fa-comments prefix fa-2x"></i>
                            <h6 for="EliteMsg" class="required ml-5">{{ $level->Elite_msg }}</h6>
                            
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    {{--  over Elite section  --}}

    @else
    {{--  Fail section  --}}

    <div class="row justify-content-md-center">
        <div class="col-4 col-lg-3">
            <div class="symmentric-padding-2 mr-2 ml-2">
                <form class="p-1 grey-text">
                    <div class="md-form form-sm">
                        {{--  <input type="text" id="form3" class="form-control form-control-sm" required>  --}}
                        {{--  <input type="file" style="display: none" id="questionImageFile">  --}}
                        <h5 class="required">{{ $level->branch_subject }}

                        </h5>

                    </div>
                </form>
            </div>
        </div>

        <div class="col-4 col-lg-3">
            <div class="symmentric-padding-2 mr-2 ml-2">
                <form class="p-1 grey-text">
                    <div class="md-form form-sm">
                        {{--  <input type="text" id="form3" class="form-control form-control-sm" required>  --}}
                        {{--  <input type="file" style="display: none" id="questionImageFile">  --}}

                        <div class="md-form form-sm">
                            <i class="fab fa-angellist prefix"></i>
                            {{--  <input type="number" name="Elite-marks" id="EliteMarks" class="form-control form-control-sm" required>  --}}
                            <label for="EliteMarks" class="required" id="EliteMarksLabel">{{ $marks[ $index ] }} out of
                                {{ count($level->questions) }}</label>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    {{--  over fail section  --}}
    @endif
    @endforeach
    <div class="row justify-content-center">
        <div class="col-4 col-lg-3 text-center">
            <div class="symmentric-padding">
                <form class="p-1 grey-text">
                    <div class="md-form form-sm">
                        {{--  <input type="text" id="form3" class="form-control form-control-sm" required>  --}}
                        {{--  <input type="file" style="display: none" id="questionImageFile">  --}}

                        <div class="md-form form-sm text-center">
                            <button class="btn cust-dstc-nav-background white-text text-center">
                                <a href="{{ env('APP_URL') }}/student/showChoices" class="white-text">
                                    
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