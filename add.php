<?php include 'db.php'; ?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Tambah Data Siswa</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h2>Tambah Data Siswa</h2>
    <form action="" method="post">
        <label>Nama:</label>
        <input type="text" name="nama" required>
        
        <label>Kelas:</label>
        <input type="text" name="kelas" required>
        
        <label>Jurusan:</label>
        <input type="text" name="jurusan" required>
        
        <label>Alamat:</label>
        <textarea name="alamat"></textarea>
        
        <button type="submit" name="submit">Simpan</button>
        <a href="index.php" class="btn">Kembali</a>
    </form>

<?php
if (isset($_POST['submit'])) {
    $nama = $_POST['nama'];
    $kelas = $_POST['kelas'];
    $jurusan = $_POST['jurusan'];
    $alamat = $_POST['alamat'];

    $sql = "INSERT INTO siswa (nama, kelas, jurusan, alamat) 
            VALUES ('$nama', '$kelas', '$jurusan', '$alamat')";

    if ($conn->query($sql)) {
        echo "<script>alert('Data berhasil ditambahkan!'); window.location='index.php';</script>";
    } else {
        echo "<p>Gagal menambahkan data: " . $conn->error . "</p>";
    }
}
?>
</body>
</html>
