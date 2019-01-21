@extends('layouts.admin')

@section('contenedor')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">
                 <b>Roles</b>
                </div>

                <div class="panel-body">
                  <p><strong>Nombre</strong> {{ $role->name }}</p>
                  <p><strong>Slug</strong> {{ $role->slug }}</p>
                  <p><strong>Descripcion</strong> {{ $role->description }}</p>
                </div>
                 <a href="{{ route('roles.index') }}" class="btn btn-sm btn-success" > Regresar atras</a>
                       
            </div>
        </div>
    </div>
</div>
@endsection