<?php

///include 'koneksi.php';


///$nama = $_POST['nama'];
///$email = $_POST['email'];
///$password = $_POST['pasword'];


// Menggunakan koneksi yang sudah dibuat sebelumnya

// Menyiapkan perintah SQL untuk memasukkan data
///$sql = "INSERT INTO users (nama, email, password) VALUES ($nama, $email, $password)";

// Menyiapkan prepared statement
///$stmt = $conn->prepare($sql);

// Mengikat parameter ke perintah SQL
///$stmt->bind_param("ss", $nama, $email, $password);

// Menjalankan perintah SQL
///if ($stmt->execute()) {
   /// echo "Data berhasil disimpan.";
///} else {
   /// echo "Error: " . $stmt->error;
///}

// Menutup statement
///$stmt->close();

// Menutup koneksi
///$conn->close();

    // Koneksi ke database
$mysqli = new mysqli("localhost", "root", "", "firstdata");
// Cek koneksi
if ($mysqli->connect_error) {
    die("Koneksi gagal: " . $mysqli->connect_error);
}
// Memeriksa apakah data POST ada
if (isset($_POST['nama']) && isset($_POST['email']) && isset($_POST['pasword'])) {
    // Membersihkan input
    $nama = $mysqli->real_escape_string($_POST['nama']);
    $email = $mysqli->real_escape_string($_POST['email']);
    $password = $mysqli->real_escape_string($_POST['pasword']);
    
    // ENKRIPSI PASSWORD (disarankan)
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);
    // Menyiapkan pernyataan SQL dengan prepared statement
    $sql = "INSERT INTO data1 (nama, email, pasword) VALUES (?, ?, ?)";
    $stmt = $mysqli->prepare($sql);
    // Cek apakah prepare berhasil
    if ($stmt === false) {
        die("Kesalahan dalam prepare statement: " . $mysqli->error);
    }
    // Bind parameter dengan BENAR
    $stmt->bind_param("sss", $nama, $email, $hashed_password);
    // Eksekusi pernyataan
    if ($stmt->execute()) {
        echo "Data berhasil disimpan!";
    } else {
        echo "Error: " . $stmt->error;
    }
    // Tutup pernyataan
    $stmt->close();
} else {
    die("Data tidak lengkap! Pastikan mengisi seluruh form.");
}
// Menutup koneksi
$mysqli->close();
?>