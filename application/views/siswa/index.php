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
  <div id="pesan-sukses"></div>

  <!-- Menampilkan tabel dari view.php -->
  <div id="view" class="container-fluid table-responsive mt-3">
    <?php
    $this->load->view("siswa/tabel",$tabel);
     ?>
  </div>

  <!-- Modal FORM tambah data dan ubah data -->
  <div class="modal fade" id="form" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">
            <span id="modal-title"></span>
          </h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>

        </div>

        <div class="modal-body">
          <div id="pesan-error" class="alert alert-danger alert-dismissible fade show" role="alert">

          </div>
          <form method="post" id="form-tambah">
          <!-- NIS -->
          <div class="form-group">
            <label for="nis">NIS</label>
            <input type="text" name="input_nis" class="form-control form-control-sm"  id="nis" placeholder="NIS">
          </div>

          <!-- NAMA -->
          <div class="form-group">
            <label for="nama">NAMA</label>
            <input type="text" name="input_nama" class="form-control form-control-sm"  id="nama" placeholder="Nama">
          </div>

          <!-- Jenis Kelamin -->
          <div class="form-group">
            <label>JENIS KELAMIN</label>
            <select name="input_jenis_kelamin" class="form-control form-control-sm" id="jenis_kelamin">
              <option value="">-- Jenis Kelamin --</option>
              <option value="Laki-Laki">Laki-Laki</option>
              <option value="Perempuan">Perempuan</option>
            </select>
          </div>

          <!-- Telp -->
          <div class="form-group">
            <label for="input_telp">TELP</label>
            <input type="text" name="input_telp" class="form-control form-control-sm" id="input_telp" placeholder="No Telephone">
          </div>

         <!-- alamat -->
         <div class="form-group">
           <label for="alamat">Alamat</label>
           <textarea name="input_alamat" class="form-control" id="alamat" placeholder="Alamat"></textarea>
         </div>
       </form>
        </div>
        <div class="modal-footer">
          <!-- Loading Data Ketika di simpan -->
          <div id="loading-simpan">
            <strong>Sedang menyimpan....</strong>
            <img src="assets/loading.gif" alt="loading">
          </div>

          <!-- Loading Data ketika di ubah -->
          <div id="loading-ubah">
            <strong>Sedang diubah....</strong>
            <img src="assets/loading.gif" alt="loading">
          </div>

          <!-- tombol simpan -->
          <button type="button" class="btn btn-primary btn-sm" id="tombol-simpan">Simpan</button>

          <!-- tombol ubah -->
          <button type="button" class="btn btn-primary btn-sm" id="tombol-ubah">Ubah</button>

          <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">Close</button>

        </div>
      </div>
    </div>
  </div>

  <!-- Modal untuk delete data -->
  <!-- Modal delete -->
<div class="modal fade" id="delete-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">
          <span id="modal-title-delete"></span>
        </h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div id="pesan-error" class="alert alert-danger alert-dismissible fade show" role="alert"></div>

        Apakah anda yakin menghapus data ini ?
      </div>
      <div class="modal-footer">
        <!-- Loading Data ketika di hapus -->
        <div id="loading-hapus">
          <strong>Sedang dihapus....</strong>
          <img src="assets/loading.gif" alt="loading">
        </div>
        <button type="button" id="hapus" class="btn btn-danger">Hapus</button>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

  <!-- Optional JavaScript -->
  <script src="assets/js/jquery-3.4.1.min.js"></script>
  <script src="assets/datatables/js/jquery.dataTables.min.js"></script>
  <script src="assets/datatables/js/dataTables.bootstrap4.min.js"></script>
  <script src="assets/js/bootstrap.min.js"></script>
  <script src="assets/js/custom.js"></script>
</body>
</html>
