<?php
$servername = "192.168.145.154";  // Ganti sesuai dengan alamat server MySQL Anda
$username = "root";     // Ganti dengan nama pengguna MySQL Anda
$password = "";     // Ganti dengan kata sandi MySQL Anda
$dbname = "db_parkir";       // Ganti dengan nama database Anda

// Buat koneksi ke database
$conn = new mysqli($servername, $username, $password, $dbname);

// Periksa koneksi
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Mengambil data dari tabel users
$sql = "SELECT * FROM `t_kendaraan`";
$result = $conn->query($sql);


// Menyimpan data dalam array
$data = array();
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $data[] = $row;
        
    }
    
}

// Mengembalikan data dalam format JSON
echo json_encode($data);

$conn->close();
?>