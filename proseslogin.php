<?php
   session_start();
   require_once("koneksilog.php");
   $username = $_POST['username'];
   $password = md5($_POST['password']);   
   $sql = "SELECT * FROM user WHERE username = '$username'";
   $query = $db->query($sql);
   $hasil = $query->fetch_assoc();
   if($query->num_rows == 0) {
     echo "<script>window.alert('Username ini tidak terdaftar')
    window.location='login.php'</script>";
   } else {
     if($password <> $hasil['password']) {
       echo "<script>window.alert('Password Salah')
    window.location='login.php'</script>";
     } else {
       $_SESSION['username'] = $hasil['username'];
       header('location:dashboard.php');
     }
   }
?>