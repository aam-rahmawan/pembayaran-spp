<?php ob_start(); ?>
<html>
<head>
  <title>Cetak PDF</title>
  <link rel="stylesheet" type="text/css" href="style.css"> 
   <style type="text/css">
   table {border-collapse:collapse; table-layout:fixed;width: 100px;}
   table th {text-align: center; word-wrap:break-word;width: 12.5%;}
   table td {word-wrap:break-word;width: 10%;}
   </style>
</head>
<body>
<big style="text-align: center;">SMK</big>
<hr/>
<h2 style="text-align: center;"><u>Kwitansi Pembayaran</u></h2>
    <div class="border=2px">
    <?php
    include "../koneksi.php";
    $query = mysqli_query($db, "SELECT * FROM t_bayar");
    $data = mysqli_fetch_array($query);
    ?>
       <p align="justify">
        <b><h4>Nama   : <?php echo $data['nama'] ?><br><br>
           NIS  : <?php echo $data['nis'] ?><br><br>
           KELAS  : <?php echo $data['kelas'] ?></h4></b></p>

    </div>
<br>
<table border="1" align="center" width="10%">
<tr>
    <th>NO</th>
    <th>PEMBAYARAN UANG</th>
    <th>UNTUK BULAN</th>
    <th>TANGGAL BAYAR</th>
    <th>JUMLAH BAYAR</th>
    
</tr>
<?php
 if (isset($_GET["id"])) {
   $id = $_GET["id"];
    $query = "SELECT * FROM t_bayar WHERE id='$id' ";
    $sql = mysqli_query($db, $query);
    $row = mysqli_num_rows($sql) or die ($db->error);
$no = 1;
if($row > 0){ 
    while($data = mysqli_fetch_array($sql)){ 
        echo "<tr>";
        echo "<td>".$no++."</td>";
        echo "<td align=center>SPP</td>";
        echo "<td align=center>".$data['untukbulan']."</td>";
        echo "<td align=center>".$data['tanggal']."</td>";
        echo "<td align=center>".$data['jumlah']."</td>";
        echo "</tr>";
    }
}else{ // Jika data tidak ada
    echo "<tr><td colspan='4'>Data tidak ada</td></tr>";
}
}
?>
</table>
 <?php
    $query = mysqli_query($db, "SELECT * FROM t_bayar");
    $data = mysqli_fetch_array($query);
    ?>
 <p align="center">
        <b><h4>Total Bayar Rp <?php echo $data['jumlah'] ?></h4></b></p>
 <p align="center">
<?php
if (isset($_GET['id'])){
    include "konversi.php";

    $data = $data['jumlah'];
    $format_uang = number_format($data,0,",",".");
    $terbilang = ucwords(terbilang($data));
   echo "<b><br><h3>$terbilang Rupiah</h3></b>";
  }
?>
</p>
</body>
</html>
<?php
$html = ob_get_contents();
ob_end_clean();
        
require_once('html2pdf/html2pdf.class.php');
$pdf = new HTML2PDF('P','A4','en');
$pdf->WriteHTML($html);
$pdf->Output('laporan Pembayaran.pdf');
?>