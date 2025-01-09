<?php

namespace App\Models;

use CodeIgniter\Model;

class M_all extends Model {
  function __construct() {
    $this->db = db_connect();
  }
  public function getAllData($table, $column, $order) {
    $query = $this->db->table($table)->orderBy($column, $order)->get();
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
  public function sendLog($data) {
    $prefix_id = 'log/' . date('Ymd');
    $today_log = $this->db->table('tr_logs')->like('i_log', $prefix_id)->countAllResults();
    $id = $prefix_id . '-' . ($today_log + 1);
    $data['i_log'] = $id;

    $this->db->table('tr_logs')->insert($data);
  }
}