@extends('base.header_onlyFooterSocialMedia') 


@section('content')

<div class="container">
    <div class="row">
        <div class="col-xs-6 previous">
            <button type="button" class="btn btn-default btn-lg">
            <span class="glyphicon glyphicon-chevron-left"></span>
            </button>
        </div>
        <div class="col-xs-6 next">
            <button type="button" class="btn btn-default btn-lg">
            <span class="glyphicon glyphicon-chevron-right"></span>
            </button>
        </div>
    </div>
</div>






@endsection