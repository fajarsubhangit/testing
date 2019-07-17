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

  //simpan data
  public function simpan() {
    sleep("3");
    if($this->validation() === true) {
      $data = array (
        "nis"  => $this->input->post("input_nis"),
        "nama" => $this->input->post("input_nama"),
        "jenis_kelamin" => $this->input->post("input_jenis_kelamin"),
        "telp" => $this->input->post("input_telp"),
        "alamat" => $this->input->post("input_alamat")
      );

      $this->Siswa_model->insert($data);

      //ambil data untuk menampilkan data table
      $this->data["tabel"] = $this->Siswa_model->get_all();
      $html  = $this->load->view("siswa/tabel",$this->data,true);

      $response = array (
        "status" => "sukses",
        "pesan"  => "Data berhasil di simpan",
        "html"   => $html
      );

    }else {
      $response = array (
        "status" => "gagal",
        "pesan"  => "Data gagal di simpan",
        "error"   => validation_errors()
      );
    }

    echo json_encode($response,JSON_PRETTY_PRINT);
  }

  //validation
  public function validation() {
    $this->form_validation->set_rules("input_nis","Nis","required|numeric");
    $this->form_validation->set_rules("input_nama","Nama","required");
    $this->form_validation->set_rules("input_jenis_kelamin","Jenis Kelamin","required");
    $this->form_validation->set_rules("input_telp","Telp","required|numeric");
    $this->form_validation->set_rules("input_alamat","Alamat","required");

    $this->form_validation->set_message("required","{field} wajib di isi");
    $this->form_validation->set_message("numeric","{field} wajib di isi angka");

    if($this->form_validation->run()) {
      return true;
    }
    else {
      return false;
    }
  }


}
 ?>
