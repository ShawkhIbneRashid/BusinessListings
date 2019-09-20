@extends('layouts.app')

@section('content')

    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Create List<a href = "/dashboard" class = "pull-right btn btn-default btn-xs">Go Back</a></div>

                <div class="panel-body">
                  {!!Form::open(['action'=>'ListingsController@store', 'method' => 'POST'])!!}
                  {{Form::bsText('name', '', ['placeholder' => 'Company Name'])}}
                  {{Form::bsText('website', '', ['placeholder' => 'Company Website'])}}
                  {{Form::bsText('email', '', ['placeholder' => 'Company Email'])}}
                  {{Form::bsText('phone', '', ['placeholder' => 'Company Phone'])}}
                  {{Form::bsText('address', '', ['placeholder' => 'Company Address'])}}
                  {{Form::bsText('bio', '', ['placeholder' => 'About this Business'])}}
                  {{Form::bsSubmit('submit')}}
                  {!!Form::close()!!}
                </div>
            </div>
        </div>
    </div>
@endsection
