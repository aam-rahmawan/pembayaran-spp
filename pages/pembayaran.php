<!DOCTYPE html>
<?php
include "../koneksi.php";
?>
<html>
<head>
    <title>Halaman Data Pembayaran</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <link href="data/css/dataTables.bootstrap.css" rel="stylesheet" />
    <link href="data/css/bootstrap.css" rel="stylesheet" />
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
                            <center><div class="title"><big>DATA BAYAR</big></div></center>
                            <div class="body">
                                <form action="" method="post">
                            
                              <table class="table table-striped table-bordered table-hover" id="dataTables-example">
<thead>
   <tr>
    <th>NO</th>
    <th>NIS</th>
    <th>NAMA</th>
    <th>KELAS</th>
    <th>ALAMAT</th>
    <th>JENIS KELAMIN</th>
    <th>NAMA ORTU</th>
    <th>NO ORTU</th>
    <th>OPSI</th>
  </tr>
</thead>
<tbody>
<?php
$query  = "SELECT * FROM t_siswa";
$tampil = mysqli_query($db, $query);
$no =1;
while($data = mysqli_fetch_array($tampil)) {  
?>
<tr>
    <td align="center"><?php echo $no; ?></td>
    <td align="center"><?php echo $data['nis'] ?></td>
    <td align="center"><?php echo $data['nama'] ?></td>
    <td align="center"><?php echo $data['kelas'] ?></td>
    <td align="center"><?php echo $data['alamat'] ?></td>
    <td align="center"><?php echo $data['jenis'] ?></td>
    <td align="center"><?php echo $data['ortu'] ?></td>
    <td align="center"><?php echo $data['no'] ?></td>
    <td width=100"px" align="center">
     <a href="bayar.php?id=<?php echo $data['id'] ?>" name="bayar">Bayar</a></td>
</tr>
<?php
$no++;
}
?>

</center>
</tbody>
</table>
</table>
<?php
    } else{
        echo "anda tidak bisa mengakses halaman ini";
    }
    ?>
</form>
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
</body>
</html>
