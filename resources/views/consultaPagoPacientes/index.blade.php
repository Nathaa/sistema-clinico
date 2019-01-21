@extends('layouts.admin')

@section('contenedor')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">
                 <b>Consultas de pagos por paciente</b>
                 @can('consultaPagos.create')
                 <a href="{{ route('consultaPagos.create') }}" 
                 class="btn btn-sm btn-primary pull-right">
                 Nueva consulta
                </a>
                 @endcan
                </div>

                <div class="panel-body">
                    <table class="table table-striped table-hover">
                        <thead>
                            <tr>
                                
                                
                                <th>Paciente</th>
                                <th colspan="3">&nbsp;</th>
                            </tr>
                        </thead>
                    <tbody>
                        @foreach($consultaspagospacientes as $consultaspagospaciente)
                        <tr>
                            
                            
                             <td>{{ $expedientes[$consultaspagospaciente->expediente_id-1]->name}}</td>

                        <td width="10px">
                               @can('consultaPagoPacientes.show')
                                 <a href="{{ route('consultaPagoPacientes.show', $consultaspagospaciente->id) }}"
                                 class="btn btn-sm btn-default">
                                    Ver resultados
                                 </a>
                                @endcan
                        </td>
                            
                        <td width="10px">
                                @can('consultaPagoPacientes.destroy')
                                {!! Form::open(['route' => ['consultaPagoPacientes.destroy', $consultaspagospaciente->id],
                                'method' =>'DELETE','onsubmit' => 'return confirm("¿Desea eliminar la consulta?")']) !!}
                                <button class="btn btn-sm btn-danger">
                                Eliminar
                                </button>
                                {!! Form::close() !!}
                                @endcan
                        </td>
                        </tr>
                        @endforeach

                        
                    </tbody>
                     </table>
                    {{ $consultaspagospacientes->render() }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection