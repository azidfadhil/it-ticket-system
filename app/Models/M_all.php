<?php

namespace App\Models;

use CodeIgniter\Model;

class M_all extends Model {
  function __construct() {
    $this->db = db_connect();
  }
  public function sendLog($data) {
    $prefix_id = 'log/' . date('Ymd');
    $today_log = $this->db->table('tr_logs')->like('i_log', $prefix_id)->countAllResults();
    $id = $prefix_id . '-' . ($today_log + 1);
    $data['i_log'] = $id;

    $this->db->table('tr_logs')->insert($data);
  }
}