<?php
class Siswa extends CI_Controller {
  public function __construct() {
    parent::__construct();

    $this->load->model("Siswa_model");
  }

  public function index() {
    $this->data["tabel"] = $this->Siswa_model->get_all();
    $this->load->view("siswa/index",$this->data);
  }

}
 ?>
