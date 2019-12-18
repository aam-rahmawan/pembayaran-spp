<?php
include '../koneksi.php';
header("Content-type: application/vnd-ms-excel");
header("Content-Disposition: attachment; filename=Laporan.xls");
?>

<!DOCTYPE html>
<html>
<head>
    <title>Laporan Pembayaran</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <link href="data/css/dataTables.bootstrap.css" rel="stylesheet" />
    <link href="data/css/bootstrap.css" rel="stylesheet" />
</head>
<body>
 <div id="content">
            <table border="0" width="100%" cellpadding="0" cellspacing="0">
                <tr valign="top">
                    <td width="75%" style="padding-right:20px;">
                        <div id="body">
                            <center><div class="title"><big>Laporan Pembayaran</big></div></center>
                            <div class="body">
                                <form action="" method="post">
                            
                               <table border="1" width="100%" cellpadding="0" cellspacing="0"> 
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
  </tr>
</thead>
<tbody>
<?php
$query  = "SELECT * FROM t_bayar";
$tampil = mysqli_query($db, $query);
$no =1;
while($data = mysqli_fetch_array($tampil)) { 
?>
<tr>
    <td align="center"><?php echo $no; ?></td>
    <td align="center"><?php echo $data['nis'] ?></td>
    <td align="center"><?php echo $data['nama'] ?></td>
    <td align="center"><?php echo $data['no'] ?></td>
    <td align="center"><?php echo $data['kelas'] ?></td>
    <td align="center"><?php echo $data['tanggal'] ?></td>
    <td align="center"><?php echo $data['jumlah'] ?></td>
    <td align="center"><?php echo $data['untukbulan'] ?></td>
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
</div>
</div>
</body>
</html>
