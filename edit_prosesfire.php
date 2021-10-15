<?php
// mengecek apakah tombol edit telah diklik
if (isset($_POST['edit'])) {
  // buat koneksi dengan database
  include("koneksi.php");
	
  // membuat variabel untuk menampung data dari form edit
  $id = $_POST['id'];
  $kode_asset = $_POST['kode_asset'];
  $nama_asset = $_POST['nama_asset'];
  $kapasitas = (float) $_POST['kapasitas'];
  $type = $_POST['type'];
	$tanggal = $_POST['tanggal'];
	 	
  //buat dan jalankan query UPDATE
  $query  = "UPDATE fire SET ";
  $query .= "kode_asset = '$kode_asset', nama_asset = '$nama_asset', ";
  $query .= "kapasitas='$kapasitas', ";
  $query .= "type = '$type' ,tanggal = '$tanggal' ";
	
	$query .= "WHERE id = '$id' ";

  $result = mysqli_query($link, $query);

  //periksa hasil query apakah ada error
  if(!$result) {
    die ("Query gagal dijalankan: ".mysqli_errno($link).
       " - ".mysqli_error($link));
  }
}

//lakukan redirect ke halaman index.php
header("location:dashboardfire.php");


?>
