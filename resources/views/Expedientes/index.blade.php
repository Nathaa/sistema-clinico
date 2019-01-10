@extends('layouts.admi')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">
                 Expedientes
                 @can('expedientes.create')
                 <a href="{{ route('expedientes.create') }}" 
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
                                <th>Nombre</th>
                                <th colspan="3">&nbsp;</th>
                            </tr>
                        </thead>
                    <tbody>
                        @foreach($expedientes as $expediente)
                        <tr>
                            <td>{{ $expediente->id }}</td>
                            <td>{{ $expediente->name }}</td>
                            <td width="10px">
                               @can('expedientes.show')
                                 <a href="{{ route('expedientes.show', $expediente->id) }}"
                                 class="btn btn-sm btn-default">
                                    Ver
                                 </a>
                                @endcan
                            </td>
                            <td width="10px">
                                    @can('expedientes.edit')
                                      <a href="{{ route('expedientes.edit', $expediente->id) }}"
                                      class="btn btn-sm btn-default">
                                         Editar
                                      </a>
                                     @endcan
                                 </td>
                                 <td width="10px">
                                        @can('expedientes.destroy')
                                          {!! Form::open(['route' => ['expedientes.destroy', $expediente->id],
                                          'method' =>'DELETE']) !!}
                                          <button class="btn btn-sm btn-danger">
                                              Eliminar
                                          </button>
                                        {!! Form::close() !!}
                                         @endcan
                                     </td>
                                     <td width="10px">
                                        @can('expedientes.showCitas')
                                          <a href="{{ route('expedientes.showCitas', $expediente->id) }}"
                                          class="btn btn-sm btn-default">
                                             Citas
                                          </a>
                                         @endcan
                                     </td>
                                     <td width="10px">
                                        @can('expedientes.showCuentas')
                                          <a href="{{ route('expedientes.showCuentas', $expediente->id) }}"
                                          class="btn btn-sm btn-default">
                                             Cuentas
                                          </a>
                                         @endcan
                                     </td>
                        </tr>
                        @endforeach
                    </tbody>
                    </table>
                    {{ $expedientes->render() }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection