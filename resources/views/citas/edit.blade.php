@extends('layouts.admin')

@section('contenedor')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">
                 <b>Editar cita</b>
                </div>

                <div class="panel-body">
                 {!! Form::model($cita, ['route' => ['citas.update', $cita->id],
                 'method' =>'PUT'])  !!}
                  
                 @include('citas.partials.form')

                 {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection