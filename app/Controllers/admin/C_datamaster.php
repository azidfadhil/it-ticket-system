<?php

namespace App\Controllers\admin;

use App\Controllers\BaseController;
use App\Models\M_all;
use App\Models\M_datamaster;

class C_datamaster extends BaseController {
  function __construct() {
    $this->M_all = new M_all;
    $this->M_datamaster = new M_datamaster;
  }
  public function index() {
    $data = [
      'page_title' => 'Data Master',
      'is_active' => 'datamaster',
      'kategori_tiket' => $this->M_datamaster->getAllData('tm_kat_tiket'),
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
  public function checkavailability() {
    $type = $this->request->getVar('type');
    $data = $this->request->getPost('data');

    if ($type === 'kategori_tiket') {
      return $this->checkKategoriTiket($data);
    }
  }
  public function savedata() {
    $type = $this->request->getVar('type');
    $data = $this->request->getPost();

    if ($type === 'kategori_tiket') {
      return $this->saveKategoriTiket($data);
    }
  }
  /**
   * Private Function
   */
  private function checkKategoriTiket($data) {
    $result = $this->M_datamaster->checkavailability('tm_kat_tiket', 'e_nama_kat_tiket', $data);
    if ($result) {
      return $this->response->setJSON([
        'status' => false,
        'message' => 'Kategori tiket sudah ada.'
      ]);
    } else {
      return $this->response->setJSON([
        'status' => true,
        'message' => 'Kategori tiket bisa digunakan.'
      ]);
    }
  }
  private function saveKategoriTiket($data) {
    $send = $this->M_datamaster->savedata('tm_kat_tiket', $data);
    if ($send) {
      $data_log = [
        'e_ket_log' => 'Pembuatan Kategori Tiket Baru',
        'i_data_log' => $send
      ];
      $this->M_all->sendLog($data_log);
      return $this->response->setJSON([
        'status' => true,
        'message' => 'Kategori tiket berhasil dibuat.'
      ]);
    } else {
      return $this->response->setJSON([
        'status' => false,
        'message' => 'Kategori tiket gagal dibuat.'
      ]);
    }
  }
}