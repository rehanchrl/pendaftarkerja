@extends('template')
@section('contentwebsite')
<div class="well wel-lg">
  <div class="container">
    <h2>kontak kami</h2>
    <span>Terdapat beberapa kontak yang dapat dihubungi</span>
  </div>
</div>
<div class="container">
  <div class="row">
    <div class="col-xs-3">
      <div class="list-group">
        <a href="{{url('contact')}}" class="list-group-item"><span class="glyphicon glyphicon-phone-alt"></span>Kontak Kami</a>
        <a href="{{url('tentang')}}#tentang" class="list-group-item"><span class="glyphicon glyphicon-info-sign"></span>Tentang Website</a>
      </div>
    </div>
    <div class="col-xs-9">
      <div class="panel panel-default" id="tentang">
        <div class="panel-heading">
          <h3 style="padding : 0;  margin : 0;">Kontak Kami</h3>
        </div>
        <div class="panel-body">
          Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
