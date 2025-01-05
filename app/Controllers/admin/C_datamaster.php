<?php

namespace App\Controllers\admin;

use App\Controllers\BaseController;

class C_datamaster extends BaseController {
  public function index() {
    $data = [
      'page_title' => 'Data Master',
      'is_active' => 'datamaster'
    ];

    return view('_partials/head', $data)
          .view('_partials/admin/topbar') 
          .view('admin/datamaster/V_index')
          .view('_partials/foot');
  }
  public function tambahkattiket() {
    $data = [
      'page_title' => 'Tambah Kategori Tiket',
      'is_active' => 'datamaster'
    ];

    return view('_partials/head', $data)
          .view('_partials/admin/topbar') 
          .view('admin/datamaster/V_tambah_kat_tiket')
          .view('_partials/foot');
  }
}