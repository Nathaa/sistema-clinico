@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">
                 Cita
                </div>

                <div class="panel-body">
                        @foreach($citas as $cita)
                        {{  $cita->id }}
                        {{ $cita->descripcion }}
                        
                          @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection



