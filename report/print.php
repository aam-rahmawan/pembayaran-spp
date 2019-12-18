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
  
<h1 style="text-align: center;">Laporan Pembayaran</h1>
<table border="1" width="10%">
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
<?php
// Load file koneksi.php
include "../koneksi.php";
$query = "SELECT * FROM t_bayar";
@$sql = mysqli_query($db, $query); // Eksekusi/Jalankan query dari variabel $query
$row = mysqli_num_rows($sql);

$no = 1;
if($row > 0){ // Jika jumlah data lebih dari 0 (Berarti jika data ada)
    while($data = mysqli_fetch_array($sql)){ // Ambil semua data dari hasil eksekusi $sql

        echo "<tr>";
        echo "<td>".$no++."</td>";
        echo "<td align=center>".$data['nis']."</td>";
        echo "<td align=center>".$data['nama']."</td>";
        echo "<td align=center>".$data['no']."</td>";
        echo "<td align=center>".$data['kelas']."</td>";
        echo "<td align=center>".$data['tanggal']."</td>";
        echo "<td align=center>".$data['jumlah']."</td>";
        echo "<td align=center>".$data['untukbulan']."</td>";
        echo "</tr>";
    }
}else{ // Jika data tidak ada
    echo "<tr><td colspan='4'>Data tidak ada</td></tr>";
}
?>
</table>

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