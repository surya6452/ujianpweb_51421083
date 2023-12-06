<?php
include "koneksi.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST["id"];
    $nama = $_POST["nama"];
    $npm = $_POST["npm"];
    $kelas = $_POST["kelas"];

    $sql = "UPDATE mahasiswa SET nama='$nama', npm='$npm', kelas='$kelas' WHERE id=$id";

    if ($conn->query($sql) === TRUE) {
        echo "Data berhasil diupdate.";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>
<br>
<a href="index.php">Kembali</a>
