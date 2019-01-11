@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">
                 Consultas de pagos
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
                                
                                <th>Desde</th>
                                <th>Hasta</th>
                                <th colspan="3">&nbsp;</th>
                            </tr>
                        </thead>
                    <tbody>
                        @foreach($consultaspagos as $consultaPago)
                        <tr>
                            
                            <td>{{ $consultaPago->fechaInicio }}</td>
                            <td>{{ $consultaPago->fechaFinal }}</td>
                        
                        <td width="10px">
                               @can('consultaPagos.show')
                                 <a href="{{ route('consultaPagos.show', $consultaPago->id) }}"
                                 class="btn btn-sm btn-default">
                                    Ver resultados
                                 </a>
                                @endcan
                        </td>
                        <td width="10px">
                                @can('consultaPagos.destroy')
                                {!! Form::open(['route' => ['consultaPagos.destroy', $consultaPago->id],
                                'method' =>'DELETE']) !!}
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
                    {{ $consultaspagos->render() }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection