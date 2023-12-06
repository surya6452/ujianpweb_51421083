<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD PHP</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="container">
        <h1>Data Mahasiswa</h1>
        <a href="add.php">Tambah Data</a>

        <?php
        include "koneksi.php";

        $result = $conn->query("SELECT * FROM mahasiswa");

        if ($result->num_rows > 0) {
            echo "<table>
                    <tr>
                        <th>Nama</th>
                        <th>NPM</th>
                        <th>Kelas</th>
                        <th>Aksi</th>
                    </tr>";

            while ($row = $result->fetch_assoc()) {
                echo "<tr>
                        <td>{$row['nama']}</td>
                        <td>{$row['npm']}</td>
                        <td>{$row['kelas']}</td>
                        <td>
                            <a href='edit.php?id={$row['id']}'>Edit</a>
                            <a href='delete.php?id={$row['id']}' onclick='return confirm(\"Apakah Anda yakin ingin menghapus data ini?\")'>Delete</a>
                        </td>
                    </tr>";
            }

            echo "</table>";
        } else {
            echo "Tidak ada data.";
        }

        $conn->close();
        ?>
    </div>
</body>
</html>
