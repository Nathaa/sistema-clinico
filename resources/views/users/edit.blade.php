@extends('layouts.admi')


@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">
                 Usuario
                </div>

                <div class="panel-body">
                 {!! Form::model($user, ['route' => ['users.update', $user->id],
                 'method' =>'PUT'])  !!}
                  
                 @include('users.partials.form')

                 {!! Form::close() !!}
                </div>
            </div>
            <div class="card-footer">
                    <a href="{{ route('users.index') }}" class="btn btn-sm btn-danger" > Cancelar y volver</a>
            </div>

        </div>
    </div>
</div>
@endsection