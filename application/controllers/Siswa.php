<?php
class Siswa extends CI_Controller {
  public function __construct() {
    parent::__construct();

    $this->load->model("Siswa_model");
  }

  public function index() {
    
    $this->load->view("siswa/index");
  }

}
 ?>
