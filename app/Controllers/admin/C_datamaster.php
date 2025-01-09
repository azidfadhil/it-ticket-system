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
  /**
   * View Function
   */
  public function index() {
    $data = [
      'page_title' => 'Data Master',
      'is_active' => 'datamaster',
      'kategori_tiket' => $this->M_all->getAllData('tm_kat_tiket', 'e_nama_kat_tiket', 'ASC'),
      'divisi' => $this->M_all->getAllData('tm_divisi', 'e_nama_divisi', 'ASC'),
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
  public function tambahdivisi() {
    $data = [
      'page_title' => 'Tambah Divisi',
      'is_active' => 'datamaster'
    ];

    return view('_partials/head', $data)
          .view('_partials/admin/topbar') 
          .view('admin/datamaster/V_tambah_divisi')
          .view('_partials/foot');
  }
  public function editkattiket() {
    $id = $this->request->getVar('id');
    $data = [
      'page_title' => 'Edit Kategori Tiket',
      'is_active' => 'datamaster',
      'kategori_tiket' => $this->M_all->getDataById('tm_kat_tiket', 'i_kat_tiket', $id)
    ];

    return view('_partials/head', $data)
          .view('_partials/admin/topbar') 
          .view('admin/datamaster/V_edit_kat_tiket')
          .view('_partials/foot');
  }
  public function editdivisi() {
    $id = $this->request->getVar('id');
    $data = [
      'page_title' => 'Edit Divisi',
      'is_active' => 'datamaster',
      'divisi' => $this->M_all->getDataById('tm_divisi', 'i_divisi', $id)
    ];

    return view('_partials/head', $data)
          .view('_partials/admin/topbar') 
          .view('admin/datamaster/V_edit_divisi')
          .view('_partials/foot');
  }
  /**
   * AJAX Function
   */
  public function changestatusdata() {
    $type = $this->request->getVar('type');
    $id = $this->request->getVar('id');
    $status = $this->request->getVar('status');

    return $this->changeStatus($type, $id, $status);
  }
  public function checkavailability() {
    $type = $this->request->getVar('type');
    $data = $this->request->getPost('data');

    return $this->checkData($type, $data);
  }
  public function savedata() {
    $type = $this->request->getVar('type');
    $data = $this->request->getPost();

    return $this->savetodatabase($type, $data);
  }
  public function updatedata() {
    $type = $this->request->getVar('type');
    $id = $this->request->getVar('id');
    $data = $this->request->getPost();

    return $this->updatetodatabase($type, $id, $data);
  }
  public function deletedata() {
    $type = $this->request->getVar('type');
    $id = $this->request->getVar('id');

    return $this->deletefromdatabase($type, $id);
  }
  /**
   * Private Function
   */
  private function changeStatus($type, $id, $status) {
    if ($type === 'kategori_tiket') {
      $result = $this->M_all->updatedata('tm_kat_tiket', 'i_kat_tiket', $id, ['f_active' => $status]);
    } else if ($type === 'divisi') {
      $result = $this->M_all->updatedata('tm_divisi', 'i_divisi', $id, ['f_active' => $status]);
    }

    if (!$result) {
      return $this->response->setJSON([
        'status' => false,
        'message' => 'Gagal mengupdate data.'
      ]);
    } else {
      // $data_log = [
      //   'e_ket_log' => 'Merubah status kategori tiket',
      //   'e_table_data_log' => 'tm_kat_tiket',
      //   'i_data_log' => $id
      // ];
      // $this->M_all->sendLog($data_log);
      return $this->response->setJSON([
        'status' => true,
        'message' => 'Berhasil mengupdate data.'
      ]);
    }
  }
  private function checkData($type, $data) {
    if ($type === 'kategori_tiket') {
      $result = $this->M_datamaster->checkavailability('tm_kat_tiket', 'e_nama_kat_tiket', $data);
    } else if ($type === 'divisi') {
      $result = $this->M_datamaster->checkavailability('tm_divisi', 'e_nama_divisi', $data);
    }
    if ($result) {
      return $this->response->setJSON([
        'status' => false,
        'message' => 'Data sudah ada.'
      ]);
    } else {
      return $this->response->setJSON([
        'status' => true,
        'message' => 'Data bisa digunakan.'
      ]);
    }
  }
  private function savetodatabase($type, $data) {
    if ($type === 'kategori_tiket') {
      $table = 'tm_kat_tiket';
    } else if ($type === 'divisi') {
      $table = 'tm_divisi';
    }
    
    $result = $this->M_all->savedata($table, $data);
    if (!$result) {
      return $this->response->setJSON([
        'status' => false,
        'message' => 'Data gagal dibuat.'
      ]);
    } else {
      // $data_log = [
      //   'e_ket_log' => 'Pembuatan data baru',
      //   'e_table_data_log' => $table,
      //   'i_data_log' => $result
      // ];
      // $this->M_all->sendLog($data_log);
      return $this->response->setJSON([
        'status' => true,
        'message' => 'Data berhasil dibuat.'
      ]);
    }
  }
  private function updatetodatabase($type, $id, $data) {
    if ($type === 'kategori_tiket') {
      $table = 'tm_kat_tiket';
      $column = 'i_kat_tiket';
    } else if ($type === 'divisi') {
      $table = 'tm_divisi';
      $column = 'i_divisi';
    }

    $result = $this->M_all->updatedata($table, $column, $id, $data);
    if (!$result) {
      return $this->response->setJSON([
        'status' => false,
        'message' => 'Data gagal diperbarui.'
      ]);
    } else {
      // $data_log = [
      //   'e_ket_log' => 'Memperbarui data',
      //   'e_table_data_log' => $table,
      //   'i_data_log' => $result
      // ];
      // $this->M_all->sendLog($data_log);
      return $this->response->setJSON([
        'status' => true,
        'message' => 'Data berhasil diperbarui.'
      ]);
    }
  }
  private function deletefromdatabase($type, $id) {
    if ($type === 'kategori_tiket') {
      $table = 'tm_kat_tiket';
      $column = 'i_kat_tiket';
    } else if ($type === 'divisi') {
      $table = 'tm_divisi';
      $column = 'i_divisi';
    }

    $result = $this->M_all->deletedata($table, $column, $id);
    if (!$result) {
      return $this->response->setJSON([
        'status' => false,
        'message' => 'Data gagal dihapus.'
      ]);
    } else {
      // $data_log = [
      //   'e_ket_log' => 'Menghapus data',
      //   'e_table_data_log' => $table,
      //   'i_data_log' => $result
      // ];
      // $this->M_all->sendLog($data_log);
      return $this->response->setJSON([
        'status' => true,
        'message' => 'Data berhasil dihapus.'
      ]);
    }
  }
}