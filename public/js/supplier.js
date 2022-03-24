$(function () {
  const baseurl = window.location.origin;
  $(".btn-add").on("click", function () {
    $("#judulModal").html("Tambah Data Supplier");
    $(".float-end button[type=submit]").html("Tambah Data");
  });
  $(".ubah").on("click", function () {
    $("#judulModal").html("Ubah Data Supplier");
    $(".float-end button[type=submit]").html("Ubah Data");
    $(".modal-body form").attr("action", baseurl + "/supplier/ubah");
    const id = $(this).data("id");
    $.ajax({
      url: baseurl + "/supplier/getubah",
      data: { id: id },
      method: "post",
      dataType: "json",
      success: function (data) {
        $("#id_barang").val(data.id_supplier);
        $("#nama").val(data.nama_supplier);
        $("#spesifikasi").val(data.alamat_supplier);
        $("#lokasi").val(data.telp_supplier);
      },
    });
  });
  //modal detail
  $(".detail").on("click", function () {
    const id = $(this).data("id");
    $.ajax({
      url: baseurl + "/supplier/getubah",
      data: { id: id },
      method: "post",
      dataType: "json",
      success: function (data) {
        $(".ganti").attr("src", baseurl + "/img/" + data.foto);
        $("#detail_nama").html(data.nama_supplier);
        $("#detail_spesifikasi").html(data.alamat_supplier);
        $("#detail_lokasi").html(data.telp_supplier);
      },
    });
  });
});
