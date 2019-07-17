<?php
class Siswa_model extends CI_Model {
  var $table = "siswa";

  public function get_all() {
    $this->db->order_by("id","desc");
    return $this->db->get($this->table)->result();
  }

  //input data
  public function insert($data) {
    $this->db->insert($this->table,$data);
  }
}
 ?>
