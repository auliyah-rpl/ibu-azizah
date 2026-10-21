<?php

include 'config/app.php';

// menerima id barang yang dipilih pengguna
$id_barang = (int)$_GET['id_barang'];

if (delete_barang($id_barang) > 0) {
    echo "<script>
            alert('Data barang berhasil dihapus');
            document.location.href ='databarang.php';
         </script>";
} else {
    echo "<script>
            alert('Data barang gagal dihapus');
            document.location.href ='databarang.php';
         </script>";
}