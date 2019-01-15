<div class="form-group">
        {{ Form::label('monto', 'Cantidad del monto a pagar')}}
        {{ Form::number('monto',null,['class' => 'form-control', 'step' => '0.1']) }}
</div>
    
<div class="form-group">
            {{ Form::label('descripcion', 'Descripción del servicio cancelado ')}}
            {{ Form::text('descripcion',null,['class' => 'form-control']) }}
</div>
  
<div class="form-group">
        {{ Form::label('fechaPago', 'Fecha de Pago')}}
        {{ Form::date('fechaPago',null,['class' => 'form-control']) }}
</div>

<div class="form-group">
                {!! Form::label('cita_id', 'Cita del paciente') !!}
                <div class="form-group">
                    <select name="cita_id" id= "cita_id" class="form-control" required>
                        <option value="">--Cita--</option>
                        @foreach ($citas as $cita)
                        <option value="{{ $cita->id }}"> {{ $cita->descripcion}}</option>  
                        @endforeach
                    </select>    
                </div>
               
                
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