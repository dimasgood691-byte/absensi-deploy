<?php
include "koneksi3.php";

// function tambah data
function tambahAbsensi($conn, $nama, $tanggal, $status) {

    $nama = htmlspecialchars($nama);
    $tanggal = htmlspecialchars($tanggal);
    $status = htmlspecialchars($status);

    $query = "INSERT INTO absensi (nama, tanggal, status) VALUES ('$nama', '$tanggal', '$status')";

    return mysqli_query($conn, $query);
}

if (isset($_POST['submit'])) {

    $nama = $_POST['nama'];
    $tanggal = $_POST['tanggal'];   
    $status = $_POST['status'];

    if (tambahAbsensi($conn, $nama, $tanggal, $status)) {
        echo "<script>
                alert('Data berhasil disimpan!');
                alert('Lihat Data Yang Tersimpan');
                document.location.href='table.php';
              </script>";
    } else {
        echo "Data gagal disimpan!";
    }
}
?>