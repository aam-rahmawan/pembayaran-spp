<!DOCTYPE html>
<html>
<head>
	<title>Halaman Admin</title>
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
                            <div class="title">Contoh Form</div>
                            <div class="body">
                                <form action="" method="post">
                                <table>
                                    <tr>
                                        <td><b>Nama Lengkap</b><div class="desc">Masukkan nama lengkap</div></td>
                                        <td>:</td>
                                        <td><input type="text" required /></td>
                                    </tr>
                                    <tr>
                                        <td><b>Email</b><div class="desc">Masukkan Email yang Valid</div></td>
                                        <td>:</td>
                                        <td><input type="text" required /></td>
                                    </tr>
                                    <tr>
                                        <td><b>Username</b><div class="desc">Minimal 4 karakter</div></td>
                                        <td>:</td>
                                        <td><input type="text" required /></td>
                                    </tr>
                                    <tr>
                                        <td><b>Password</b><div class="desc">Minimal 6 karakter</div></td>
                                        <td>:</td>
                                        <td><input type="text" required /></td>
                                    </tr>
                                    <tr>
                                        <td><b>Ulangi Password</b><div class="desc">Ulangi password di atas</div></td>
                                        <td>:</td>
                                        <td><input type="text" required /></td>
                                    </tr>
                                    <tr>
                                        <td><b>Jenis Kelamin</b><div class="desc">Pilih jenis kelamin</div></td>
                                        <td>:</td>
                                        <td><select><option>Pilih Salah Satu</option><option>Laki-Laki</option><option>Perempuan</option></select></td>
                                    </tr>
                                    <tr>
                                        <td><b>Agama</b><div class="desc">Pilih Agama Anda</div></td>
                                        <td>:</td>
                                        <td>
                                            <input type="radio" name="agama" required>Islam
                                            <input type="radio" name="agama" required>Hinda
                                            <input type="radio" name="agama" required>Kristen
                                            <input type="radio" name="agama" required>Budha
                                            <input type="radio" name="agama" required>Katholik
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><b>Hobby</b><div class="desc">Pilih beberapa hobby</div></td>
                                        <td>:</td>
                                        <td>
                                            <input type="checkbox">Makan
                                            <input type="checkbox">Minum
                                            <input type="checkbox">Mancing
                                            <input type="checkbox">Liburan
                                            <input type="checkbox">Komputer
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><b>Alamat</b><div class="desc">Alamat lengkap anda</div></td>
                                        <td>:</td>
                                        <td><textarea rows="5" cols="50"></textarea></td>
                                    </tr>
                                    <tr>
                                        <td>&nbsp;</td>
                                        <td>&nbsp;</td>
                                        <td><input type="submit" value="Simpan" />
                                            <input type="reset" value="Batal" /></td>
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
                                <a class="submenu" href="#"><img src="images/home.png">Menu Pertama</a>
                                <a class="submenu" href="#"><img src="images/menu1.png">Menu 2</a>
                                <a class="submenu" href="#"><img src="images/menu2.png">Menu 3</a>
                                <a class="submenu" href="#"><img src="images/menu3.png">Menu 4</a>
                                <a class="submenu" href="#"><img src="images/menu4.png">Menu 5</a>
                                <a class="submenu" href="#"><img src="images/menu2.png">Menu 6</a>
                                <a class="submenu" href="#"><img src="images/menu1.png">Menu 7</a>
                                <a class="submenu" href="#"><img src="images/home.png">Menu 8</a>
                                <a class="submenu" href="#"><img src="images/menu4.png">Menu 9</a>
                            </div>
                        </div>
                    </td>
                </tr>
            </table>
        </div>
<?php
include "footer.php"
?>
</body>
</html>