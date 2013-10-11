@extends('layout.main')

@section('content')
<div class='row'>
  <div class='col-md-12'>
    <h1 class='page-heading'>Calendar</h1>
    <p>
      Google Calendar is pretty awesome. You can create reminders for events, and add the events to your own calendars.
      We hope that you'll take advantage of this by using our Google Calendar alongside yours, so you'll know when all
      of our fun activities are.
    </p>
    <hr>
    <iframe src="http://www.google.com/calendar/embed?mode=AGENDA&src=progteam%40cs.ship.edu&ctz=America/New_York"
     style="border: 0; width:100%" 
     height="600" 
     frameborder="0" 
     scrolling="no">
    </iframe>
  </div>
</div>
@stop