<?php

namespace App\Models;

use CodeIgniter\Model;

class M_datamaster extends Model {
  function __construct() {
    $this->db = db_connect();
  }
  public function checkavailability($table, $column, $data) {
    $query = $this->db->table($table)
                      ->where($column, $data)
                      ->get();
    return $query->getResult();
  }
}