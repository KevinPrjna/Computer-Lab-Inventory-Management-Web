<?php include 'koneksi.php'; ?>
<!DOCTYPE html>
<html>
<head>
    <title>Halaman Admin</title>
    <style>

        .tabel {
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

        .logo, h1{
            display:flex;
            justify-content:center;
            align-items:center;
        }
        .logo, img{
            width:100x;
            height:100px;
        }
        a{
            text-decoration:none;
            color:black;
        }
    </style>
</head>
<body>
    <div class="logo">
        <img src="logo tc.png">
        <h1 align="center">INVENTARIS LAB KOMPUTER</h1>
    </div>
        <hr>
        <table>
        <form action="" method="get">
                <th colspan="2">TAMBAH PERANGKAT</th>
            <tr>
                <td><label for="">Nama Perangkat :</label></td>
                <td><input type="text" name="benda"></td>
            </tr>
            <tr>
                <td><label for="">Jumlah :</label></td>
                <td><input type="number" name="jumlah" id=""></td>
            </tr>
            <tr>
                <td><label for="">Kondisi :</label></td>
                <td><input type="radio" name="kondisi" value="Baik"> Baik
                    <input type="radio" name="kondisi" value="Rusak"> Rusak </td>
            </tr>
            <tr>
                <td><label for="">Keterangan :</label></td>
                <td><textarea name="keterangan" rows="3" cols="30"></textarea></td>
            </tr>
            <tr>
                <td><a href="index.php">
                    <button>Bersihkan</button>
                    </a>
                </td>
                <td><input type="submit" name="dor" value="Kirim"></td>
            </tr>
            <tr>
                <td colspan="2"><a href="peminjaman.php">Lihat Pengajuan Peminjaman</a></td>
            </tr>
        </form>
        </table>
<table class="tabel">
    <tr>
        <th rowspan="2">No</th>
        <th rowspan="2">Nama Barang</th>
        <th rowspan="2">Jumlah</th>
        <th rowspan="2">Kondisi Barang</th>
        <th rowspan="2">Keterangan</th>
        <th rowspan="2" colspan="2">Edit</th>

    </tr>
    <?php
    $num = 1;
    foreach(tampil() as $z){
    ?>
    <tr>
    </tr>
    <tr>
        <td><?= $num;?></td>
        <td><?= $z['nama_barang']; ?></td>
        <td><?= $z['jumlah_barang']; ?></td>
        <td><?= $z['kondisi_barang']; ?></td>
        <td><?= $z['keterangan']; ?></td>
        <td><a href="hapus.php?id=<?= $z['id'];?>">Hapus</a></td>
        <td><a href="rubah.php?id=<?= $z['id'];?>">Rubah</a></td>
    </tr>
    <?php
    $num++;
    }?>
</table>


</body>
</html>