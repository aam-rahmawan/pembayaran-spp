<?php
    include "config/koneksi.php";
    if (isset($_GET["id"])) {
        $id = $_GET["id"];
        $query = "SELECT * FROM penerbit WHERE id='$id'";
        $result = mysqli_query($db, $query);
        $data = mysqli_fetch_assoc($result);
    }
		?>
        <form action="" method="post">
            <input type="hidden" name="id" value="<?php echo $data['id']; ?>">
            <div class="form-group">
                <label>Kode Penerbit</label>
                <input type="text" class="form-control" name="nama" value="<?php echo $data['kd_penerbit']; ?>">
            </div>
            <div class="form-group">
                <label>Nama Penerbit</label>
                <input type="text" class="form-control" name="umur" value="<?php echo $data['nm_penerbit']; ?>">
            </div>
              <button class="btn btn-primary" type="submit">Update</button>
        </form>     
        <?php } }
?>