@extends('layouts.admin')

@section('contenedor')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">
                 Expediente del paciente
                </div>

                <div class="panel-body">
                        <img width="150px" height="175px" src={{ Storage::url($expediente->avatar) }}> <br><br>
                  <p><strong>Nombre: </strong> {{ $expediente->name }}</p>
                  <p><strong>Fecha de Nacimiento: </strong> {{ $expediente->nacimiento }}</p>
                  <p><strong>Edad: </strong> {{ $expediente->edad }}</p>
                  <p><strong>Sexo: </strong> {{ $expediente->sexo }}</p>
                  <p><strong>Dirección: </strong> {{ $expediente->dirreccion }}</p>
                  <p><strong>Teléfono: </strong> {{ $expediente->telefono }}</p>
                  <p><strong>Ocupación: </strong> {{ $expediente->ocupacion }}</p>
                  <p><strong>Tratamiento Actual: </strong> {{ $expediente->tratamiento }}</p>
                  <p><strong>Diagnóstico: </strong> {{ $expediente->diagnostico }}</p>
                  <p><strong>Alergias: </strong> {{ $expediente->alergias }}</p>
                 
                </div>
                
                        
                        <a href="{{ route('expedientes.showCitas', $expediente->id) }}" class="btn btn-sm btn-danger" >Ver citas</a>
                        <a href="{{ route('expedientes.showCuentas', $expediente->id) }}" class="btn btn-sm btn-danger" >Ver cuentas</a>
                       
                </div>
            </div>
           
        </div>
    </div>
</div>
@endsection