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
<title>Input PLUMBING</title>
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
    <center> <img src="assets/User_Avatar_2.png" width="90" height="90"></center>
       </div>
          <div class="user-info"><strong><?php echo $username;?></strong>
		</div>
           </div>
	
	<div class="dashcari">
		<form action="prosescariplumbing.php" method="post">
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
	<div class="headerkanan" ><strong>PLUMBING AND SANITARY SYSTEM</strong></div>
	<hr color=#930892>
	<div class="userinfo" style="font-family:lato"><strong>Hello !!!</strong> Welcome back <strong>
		<?php echo $username;?></strong></div>		<h1>TABEL DATA EQUIPMENT</h1><hr color="#930892"><br>
		
		<div class="contentcrud">
		    <form id="form_plumbing" action="input_prosesplumbing.php" method="post" onSubmit="return validasi()">
           <fieldset class="datadiri" style="margin: 5px auto; padding: 5px; border-color: #9F059E; border-style: solid; width: 800px">
			    <p><label  for="nama_asset" style="margin-left: 10px;">Nama Equipment   </label>
				<input type="text"  name="nama_asset" id="nama_asset"  style=" float: right; margin-right: 80px; width: 490px; ">
				</p>
				<p><label  for="kode_asset" style="margin-left: 10px;">Kode Asset   </label>
				<input type="text" name="kode_asset" id="kode_asset" style=" float: right; margin-right: 80px; width: 490px;">
				</p>
			  	<p><label  for="kapasitas" style="margin-left: 10px;">Kapasitas   </label>
				<input type="text" name="kapasitas" id="kapasitas" style=" float: right; margin-right: 80px; width: 490px;"></p>
				<p><label for="tanggal" style="margin-left: 10px;">Manufacture Date  </label>
				<input type="date" name="tanggal" id="tanggal" style=" float: right; margin-right: 80px; width: 490px;">
				</p>
			 	<p><label for="type" style="margin-left: 10px;">Type </label>
				  <select name="type" id="type" style=" float: right; margin-right: 80px; width: 495px;">
				     <option value="Main Pump">Main Pump </option>
                	 <option value="Distribution Pump">Distribution Pump</option>
                	 <option value="Sump pit Pump">Sump pit Pump</option>
					 <option value="Filter Pump">Filter Pump</option>
                     </select>	
				</p>
		  </fieldset>
        
        <p> <input type="submit" name="input" value="Tambah Data" style="float: right; margin-right: 10px; background: #9F059E; color: white; padding: 5px; width: 110px" >
         <input type="reset" name="reset" value="Reset" style="float: right; margin-right: 10px; background: #9F059E; color: white; padding: 5px; width: 100px" >
       </p>
      </form>
		</div>
	</aside>
		</div>
		<div class="copyright">Copyright &copy;2018 - Dhion angga, All Rights Reserved.</div>
			
</body>
	<script type="text/javascript">
	function validasi() {
		var kode_asset = document.getElementById("kode_asset").value;
		var nama_asset = document.getElementById("nama_asset").value;		
		var type = document.getElementById("type").value;									
		var kapasitas = document.getElementById("kapasitas").value;		
		var tanggal = document.getElementById("tanggal").value;
		if (kode_asset != "" && nama_asset !="" && type !="" && kapasitas !="" && tanggal !="") {
			return true;
		}else{
			alert('Data Belum Lengkap !');
			return false;
		}
	}

</script>
</html>
