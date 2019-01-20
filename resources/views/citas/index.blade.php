@extends('layouts.admin')

@section('contenedor')
<div class="container">
    <div class="row">
    
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">
                
                 Citas

                 
                   
                 @can('consultaPagos.create')
                 <a href="{{ route('citas.create') }}" 
                 class="btn btn-sm btn-primary pull-right">
                 Crear
                </a>
                 @endcan

                

                </div>

                <div class="panel-body">
                    <table class="table table-striped table-hover">
                        <thead>
                            <tr>
                                
                                
                                <th>Descripción</th>
                                <th>Fecha</th>
                                <th>Hora</th>

                                <th colspan="3">&nbsp;</th>
                            </tr>
                        </thead>
                    <tbody>
                        @foreach($citas as $cita)
                        <tr>

                            <td>{{ $cita->id }}</td>
                            <td>{{ $cita->title }}</td>
                            <td width="10px">
                               @can('citas.show')
                               <td width="10px">
                               @can('consultaPagos.show')
                                 <a href="{{ route('citas.show', $cita->id) }}"
                                 class="btn btn-sm btn-default">
                                    Ver
                                 </a>
                                @endcan
                        </td>
                        <td width="10px">
                               @can('consultaPagos.show')
                                 <a href="{{ route('citas.edit', $cita->id) }}"
                                 class="btn btn-sm btn-default">
                                    Editar
                                 </a>
                                @endcan
                        </td>
                        <td width="10px">
                                @can('consultaPagos.destroy')
                                {!! Form::open(['route' => ['citas.destroy', $cita->id],
                                'method' =>'DELETE', 'onsubmit' => 'return confirm("¿Desea eliminar la consulta?")']) !!}
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
                     
                    {{ $citas->render() }}
                   
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
