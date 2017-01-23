@extends('administrador.master')
@section('content') 

@include('layouts.header') 
<div class="container-fluid">
<div class="row">
<sidebar class="col-md-2 sidebarA">
       @include('administrador.sidebarAdmin')      
</sidebar>
  <section class="col-md-10 ContentMantenimiento">
      <div class="row panel-body">
        <h3>Mantenimiento Alojamiento</h3>
        <div class="col-md-5">
        <label for="hoteles">Ver por Tipo</label>
          <select name="" class="form-control form-inline">
             <option value="Todos" selected>Todos</option>
             <option value="Hostal">Hostal</option>
             <option value="Hotel1">Hotel *</option>
             <option value="Hotel2">Hotel **</option>
             <option value="Hotel3">Hotel ***</option>
             <option value="Hotel4">Hotel ****</option>
             <option value="Hotel5">Hotel *****</option>
          </select>
        </div>
        <div class="col-md-4 text-right">
          <br>
          <div id="custom-search-input">
                <div class="input-group col-md-12">
                    <input type="text" class="form-control input" placeholder="Buscar" />
                    <span class="input-group-btn">
                        <button class="btn btn-info btn" type="button">
                            <i class="glyphicon glyphicon-search"></i>
                        </button>
                    </span>
                </div>
            </div>
        </div>
         <div class="col-md-3 text-right">
            <br>
            <button type="button" class="btn btn-success" data-toggle="modal" data-target=".bs-example-modal-lg">Agregar Nuevo Hotel</button>          
        </div>
      </div>
      <div class="box">
      <table id="tablaHoteles" class="table table-bordered table-hover">
        <thead>
          <tr>
            <th>Nombre</th>
            <th>Razon Social</th>
            <th>RUC</th>
            <th>Dirección</th>
            <th>Telefono</th>
            <th>E-mail</th>
            <th>Actualizacion</th>
          </tr>
        </thead>
        <tbody>
          
        </tbody>
     </table>
     <!-- paginacion -->
     <div class="text-right paginacion">
      <nav aria-label="...">
        <ul class="pagination pagination">
          <li class="page-item disabled">
            <a class="page-link" href="#" tabindex="-1">Previous</a>
          </li>
          <li class="page-item"><a class="page-link" href="#">1</a></li>
          <li class="page-item"><a class="page-link" href="#">2</a></li>
          <li class="page-item"><a class="page-link" href="#">3</a></li>
          <li class="page-item">
            <a class="page-link" href="#">Next</a>
          </li>
        </ul>
      </nav>
     </div>
     </div>
     <!-- end paginacion -->
     <!-- modal agregar nuevo y modificar -->
      <div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
        <div class="modal-dialog modal-lg" role="document">
          <div class="modal-content">
          <div class="panel-body">
             <form class="">
                <div class="row">
                  <div class="col-md-6 form-group">
                    <label for="NomHotel">Nombre:</label>
                    <input type="text" class="form-control" id="NomHotel" placeholder="Nombre">
                  </div>
                  <div class="col-md-6 form-group">
                    <label for="RazonSocial">Razon Social:</label>
                    <input type="text" class="form-control" id="RazonSocial" placeholder="Razon Social">
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-6 form-group">
                    <label for="RUC">RUC:</label>
                    <input type="text" class="form-control" id="RUC" placeholder="RUC">
                  </div>
                  <div class="col-md-6 form-group">
                    <label for="direccion">Dirección</label>
                    <input type="text" class="form-control" id="direccion" placeholder="Dirección">
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-6 form-group">
                    <label for="telefono">Telefono</label>
                    <input type="text" class="form-control" id="telefono" placeholder="Telefono">
                  </div>
                  <div class="col-md-6 form-group">
                    <label for="email">E-mail</label>
                    <input type="email" class="form-control" id="email" placeholder="shuttleperu@example.com">
                  </div>
                </div> 
                <div class="row">
                  <div class="col-md-6 form-group">
                    <label for="TipoHotel">Tipo Alojamiento</label>
                      <select name="" class="form-control form-inline">                       
                       <option value="Hostal" selected>Hostal</option>
                       <option value="Hotel1">Hotel *</option>
                       <option value="Hotel2">Hotel **</option>
                       <option value="Hotel3">Hotel ***</option>
                       <option value="Hotel4">Hotel ****</option>
                       <option value="Hotel5">Hotel *****</option>
                    </select>
                  </div>
                  <div class="col-md-6 form-group"> 
                     <br>                   
                    <button type="submit" class="btn btn-success">Agregar Alojamiento</button>
                  </div>
                </div>                              
              </form>
            </div>
           </div>
        </div>
      </div>
      <!-- modal agregar nuevo y modificar -->
  </section>
</div>
</div>
@endsection

 @section('scripts')  

<script src="{{URL::asset('assets/js/hoteles.js')}}"></script>

 @stop