<?php
// config/database.php

$host = 'localhost';
$user = 'root';
$pass = '';
$db	= 'penjualan';

// Inisialisasi koneksi dengan MySQLi secara Object Oriented
$koneksi = new mysqli($host, $user, $pass, $db);

if (!$koneksi) {
    die("koneksi database: " . mysqli_connect_error());

}
?>