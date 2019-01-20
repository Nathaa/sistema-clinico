@extends('layouts.admin')

@section('contenedor')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">
                 Cuenta
                </div>

                <div class="panel-body">
                  <p><strong>Descripcion del servicio dado: </strong> {{ $cuenta->descripcion }}</p>
                  <p><strong>Paciente: </strong> {{ $cuenta->expediente->name }}</p>
                  <p><strong>Cita: </strong> {{ $cuenta->cita->descripcion }}</p>
                  <p><strong>Monto: </strong> $ {{ $cuenta->monto }}</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection