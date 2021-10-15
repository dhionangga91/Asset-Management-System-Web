<?php
  // memanggil file koneksi.php untuk melakukan koneksi database
  include 'koneksi.php';

?>

<!DOCTYPE html>
<html>
<head>
	<title>Sign UP</title>
	<link rel="stylesheet" href="css/logincss.css">
	<link rel="stylesheet" href="css/reset/normalize.css">
</head>
<body>
	<br><br><br><br><br><br>
	<h1><strong>WELCOME TO ASSET MANAGEMENT SYSTEM</strong></h1>
	<div class="login" style="opacity: 1"><br><br>
	<div style="color: #2650C4; font-size: 20pt; font face:Cooper"><label><center><b>Please Sign Up</b></center></label><br></div>
		
		<form action="prosesdaftar.php" method="post" onSubmit="return validasi()">
			
			<div>
				<input type="text" name="nama" id="nama" placeholder="Type your name" />
			</div>
			<div>
				<input type="text" name="username" id="username" placeholder="Type your Username" />
			</div>
			<div>
				<input type="password" name="password" id="password" placeholder="Type your Password"/>
			</div>			
			<div style="margin-bottom: 20px">
				<input type="submit" name="input" value="Sign Up" class="tombol" style="text-align: center;font-size: 11pt">
			</div>
			<div style="text-align: center; font-size: 12pt; color: white">	alredy have an account ? <a href="login.php"><b>Please Login</b></a></div>
		</form>
	</div>
</body>

<script type="text/javascript">
	function validasi() {
		var username = document.getElementById("nama").value;
		var username = document.getElementById("username").value;
		var password = document.getElementById("password").value;		
		if (nama != "" && username != "" && password!="") {
			return true;
		}else{
			alert('Silahkan di lengkapi data anda !');
			return false;
		}
	}

</script>
</html>