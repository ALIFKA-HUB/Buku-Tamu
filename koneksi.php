<?php
define('HOST_NAME', 'localhost');
define('USER_NAME', 'root');
define('PASSWORD', '');
define('DB_NAME', 'app_bukutamu');

$koneksi = mysqli_connect(HOST_NAME, USER_NAME, PASSWORD, DB_NAME);

// cek koneksi
if (!$koneksi) {
    die("Koneksi gagal: " . mysqli_connect_error());
}
?>
