
<h2 class="mb-1 mt-1 font-weight-bold text-center green-text">Please Define This Level</h2>

<div class="row justify-content-md-center">

  <div class="col-md-12 col-lg-6">
    <div class="symmentric-padding-2 mr-2 ml-2">
      <form class="p-1 grey-text">
        <div class="md-form form-sm"> <i class="fa fa-puzzle-piece prefix red-text" aria-hidden="true" id="logicalIndicator"></i>

          <input type="text" id="branchName" class="form-control form-control-sm" required>
          <label for="form3" class="required">{{ $level->branch_subject }}</label>
        </div>
      </form>
    </div>
  </div>
</div>


<div class="row justify-content-md-center">
  <div class="col-4 col-lg-3">
    <div class="symmentric-padding-2 mr-2 ml-2">
      <form class="p-1 grey-text">
        <div class="md-form form-sm">
          {{--  <input type="text" id="form3" class="form-control form-control-sm" required>  --}}
          {{--  <input type="file" style="display: none" id="questionImageFile">  --}}
          <h5 class="required">Passing
            <i class="fa fa-arrow-right red-text ml-2" aria-hidden="true"></i>
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
            <input type="number" name="passing-marks" id="passingMarks" class="form-control form-control-sm" required>
            <label for="passing" class="required" id="passingLabel">{{ $level->passing }} out of {{ count($level->questions) }}</label>
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
            <input type="text" name="passing-marks" id="passingMsg" class="form-control form-control-sm" required>
            <label for="passingMsg" class="required">{{ $level->passing_msg }}</label>
          </div>
        </div>
      </form>
    </div>
  </div>
</div>

<div class="row justify-content-md-center">
  <div class="col-4 col-lg-3">
    <div class="symmentric-padding-2 mr-2 ml-2">
      <form class="p-1 grey-text">
        <div class="md-form form-sm">
          {{--  <input type="text" id="form3" class="form-control form-control-sm" required>  --}}
          {{--  <input type="file" style="display: none" id="questionImageFile">  --}}
          <h5 class="required">Elite
            <i class="fa fa-arrow-right red-text ml-3" aria-hidden="true"></i>
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
            <input type="number" name="Elite-marks" id="EliteMarks" class="form-control form-control-sm" required>
            <label for="EliteMarks" class="required" id="EliteMarksLabel">{{ $level->Elite }} out of {{ count($level->questions) }}</label>
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
            <input type="text" name="Elite-marks" id="EliteMsg" class="form-control form-control-sm" required>
            <label for="EliteMsg" class="required">{{ $level->Elite_msg }}</label>
          </div>
        </div>
      </form>
    </div>
  </div>
</div>

<div class="row">
    <div class="col-6 align-content-center  previous">
        <button type="submit" class="btn btn-danger float-right" id="">
            Save Edit
            <i class="fas fa-check fa-lg"></i>

        </button>
    </div>
    <div class="col-6 align-content-center  next">
        <button type="submit" class="btn btn-warning float-left" id="">
            continue
            <i class="fas fa-arrow-right ml-2 fa-lg"></i>
        </button>
    </div>
</div>