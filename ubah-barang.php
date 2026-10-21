<?php

include 'layout/header.php';

//mengambil id_barang dari url
$id_barang = (int)$_GET['id_barang'];

$barang = select("SELECT * FROM barang WHERE id_barang = $id_barang")[0];

if (isset($_POST['ubah'])){
  if (create_barang($_POST) > 0) {
    echo "<script>
            alert('Data barang berhasil diubah');
            document.location.href ='databarang.php';
         </script>";
    } else {
    echo "<script>
            alert('Data barang gagal diubah');
            document.location.href ='databarang.php';
        </script>";
    }
}

?>

<div class="container mt-5">
    <h1>ubah barang</h1>
    <hr>
    <form action="" method="post">
        <div class="mb-3">
            <label for="nama" class="form-label">Nama Barang</label>
            <input type="text" class="form-control" id="nama" name="nama" value="<?= $barang['nama']; ?>" placeholder="Nama barang..." required>
        </div>

        <div class="mb-3">
            <label for="jumlah" class="form-label">jumlah</label>
            <input type="number" class="form-control" id="jumlah" name="jumlah" value="<?= $barang['jumlah']; ?>" placeholder="jumlah barang..." required>
        </div>
        <div class="mb-3">
            <label for="harga" class="form-label">harga barang</label>
            <input type="number" class="form-control" id="harga" name="harga" value="<?= $barang['harga']; ?>" placeholder="harga barang..." required>
        </div>
        <button type="submit" name="ubah" class="btn btn-primary" style="float: right;">ubah</button>
    </form>
</div>

<?php
include 'layout/footer.php';
?>