<div class="form-group">
    {{ Form::label('descripcion', 'Descripción de la cita')}}
    {{ Form::text('descripcion',null,['class' => 'form-control']) }}
</div>

<div class="form-group">
        {{ Form::label('fecha', 'Fecha')}}
        {{ Form::date('fecha',null,['class' => 'form-control']) }}
</div>

<div class="form-group">
        {{ Form::label('hora', 'Hora')}}
        {{ Form::text('hora',null,['class' => 'form-control']) }}
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
               
                
</div><br><br>

<div class="form-group">
      
        {{ Form::submit('Guardar', ['class' => 'btn btn-sm btn-success']) }}
    </div>