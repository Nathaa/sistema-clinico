@extends('layouts.admi')


@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">
                 cuentas del paciente
                </div>
                @foreach($cuentas as $cuenta)
                <tr>
                <div class="panel-body">
                  <p><strong>id</strong> {{ $cuenta->id }}</p>
                  <p><strong>Monto</strong> {{ $cuenta->monto }}</p>
                  <p><strong>Descripcion</strong> {{ $cuenta->descripcion }}</p>
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