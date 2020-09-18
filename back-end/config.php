<?php

$servername = "localhost";
$database = "test_mkm";
$username = "root";
$password = "12345678";

$conn = mysqli_connect($servername, $username, $password, $database);
if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
}
