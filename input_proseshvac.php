<?php
// memanggil file koneksi.php untuk melakukan koneksi database
include 'koneksi.php';

// mengecek apakah tombol input dari form telah diklik
if (isset($_POST['input'])) {

	// membuat variabel untuk menampung data dari form
	$kode_asset = $_POST['kode_asset'];				
  $nama_asset = $_POST['nama_asset'];
  $kapasitas = (float) $_POST['kapasitas'];
  $type = $_POST['type'];
	$tanggal = $_POST['tanggal'];

  // jalankan query INSERT untuk menambah data ke database
  $query = "INSERT INTO hvac VALUES (NULL, '$kode_asset', '$nama_asset', '$type','$kapasitas','$tanggal')";
  $result = mysqli_query($link, $query);
  // periska query apakah ada error
  if(!$result){
      die ("Query gagal dijalankan: ".mysqli_errno($link).
           " - ".mysqli_error($link));
  }
}

// melakukan redirect (mengalihkan) ke halaman index.php
header("location:dashboardhvac.php");
?>
