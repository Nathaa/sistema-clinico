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
        {{ Form::label('dirreccion', 'Dirección')}}
        {{ Form::text('dirreccion',null,['class' => 'form-control']) }}
</div>

<div class="form-group">
        {{ Form::label('telefono', 'Teléfono')}}
        {{ Form::text('telefono',null,['class' => 'form-control']) }}
</div>

<div class="form-group">
        {{ Form::label('sexo', 'Sexo')}}
        {{ Form::text('sexo',null,['class' => 'form-control']) }}
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
          
            {{ Form::submit('Guardar', ['class' => 'btn btn-sm btn-primary']) }}
</div>

