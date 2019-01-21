@extends('layouts.admin')

@section('contenedor')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">
                <b>Informacion de Pago</b>
                </div>

                <div class="panel-body">
                  <p><strong>Descripcion del servicio dado: </strong> {{ $cuenta->descripcion }}</p>
                  <p><strong>Monto: </strong> $ {{ $cuenta->monto }}</p>
                  <p><strong>Fecha de pago: </strong>  {{ $cuenta->fechaPago }}</p>
                  <p><strong>Motivo de la cita: </strong>  {{ $cuenta->tipoCita }}</p>
                   <a href="{{ route('cuentas.index') }}" class="btn btn-sm btn-success" > Regresar atras</a>
                   
                </div>
            </div>
        </div>
    </div>
</div>
@endsection