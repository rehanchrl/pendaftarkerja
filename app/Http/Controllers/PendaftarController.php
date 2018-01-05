<?php

namespace App\Http\Controllers;
use App\PendaftarModel;
use Illuminate\Http\Request;

class PendaftarController extends Controller
{
    public function index()
    {
      $data = array('pendaftar' => PendaftarModel::all() );
      return view('pendaftar', $data);
    }
}
