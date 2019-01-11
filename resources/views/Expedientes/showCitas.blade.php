@extends('layouts.admi')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">
                 Citas del paciente
                </div>
                @foreach($citas as $cita)
                <tr>
                <div class="panel-body">
                  <p><strong>id</strong> {{ $cita->id }}</p>
                  <p><strong>Descripcion</strong> {{ $cita->descripcion }}</p>
                  <p><strong>Fecha</strong> {{ $cita->fecha }}</p>
                  <p><strong>Hora</strong> {{ $cita->hora}}</p>
                </div>
                </tr>
                @endforeach
                <div class="card-footer">
                       
                </div>
            </div>
           
        </div>
    </div>
</div>
@endsection