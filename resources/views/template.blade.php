<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Website Pencari Kerja</title>
    <link rel="stylesheet" type="text/css" href="{{ url("bootstrap/css/bootstrap.min.css") }}">
    <script type="text/javascript" src="{{ url("bootstrap/js/jquery-3.2.1.min.js")}}"></script>
    <script type="text/javascript" src="{{ url("bootstrap/js/bootstrap.min.js")}}"></script>
  </head>
  <body>
    <nav class="navbar navbar-fixed-top navbar-inverse">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="{{url("")}}">Pencari Kerja</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li class="{{ Request::is('/') ? 'active' : '' }}"><a href="{{url("")}}">Home</a></li>
            <li class="{{ Request::is('daftar') ? 'active' : '' }}"><a href="{{url("daftar")}}">Daftar Kerja</a></li>
            <li class="{{ Request::is('pendaftarkerja') ? 'active' : '' }}"><a href="{{url("pendaftarkerja")}}">Pendaftar Kerja</a></li>
            <li class="{{ Request::is('tentang') ? 'active' : '' }}"><a href="{{url("tentang")}}">Tentang</a></li>
            <li class="{{ Request::is('contact') ? 'active' : '' }}"><a href="{{url("contact")}}">Contact</a></li>
          </ul>
        </div>
      </div>
    </nav>
    <br>
    <br>
    @section('contentwebsite')
    @show
    <footer>
      <div class="container">
        <hr>
        <p class="pull-right"><a href="#">Back To Top</a></p>
        <p>&copy; Copyright 2018 <a href="rehanchrl.net" target="_blank">rehanchrl.net</a></p>
      </div>
    </footer>
  </body>
</html>
