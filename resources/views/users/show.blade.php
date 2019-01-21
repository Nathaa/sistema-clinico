@extends('layouts.admin')

@section('contenedor')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">
                 <b>Datos Usuario</b>
                </div>

                <div class="panel-body">
                  <p><strong>Nombre:</strong> {{ $user->name }}</p>
                  <p><strong>Email:</strong> {{ $user->email }}</p>
                  <p><strong>Contraseña:</strong> {{ $user->password }}</p>
                </div>
                  <a href="{{ route('users.index') }}" class="btn btn-sm btn-success" > Regresar atras</a>
            </div>
        </div>
    </div>
</div>
@endsection