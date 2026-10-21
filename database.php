<?php

    $db= mysqli_connect('127.0.0.1', 'root', '', 'crud-php');

//cek koneksi
    if (!$db) {
        echo "gagal";
    }else {
        // echo 'berhasil'; <-- HAPUS ATAU TAMBAHKAN GARIS MIRING KEMBAR INI
    }

?>