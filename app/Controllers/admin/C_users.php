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
  public function tambahrequester() {
    $data = [
      'page_title' => 'Tambah Requester',
      'is_active' => 'users',
    ];

    return view('_partials/head', $data)
          .view('_partials/admin/topbar') 
          .view('admin/users/V_tambah_requester')
          .view('_partials/foot');
  }
  public function editrequester() {
    $data = [
      'page_title' => 'Edit Requester',
      'is_active' => 'users',
    ];

    return view('_partials/head', $data)
          .view('_partials/admin/topbar') 
          .view('admin/users/V_edit_requester')
          .view('_partials/foot');
  }
}