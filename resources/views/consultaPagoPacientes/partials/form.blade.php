<div class="form-group">
                {!! Form::label('expediente_id', 'Seleccione el paciente') !!}
                <div class="form-group">
                    <select name="expediente_id" id= "expediente_id" class="form-control" required>
                        <option value="">--Expediente--</option>
                        @foreach ($expedientes as $expediente)
                        <option value="{{ $expediente->id}}"> {{ $expediente->name}}</option>  
                        @endforeach
                    </select>    
                </div>
</div>
  
<div class="form-group">
          
            {{ Form::submit('Consultar', ['class' => 'btn btn-sm btn-primary']) }}
</div>