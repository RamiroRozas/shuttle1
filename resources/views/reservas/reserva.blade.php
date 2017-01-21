@extends('master')
@section('content') 

@include('layouts.header') 
<div class="container-fluid">
<div class="row">
<sidebar class="col-md-2 sidebarA">
       @include('administrador.sidebarAdmin')      
</sidebar>
  <section class="col-md-10 ContentMantenimiento">
      <div class="row panel-body"> 
         <h3>Realizar una reserva</h3>        
        <div class="col-md-3">
          <label for="hoteles">Elija una Ciudad</label>
          <select name="" class="form-control form-inline">
             <option value="Todos" selected>-- Ciudad --</option>
             <option value="Hostal">Cusco</option>
             <option value="Hotel1">Lima</option>
             <option value="Hotel2">Puno</option>
             <option value="Hotel3">Arequipa</option>
             <option value="Hotel4">Tacna</option>
             <option value="Hotel5">Ayacucho</option>
          </select>
        </div>  
        <div class="col-md-3">
          <label for="hoteles">Elija Shuttle</label>
          <select name="" class="form-control form-inline">
             <option value="Todos" selected>-- Shuttle --</option>
             <option value="Hostal">Cusco - Ollanta</option>
             <option value="Hotel1">Poroy - Ollanta</option>
             <option value="Hotel2">Aeropuerto - Hotel</option>
             <option value="Hotel3">Ollanta - Cusco</option>
             <option value="Hotel4">Hotel - Aeropuerto</option>
             <option value="Hotel5">hotel - Ollanta</option>
          </select>
        </div>
        <div class="col-md-3">
            <label for="fecha">Fecha</label>
            <input type="text" class="form-control" id="fecha" placeholder="Fecha">
        </div>
        <div class="col-md-1">
            <label for="fecha">Num Pax</label>
            <input type="text" class="form-control" id="fecha">
        </div>       
         <div class="col-md-2">
            <br>
            <button type="button" class="btn btn-success" data-toggle="modal" data-target=".bs-example-modal-lg">Buscar Disponibilidad</button>          
        </div>
      </div>
      <div class="box clearfix">
          <table class="table table-bordered table-hover">
            <thead>
              <tr> 
                <th>Seleccionar</th>                         
                <th>Horarios</th>
                <th>Precio Niño</th>
                <th>Precio Adulto</th>
                <th>Disponibilidad</th>                
              </tr>
            </thead>
            <tbody>
              <tr>
                <td class="text-center"><input type="radio" name="optradio" data-toggle="modal" data-target=".bs-example-modal-lg"></td>
                <td>7:30 am</td>
                <td>$ 10.00</td>
                <td>$ 20</td>
                <td>15</td>                
              </tr>
              <tr>
                <td class="text-center"><input type="radio" name="optradio" data-toggle="modal" data-target=".bs-example-modal-lg"></td>
                <td>7:30 am</td>
                <td>$ 10.00</td>
                <td>$ 20</td>
                <td>20</td>                
              </tr>
              <tr>
                <td class="text-center"><input type="radio" name="optradio" data-toggle="modal" data-target=".bs-example-modal-lg"></td>
                <td>7:30 am</td>
                <td>$ 10.00</td>
                <td>$ 20</td>
                <td>4</td>                
              </tr>
              <tr>
                <td class="text-center"><input type="radio" name="optradio" data-toggle="modal" data-target=".bs-example-modal-lg"></td> 
                <td>7:30 am</td>
                <td>$ 10.00</td>
                <td>$ 20</td>
                <td>13</td>                
              </tr>
            </tbody>
           </table>
      </div>
     <!-- modal agregar nuevo y modificar -->
      <div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
        <div class="modal-dialog modal-lg" role="document">
          <div class="modal-content">
          <div class="panel-body">
             <form class="">
                <div class="row"><!-- row detalles-->
                   <div class="col-md-6">
                      <label for="hoteles">Elija inicio de shuttle</label>
                      <select name="" class="form-control form-inline">
                         <option value="Todos" selected>-- inicio --</option>
                         <option value="Hostal">Hostal Inkas Guest House</option>
                         <option value="Hotel1">Hostal Monasterio del Inka</option>
                         <option value="Hotel2">Marriot hotel</option>
                         <option value="Hotel3">San Agustin Hotel</option>
                         <option value="Hotel4">Hotel Libertador</option>
                         <option value="Hotel5">hostal Limacpanpa</option>
                      </select>
                    </div>
                   <div class="col-md-6">
                      <label for="hoteles">Elija destino de shuttle</label>
                      <select name="" class="form-control form-inline">
                         <option value="Todos" selected>-- Fin --</option>
                         <option value="Hostal">estacion de tren poroy</option>
                         <option value="Hotel1">Estacion de tren Ollanta</option>
                         <option value="Hotel2">Estacion de tren Pachar</option>
                         <option value="Hotel3">Estacion de tren Cusco</option>
                      </select>
                    </div>                
                </div> 
                <div class="col-md-12">
                    <div class="panel">                      
                      <div class="panel-body">        
                          <button type="button" class="btn btn-success" data-toggle="modal" data-target=".bs-example-modal-lg">Agregar</button>
                      </div>  
                    </div>
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