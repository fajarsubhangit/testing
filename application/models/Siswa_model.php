<?php
class Siswa_model extends CI_Model {
  var $table = "siswa";

  public function get_all() {
    return $this->db->get($this->table)->result();
  }
}
 ?>
