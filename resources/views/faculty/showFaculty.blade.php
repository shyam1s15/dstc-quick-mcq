@extends('base.header_onlyFooterSocialMedia')


@section('main-content')

<!-- Grid row -->
<div class="row justify-content-center">

    <!-- Grid column -->
    <div class="col-lg-8 col-md-6">

        <!--Panel-->
        <div class="card">
            <h3 class="card-header light-blue lighten-1 white-text text-uppercase font-weight-bold text-center py-5">
                Professors
                List</h3>
            <div class="card-body">
                <ul class="list-group">

                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        <div class="symmentric-padding-2 mr-2 ml-2">
                            {{--  changed from form to span  --}}
                            <form class="p-1 grey-text">
                                <div class="md-form form-sm"> <i class="fas fa-user prefix cust-dstc-nav-color"></i>
                                    <input type="text" class="form-control form-control-sm" required id="prof_name">
                                    <label for="prof_name" class="required">ProfessorName</label>
                                </div>
                            </form>
                        </div>
                        <div class="symmentric-padding-2 mr-2 ml-2">
                            {{--  changed from form to span  --}}
                            <form class="p-1 grey-text">
                                <div class="md-form form-sm"> <i class="fas fa-envelope prefix cust-dstc-nav-color"></i>
                                    <input type="text" class="form-control form-control-sm" required id="prof_email">
                                    <label for="prof_email" class="required">Professor Email</label>
                                </div>
                            </form>
                        </div>
                    </li>
                    <button class="btn cust-dstc-nav-background white-text" id="addProf">Add</button>

                    <div class="cover" id="cover">
                        
                    </div>

                </ul>
                <p class="text-small text-muted mb-0 pt-3">* At vero eos et accusamus et iusto ducimus.</p>
            </div>
        </div>
        <!--/.Panel-->

    </div>
    <!-- Grid column -->


</div>
<!-- Grid row -->

<script>
    $(document).ready(function(){
        $("#cover").load("{{ env('APP_URL') }}/load/faculty");
    });
    $("#addProf").click(function(){
        $("#cover").empty();
        $("#cover").load("{{ env('APP_URL') }}/load/faculty");
    });
</script>



@endsection