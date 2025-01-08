<?php

namespace App\Models;

use CodeIgniter\Model;

class M_datamaster extends Model {
  function __construct() {
    $this->db = db_connect();
  }
  public function getAllData($table) {
    $query = $this->db->table($table)->orderBy('e_nama_kat_tiket', 'ASC')->get();
    return $query->getResult();
  }
  public function checkavailability($table, $column, $data) {
    $query = $this->db->table($table)
                      ->where($column, $data)
                      ->get();
    return $query->getResult();
  }
  public function savedata($table, $data) {
    $query = $this->db->table($table)->insert($data);
    return $result = $query ? $this->db->insertID() : false;
  }
  public function updatedata($table, $column, $id, $data) {
    $query = $this->db->table($table)->where($column, $id)->update($data);
    return $query;
  }
}