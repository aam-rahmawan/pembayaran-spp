<?php
session_start();

if (!isset($_SESSION['mysesi']) && !isset($_SESSION['mytype'])=='admin'){
    echo '<script>window.alert("maaf, anda harus login dahulu!");window.location=("../index.php");</script>';
}else if (!isset($_SESSION['mysesi']) && !isset($_SESSION['mytype'])=='kepala_sekolah'){
    echo '<script>window.alert("maaf, anda harus login dahulu!");window.location=("../index.php");</script>';
}
else{


}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Halaman Admin</title>
</head>
<body>

	<div id="container">
    	<div id="header">
        	<div id="logo">
            	<img src="../images/admin.png">
            </div>
            <div id="info">
            	<img src="../images/android.png">
                 Selamat Datang <?php echo @$_SESSION['mysesi'] ?><br>
                 <center><a href="logout.php" onClick='return confirm("Apakah Ada yakin akan keluar?")'>Keluar</a></center>
            </div>
            <div class="clear"></div>
        </div>
    </div>
        <div id="menu">
        <ul>
            <li class="utama"><a class="left" href="home.php"><img src="../images/home.png">Home</a></li>
             <?php 
            if(@$_SESSION['mytype']=='kepala_sekolah'){  ?>
             <li class="utama"><a class="center" href="register.php"><img src="../images/menu1.png">register</a></li>
             <?php
            }
            ?> 
            <?php 
            if(@$_SESSION['mytype']=='admin'){  ?>
            <li class="utama"><a class="center " href="datasiswa.php"><img src="../images/menu5.png">Data Siswa</a></li>
            <li class="utama"><a class="center " href="pembayaran.php"><img src="../images/menu5.png">Pembayaran</a></li>
            <?php
            }
            ?>
            <li class="utama"><a class="center " href="form.html"><img src="../images/menu5.png">Tunggakan</a></li>
            <li class="utama"><a class="center" href=""><img src="../images/menu3.png">Laporan</a>
        <ul>
            <li><a class="utama center" href="laporan_p.php"><img src="../images/menu2.png">pembayaran</a></li>
            <li><a class="utama center" href="form.html"><img src="../images/menu2.png">SMS</a></li>
        </ul>
        </li>
            <li class="utama"><a class="right" href="form.html" target="_blank"><img src="../images/menu5.png">SMS</a></li>

        </ul>
        </div>
</body>
</html>