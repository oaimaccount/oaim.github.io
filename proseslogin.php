<?php
// Koneksi ke database
$servername = "localhost"; // Ganti dengan server Anda
$username = "root"; // Ganti dengan username database Anda
$password = ""; // Ganti dengan password database Anda
$dbname = "firstdata"; // Ganti dengan nama database Anda

$conn = new mysqli($servername, $username, $password, $dbname);

// Cek koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

// Proses login
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Pastikan untuk memeriksa apakah 'nama' dan 'pasword' ada dalam $_POST
    if (isset($_POST['nama']) && isset($_POST['pasword'])) {
        $nama = $_POST['nama'];
        $password = $_POST['pasword'];

        // Mencari pengguna di database
        $stmt = $conn->prepare("SELECT pasword FROM data1 WHERE nama = ?");
        
        // Cek apakah prepare berhasil
        if ($stmt) {
            $stmt->bind_param("s", $nama); // Ganti $username dengan $nama
            $stmt->execute();
            $stmt->store_result();

            if ($stmt->num_rows > 0) {
                $stmt->bind_result($hashed_password);
                $stmt->fetch();
                
                // Verifikasi password
                if (password_verify($password, $hashed_password)) {
                     // Redirect ke halaman selanjutnya
                    header("Location: indexx.html"); // Ganti dengan nama halaman yang diinginkan
                    exit(); // Pastikan untuk keluar setelah redirect
                } else {
                    echo "<h3>Login Gagal! Username atau Password salah.</h3>";
                }
            } else {
                echo "<h3>Login Gagal! Username atau Password salah.</h3>";
            }
            $stmt->close();
        } else {
            echo "Kesalahan dalam query: " . $conn->error;
        }
    } else {
        echo "<h3>Silakan masukkan username dan password.</h3>";
    }
}

$conn->close();
?>
