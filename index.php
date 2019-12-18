<!DOCTYPE html>
<html>
<head>
  <title>Halaman Login</title>
  <link href="login.css" rel="stylesheet" type="text/css" />
</head>
<body class="body">

  <!-- Form Login -->
 <div id="wrapper">
</div>
<p>LOGIN</p>
<div class="kotak">
<form name="username" class="username" action="" method="post" >
  <input type="text" name="username" class="button" placeholder="Username" />
  <div style="margin-top:10px;"></div>
  <input type="password" name="password" class="button" placeholder="Password" />
  <input type="submit" name="login" class="Login" value="Login" />
<?php
session_start();
@$username=$_POST['username'];
@$password=$_POST['password'];
@$login=$_POST['login'];
if(isset($login)){
  include "koneksi.php";
  if ($db->connect_error) {
    echo "Failed to connect to MySQL: " . $db->connect_error;
  }
  $res = $db->query("SELECT * FROM t_login where username='$username' and password='$password'");
  $row = $res->fetch_assoc();
  $name = $row['nama_lengkap'];
  $user = $row['username'];
  $pass = $row['password'];
  $type = $row['status'];
  if($user==$username && $pass=$password){
    if($type=="admin"){
      $_SESSION['mysesi']=$name;
      $_SESSION['mytype']=$type;
      echo "<script>window.location.assign('admin.php')</script>";
    } else if($type=="kepala_sekolah"){
      $_SESSION['mysesi']=$name;
      $_SESSION['mytype']=$type;
      echo "<script>window.location.assign('kepsek.php')</script>";
    } else{
?>
<?php
    }
  } else{

?>
<div class="alert alert-danger alert-dismissible" role="alert">
  <strong>Warning!</strong> login gagal.
</div>
<?php
  }
}
?>
</form>
</div>
</body>
</html>