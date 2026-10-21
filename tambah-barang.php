<?php

include 'layout/header.php';
if (isset($_POST['tambah'])){
  if (create_barang($_POST) > 0) {
    echo "<script>
            alert('Data barang berhasil ditambahkan');
            document.location.href ='databarang.php';
         </script>";
    } else {
    echo "<script>
            alert('Data barang gagal ditambahkan');
            document.location.href ='databarang.php';
        </script>";
    }
}

?>

<div class="container mt-5">
    <h1>Tambah Data Barang</h1>
    <hr>
    <form action="" method="post">
        <div class="mb-3">
            <label for="nama" class="form-label">Nama Barang</label>
            <input type="text" class="form-control" id="nama" name="nama" placeholder="Nama barang..." required>
        </div>

        <div class="mb-3">
            <label for="jumlah" class="form-label">jumlah</label>
            <input type="number" class="form-control" id="jumlah" name="jumlah" placeholder="jumlah barang..." required>
        </div>
        <div class="mb-3">
            <label for="harga" class="form-label">harga barang</label>
            <input type="number" class="form-control" id="harga" name="harga" placeholder="harga barang..." required>
        </div>
        <input type="submit" name="tambah"  value="tambah" class="btn btn-primary" style="float: right;">
    </form>
</div>

<?php
include 'layout/footer.php';
?>