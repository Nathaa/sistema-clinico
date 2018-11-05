@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">
                 Cita
                </div>

                <div class="panel-body">
                  <p><strong>Nombre</strong> {{ $expediente->name }}</p>
                  <p><strong>Fecha de Nacimiento</strong> {{ $expediente->nacimiento }}</p>
                  <p><strong>Edad</strong> {{ $expediente->edad }}</p>
                  <p><strong>Direccion</strong> {{ $expediente->dirreccion }}</p>
                  <p><strong>Telefono</strong> {{ $expediente->telefono }}</p>
                  <p><strong>Ocupacion</strong> {{ $expediente->ocupacion }}</p>
                  <p><strong>Tratamiento Actual</strong> {{ $expediente->tratamiento }}</p>
                  <p><strong>Diagnostico</strong> {{ $expediente->diagnostico }}</p>
                  <p><strong>Alergias</strong> {{ $expediente->alergias }}</p>
                </div>
                <div class="card-footer">
                       
                        
                        <a href="{{ route('expedientes.showCitas', $expediente->id) }}" class="btn btn-sm btn-danger" >citas</a>
                        //<a href="{{ route('cuentas.index') }}" class="btn btn-sm btn-danger" >cuentas</a>
                </div>
            </div>
           
        </div>
    </div>
</div>
@endsection