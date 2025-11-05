<?php
include 'db.php';
$id = $_GET['id'];
$data = $conn->query("SELECT * FROM siswa WHERE id=$id")->fetch_assoc();

if (isset($_POST['update'])) {
    $nama = $_POST['nama'];
    $kelas = $_POST['kelas'];
    $jurusan = $_POST['jurusan'];
    $alamat = $_POST['alamat'];

    $sql = "UPDATE siswa SET 
                nama='$nama',
                kelas='$kelas',
                jurusan='$jurusan',
                alamat='$alamat'
            WHERE id=$id";

    if ($conn->query($sql)) {
        echo "<script>alert('Data berhasil diperbarui!'); window.location='index.php';</script>";
    } else {
        echo "<p>Gagal memperbarui data: " . $conn->error . "</p>";
    }
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Edit Data Siswa</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h2>Edit Data Siswa</h2>
    <form method="post">
        <label>Nama:</label>
        <input type="text" name="nama" value="<?= $data['nama'] ?>" required>
        
        <label>Kelas:</label>
        <input type="text" name="kelas" value="<?= $data['kelas'] ?>" required>
        
        <label>Jurusan:</label>
        <input type="text" name="jurusan" value="<?= $data['jurusan'] ?>" required>
        
        <label>Alamat:</label>
        <textarea name="alamat"><?= $data['alamat'] ?></textarea>
        
        <button type="submit" name="update">Update</button>
        <a href="index.php" class="btn">Kembali</a>
    </form>
</body>
</html>
