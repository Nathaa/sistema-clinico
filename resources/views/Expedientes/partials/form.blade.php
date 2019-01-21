{!! csrf_field() !!}
<label for="avatar">Fotografía del paciente</label>
  <input type="file" name="avatar">
  {!! $errors->first('avatar','<span class=error>:message</span>') !!}
<br><br>

    

<div class="form-group">
        {{ Form::label('name', 'Nombre')}}
        {{ Form::text('name',null,['class' => 'form-control']) }}
</div>

<div class="form-group">
        {{ Form::label('nacimiento', 'Fecha de nacimiento')}}
        {{ Form::date('nacimiento',null,['class' => 'form-control']) }}
</div>

<div class="form-group">
        {{ Form::label('edad', 'Edad')}}
        {{ Form::text('edad',null,['class' => 'form-control']) }}
</div>



<div class="form-group">
                {!! Form::label('sexo', 'Sexo') !!}
                <div class="form-group">
                    <select name="sexo" id= "sexo" class="form-control" required>
                        <option value="">--Sexo--</option>
                        @foreach ($arraySexo as $arreglo)
                        <option value="{{ $arreglo }}"> {{ $arreglo}}</option>  
                        @endforeach
                </select>    
</div>

<div class="form-group">
        {{ Form::label('dirreccion', 'Dirección')}}
        {{ Form::text('dirreccion',null,['class' => 'form-control']) }}
</div>

<div class="form-group">
        {{ Form::label('telefono', 'Teléfono')}}
        {{ Form::text('telefono',null,['class' => 'form-control']) }}
</div>


<div class="form-group">
        {{ Form::label('ocupacion', 'Ocupación')}}
        {{ Form::text('ocupacion',null,['class' => 'form-control']) }}
</div>

<div class="form-group">
        {{ Form::label('tratamiento', 'Tratamiento Actual')}}
        {{ Form::text('tratamiento',null,['class' => 'form-control']) }}
</div>

<div class="form-group">
                {{ Form::label('diagnostico', 'Diagnóstico')}}
                {{ Form::text('diagnostico',null,['class' => 'form-control']) }}
</div>

<div class="form-group">
        {{ Form::label('alergias', 'Alergias del paciente')}}
        {{ Form::text('alergias',null,['class' => 'form-control']) }}
</div>


<div class="form-group">
          
            {{ Form::submit('Guardar', ['class' => 'btn btn-sm btn-success']) }}
            <a href="{{ route('expedientes.index') }}" class="btn btn-sm btn-primary" > Regresar atras</a>
</div>

