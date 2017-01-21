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
        <div class="col-md-6">
           <h3>Mantenimiento Rutas</h3>      
        </div>
        <div class="col-md-3">
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
            <button type="button" class="btn btn-success" data-toggle="modal" data-target=".bs-example-modal-lg">Agregar Nueva Ruta</button>          
        </div>
      </div>
      <div class="box clearfix">
      <table class="table table-bordered table-hover">
        <thead>
          <tr>
            <th>Nombre</th>
            <th>Origen</th>
            <th>Destino</th>
            <th>Detalles</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>Aeropuerto-Hotel</td>
            <td>Aeropuerto</td>
            <td>Hotel</td>
            <td><button type="button" class="btn btn-warning" data-toggle="modal" data-target=".bs-example-modal-lg">Ver Detalles</button></td>
          </tr>
          <tr>
            <td>Aeropuerto-Hotel</td>
            <td>Aeropuerto</td>
            <td>Hotel</td>
            <td><button type="button" class="btn btn-warning" data-toggle="modal" data-target=".bs-example-modal-lg">Ver Detalles</button></td>
          </tr>
          <tr>
            <td>Aeropuerto-Hotel</td>
            <td>Aeropuerto</td>
            <td>Hotel</td>
            <td><button type="button" class="btn btn-warning" data-toggle="modal" data-target=".bs-example-modal-lg">Ver Detalles</button></td>
          </tr>
          <tr>
            <td>Aeropuerto-Hotel</td>
            <td>Aeropuerto</td>
            <td>Hotel</td>
            <td><button type="button" class="btn btn-warning" data-toggle="modal" data-target=".bs-example-modal-lg">Ver Detalles</button></td>
          </tr>
        </tbody>
     </table>
     <!-- paginacion -->
     <div class="text-right clearfix paginacion">
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
                <div class="row"><!-- row detalles-->
                <div class="col-md-4 panel-body">
                  <div class="row panel-body">
                      <label for="NomHotel">Nombre Ruta</label>
                      <input type="text" class="form-control" id="NomHotel" placeholder="Nombre Ruta">
                  </div>
                  <div class="row panel-body">
                      <label for="Origen">Origen</label>
                      <input type="text" class="form-control" id="Origen" placeholder="Origen">
                  </div> 
                  <div class="row panel-body">
                      <label for="Destino">Destino</label>
                      <input type="text" class="form-control" id="Destino" placeholder="Destino">
                  </div> 
               <div class="col-md-4"> <!-- botones update-->
                  <button type="button" class="btn btn-warning">Modificar</button>
                </div>
                <div class="col-md-4">
                  <button type="button" class="btn btn-success">Guardar</button>
                </div> 
                <div class="col-md-4">
                  <button type="button" class="btn btn-danger">Eliminar</button>
                </div>                
                </div> 
                <div class="col-md-8">
                    <div class="panel">                      
                      <div class="panel-body">             
                        <form action="POST">
                          <div class="col-md-3">                            
                              <input type="text" class="form-control" id="HoraPartida" placeholder="Hora Partida">
                          </div>
                          <div class="col-md-3">                            
                              <input type="text" class="form-control" id="precioNino" placeholder="Precio Niño">
                          </div>
                          <div class="col-md-4">                            
                              <input type="text" class="form-control" id="precioAdul" placeholder="Precio Adulto">
                          </div>
                          <div class="col-md-2 text-center">  
                             <button type="button" class="btn btn-success">Agregar</button>
                          </div>
                        </form> 
                      </div>  
                    </div>
                    <table class="table table-bordered table-hover">
                      <thead>
                        <tr>                          
                          <th>Horarios</th>
                          <th>Precio Niño</th>
                          <th>Precio Adulto</th>
                          <th>Capacidad</th>
                          <th>Elinimar</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>7:30 am</td>
                          <td>$ 10.00</td>
                          <td>$ 20</td>
                          <td>15</td>
                          <td class="text-center"><button type="button" class="btn btn-danger btn-xs" >Eliminar</button></td>
                        </tr>
                        <tr>
                          <td>7:30 am</td>
                          <td>$ 10.00</td>
                          <td>$ 20</td>
                          <td>20</td>
                          <td class="text-center"><button type="button" class="btn btn-danger btn-xs" >Eliminar</button></td>
                        </tr>
                        <tr>
                          <td>7:30 am</td>
                          <td>$ 10.00</td>
                          <td>$ 20</td>
                          <td>4</td>
                          <td class="text-center"><button type="button" class="btn btn-danger btn-xs" >Eliminar</button></td>
                        </tr>
                        <tr>
                          <td>7:30 am</td>
                          <td>$ 10.00</td>
                          <td>$ 20</td>
                          <td>13</td>
                          <td class="text-center"><button type="button" class="btn btn-danger btn-xs" >Eliminar</button></td>
                        </tr>
                      </tbody>
                     </table>
                  </div> 
                </div>  <!--en row detalles -->                        
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