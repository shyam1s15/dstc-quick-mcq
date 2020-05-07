<h2 class="mb-1 mt-1 font-weight-bold text-center green-text">The Results are now out congratulations </h2>

@foreach ($levels as $index => $level)

@if ( $marks[$index] >= $level->passing && $marks[ $index ] < $level->Elite)

{{--  passing section  --}}
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
            <form class="p-1 grey-text">
                <div class="md-form form-sm">
                    {{--  <input type="text" id="form3" class="form-control form-control-sm" required>  --}}
                    {{--  <input type="file" style="display: none" id="questionImageFile">  --}}
                    <div class="md-form form-sm"><i class="fas fa-envelope prefix green-text"></i>
                        
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
                            {{ $level->Elite }}</label>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>


<div class="row justify-content-md-center">

    <div class="col-md-12 col-lg-6">
        <div class="symmentric-padding-2 mr-2 ml-2">
            <form class="p-1 grey-text">
                <div class="md-form form-sm">
                    {{--  <input type="text" id="form3" class="form-control form-control-sm" required>  --}}
                    {{--  <input type="file" style="display: none" id="questionImageFile">  --}}
                    <div class="md-form form-sm"><i class="fas fa-envelope prefix green-text"></i>
                        
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
<div class="row justify-content-md-center">
    <div class="col-4 col-lg-3">
        <div class="symmentric-padding-2 mr-2 ml-2">
            <form class="p-1 grey-text">
                <div class="md-form form-sm">
                    {{--  <input type="text" id="form3" class="form-control form-control-sm" required>  --}}
                    {{--  <input type="file" style="display: none" id="questionImageFile">  --}}

                    <div class="md-form form-sm">
                        <a href="{{ env('APP_URL') }}/student/showChoices" class="btn btn-danger">
                            <i class="fas fa-allergies fa-lg"></i>
                            Finish
                        </a>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>