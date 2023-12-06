<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data</title>
</head>
<body>
    <h1>Tambah Data Mahasiswa</h1>
    <form action="process.php" method="post">
        <label>Nama:</label>
        <input type="text" name="nama" required>
        <br>
        <label>NPM:</label>
        <input type="text" name="npm" required>
        <br>
        <label>Kelas:</label>
        <input type="text" name="kelas" required>
        <br>
        <button type="submit">Tambah</button>
    </form>
    <br>
    <a href="index.php">Kembali</a>
</body>
</html>
