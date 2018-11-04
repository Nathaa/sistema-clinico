@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">
                 Expediente
                </div>

                <div class="panel-body">
                 {!! Form::model($expediente, ['route' => ['expedientes.update', $expediente->id],
                 'method' =>'PUT'])  !!}
                  
                 @include('expedientes.partials.form')

                 {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection