@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">
                 Consultas de pagos por rangos de fecha
                </div>

                <div class="panel-body">
                 {!! Form::open(['route' => 'consultaPagos.store']) !!}
                  
                 @include('consultaPagos.partials.form')

                 {!! Form::close() !!}
                </div>

                
            </div>
        </div>
    </div>
 <br><br><br><br>
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">
                 Consultas de pagos por paciente
                </div>

                <div class="panel-body">
                 {!! Form::open(['route' => 'consultaPagoPacientes.store']) !!}
                  
                 @include('consultaPagoPacientes.partials.form')

                 {!! Form::close() !!}
                </div>

                
            </div>
        </div>
    </div>
</div>
@endsection

