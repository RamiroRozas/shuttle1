@extends('administrador.master')
@section('content') 

@include('layouts.header') 
<div class="container-fluid">
<div class="row">
<sidebar class="col-md-3">
       @include('administrador.sidebarAdmin')      
</sidebar>
<section class="col-md-9">
     <img src="{{URL::asset('assets/img/traslados.png')}}" alt="traslados por realizar">
          <div class="box box-primary">
            <div class="box-body no-padding">
              <!-- THE CALENDAR -->
              <div id="calendar"></div>
            </div>
            <!-- /.box-body -->
          </div>
   </section>
</div>
</div>
@endsection