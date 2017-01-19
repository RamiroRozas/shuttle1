 @extends('master')
 @section('links')
 <link rel="stylesheet" href="{{URL::asset('assets/css/fullcalendar.min.css')}}">
 <link rel="stylesheet" href="{{URL::asset('assets/css/fullcalendar.print.css')}}" media="print">
 @stop
 @section('scripts')  
 <script src="https://code.jquery.com/ui/1.11.4/jquery-ui.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.11.2/moment.min.js"></script>
 <script src="{{URL::asset('assets/js/fullcalendar.min.js')}}"></script> 
 <script>
 	$(document).ready(function() {

    // page is now ready, initialize the calendar...

    $('#calendar').fullCalendar({
        // put your options and callbacks here
    })
});
 </script>
 @stop