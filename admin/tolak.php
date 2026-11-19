<?php
include "koneksi.php";

$id = $_GET['id'];

mysqli_query(db(),"UPDATE peminjaman 
SET status='Ditolak' 
WHERE id_pinjam='$id'");

header("location:peminjaman.php");
?>