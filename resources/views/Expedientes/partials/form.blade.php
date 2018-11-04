<div class="form-group">
        {{ Form::label('name', 'Nombre del paciente')}}
        {{ Form::text('name',null,['class' => 'form-control']) }}
</div>

<div class="form-group">
        {{ Form::label('nacimiento', 'Fecha de nacimiento del Paciente')}}
        {{ Form::date('nacimiento',null,['class' => 'form-control']) }}
</div>

<div class="form-group">
        {{ Form::label('edad', 'Edad del paciente')}}
        {{ Form::text('edad',null,['class' => 'form-control']) }}
</div>

<div class="form-group">
        {{ Form::label('dirreccion', 'Direccion del paciente')}}
        {{ Form::text('dirreccion',null,['class' => 'form-control']) }}
</div>

<div class="form-group">
        {{ Form::label('telefono', 'Telefono del paciente')}}
        {{ Form::text('telefono',null,['class' => 'form-control']) }}
</div>

<div class="form-group">
        {{ Form::label('sexo', 'Sexo del paciente')}}
        {{ Form::text('sexo',null,['class' => 'form-control']) }}
</div>

<div class="form-group">
        {{ Form::label('ocupacion', 'Ocupacion del paciente')}}
        {{ Form::text('ocupacion',null,['class' => 'form-control']) }}
</div>

<div class="form-group">
        {{ Form::label('tratamiento', 'Tratameinto Actual del paciente')}}
        {{ Form::text('tratamiento',null,['class' => 'form-control']) }}
</div>

<div class="form-group">
                {{ Form::label('diagnostico', 'Diagnostico del paciente')}}
                {{ Form::text('diagnostico',null,['class' => 'form-control']) }}
</div>

<div class="form-group">
        {{ Form::label('alergias', 'Alergias del paciente')}}
        {{ Form::text('alergias',null,['class' => 'form-control']) }}
</div>



    
<div class="form-group">
          
            {{ Form::submit('Guardar', ['class' => 'btn btn-sm btn-primary']) }}
</div>

