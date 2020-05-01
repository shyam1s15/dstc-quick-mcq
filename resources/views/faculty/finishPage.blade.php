    
<!-- Grid row -->
<div class="row justify-content-center" id="parentRow">
    <!-- Grid column -->
    <div class="col-lg-8 col-md-6">

        <!--Panel-->
        <div class="card">
            <h3 class="card-header light-blue lighten-1 white-text text-uppercase font-weight-bold text-center py-5">
                List Of All Levels</h3>
            <div class="card-body">
                <ul class="list-group">

                    @foreach ($levels as $level)
                        <li class="list-group-item d-flex justify-content-between align-items-center" id="{{$level->id}}" name="levelLi">
                            {{ $level->branch_subject }}
                            {{--  {{ dd($level) }}  --}}
                            <span class="badge badge-primary badge-pill">pass: {{ $level->passing }} </span>
                            <span class="badge badge-danger badge-pill">Elite {{ $level->Elite }}  </span>
                        </li>
                    @endforeach
                </ul>
                <p class="text-small text-muted mb-0 pt-3">* ThankYou for creating Application, click the button and see live</p>
                <a href="{{ env('APP_URL') }}/faculty/showApps"><button class="btn btn-success" id="completeAppBtn">Complete</button></a>
            </div>
        </div>
        <!--/.Panel-->

    </div>
    <!-- Grid column -->

</div>
<!-- Grid row -->

