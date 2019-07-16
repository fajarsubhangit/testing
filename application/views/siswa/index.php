<!doctype html>
<html lang="en">
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/fonts/css/fontawesome.min.css">
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/fonts/css/brands.min.css">
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/fonts/css/solid.min.css">

  <!-- Datatables -->
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/datatables/css/dataTables.bootstrap4.min.css">
  <title>Data Siswa</title>
</head>
<body>
  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="#"><h5>Data Siswa</h5></a>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">

      </ul>
      <!-- tombol tambah data -->
      <button type="button" class="btn btn-success btn-sm" id="tombol-tambah-data" data-toggle="modal" data-target="#form">
        <i class="fas fa-plus"></i> Tambah Data
      </button>
    </div>
  </nav>

  <!-- PESAN SUKSES -->
  <div class="container alert alert-success mt-3"></div>

  <!-- Menampilkan tabel dari view.php -->
  <div id="view">
    <?php
    $this->load->view("siswa/tabel",$tabel);
     ?>
  </div>

  <!-- Buat modal untuk tambah dan ubah data -->

  <!-- Modal FORM tambah data dan ubah data -->
  <div class="modal fade" id="form" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
          <h5 class="modal-title" id="exampleModalLabel">
            <span id="modal-title"></span>
          </h5>
        </div>
        <div id="pesan-error" class="alert alert-danger"></div>
        <div class="modal-body">
          ...
        </div>
        <div class="modal-footer">
          <!-- Loading Data Ketika di simpan -->
          <div id="loading-simpan">
            <strong>Sedang menyimpan....</strong>
            <img src="assets/loading.gif" alt="loading">
          </div>

          <!-- Loading Data ketika di ubah -->
          <div id="loading-ubah">
            <strong>Sedang dihapus....</strong>
            <img src="assets/loading.gif" alt="loading">
          </div>

          <!-- tombol simpan -->
          <button type="button" class="btn btn-primary" id="tombol-simpan">Simpan</button>

          <!-- tombol ubah -->
          <button type="button" class="btn btn-primary" id="tombol-ubah">Ubah</button>

          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>

        </div>
      </div>
    </div>
  </div>

  <!-- Optional JavaScript -->
  <script src="assets/js/jquery-3.4.1.min.js"></script>
  <script src="assets/js/bootstrap.min.js"></script>
  <script src="assets/datatables/js/jquery.dataTables.min.js"></script>
  <script src="assets/datatables/js/dataTables.bootstrap4.min.js"></script>
  <script src="assets/js/custom.js"></script>
  <script>
  $("#table-view").DataTable();
  </script>
</body>
</html>
