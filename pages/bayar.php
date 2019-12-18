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
$no = $data["no"];
$kelas = $data["kelas"];
}
?>
<html>
<head>
<script>
function tampilkan(){
  var id_user=document.getElementById("form1").kelas.value;
  if (id_user=="X")
    {
        document.getElementById("jumlah").value = '100000';
    }
  else if (id_user=="XI")
    {
       document.getElementById("jumlah").value = '150000';
    }
   else if (id_user=="XII")
    {
       document.getElementById("jumlah").value = '200000';
    }  
}
</script>
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
                            <center><div class="title"><big>PEMBAYARAN</big></div></center>
                            <div class="body">
                                <form id="form1" name="form1" action="" method="post">
                                <table>
                                    <tr>
                                        <td><b>NIS</b><div class="desc">Masukkan Nis</div></td>
                                        <td>:</td>
                                        <td><input type="text" name="nis" value="<?php echo $nis ?>" readonly  /></td>
                                    </tr>
                                    <tr>
                                        <td><b>NAMA</b><div class="desc">Masukkan Nama</div></td>
                                        <td>:</td>
                                        <td><input type="text" name="nama" value="<?php echo $nama ?>" readonly /></td>
                                    </tr>
                                    <tr>
                                        <td><b>NO ORTU</b><div class="desc">Masukkan Nomor</div></td>
                                        <td>:</td>
                                        <td><input type="text" name="no" value="<?php echo $no ?>" readonly  /></td>
                                    </tr>
                                        <tr>
                                        <td><b>KELAS</b><div class="desc">Pilih Kelas</div></td>
                                        <td>:</td>
                                        <td><select name="kelas" onchange="tampilkan()"><option>Pilih Salah Satu</option>
                                        <option value="X"<?php if($data['kelas'] == 'X'){ echo 'selected'; } ?>>X</option>
                                        <option value="XI"<?php if($data['kelas'] == 'XI'){ echo 'selected'; } ?>>XI</option>
                                        <option value="XII"<?php if($data['kelas'] == 'XII'){ echo 'selected'; } ?>>XII</option>
                                    </tr>
                                     <tr>
                                        <td><b>JUMLAH</b><div class="desc">Jumlah</div></td>
                                        <td>:</td>
                                        <td><input type="text" name="jumlah" id="jumlah" readonly /></td>
                                    </tr>
                                    <tr>
                                        <td><b>UNTUK BULAN</b><div class="desc">Masukkan Bulan</div></td>
                                        <td>:</td>
                                        <td><select name="untukbulan">
                                        <?php
                                        $namabulan=array("Januari","Februari","Maret","April","Mei","Juni","Juli","Agustus","September","Oktober","November","Desember");
                                        ?>
                                        <?php
                                        for($untukbulan=1; $untukbulan<=12; $untukbulan++) { ?>
                                        <option value="<?php echo $untukbulan; ?>">
                                          <?php echo $namabulan[$untukbulan-1]; ?>
                                        </option>
                                        <?php } ?>
                                        </select></td>
                                    <tr>
                                        <td>&nbsp;</td>
                                        <td>&nbsp;</td>
                                        <td><br><input type="submit" name="simpan" value="Simpan">
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
if(@$_POST['simpan']) {
 $nis = @$_POST['nis'];
 $nama = @$_POST['nama'];
  $no = @$_POST['no'];
   $kelas = @$_POST['kelas'];
    $tanggal = date('Y-m-d');
      $jumlah = @$_POST['jumlah'];
        $untukbulan = @$_POST['untukbulan'];
       mysqli_query($db, "insert into t_bayar(nis, nama, no, kelas, tanggal, jumlah, untukbulan) 
        values('$nis','$nama','$no','$kelas','$tanggal','$jumlah','$untukbulan')") or die ($db->error);
      }
?>
<?php
include "../footer.php"
?>
</body>
</html>
