@extends('layouts.admi')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">
                 cuenta
                </div>

                <div class="panel-body">
                  <p><strong>Monto del servicio</strong> {{ $cuenta->monto }}</p>
                  <p><strong>Descripcion del servicio dado</strong> {{ $cuenta->descripcion }}</p>
                  <p><strong>Paciente</strong> {{ $cuenta->cita->descripcion }}</p>
                  <p><strong>Paciente</strong> {{ $cuenta->expediente->name }}</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection