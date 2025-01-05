<?php

namespace App\Controllers\admin;

use App\Controllers\BaseController;

class C_dashboard extends BaseController {
  public function index() {
    return redirect()->to('admin/beranda');
  }
  public function beranda() {
    $data = [
      'page_title' => 'Beranda',
      'is_active' => 'beranda'
    ];

    return view('_partials/head', $data)
          .view('_partials/admin/topbar')
          .view('admin/V_dashboard')
          .view('_partials/foot');
  }
}