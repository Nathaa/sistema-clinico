@extends('layouts.admi')


@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">
                 Cuentas del paciente
                </div>
                
                
                <div class="panel-body">
                   <table class="table table-striped table-hover">
                        <thead>
                            <tr>
                                
                                <th>Descripción</th>
                                <th>Fecha [Año-Mes-Día]</th>
                                <th>Monto</th>

                             </tr>
                        </thead>
                   <tbody>
                    @foreach($cuentas as $cuenta)
                        <tr>
                            <td>{{ $cuenta->descripcion }}</td>
                            <td> {{ $cuenta->fechaPago }}</td>
                            <td>$ {{ $cuenta->monto }}</td>
                            
                        </tr>
                     @endforeach
                    
                   </tbody>
                  
                            
                  </table>
                   <p>Pagos efectuados :<strong>{{ $cantidad }}</strong></p>
                    <p>Monto Total :<strong>${{ $montoTotal }}</strong></p>
                
                </div>
                
               
        <div class="card-footer">
        <a href="{{ route('consultaPagoPacientes.index') }}" class="btn btn-sm btn-danger" >Ver historial de pagos por paciente</a>
        </div>       
            </div>
           
        </div>
    </div>
</div>
@endsection