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
<title>Hasil Pencarian</title>
		<link rel="stylesheet" href="css/crudcss.css">
	<link rel="stylesheet" href="css/reset/normalize.css">
	</head>

<body>
<div class="container">
<div class="navlogo">
	  <li style="margin-top: 10px; margin-left: 10px"><img src="assets/ass2.JPG" width="250px" height="40px"> </li>
      <li style="float: right; margin-right: 10px; margin-top: 15px"><a href="https://plus.google.com/share?url=dashboard.php" target="_blank"><img src="assets/google-plus-logo-symbol_318-54556.jpg" width="30px" height="30px"></a></li>
	  <li style="float: right; margin-right: 10px; margin-top: 15px"><a href="http://www.twitter.com/share?url=dashboard.php" target="_blank"><img src="assets/twitter_PNG15.png" width="30px" height="30px"></a></li>
	  <li style="float: right; margin-right: 10px; margin-top: 5px"><a href="http://www.facebook.com/sharer.php?u=dashboard.php" target="_blank"><img src="assets/face.png" width="50px" height="50px"></a></li>  </div>

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
			<form action="prosescarihvac.php" method="post">
		<input type="submit" id="searchbutton" value="Search" name="Search" class="formbutton" style="background: #9F059E; color: white; padding: 5px" />
		<input type="text" id="searchquery" width="170px" name="keyword" placeholder="Search..." / style="padding: 5px">
			</form></div>
		<div class="dashmenu"><div class="gm"><img src="assets/dashboard.png" width="25px" height="23">	</div>
		<div class="am" ><a href="dashboard.php"> Dashboard</a></div></div>
	<div class="dropdown">
		<div class="mainmenubtn"><div class="gm"><img src="assets/menu.png" width="25px" height="23"></div>
		<div class="am"><a href="">Menu</a></div>
		</div>
  		<div class="dropdown-child">
        <a href="dashboardhvac.php">HVAC </a>
   		<a href="dashboardelectric.php">ELECTRICAL </a>
  		<a href=dashboardplumbing.php>PLUMBING </a>
   		<a href="dashboardfire.php">FIRE FIGTHING </a>
  		</div>
		 </div>
		  </div>
	<div class="kanansidebar">
	<div class="headerkanan" ><strong>HEATING VENTILATING AIR CONDITIONING</strong></div>
		<hr color=#930892>
		<div class="userinfo" style="font-family:lato"><strong>Hello !!!</strong> Welcome back <strong><?php echo $username;?></strong></div>

		<h1>TABEL ASSETS HVAC</h1><hr color="#930892"><br>
		<div class="contentcrud"><br>
<?php
//koneksi
$koneksi = new mysqli('localhost','root','','crud_uas');
if (isset($_POST['Search'])){
    //variable
    $keyword = $_POST['keyword'];
    $query = $koneksi->query("SELECT * FROM hvac WHERE nama_asset LIKE '%$keyword%' OR kode_asset LIKE '%$keyword%' OR kapasitas LIKE '%$keyword%' OR type LIKE '%$keyword%'");
    $row = mysqli_num_rows($query);
    //cek apakah ada satu  
    if ($row==0){
        ?>
        <center><h3>DATA TIDAK DITEMUKAN</h3></center>
        <?php  
    }
    else{
        ?>
        <center><h3>Ditemukan <?php echo $row;?> hasil.</h3></center>
        <?php
        ?>
        <table border=1 style="margin: 0 auto; color: #9F059E">
      <tr>
     <th width="50px" bgcolor="#9F059E"><center><font color="white">No</font></center></th>
        <th width="100px" bgcolor="#9F059E"><center><font color="white">Kode Asset</font></center></th>
        <th width="200px" bgcolor="#9F059E"><center><font color="white">Nama Asset</font></center></th>
        <th width="150px" bgcolor="#9F059E"><center><font color="white">Type</font></center></th>
        <th width="150px" bgcolor="#9F059E"><center><font color="white">Kapasitas (kW)</font></center</th>
		<th width="150px" bgcolor="#9F059E"><center><font color="white">Manufacture Date</font></center></th>
		<th width="50px" bgcolor="#9F059E"><center><font color="white">Action</font></center></th>
		    </tr>
        <?php
        foreach ($query as $rows){
        @$no++;
        $kode_asset = $rows['kode_asset'];
        $nama_asset = $rows['nama_asset'];
		$type = $rows['type'];
		$kapasitas = $rows['kapasitas'];
        $tanggal = date('d M Y', strtotime($rows['tanggal']));
        ?>
        <tr>
        <td><center> <?php echo $no++; ?></center></td>
		<td><center> <?php echo $rows['kode_asset']; ?></center></td>
        <td><center><?php echo $rows['nama_asset']; ?></center></td>
		<td><center><?php echo $rows['type']; ?></center></td>
		<td><center><?php echo $rows['kapasitas']; ?></center></td>
		<td><center><?php echo $rows['tanggal']; ?></center></td>
		<td><center>
          <a href="updatehvac.php?id=<?php echo $rows['id']; ?>"><img src="../UAS/assets/images.png" width="30px" height="30px"></img> </a> 
          </center></td>';	
        </tr>
<?php
      }
?>
        </table>
<?php
    }
}
?>
			<br>
			<button type="button" style="width: 60px; height: 55px; float: right; margin-right: 10px;"><a href="tambahhvac.php" ><img src="assets/create-icon-png-9.png" width="50px" height="50px"></a></button>
			<button type="button" style="width: 60px; height: 55px; float: right; margin-right: 10px"><a href="dashboardhvac.php" ><img src="assets/home.jpg" width="50px" height="50px"></a></button>
		</div>
	</aside>
		</div>
		<div class="copyright">Copyright &copy;2018 - Dhion angga, All Rights Reserved.</div>
			
</body>
</html>
