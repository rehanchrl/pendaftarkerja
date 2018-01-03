@extends('template')
@section('contentwebsite')
  <div class="jumbotron">
    <div class="container">
      <h1>Selamat Datang di Website Pencari Kerja</h1>
      <p>Mencari kerja tidak susah, kami akan membantu anda. Caranya dengan menekan tombol daftar kerja, maka data diri anda akan kami promosikan untuk mendapatkan pekerjaan</p>
      <p>
        <a class="btn btn-success btn-lg" href="{{url("index.php/daftar")}}" role="button"><i class="glyphicon glyphicon-check"></i> Daftar Kerja</a>
        <a class="btn btn-primary btn-lg" href="{{url("index.php/pendaftarkerja")}}" role="button"><i class="glyphicon glyphicon-briefcase"></i> Lihat Pendaftar Kerja</a>
      </p>
    </div>
  </div>

  <div class="container">
    <h3>Random pendaftar kerja</h3>
    <hr>
    <div class="row">
      <div class="col-md-6">
        <table class="well table table-bordered">
            <tbody>
              <tr>
                <td rowspan="4" width="1">
                  <img class="img-circle" src="people.jpg" width="140" height="140">
                </td>
                <td width="100">Nama</td>
                <td width="1">:</td>
                <td>Rehanchrl</td>
              </tr>
              <tr>
                <td>Email</td>
                <td width="1">:</td>
                <td>Rehanchrl@rehanchrl.net</td>
              </tr>
              <tr>
                <td>pekerjaan</td>
                <td width="1">:</td>
                <td>Web Developer</td>
              </tr>
              <tr>
                <td colspan="3">
                  <a href="#" class="btn btn-danger btn-sm"><i class="glyphicon glyphicon-search"></i> Detail Pekerja</a>
                </td>
              </tr>
            </tbody>
        </table>
      </div>

      <div class="col-md-6">
        <table class="well table table-bordered">
            <tbody>
              <tr>
                <td rowspan="4" width="1">
                  <img class="img-circle" src="people.jpg" width="140" height="140">
                </td>
                <td width="100">Nama</td>
                <td width="1">:</td>
                <td>rehan</td>
              </tr>
              <tr>
                <td>Email</td>
                <td width="1">:</td>
                <td>Rehan@rehanchrl.net</td>
              </tr>
              <tr>
                <td>pekerjaan</td>
                <td width="1">:</td>
                <td>Web Designer</td>
              </tr>
              <tr>
                <td colspan="3">
                  <a href="#" class="btn btn-danger btn-sm"><i class="glyphicon glyphicon-search"></i> Detail Pekerja</a>
                </td>
              </tr>
            </tbody>
        </table>
      </div>
    </div>
    <a class="btn btn-primary" href="{{url("pendaftarkerja")}}"><i class="glyphicon glyphicon-tasks"></i> Tampilkan Semua</a>
  </div>
  @endsection