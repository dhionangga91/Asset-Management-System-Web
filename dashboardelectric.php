<?php
  // memanggil file koneksi.php untuk melakukan koneksi database
  include '../UAS/koneksi.php';
session_start();
if(!isset($_SESSION['username'])) {
   header('location:login.php'); 
} else { 
   $username = $_SESSION['username']; 
}
?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Dashboard</title>
		<link rel="stylesheet" href="css/crudcss.css">
	<link rel="stylesheet" href="css/reset/normalize.css">
</head>

<body>
<div class="container">
  <div class="navlogo">
	  <li style="margin-top: 10px; margin-left: 10px"><img src="assets/ass2.JPG" width="250px" height="40px"> </li>	
	  <li style="float: right; margin-right: 10px; margin-top: 15px"><a href="https://plus.google.com/share?url=dashboard.php" target="_blank"><img src="assets/google-plus-logo-symbol_318-54556.jpg" width="30px" height="30px"></a></li>
	  <li style="float: right; margin-right: 10px; margin-top: 15px"><a href="http://www.twitter.com/share?url=dashboard.php" target="_blank"><img src="assets/twitter_PNG15.png" width="30px" height="30px"></a></li>
	  <li style="float: right; margin-right: 10px; margin-top: 5px"><a href="http://www.facebook.com/sharer.php?u=dashboard.php" target="_blank"><img src="assets/face.png" width="50px" height="50px"></a></li>
  </div>

  <div class="nav">
	  <ul class="main-nav">
		<li style="margin-left: 30px"><a href="dashboard.php"><h2>Dashboard</h2></a></li>
        <li><a href="dashboardhvac.php"><h2>HVAC</h2></a></li>
		<li><a href="dashboardelectric.php"><h2>Electrical</h2></a></li>
        <li><a href="dashboardplumbing.php"><h2>Plumbing</h2></a></li>
        <li><a href="dashboardfire.php"><h2>Fire Fighting</h2></a></li>
        <li style="float: right; margin-top: 10px; margin-right: 15px"><a href="logout.php"><img src="assets/logout.jpg" width="50" height="50" style="border-color:#840683; border-width: 2px; border-style: solid"></a>
        </li>
      </ul>
  </div>
	<div class="kirisidebar">
	<div class="user-section">
    <div class="user-section-inner">
       <center><img src="assets/User_Avatar_2.png" width="90" height="90"></center>
          </div>
    <div class="user-info"><strong><?php echo $username;?></strong>
		</div>
       </div>
	<div class="dashcari">
		<form action="prosescarielectric.php" method="post">
    <input type="submit" id="searchbutton" value="Search" name="Search" class="formbutton" style="background: #9F059E; color: white; padding: 5px" />
	<input type="text" id="searchquery" width="170px" name="keyword" placeholder="Search..." / style="padding: 5px">
		</form></div>
			<div class="dashmenu"><div class="gm"><img src="assets/dashboard.png" width="25px" height="23"></div>
		    <div class="am" ><a href="dashboard.php"> Dashboard</a></div></div>
	<div class="dropdown">
		<div class="mainmenubtn"><div class="gm"><img src="assets/menu.png" width="25px" height="23"></div>
		<div class="am"><a href="">Menu</a></div></div>
  	<div class="dropdown-child">
    <a href="dashboardhvac.php">HVAC </a>
    <a href="dashboardelectric.php">ELECTRICAL </a>
    <a href=dashboardplumbing.php>PLUMBING </a>
    <a href="dashboardfire.php">FIRE FIGTHING </a>
  </div>
	</div>
	  </div>
	<div class="kanansidebar">
	<div class="headerkanan" ><strong>ELECTRICAL SYSTEM</strong></div>
	<hr color=#930892>
	<div class="userinfo" style="font-family:lato"><strong>Hello !!!</strong> Welcome back <strong>
		<?php echo $username;?></strong></div>

		<h1>TABEL ASSETS ELECTRIC</h1><hr color="#930892"><br>
		<div class="contentcrud"><br>
		 <table border="1" bordercolor="#9F059E" style="margin: 0 auto; color:#9F059E ; border-style: solid">
      <tr>
     <th width="50px" bgcolor="#9F059E"><center><font color="white">No</font></center></th>
     <th width="100px" bgcolor="#9F059E"><center><font color="white">Kode Asset</font></center></th>
     <th width="200px" bgcolor="#9F059E"><center><font color="white">Nama Asset</font></center></th>
     <th width="150px" bgcolor="#9F059E"><center><font color="white">Type</font></center></th>
     <th width="100px" bgcolor="#9F059E"><center><font color="white">Kapasitas (kW)</font></center>/th>
	 <th width="100px" bgcolor="#9F059E"><center><font color="white">Manufacture Date</font></center></th>
	 <th width="100px" bgcolor="#9F059E"><center><font color="white">Action</font></center></th>
     </tr>
      <?php
      // jalankan query untuk menampilkan semua data diurutkan berdasarkan kode
      $query = "SELECT * FROM electric ORDER BY kode_asset ASC";
      $result = mysqli_query($link, $query);
      //mengecek apakah ada error ketika menjalankan query
      if(!$result){
        die ("Query Error: ".mysqli_errno($link).
           " - ".mysqli_error($link));
      }

      //buat perulangan untuk element tabel dari data electric
      $no = 1; //variabel untuk membuat nomor urut
      // hasil query akan disimpan dalam variabel $data dalam bentuk array
      // kemudian dicetak dengan perulangan while
      while($data = mysqli_fetch_assoc($result))
      {
        // mencetak / menampilkan data
        echo "<tr>";
        echo "<td><center>$no</center></td>"; //menampilkan no urut
        echo "<td><center>$data[kode_asset]</center></td>"; //menampilkan data kode
        echo "<td><center>$data[nama_asset]</center></td>"; //menampilkan data nama
        echo "<td><center>$data[type]</center></td>"; //menampilkan data type
		echo "<td><center>$data[kapasitas]</center></td>"; //menampilkan data kapasitas
		echo "<td><center>$data[tanggal]</center></td>";		
        // membuat link untuk mengedit dan menghapus data
        echo '<td><center>
          <a href="updateelectric.php?id='.$data['id'].'"><img src="../UAS/assets/images.png" width="30px" height="30px"></img> </a> 
          <a href="hapuselectric.php?id='.$data['id'].'"
      		  onclick="return confirm(\'Anda yakin akan menghapus data?\')"><img src="../UAS/assets/Delete_icon.png" width="30px" height="30px"></img></a>
        </center></td>';
        echo "</tr>";
        $no++; // menambah nilai nomor urut
      }
      ?>
    </table>
				<br><br>
			<button type="button" style="width: 60px; height: 55px; float: right; margin-right: 10px;"><a href="tambahelectric.php" ><img src="assets/create-icon-png-9.png" width="50px" height="50px"></a></button>
			<button type="button" style="width: 60px; height: 55px; float: right; margin-right: 10px"><a href="excelelectric.php"><img src="assets/export.jpg" width="50px" height="50px"></a></button>
			<button type="button" style="width: 60px; height: 55px; float: right; margin-right: 10px"><a href="dashboard.php" ><img src="assets/home.jpg" width="50px" height="50px"></a></button>
			
		</div>
	</aside>
		</div>
		</div>
		<div class="copyright">Copyright &copy;2018 - Dhion angga, All Rights Reserved.</div>
			
</body>
</html>
