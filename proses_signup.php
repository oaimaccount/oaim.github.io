<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $nama = $_POST["nama"];
  $email = $_POST["email"];
  $password = password_hash($_POST["password"], PASSWORD_DEFAULT); // Enkripsi password

  //  Koneksi ke database (contoh)
  //$conn = new mysqli("localhost", "username", "password", "database");
  $conn = new mysqli("localhost", "username", "password", "dbdata");
  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }

  $sql = "INSERT INTO users (nama, email, password) VALUES ('$nama', '$email', '$password')";

  if ($conn->query($sql) === TRUE) {
    echo "Pendaftaran berhasil!";
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }

  $conn->close();
}
?>
