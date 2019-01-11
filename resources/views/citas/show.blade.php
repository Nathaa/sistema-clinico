@extends('layouts.admi')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">
                 Cita
                </div>

                <div class="panel-body">
                  <p><strong>Descripción: </strong> {{ $cita->descripcion }}</p>
                  <p><strong>Fecha de Cita: </strong> {{ $cita->fecha }}</p>
                  <p><strong>Hora: </strong> {{ $cita->hora }}</p>
                  <p><strong>Paciente: </strong> {{ $cita->expediente->name }}</p>
                  
                </div>
            </div>
        </div>
    </div>
</div>
@endsection