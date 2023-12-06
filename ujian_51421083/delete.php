<?php
include "koneksi.php";

if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET['id'])) {
    $id = $_GET['id'];

    $sql = "DELETE FROM mahasiswa WHERE id=$id";

    if ($conn->query($sql) === TRUE) {
        echo "Data berhasil dihapus.";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>
<br>
<a href="index.php">Kembali</a>
