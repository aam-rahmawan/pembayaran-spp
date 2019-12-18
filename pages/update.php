<!DOCTYPE html>
<?php
include "../koneksi.php";
if (isset($_GET['id'])) {
$id = ($_GET["id"]);
$query = "SELECT * FROM t_siswa WHERE id='$id'";
$result = mysqli_query($db, $query);
$data = mysqli_fetch_assoc($result);
$nis = $data["nis"];
$nama = $data["nama"];
$kelas = $data["kelas"];
$alamat = $data["alamat"];
$jenis = $data["jenis"];
$ortu = $data["ortu"];
$no = $data["no"];
}
?>
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
                        <div id="body">
                            <center><div class="title"><big>EDIT DATA SISWA</big></div></center>
                            <div class="body">
                                <form action="" method="post">
                                <table>
                                    <tr>
                                        <td><b>NIS</b><div class="desc">Masukkan Nis</div></td>
                                        <td>:</td>
                                        <td><input type="text" name="nis" value="<?php echo $nis ?>" required /></td>
                                    </tr>
                                    <tr>
                                        <td><b>NAMA</b><div class="desc">Masukkan Nama</div></td>
                                        <td>:</td>
                                        <td><input type="text" name="nama" value="<?php echo $nama ?>" required /></td>
                                    </tr>
                                    <tr>
                                        <td><b>KELAS</b><div class="desc">Pilih Kelas</div></td>
                                        <td>:</td>
                                        <td><select name="kelas"><option>Pilih Salah Satu</option>
                                        <option value="X"<?php if($data['kelas'] == 'X'){ echo 'selected'; } ?>>X</option>
                                        <option value="XI"<?php if($data['kelas'] == 'XI'){ echo 'selected'; } ?>>XI</option>
                                        <option value="XII"<?php if($data['kelas'] == 'XII'){ echo 'selected'; } ?>>XII</option>
                                        </select></td>
                                    </tr>
                                    <tr>
                                        <td><b>ALAMAT</b><div class="desc">Alamat lengkap anda</div></td>
                                        <td>:</td>
                                        <td><textarea name="alamat" rows="5" cols="50" ><?php echo "$alamat"; ?></textarea></td>
                                    </tr>
                                    <tr>
                                        <td><b>JENIS KELAMIN</b><div class="desc">Pilih jenis kelamin</div></td>
                                        <td>:</td>
                                        <td><select name="jenis"><option>Pilih Salah Satu</option>
                                            <option value="LAKI-LAKI"<?php if($data['jenis'] == 'LAKI-LAKI'){ echo 'selected'; } ?>>LAKI-LAKI</option>
                                            <option value="PEREMPUAN"<?php if($data['jenis'] == 'PEREMPUAN'){ echo 'selected'; } ?>>PEREMPUAN</option>
                                        </select></td>
                                    </tr>
                                    <tr>
                                        <td><b>NAMA ORTU</b><div class="desc">Masukkan Nama</div></td>
                                        <td>:</td>
                                        <td><input type="text" name="ortu" value="<?php echo $ortu ?>" required /></td>
                                    </tr>
                                    <tr>
                                        <td><b>NO ORTU</b><div class="desc">Masukkan Nomor</div></td>
                                        <td>:</td>
                                        <td><input type="text" name="no" value="<?php echo $no ?>" required /></td>
                                    </tr>
                                    <tr>
                                        <td>&nbsp;</td>
                                        <td>&nbsp;</td>
                                        <td><br><input type="submit" name="edit" value="Edit">
                                    <a href="datasiswa.php"><img src="../images/home.png">Lihat Tabel</a></td>
                                    </tr>
                                </table>
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
if(@$_POST['edit']) {
 $nis = @$_POST['nis'];
 $nama = @$_POST['nama'];
  $kelas = @$_POST['kelas'];
    $alamat = @$_POST['alamat'];
     $jenis = @$_POST['jenis'];
      $ortu = @$_POST['ortu'];
       $no = @$_POST['no'];
       mysqli_query($db, "update t_siswa set nis = '$nis', nama = '$nama', kelas ='$kelas', alamat ='$alamat', jenis ='$jenis', ortu ='$ortu', no ='$no'") or die ($db->error);
}
?>
<?php
include "../footer.php"
?>
</body>
</html>
