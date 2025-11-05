<?php
include 'db.php';

if (isset($_GET['id'])) {
    $id = intval($_GET['id']); // pastikan id berupa angka

    $sql = "DELETE FROM siswa WHERE id = $id";

    if ($conn->query($sql)) {
        echo "<script>alert('Data berhasil dihapus!'); window.location='index.php';</script>";
    } else {
        echo "Gagal menghapus data: " . $conn->error;
    }
} else {
    echo "Parameter ID tidak ditemukan!";
}
?>
