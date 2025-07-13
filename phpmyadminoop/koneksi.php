<?php
$host = "localhost"; // Ganti dengan hostname Anda
$user = "root"; // Ganti dengan username database Anda
$pass = ""; // Ganti dengan password database Anda
$dbname = "firstdata"; // Ganti dengan nama database Anda

// Membuat koneksi
$conn = mysqli_connect($host, $user, $pass, $dbname);

// Cek koneksi
if (!$conn) {
  die("Koneksi gagal: " . mysqli_connect_error());
}
echo "Koneksi berhasil"; // Hapus atau ganti pesan ini setelah pengecekan

// Contoh penggunaan koneksi (misalnya, memilih database)
// mysqli_select_db($conn, $dbname); // Tidak perlu jika sudah menggunakan nama database di mysqli_connect

// Tutup koneksi (opsional, tapi disarankan setelah selesai)
// mysqli_close($conn);
?>