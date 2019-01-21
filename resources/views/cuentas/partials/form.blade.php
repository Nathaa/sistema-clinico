<div class="form-group">
        {{ Form::label('monto', 'Cantidad del monto a pagar')}}
        {{ Form::number('monto',null,['class' => 'form-control','step'=>'any']) }}
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
                {!! Form::label('tipoCita', 'Motivo de la cita') !!}
                <div class="form-group">
                    <select name="tipoCita" id= "tipoCita" class="form-control" required>
                        <option value="">--Cita--</option>
                        @foreach ($arrayTratamientos as $a)
                        <option value="{{ $a}}"> {{ $a}}</option>  
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
               
                
</div><br><br>
  
    <div class="form-group">
          
            {{ Form::submit('Guardar', ['class' => 'btn btn-sm btn-success']) }}
             <a href="{{ route('cuentas.index') }}" class="btn btn-sm btn-primary" > Regresar atras</a>
        </div>