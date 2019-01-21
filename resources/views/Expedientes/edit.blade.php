@extends('layouts.admin')

@section('contenedor')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">
                 <b>Modificando Expediente</b>
                </div>

                <div class="panel-body">
                
                        <form method="POST"
                        {!! Form::model($expediente, ['route' => ['expedientes.update', $expediente->id],
                        'method' =>'PUT'])  !!}
                        <enctype="multipart/form-data">
                       
                        
                        <img width="150" src={{ Storage::url($expediente->avatar) }}>
                        @include('expedientes.partials.form')
                       {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection