<?php
class Siswa_model extends CI_Model {
  var $table = "siswa";

  public function get_all() {
    $this->db->order_by("id","desc");
    return $this->db->get($this->table)->result();
  }

  //ubah data
  public function update_data($id,$data) {
    $this->db->where("id",$id);
    $this->db->update($this->table,$data);
  }

  //input data
  public function insert($data) {
    $this->db->insert($this->table,$data);
  }

  //hapus data
  public function delete_data($id) {
    $this->db->where("id",$id);
    $this->db->delete($this->table);
  }
}
 ?>
