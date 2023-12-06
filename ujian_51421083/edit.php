<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Data</title>
</head>
<body>
    <?php
    include "koneksi.php";

    if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET['id'])) {
        $id = $_GET['id'];
        $result = $conn->query("SELECT * FROM mahasiswa WHERE id=$id");

        if ($result->num_rows == 1) {
            $row = $result->fetch_assoc();
            $nama = $row['nama'];
            $npm = $row['npm'];
            $kelas = $row['kelas'];
        } else {
            echo "Data tidak ditemukan.";
            exit();
        }
    } else {
        echo "Permintaan tidak valid.";
        exit();
    }
    ?>

    <h1>Edit Data Mahasiswa</h1>
    <form action="update.php" method="post">
        <input type="hidden" name="id" value="<?php echo $id; ?>">
        <label>Nama:</label>
        <input type="text" name="nama" value="<?php echo $nama; ?>" required>
        <br>
        <label>NPM:</label>
        <input type="text" name="npm" value="<?php echo $npm; ?>" required>
        <br>
        <label>Kelas:</label>
        <input type="text" name="kelas" value="<?php echo $kelas; ?>" required>
        <br>
        <button type="submit">Simpan Perubahan</button>
    </form>
    <br>
    <a href="index.php">Kembali</a>
</body>
</html>
