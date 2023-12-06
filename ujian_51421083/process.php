<?php
include "koneksi.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama = $_POST["nama"];
    $npm = $_POST["npm"];
    $kelas = $_POST["kelas"];

    $sql = "INSERT INTO mahasiswa (nama, npm, kelas) VALUES ('$nama', '$npm', '$kelas')";

    if ($conn->query($sql) === TRUE) {
        echo "Data berhasil ditambahkan.";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>
<br>
<a href="index.php">Kembali</a>
