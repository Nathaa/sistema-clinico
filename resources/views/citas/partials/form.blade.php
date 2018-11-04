<div class="form-group">
    {{ Form::label('descripcion', 'Descripcion de la cita')}}
    {{ Form::text('descripcion',null,['class' => 'form-control']) }}
</div>

<div class="form-group">
        {{ Form::label('fecha', 'Fecha de la cita')}}
        {{ Form::date('fecha',null,['class' => 'form-control']) }}
</div>

<div class="form-group">
        {{ Form::label('hora', 'Hora de la cita')}}
        {{ Form::text('hora',null,['class' => 'form-control']) }}
</div>

<div class="form-group">
                {!! Form::label('expediente_id', 'Expediente del paciente') !!}
                <div class="form-group">
                    <select name="expediente_id" id= "expediente_id" class="form-control" required>
                        <option value="">--Expediente--</option>
                        @foreach ($expedientes as $expediente)
                        <option value="{{ $expediente->id }}"> {{ $expediente->name}}</option>  
                        @endforeach
                    </select>    
                </div>
               
                
</div>





<div class="form-group">
      
        {{ Form::submit('Guardar', ['class' => 'btn btn-sm btn-primary']) }}
    </div>