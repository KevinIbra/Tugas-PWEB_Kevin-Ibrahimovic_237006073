<?php
// filepath: d:\PWEB\HTML\237006073\crud.php

// Koneksi ke database
$host = 'localhost';
$user = 'root'; // Ganti dengan username database Anda
$password = ''; // Ganti dengan password database Anda
$dbname = 'portfolio';

$conn = new mysqli($host, $user, $password, $dbname);

// Periksa koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

// Tambah data
if (isset($_POST['add'])) {
    $nama = $_POST['nama'];
    $pesan = $_POST['pesan'];

    $sql = "INSERT INTO testimoni (nama, pesan) VALUES ('$nama', '$pesan')";
    if ($conn->query($sql) === TRUE) {
        header("Location: crud.php");
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

// Hapus data
if (isset($_GET['delete'])) {
    $id = $_GET['delete'];

    $sql = "DELETE FROM testimoni WHERE id=$id";
    if ($conn->query($sql) === TRUE) {
        header("Location: crud.php");
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

// Ambil data untuk edit
$editData = null;
if (isset($_GET['edit'])) {
    $id = $_GET['edit'];

    $result = $conn->query("SELECT * FROM testimoni WHERE id=$id");
    $editData = $result->fetch_assoc();
}

// Update data
if (isset($_POST['update'])) {
    $id = $_POST['id'];
    $nama = $_POST['nama'];
    $pesan = $_POST['pesan'];

    $sql = "UPDATE testimoni SET nama='$nama', pesan='$pesan' WHERE id=$id";
    if ($conn->query($sql) === TRUE) {
        header("Location: crud.php");
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD Testimoni</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container my-5">
    <h1 class="text-center">CRUD Testimoni</h1>

    <!-- Form Tambah/Edit -->
    <form method="POST" class="my-4">
        <input type="hidden" name="id" value="<?= $editData['id'] ?? '' ?>">
        <div class="mb-3">
            <label for="nama" class="form-label">Nama</label>
            <input type="text" class="form-control" id="nama" name="nama" value="<?= $editData['nama'] ?? '' ?>" required>
        </div>
        <div class="mb-3">
            <label for="pesan" class="form-label">Pesan</label>
            <textarea class="form-control" id="pesan" name="pesan" rows="3" required><?= $editData['pesan'] ?? '' ?></textarea>
        </div>
        <?php if ($editData): ?>
            <button type="submit" name="update" class="btn btn-primary">Update</button>
        <?php else: ?>
            <button type="submit" name="add" class="btn btn-success">Tambah</button>
        <?php endif; ?>
    </form>

    <!-- Tabel Data -->
    <table class="table table-bordered">
        <thead>
        <tr>
            <th>ID</th>
            <th>Nama</th>
            <th>Pesan</th>
            <th>Tanggal</th>
            <th>Aksi</th>
        </tr>
        </thead>
        <tbody>
        <?php
        $result = $conn->query("SELECT * FROM testimoni ORDER BY tanggal DESC");
        while ($row = $result->fetch_assoc()):
        ?>
            <tr>
                <td><?= $row['id'] ?></td>
                <td><?= $row['nama'] ?></td>
                <td><?= $row['pesan'] ?></td>
                <td><?= $row['tanggal'] ?></td>
                <td>
                    <a href="crud.php?edit=<?= $row['id'] ?>" class="btn btn-warning btn-sm">Edit</a>
                    <a href="crud.php?delete=<?= $row['id'] ?>" class="btn btn-danger btn-sm" onclick="return confirm('Yakin ingin menghapus?')">Hapus</a>
                </td>
            </tr>
        <?php endwhile; ?>
        </tbody>
    </table>
</div>
</body>
</html>