@extends('layouts.admin')
@section('contenedor')
<div class="col-md-12">
<div id='fullCalendar'></div>
</div>
</div>

<form class="" action="/evento/create" method="post" >
    {{ csrf_field() }}
   <div class="modal fade" tabindex="-1" role="dialog" id="mdlEvent">
        <div class="modal-dialog" role="document" style="width:80%">
          <div class="modal-content">
            <div class="modal-header">
               <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <h5 class="modal-title">Modal title</h5>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-2">
                        <label for="">Descripcion</label>
                        <input type="text" name"title" id="title" class="form-control">
             
                    </div>
                    <div class="col-md-3">
                            <label for="">Fecha inicio</label>
                            <input type="text" name"start"  id="start" readonly class="form-control">
                 
                    </div>
                    <div class="col-md-2">
                      <label for="">Hora Inicio</label>
                      <input type="time" name"hora_inicio"  id="hora_inicio" class="form-control">
                    </div>

                        <div class="col-md-3">
                                <label for="">HoraFinal</label>
                                <input type="time" name"hora_final"  id="hora_final" class="form-control">
                        </div>

                        <div class="col-md-2">
                                <label for="">FechaFinal</label>
                                <input type="text" name"end" id="end" readonly class="form-control">
                     
                        </div>                        

                </div>
            </div>
                          
              <div class="modal-footer">
                <button type="submit" class="btn btn-primary">Save changes</button>
              </div>


          </div>
        </div>
      </div>
    </form>
@endsection