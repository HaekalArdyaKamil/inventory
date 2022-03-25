$(function () {
<<<<<<< HEAD
    let arrow = document.querySelectorAll(".arrow");
  for (var i = 0; i < arrow.length; i++) {
    arrow[i].addEventListener("click", (e)=>{
  let arrowParent = e.target.parentElement.parentElement;//selecting main parent of arrow
  arrowParent.classList.toggle("showMenu");
    });
  }

  let sidebar = document.querySelector(".sidebar");
  let sidebarBtn = document.querySelector(".bx-menu");
  console.log(sidebarBtn);
  sidebarBtn.addEventListener("click", ()=>{
    sidebar.classList.toggle("close");
  });


=======
>>>>>>> 708bb263d0f67993cdbc6faab5a59d738b27468b
  const baseurl = window.location.origin;
  $(".btn-add").on("click", function () {
    $("#judulModal").html("Tambah Data Barang");
    $(".float-end button[type=submit]").html("Tambah Data");
  });
  $(".ubah").on("click", function () {
    $("#judulModal").html("Ubah Data Barang");
    $(".float-end button[type=submit]").html("Ubah Data");
    $(".modal-body form").attr("action", baseurl + "/dashboard/ubah");
    const id = $(this).data("id");
    $.ajax({
      url: baseurl + "/dashboard/getubah",
      data: { id: id },
      method: "post",
      dataType: "json",
      success: function (data) {
        $("#id_barang").val(data.id_barang);
        $("#nama").val(data.nama_barang);
        $("#spesifikasi").val(data.spesifikasi);
        $("#lokasi").val(data.lokasi);
        $("#kondisi").val(data.kondisi);
        $("#jumlah").val(data.jumlah_barang);
        $("#sumber").val(data.sumber_dana);
      },
    });
  });
  //modal detail
  $(".detail").on("click", function () {
    const id = $(this).data("id");
    $.ajax({
      url: baseurl + "/dashboard/getubah",
      data: { id: id },
      method: "post",
      dataType: "json",
      success: function (data) {
        $("#detail_nama").html(data.nama_barang);
        $("#detail_spesifikasi").html(data.spesifikasi);
        $("#detail_lokasi").html(data.lokasi);
        $("#detail_kondisi").html(data.kondisi);
        $("#detail_jumlah").html(data.jumlah_barang);
        $("#detail_sumber").html(data.sumber_dana);
      },
    });
  });
});
