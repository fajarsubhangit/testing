<div class="container-fluid table-responsive">
<table id="table-view" class="table table-bordered table-hover table-sm">
  <thead class="text-center">
    <tr>
      <th scope="col">NO</th>
      <th scope="col">NIS</th>
      <th scope="col">NAMA</th>
      <th scope="col">JENIS KELAMIN</th>
      <th scope="col">TELP</th>
      <th scope="col">ALAMAT</th>
      <th class="text-center">
        <i class="fas fa-cogs"></i>
      </th>
    </tr>
  </thead>
  <tbody>
    <?php
    $no = 0;
    foreach($tabel as $data) {
      $no++;
      ?>
      <tr>
        <td class="text-center"><?php echo $no ?></td>
        <td class="text-center"><?php echo $data->nis ?></td>
        <td><?php echo $data->nama ?></td>
        <td class="text-center"><?php echo $data->jenis_kelamin ?></td>
        <td class="text-center"><?php echo $data->telp ?></td>
        <td class="text-center"><?php echo $data->alamat ?></td>
        <td class="text-center">
          <!-- Edit -->
          <button data-id="<?php echo $data->id ?>" data-target="#form" data-toggle="modal" id="tombol-edit" class="btn btn-primary btn-sm" title="edit">
            <i class="fas fa-pencil-alt"></i>
          </button>

          <!-- Hapus -->
          <button data-id="<?php echo $data->id ?>" data-target="#delete-modal" data-toggle="modal" id="tombol-hapus" class="btn btn-danger btn-sm" title="hapus">
            <i class="fas fa-trash"></i>
          </button>
        </td>

        <input type="hidden" class="nis-value" value="<?php echo $data->nis ?>">
        <input type="hidden" class="nama-value" value="<?php echo $data->nama ?>">
        <input type="hidden" class="jenis_kelamin-value" value="<?php echo $data->jenis_kelamin ?>">
        <input type="hidden" class="telp-value" value="<?php echo $data->telp ?>">
        <input type="hidden" class="alamat-value" value="<?php echo $data->alamat ?>">
      </tr>


      <?php
    }
    ?>
  </tbody>
</table>
</div>
<script type="text/javascript">
  $(document).ready(function() {
    $("#table-view").DataTable();
  })
</script>
