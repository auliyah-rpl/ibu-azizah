<?php

$koneksi = mysqli_connect("localhost", "root", "", "crud_php");

if (!$koneksi) {
    die("Koneksi gagal: " . mysqli_connect_error());
}

?>