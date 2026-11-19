<?php
include "../koneksi.php";

$id_barang = $_POST['id_barang'];
$nama = $_POST['nama'];

$query = "INSERT INTO peminjaman (id_barang, nama_peminjam, status)
VALUES ('$id_barang','$nama','Menunggu')";

mysqli_query(db(), $query);

echo "<script>
alert('Pengajuan berhasil!');
location.href='dashboard.php';
</script>";
?>