<div class="form-group">
        {{ Form::label('fechaInicio', 'Desde')}}
        {{ Form::date('fechaInicio',null,['class' => 'form-control']) }}
</div>

<div class="form-group">
        {{ Form::label('fechaFinal', 'Hasta')}}
        {{ Form::date('fechaFinal',null,['class' => 'form-control']) }}
</div>
 
<div class="form-group">
          
            {{ Form::submit('Consultar', ['class' => 'btn btn-sm btn-success']) }}
</div>
