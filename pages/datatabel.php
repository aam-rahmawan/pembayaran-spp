<!DOCTYPE html>
<html>
<head>
    <title>Halaman Data Siswa</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<?php
include "header.php"
?>
        
        <div id="content">
            <table border="0" width="100%" cellpadding="0" cellspacing="0">
                <tr valign="top">
                    <td width="75%" style="padding-right:20px;">
         <?php 
            if($_SESSION['mytype']=='admin'){  ?>
                        <div id="body">
                            <center><div class="title"><big>INPUT DATA SISWA</big></div></center>
                            <div class="body">
                                <form action="" method="post">
                                <table>
                                    <tr>
                                        <td><b>NIS</b><div class="desc">Masukkan Nis</div></td>
                                        <td>:</td>
                                        <td><input type="text" name="nis" required /></td>
                                    </tr>
                                    <tr>
                                        <td><b>NAMA</b><div class="desc">Masukkan Nama</div></td>
                                        <td>:</td>
                                        <td><input type="text" name="nama" id="nama" required /></td>
                                    </tr>
                                    <tr>
                                        <td><b>KELAS</b><div class="desc">Pilih Kelas</div></td>
                                        <td>:</td>
                                        <td><select name="kelas"><option>Pilih Salah Satu</option>
                                            <option value="X">X</option>
                                            <option value="XI">XI</option>
                                            <option value="XII">XII</option></td>
                                    </tr>
                                    <tr>
                                        <td><b>ALAMAT</b><div class="desc">Alamat lengkap anda</div></td>
                                        <td>:</td>
                                        <td><textarea rows="5" name="alamat" cols="50"></textarea></td>
                                    </tr>
                                    <tr>
                                        <td><b>JENIS KELAMIN</b><div class="desc">Pilih jenis kelamin</div></td>
                                        <td>:</td>
                                        <td><select name="jenis"><option>Pilih Salah Satu</option>
                                            <option value="LAKI-LAKI">LAKI-LAKI</option>
                                            <option value="PEREMPUAN">PEREMPUAN</option></td>
                                    </tr>
                                    <tr>
                                        <td><b>NAMA ORTU</b><div class="desc">Masukkan Nama</div></td>
                                        <td>:</td>
                                        <td><input type="text" name="ortu" required /></td>
                                    </tr>
                                    <tr>
                                        <td><b>NO ORTU</b><div class="desc">Masukkan Nomor</div></td>
                                        <td>:</td>
                                        <td><input type="text" name="no" required /></td>
                                    </tr>
                                    <tr>
                                        <td>&nbsp;</td>
                                        <td>&nbsp;</td>
                                        <td><br>
                                       <input type="submit" name="simpan" value="Simpan">
                                    </tr>
                                </table>
                                 <?php
    } else{
        echo "anda tidak bisa mengakses halaman ini";
    }
    ?>
                                </form>
                            </div>
                        </div>
                    </td>
                    <td width="25%" style="padding-left:10px;">
                        <div id="body">
                            <div class="title">Sub Menu</div>
                            <div class="body">
                                <a class="submenu" href="#"><img src="../images/home.png">Menu Pertama</a>
                                <a class="submenu" href="#"><img src="../images/menu1.png">Menu 2</a>
                                <a class="submenu" href="#"><img src="../images/menu2.png">Menu 3</a>
                                <a class="submenu" href="#"><img src="../images/menu3.png">Menu 4</a>
                                <a class="submenu" href="#"><img src="../images/menu4.png">Menu 5</a>
                                <a class="submenu" href="#"><img src="../images/menu2.png">Menu 6</a>
                                <a class="submenu" href="#"><img src="../images/menu1.png">Menu 7</a>
                                <a class="submenu" href="#"><img src="../images/home.png">Menu 8</a>
                                <a class="submenu" href="#"><img src="../images/menu4.png">Menu 9</a>
                            </div>
                        </div>
                    </td>
                </tr>
            </table>
        </div>
<?php
include "../koneksi.php";
if(@$_POST['simpan']) {
 $nis = @$_POST['nis'];
 $nama = @$_POST['nama'];
  $kelas = @$_POST['kelas'];
    $alamat = @$_POST['alamat'];
     $jenis = @$_POST['jenis'];
      $ortu = @$_POST['ortu'];
       $no = @$_POST['no'];
       mysqli_query($db, "insert into t_siswa(nis, nama, kelas, alamat, jenis, ortu, no) 
        values('$nis','$nama','$kelas','$alamat','$jenis','$ortu','$no')") or die ($db->error);
      }
?>
<?php
include "../footer.php"
?>

</body>
</html>
