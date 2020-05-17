@extends('base.header_onlyFooterSocialMedia')

@section('main-content')

<h2 class="mb-1 mt-1 font-weight-bold cust-dstc-nav-color text-center">The Results are now Out.</h2>

@if ( $higgest_subjects )

<div class="row justify-content-center">
    <div class="col-12 col-lg-6">
<h4 class="mb-1 mt-1 font-weight-bolder green-text text-center">Most Suitable branch for you :
    @foreach ($higgest_subjects as $subject)
    <div class="card mt-2 font-weight-bolder green-text">

    {{ $subject->branch_subject }} <br>
    </div>
    @endforeach

</h4>
    </div>
</div>

@endif
@endsection

