var id = "";

$(document).ready(function()
{
  //sembunyikan beberapa pesan
  $("#pesan-sukses,#pesan-error,#loading-simpan,#loading-ubah").hide();

  //ketika tombol tambah data di klik
  $("#tombol-tambah-data").click(function()
  {
    $("#modal-title").html("Form Tambah Data");
    $("#tombol-simpan").show();
    $("#tombol-ubah").hide();
    $("#form-tambah")[0].reset();
  }) // <== tombol tambah data end

  //ketika tombol simpan di klik
  $("#tombol-simpan").click(function()
  {
    //ambil semua value dari form tambah
    var data = $("#form-tambah").serialize();

    $.ajax(
      {
        url: "siswa/simpan",
        data: data,
        dataType: "json",
        method: "POST",
        beforeSend: function()
        {
          $("#loading-simpan").show();
        },
        success: function(msg) {
          if(msg.status === "sukses")
          {
            $("#loading-simpan").hide();
            $("#pesan-sukses").html(msg.pesan);
            $("#pesan-sukses").addClass("container alert alert-success mt-3");
            $("#pesan-sukses").fadeIn().delay(10000).fadeOut();

            $(".modal").hide();
            $(".modal-backdrop").hide();
            $("#table-view").html(msg.html);
          }else {
            $("#loading-simpan").hide();
            $("#pesan-error").show();
            $("#pesan-error").html(msg.error);
          }
        }
      });

    });

    //ketika tombol edit di view.php di klik
    $("#table-view").on("click","#tombol-edit",function()
    {
      $("#tombol-simpan").hide();
      $("#tombol-ubah").show();
      $("#modal-title").html("Form Ubah Data");


      //mencari tag tr terdekat
      var tr = $(this).closest("tr");
      var nis = tr.find(".nis-value").val();
      var nama = tr.find(".nama-value").val();
      var jenkel = tr.find(".jenis_kelamin_value").val();
      var telp   = tr.find(".telp-value").val();
      var alamat = tr.find(".alamat-value").val();

      id = $(this).data("id");

      $("#nis").val(nis);
      $("#nama").val(nama);
      $("#jenis_kelamin").val(jenkel);
      $("#input_telp").val(telp);
      $("#alamat").val(alamat);
    });

    //ketika tombol ubah di klik maka jalankan AJAX
    $("#tombol-ubah").click(function() {
      var data = $("#form-tambah").serialize();
    
      $.ajax({
        url: "siswa/ubah/"+id,
        data: data,
        method: "post",
        dataType: "json",
        beforeSend: function() {
            $("#loading-ubah").show();
        },
        success: function(msg) {
          if(msg.status === "sukses") {
            console.log(msg.html);
            $("#loading-ubah").hide();
            $("#pesan-sukses").html(msg.pesan);
            $("#pesan-sukses").addClass("alert alert-success")
            $("#pesan-sukses").fadeIn("slow").delay(10000).fadeOut("fast");
            $(".modal").hide();
            $(".modal-backdrop").hide();
            $("#table-view").html(msg.html);
          }
          else
          {
            $("#loading-ubah").hide();
            $("#pesan-error").show();
            $("#pesan-error").html(msg.pesan);
          }
        }
      });
    })


  })
