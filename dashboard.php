<?php
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
		<script type="text/javascript" src="css/jquery-2.1.1.min.js"></script>
		<script type="text/javascript" src="css/crudjs.js"></script>
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

		<aside class="kirisidebar">
	<div class="user-section">
    <div class="user-section-inner">
    <center> <img src="assets/User_Avatar_2.png" width="90" height="90"></center>
        </div>
    <div class="user-info"><strong><?php echo $username;?></strong>
		</div>
        </div>
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
  </aside>
	
	<aside class="kanansidebar">
	<div class="headerkanan" ><strong>WELCOME TO ASSET MANAGEMENT SYSTEM</strong></div>
	<hr color=#930892>
	<div class="userinfo" style="font-family:lato"><strong>Hello !!!</strong> Welcome back <strong>
		<?php echo $username;?></strong></div>
		<div class="content">
		<div class="thumbnail"><a href="dashboardhvac.php"><img src="assets/Chiller_System.png" width="230" height="200"><figcaption><strong>HVAC</strong></figcaption></a></div>
		<div class="thumbnail"><a href="dashboardelectric.php"><img src="assets/sutet.jpg" width="230px" height="200px"><figcaption><strong>ELECTRICAL</strong></figcaption></a></div>
		<div class="thumbnail"><a href="dashboardplumbing.php"><img src="assets/pipes.jpg" width="230px" height="200px"><strong>PLUMBING</strong></a></div>
		<div class="thumbnail" ><a href="dashboardfire.php"><img src="assets/fire-fighting.png" width="230px" height="200px"><figcaption><strong>FIRE FIGHTING</strong></figcaption></a></div>
		</div>
	</aside>
</div>
		<div class="copyright">Copyright &copy;2018 - Dhion angga, All Rights Reserved.</div>
			
</body>
</html>
