<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama = $_POST["nama"];
    $email = $_POST["email"];
    $pesan = $_POST["pesan"];
} else {
    header("Location: index.html"); // Redirect jika akses langsung ke file ini tanpa pengiriman formulir
    exit();
}
?>