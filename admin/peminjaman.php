<?php
include "koneksi.php";

$data = mysqli_query(db(),"SELECT peminjaman.*, benda.nama_barang 
FROM peminjaman 
JOIN benda ON peminjaman.id_barang = benda.id");
?>
<html>
    <head>
        <title></title>

        <style>
        table {
            border-collapse: collapse;
            width: 100%;
        }
        th, td {
            border: 1px solid black;
            padding: 8px;
            text-align: center;
        }
        th {
            background-color: #ddd;
        }
        </style>
    </head>
    <body>
        
        <h2 align="center">Data Pengajuan Peminjaman</h2>
        <hr>
    <table>
        <tr>
            <th>No</th>
            <th>Barang</th>
            <th>Peminjam</th>
            <th>Status</th>
            <th>Aksi</th>
        </tr>

        <?php
$no = 1;
while($d = mysqli_fetch_array($data)){
?>

<tr>
    <td><?= $no++; ?></td>
    <td><?= $d['nama_barang']; ?></td>
    <td><?= $d['nama_peminjam']; ?></td>
    <td><?= $d['status']; ?></td>
    
    <td>
        <a href="setujui.php?id=<?= $d['id_pinjam']; ?>">Setujui</a> |
        <a href="tolak.php?id=<?= $d['id_pinjam']; ?>">Tolak</a>
    </td>

</tr>
<tr>
    <td colspan="5"><a href="index.php">Kembali</a></td>
</tr>

<?php } ?>
</table>
</body>
</html>