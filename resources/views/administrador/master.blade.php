 @extends('master')
 @section('links')
 <link rel="stylesheet" href="{{URL::asset('assets/css/fullcalendar.min.css')}}">
 <link rel="stylesheet" href="{{URL::asset('assets/css/fullcalendar.print.css')}}" media="print">
 @stop
 @section('scripts')
 <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.11.2/moment.min.js"></script>
 <script src="{{URL::asset('assets/js/fullcalendar.min.js')}}"></script> 
 @stop