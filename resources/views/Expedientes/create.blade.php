@extends('layouts.admin')

@section('contenedor')
@if(count($errors)>0)
        <div class="alert alert-danger" role="alert">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">
                 Nuevo expediente
                </div>

                <div class="panel-body">
                
                 {!! Form::open(['route' => 'expedientes.store','files'=> true]) !!}
                 <enctype="multipart/form-data">
                 @include('expedientes.partials.form')

                 {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection