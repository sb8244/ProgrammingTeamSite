@extends('layout.main')

@section('content')
<div class="row">
  <div class="col-lg-7">
    <img class="img-responsive" src="images/logo.png"><!-- take out img-rounded if you don't want the rounded corners on the image -->
  </div>
  <div class="col-lg-5">
    <h1>Welcome to The Team!</h1>
    <p>Shippensburg's Programming Team is a club where students can come together to work on and solve programming problems.</p>
    <p>There are even competitions where the awesome skills learned in programming team can be applied. Anyone can join and we even
      welcome other majors such as Math and MIS. Just come with a desire to solve problems or write code!</p>
    <p>Keep an eye on the <a href="#">important dates</a>.</p>

    <a class="btn btn-primary btn-lg" target="_blank" href="mailto:progteam@cs.ship.edu?subject=FROM+WEB:+add+email&body=Add+me+to+the+email+list">
      Join the Email List!
    </a>
    <a class="btn btn-default btn-lg" target="_blank" href="mailto:progteam@cs.ship.edu?subject=Web+Contact">
      Email Us!
    </a>
  </div>
</div>

<hr>

<div class="row">
  <div class="col-lg-12">
    <div class="well text-center">
      <strong>We meet every week on Friday from 2pm - 3:30pm and Wednesday from 3pm-4:30pm in MCT 165.</strong>
    </div>
  </div>
</div>

<div class="row">
  <div class="col-lg-4">
    <h2>When and Where?</h2>
    <p>There is a single meeting every week on Friday from 2pm - 3:30pm. The meeting will be in MCT 165 and all programming team members will be present. There is
      not a "junior" or "senior" team; everyone works together!</p>
    <a class="btn btn-primary" href="{{ url('/about') }}">More Info</a>
  </div>
  <div class="col-lg-4">
    <h2>Competitions</h2>
    <p>There are a lot of opportunities for students to test out their skills in competitions! There are local, online, and even worldwide competitions. Some are
      low key and low pressure, and others have lots of future opportunities attached to wins.</p>
    <a class="btn btn-primary" href="{{ url('/competitions') }}">More Info</a>
  </div>
  <div class="col-lg-4">
    <h2>Resources</h2>
    <p>Programming problems can be daunting at first. Luckily for you, other people have compiled awesome resources across the internet, and they're free! You can
      find ebooks, problem judging sites, and even sites which host daily and weekly problems.</p>
    <a class="btn btn-primary" href="{{ url('resources') }}">More Info</a>
  </div>
</div>
@stop
