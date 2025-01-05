<?php

namespace App\Controllers\admin;

use App\Controllers\BaseController;

class C_users extends BaseController {
  public function index() {
    $data = [
      'page_title' => 'Daftar Pengguna',
      'is_active' => 'users'
    ];

    return view('_partials/head', $data)
          .view('_partials/admin/topbar') 
          .view('admin/users/V_index')
          .view('_partials/foot');
  }
  public function tambahuser() {
    $data = [
      'page_title' => 'Tambah Pengguna',
      'is_active' => 'users',
    ];

    return view('_partials/head', $data)
          .view('_partials/admin/topbar') 
          .view('admin/users/V_tambah_user')
          .view('_partials/foot');
  }
  public function editpengguna() {
    $data = [
      'page_title' => 'Edit Pengguna',
      'is_active' => 'users',
    ];

    return view('_partials/head', $data)
          .view('_partials/admin/topbar') 
          .view('admin/users/V_edit_user')
          .view('_partials/foot');
  }
}