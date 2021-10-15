<?php
   session_start();
   session_destroy();
?>

<!DOCTYPE html>
<html>
<head>
	<title>login</title>
	<link rel="stylesheet" href="css/logincss.css">
<link rel="stylesheet" href="css/reset/normalize.css">	
</head>
<body>
	<br><br><br><br><br><br>
	<h1><strong>SILAHKAN LOGIN KEMBALI</strong></h1>
	<div class="login" style="opacity: 1"><br><br>
	<div style="color: #2650C4; font-size: 20pt; font face:Cooper"><label><center><b>Please Sign In</b></center></label><br></div>
		
		<form action=proseslogin.php method="post" onSubmit="return validasi()">
			
			<div>
				<input type="text" name="username" id="username" placeholder="Username" />
			</div>
			<div>
				<input type="password" name="password" id="password" placeholder="Password"/>
			</div>			
			<div style="margin-bottom: 20px">
				<input type="submit" value="Login" class="tombol">
			</div>
		<div style="text-align: center; font-size: 12pt; color: white">	Not a member yet ?<a href="register.php"> Please Sign Up</a></div>
		</form>
	</div>
	
</body>

<script type="text/javascript">
	function validasi() {
		var username = document.getElementById("username").value;
		var password = document.getElementById("password").value;		
		if (username != "" && password!="") {
			return true;
		}else{
			alert('Username dan Password harus di isi !');
			return false;
		}
	}

</script>
</html>