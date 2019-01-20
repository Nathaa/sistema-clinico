@extends('layouts.admin')

@section('contenedor')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">
                 Cita
                </div>

                <div class="panel-body">
                  <p><strong>Descripcion de la cita: </strong> {{ $cita->descripcion }}</p>
                  <p><strong>Fecha: </strong> {{ $cita->fecha }}</p>
                  <p><strong>Hora: </strong> {{ $cita->hora }}</p>
                  
                  
                </div>
            </div>
        </div>
    </div>
</div>
@endsection