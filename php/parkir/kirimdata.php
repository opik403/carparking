<?php
$servername = "192.168.145.154"; // Ganti sesuai dengan alamat server MySQL Anda
$username = "root"; // Ganti dengan nama pengguna MySQL Anda
$password = ""; // Ganti dengan kata sandi MySQL Anda
$dbname = "db_parkir"; // Ganti dengan nama database Anda

// Membuat koneksi
$conn = new mysqli($servername, $username, $password, $dbname);

// Memeriksa koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST["idsensor"];
    $status = $_POST["status"];

    // Query UPDATE
    $sql = "UPDATE t_kendaraan SET status = $status WHERE id_sensor = $id";
// print($sql);
    if ($conn->query($sql) === TRUE) {
        echo "Data berhasil diupdate";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

} else {

    echo "Invalid request.";
}


// Menutup koneksi
$conn->close();
?>