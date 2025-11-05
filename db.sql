CREATE DATABASE IF NOT EXISTS db_siswa;
USE db_siswa;

CREATE TABLE siswa (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nama VARCHAR(100) NOT NULL,
    kelas VARCHAR(50) NOT NULL,
    jurusan VARCHAR(50) NOT NULL,
    alamat TEXT
);
