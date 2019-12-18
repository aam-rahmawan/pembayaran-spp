<!DOCTYPE html>
<html>
<head>
	<title>Lupa Password</title>
	 <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<?php
include "header.php"
?>
	<?php
	//mengatasi error notice dan warning
	//error ini biasa muncul jika dijalankan di localhost, jika online tidak ada masalah
	error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));
	
	//koneksi ke database
	include "../koneksi.php";
	
	//proses jika tombol rubah di klik
	if($_POST['submit']){
		//membuat variabel untuk menyimpan data inputan yang di isikan di form
		$password_lama			= $_POST['password'];
		$password_baru			= $_POST['password'];
		$konfirmasi_password	= $_POST['password'];
		
		//cek dahulu ke database dengan query SELECT
		//kondisi adalah WHERE (dimana) kolom password adalah $password_lama di encrypt m5
		//encrypt -> md5($password_lama)
		$password_lama	= $password_lama;
		$cek 			= $db->query("SELECT password FROM t_login WHERE password='$password'");
		
		if($cek->num_rows){
			//kondisi ini jika password lama yang dimasukkan sama dengan yang ada di database
			//membuat kondisi minimal password adalah 8 karakter
			if(strlen($password_baru) >= 8){
				//jika password baru sudah 8 atau lebih, maka lanjut ke bawah
				//membuat kondisi jika password baru harus sama dengan konfirmasi password
				if($password_baru == $konfirmasi_password){
					//jika semua kondisi sudah benar, maka melakukan update kedatabase
					//query UPDATE SET password = encrypt md5 password_baru
					//kondisi WHERE id user = session id pada saat login, maka yang di ubah hanya user dengan id tersebut
					$password_baru 	= $password_baru;
					if(@$_POST['rubah']) { //ini dari session saat login

					
					mysqli_query($db, "update t_siswa set password = '$password'") or die ($db->error);
					if($update){
						//kondisi jika proses query UPDATE berhasil
						echo 'Password berhasil di rubah';
					}else{
						//kondisi jika proses query gagal
						echo 'Gagal merubah password';
					}					
				}else{
					//kondisi jika password baru beda dengan konfirmasi password
					echo 'Konfirmasi password tidak cocok';
				}
			}else{
				//kondisi jika password baru yang dimasukkan kurang dari 5 karakter
				echo 'Minimal password baru adalah 5 karakter';
			}
		}else{
			//kondisi jika password lama tidak cocok dengan data yang ada di database
			echo 'Password lama tidak cocok';
		}
	}
}
	?>
	
	<!-- mulai form rubah password -->
	  <div id="content">
        	<table border="0" width="100%" cellpadding="0" cellspacing="0">
                <tr valign="top">
                    <td width="75%" style="padding-right:20px;">
                        <div id="body">
                            <div class="title">Rubah Password</div>
                            <div class="body">
	<form method="post" action="">
		<table>
			<tr>
				<td>Password Lama</td>
				<td>:</td>
				<td><input type="password" name="password_lama" required></td>
			<tr>
			<tr>
				<td>Password Baru</td>
				<td>:</td>
				<td><input type="password" name="password_baru" required></td>
			<tr>
			<tr>
				<td>Konfirmasi Password</td>
				<td>:</td>
				<td><input type="password" name="konfirmasi_password" required></td>
			<tr>
			<tr>
				<td>&nbsp;</td>
				<td></td>
				<td><input type="submit" name="submit" value="Rubah"></td>
			<tr>
		</table>
	</form>
</div>
</div>
</div>
</div>
	<!-- selesai form rubah password -->
	<?php
include "../footer.php"
?>
</body>
</html>