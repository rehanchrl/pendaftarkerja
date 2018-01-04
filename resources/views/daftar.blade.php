@extends('template')
@section('contentwebsite')
  <div class="well well-lg">
    <div class="container">
      <h2>Daftar Kerja</h2>
      <span>Halaman untuk melakukan pendaftaran kerja.</span>
    </div>
  </div>

  <div class="container">
      <div class="alert alert-info">
        <i class="glyphicon glyphicon-info-sign"></i>
        silahkan isi data berikut sesuai dengan data diri untuk kami promosikan dalam mencari kerja.
      </div>
      <div class="panel panel-primary">
        <div class="panel-heading">
          Form data pekerja
        </div>
        <div class="panel-body">
          @if(isset($status))
          <div class="alert alert-<?php echo $status; ?> ">
            <?php echo $message; ?>
          </div>
          @endif
          <form method="post">
            {!! csrf_field() !!}
            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <label for="nama">Nama Lengkap:</label>
                  <input type="text" class="form-control" id="nama" name="nama" required>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label for="email">email :</label>
                  <input type="email" class="form-control" id="email" name="email" required>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-12">
                <div class="form-group">
                  <label for="pekerjaan">Pekerjaan yang diinginkan :</label>
                  <input type="text" class="form-control" id="pekerjaan" name="pekerjaan" placeholder="Apabila lebih dari satu pisahkan dengan koma (,)" required>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-12">
                <div class="form-group">
                  <label for="alamat">Alamat :</label>
                  <textarea class="form-control" id="alamat" name="alamat" required rows="4"></textarea>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-12">
                <div class="form-group">
                  <label for="resume">Resume/Tentang anda :</label>
                  <textarea class="form-control" id="resume" name="resume" required rows="8"></textarea>
                </div>
              </div>
            </div>

            <button type="submit" name="submit" class="btn btn-success btn-lg"><i class="glyphicon glyphicon-send"></i> Submit</button>
            <button type="reset" class="btn btn-danger btn-lg">Reset</button>
          </form>
        </div>
      </div>
  </div>
  @endsection
