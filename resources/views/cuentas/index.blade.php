@extends('layouts.admi')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">
                 cuentas
                 @can('cuentas.create')
                 <a href="{{ route('cuentas.create') }}" 
                 class="btn btn-sm btn-primary pull-right">
                 Crear
                </a>
                 @endcan
                </div>

                <div class="panel-body">
                    <table class="table table-striped table-hover">
                        <thead>
                            <tr>
                                <th width="10px">ID</th>
                                <th>Cuenta</th>
                                <th colspan="3">&nbsp;</th>
                            </tr>
                        </thead>
                    <tbody>
                        @foreach($cuentas as $cuenta)
                        <tr>
                            <td>{{ $cuenta->id }}</td>
                            <td>{{ $cuenta->monto }}</td>
                            <td width="10px">
                               @can('cuentas.show')
                                 <a href="{{ route('cuentas.show', $cuenta->id) }}"
                                 class="btn btn-sm btn-default">
                                    Ver
                                 </a>
                                @endcan
                            </td>
                            <td width="10px">
                                    @can('cuentas.edit')
                                      <a href="{{ route('cuentas.edit', $cuenta->id) }}"
                                      class="btn btn-sm btn-default">
                                         Editar
                                      </a>
                                     @endcan
                                 </td>
                                 <td width="10px">
                                        @can('cuentas.destroy')
                                          {!! Form::open(['route' => ['cuentas.destroy', $cuenta->id],
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
                    {{ $cuentas->render() }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection