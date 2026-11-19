<?php include '../koneksi.php'; ?>
<html>
<head>
<title>Inventaris Lab Komputer</title>

<style>
.tabel{
border-collapse: collapse;
width:100%;
}
th,td{
border:1px solid black;
padding:8px;
text-align:center;
}
th{
background-color:#ddd;
}

.logo,h1{
display:flex;
justify-content:center;
align-items:center;
}

.logo img{
width:100px;
height:100px;
}
</style>

</head>

<body>

<div class="logo">
<img src="logo tc.png">
<h1>INVENTARIS LAB KOMPUTER</h1>
</div>

<hr>

<table class="tabel">

<tr>
<th>No</th>
<th>Nama Barang</th>
<th>Jumlah</th>
<th>Kondisi Barang</th>
<th>Keterangan</th>
<th>Peminjaman</th>
<th>Status</th>
</tr>

<?php
$num = 1;
foreach(tampil() as $z){
?>

<tr>
<td><?= $num; ?></td>
<td><?= $z['nama_barang']; ?></td>
<td><?= $z['jumlah_barang']; ?></td>
<td><?= $z['kondisi_barang']; ?></td>
<td><?= $z['keterangan']; ?></td>
<td><a href="pinjam.php?id=<?= $z['id']; ?>">Ajukan</a></td>
<td><?= $z['status'] ?? '-'; ?></td>
</tr>

<?php
$num++;
}
?>

</table>

</body>
</html>