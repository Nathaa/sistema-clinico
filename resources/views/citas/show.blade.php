@extends('layouts.admin')

@section('contenedor')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">
                 <b>Informacion de Cita</b>
                </div>
                <div class="panel-body">
                  <p><strong>Descripcion de la cita: </strong> {{ $cita->title }}</p>
                  <p><strong>Fecha: </strong> {{ $cita->start }}</p>
                  <p><strong>Hora: </strong> {{ $cita->hora_inicio }}</p>
                   <p><strong>Hora: </strong> {{ $cita->end }}</p>
                   <p><strong>Hora: </strong> {{ $cita->expediente->name }}</p>
                    <a href="{{ route('citas.index') }}" class="btn btn-sm btn-success" > Regresar atras</a>
                   
                </div>
            </div>
        </div>
    </div>
</div>
@endsection