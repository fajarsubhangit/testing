var id;

$(document).ready(function() {
  //dataTables untuk table tabel.php
    $("#table-view").DataTable();

  //sembunyikan beberapa pesan
  $("#pesan-sukses,#pesan-error,#loading-simpan,#loading-ubah").hide();

  //ketika tombol tambah data di klik
  $("#tombol-tambah-data").click(function() {
    $("#modal-title").html("Form Tambah Data");
    $("#tombol-simpan").show();
    $("#tombol-ubah").hide();

  }) // <== tombol tambah data end

  //ketika tombol simpan di klik
  $("#tombol-simpan").click(function() {
    //ambil semua value dari form tambah
    var data = $("#form-tambah").serialize();

    $.ajax({
      url: "siswa/simpan",
      data: data,
      dataType: "json",
      method: "POST",
      beforeSend: function() {
        $("#loading-simpan").show();
      },
      success: function(msg) {
        if(msg.status === "sukses") {
          $("#loading-simpan").hide();
          $("#pesan-sukses").html(msg.pesan);
          $("#pesan-sukses").addClass("container alert alert-success mt-3");
          $("#pesan-sukses").fadeIn().delay(10000).fadeOut();

          $(".modal").hide();
          $(".modal-backdrop").hide();
          $("#view").html(msg.html);
          $("#form-tambah")[0].reset();
          $("#table-view").DataTable();
        }else {
          $("#loading-simpan").hide();
          $("#pesan-error").show();
          $("#pesan-error").html(msg.error);
        }
      }
    });

  });

  //ketika tombol edit di view.php di klik
  $("#table-view").on("click","#tombol-edit",function() {
    $("#tombol-simpan").hide();
    $("#tombol-ubah").show();
    $("#modal-title").html("Form Ubah Data");

    id = $(this).data("id");

    //mencari tag tr terdekat
    var tr = $(this).closest("tr");
    var nis = tr.find(".nis-value").val();
    var nama = $(".nama-value").val();
    var jenkel = tr.find(".jenis_kelamin_value").val();
    var telp   = tr.find(".telp-value").val();
    var alamat = tr.find(".alamat-value").val();
    console.log(jenkel);
    $("#nis").val(nis);
    $("#nama").val(nama);
    $("#jenis_kelamin").val(jenkel);
    $("#input_telp").val(telp);
    $("#alamat").val(alamat);
  });

  //ketika tombol ubah di klik maka jalankan ajax
  


})
