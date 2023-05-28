<?php
// Mengambil data yang dikirim melalui form
$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];

include "koneksi.php";

// Menyimpan data ke dalam tabel tamu
$sql = "INSERT INTO buku_tamu (name, email, message) VALUES ('$name', '$email', '$message')";
if ($conn->query($sql) === TRUE) {
    header('Location: guestbook.php');
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Menutup koneksi
$conn->close();

?>