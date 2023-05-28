<?php
// Mengambil data dari database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "bukutamu_ayi";

// Membuat koneksi
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Koneksi gagal: ");
}
