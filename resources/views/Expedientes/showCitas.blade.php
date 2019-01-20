@extends('layouts.admin')

@section('contenedor')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">
                 Citas del paciente: <strong>{{$nombrePaciente}}</strong>
                </div>
                @foreach($citas as $cita)
                <tr>
                <div class="panel-body">
                <div class="panel-body">
                   <table class="table table-striped table-hover">
                        <thead>
                            <tr>
                                
                                
                                <th>Descripción</th>
                                <th>Fecha [Año-Mes-Día]</th>
                                <th>Hora</th>
                                

                             </tr>
                        </thead>
                   <tbody>
                    @foreach($citas as $cita)
                        <tr>
                           
                            <td> {{ $cita->descripcion }}</td>
                            <td> {{ $cita->fecha }}</td>
                            <td> {{ $cita->hora}}</td>
                        </tr>
                     @endforeach
                    
                   </tbody>      
                  </table>
                  <p>Cantidad de citas realizadas : <strong>{{$cont}}</strong></p>
                </div>
                
                @endforeach
                <div class="card-footer">
                       
                </div>
            </div>
           
        </div>
    </div>
</div>
@endsection