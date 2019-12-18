<!DOCTYPE html>
<?php
include "../koneksi.php";
 if (isset($_GET["id"])) {
   $id = $_GET["id"];
    $query = "DELETE FROM t_bayar WHERE id='$id' ";
    $hasil_query = mysqli_query($db, $query);
  }
  ?>
<html>
<head>
    <title>Laporan Pembayaran</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <link href="data/css/dataTables.bootstrap.css" rel="stylesheet" />
    <link href="data/css/bootstrap.css" rel="stylesheet" />
    <link href="bootstrap-modal/css/bootstrap-modal-bs3patch.css" rel="stylesheet" />
    <link href="bootstrap-modal/css/bootstrap-modal.css" rel="stylesheet" />
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
                            <center><div class="title"><big>Laporan Pembayaran</big></div></center>
                            <div class="body">
                                <form action="" method="post">
                            
                              <table class="table table-striped table-bordered table-hover" id="dataTables-example">
<thead>
   <tr>
    <th>NO</th>
    <th>NIS</th>
    <th>NAMA</th>
    <th>NO ORTU</th>
    <th>KELAS</th>
    <th>TANGGAL BAYAR</th>
    <th>JUMLAH BAYAR</th>
    <th>UNTUK BULAN</th>
    <th>OPSI</th>
  </tr>
</thead>
<tbody>
<?php
include "fungsi_indotgl.php";
$query  = "SELECT * FROM t_bayar";
$tampil = mysqli_query($db, $query);
$no =1;
while($data = mysqli_fetch_array($tampil)) { 
@$tanggal = tgl_indo($data[tanggal]); 
?>
<tr>
    <td align="center"><?php echo $no; ?></td>
    <td align="center"><?php echo $data['nis'] ?></td>
    <td align="center"><?php echo $data['nama'] ?></td>
    <td align="center"><?php echo $data['no'] ?></td>
    <td align="center"><?php echo $data['kelas'] ?></td>
    <?php
     echo "
  <td align=center>$tanggal</td>";
  ?>
    <td align="center"><?php echo $data['jumlah'] ?></td>
    <td align="center"><?php echo $data['untukbulan'] ?></td>
    <td width= "100px" align="center">
    <a href="laporan_p.php?id=<?php echo $data['id']; ?>" onClick='return confirm("Apakah Ada yakin menghapus?")'><img src="../images/delete.png"></a> || 
  <a href="../report/kwitansi.php?id=<?php echo $data['id']; ?>" name="cetak" target="blank"></a><br>
  </td>
</tr>
<?php
$no++;
}
?>
</center>
</tbody>
<center>
</center>
</table>
</table>
</form>
<a href="../report/print.php" name="cetak" target="blank">Cetak Data</a>
<a href="../report/export_excel.php" name="cetak" target="blank">Export Excel</a>
<a href="../report/pertanggal.php" name="cetak" target="blank">PerPriode</a><br>
</div>
</div>
 <script src="data/js/jquery-1.10.2.js"></script>
      <!-- Bootstrap Js -->
    <script src="data/js/bootstrap.min.js"></script>
    <script src="data/js/jquery.dataTables.js"></script>
    <script src="data/js/dataTables.bootstrap.js"></script>
    <script>
            $(document).ready(function () {
                $('#dataTables-example').dataTable();
            });
    </script>
<?php
include "../footer.php"
?>

    <script src="bootstrap-modal/js/bootstrap-modal.js"></script>
    <script src="bootstrap-modal/js/bootstrap-modalmanager.js"></script>
</body>
</html>
