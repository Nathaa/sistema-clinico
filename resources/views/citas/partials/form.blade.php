<div class="form-group">
    {{ Form::label('title', 'Descripción de la cita')}}
    {{ Form::text('title',null,['class' => 'form-control']) }}
</div>

<div class="form-group">
        {{ Form::label('start', 'Fecha de inicio')}}
        {{ Form::date('start',null,['class' => 'form-control']) }}
</div>

<div class="form-group">
        {{ Form::label('end', 'Fecha Final')}}
        {{ Form::date('end',null,['class' => 'form-control']) }}
</div>


<div class="form-group">
        {{ Form::label('hora_inicio', 'Hora de Inicio')}}
        {{ Form::time('hora_inicio',null,['class' => 'form-control']) }}
</div>


<div class="form-group">
        {{ Form::label('hora_final', 'Hora Final')}}
        {{ Form::time('hora_final',null,['class' => 'form-control']) }}
</div>



<div class="form-group">
                {!! Form::label('expediente_id', 'Seleccione el paciente') !!}
                <div class="form-group">
                    <select name="expediente_id" id= "expediente_id" class="form-control" required>
                        <option value="">--Paciente--</option>
                        @foreach ($expedientes as $expediente)
                        <option value="{{ $expediente->id }}"> {{ $expediente->name}}</option>  
                        @endforeach
                    </select>    
                </div>
               
                

</div>
<div class="form-group">
      
        {{ Form::submit('Guardar', ['class' => 'btn btn-sm btn-success']) }}
    </div>