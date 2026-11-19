<?php
include 'koneksi.php';

// mengambil idnya
$id = cek_data("id");

// cari identitas
$query = "SELECT * FROM benda WHERE id='$id'";

// menyambungkan sql dengan PHP
$data = mysqli_query(db(), $query);

// mengambil nama
$nama = mysqli_fetch_assoc($data);
?>
<html>
    <head>
        <title>Rubah</title>
        <style>
            #tombol{
                width:100%;
                font-weight:bold;
            }
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
        </style>
    </head>
    <body>
        <table class="tabel">
            <th colspan="2"><h1>Update Data</h1></th>
            <form action="" method="GET">
            <tr>
                <td><label for="">Perangkat Terbaru :</label></td>
                <input type="hidden" name="id_upd" value="<?= cek_data("id"); ?>">
                <td><input type="text" name="benda_upd" placeholder="<?= $nama['nama_barang']; ?>"></td>
            </tr>
            <tr>
                <td><label for="">Kondisi Terbaru :</label></td>
                <td><input type="radio" name="kondisi_upd" value="Baik">Baik <input type="radio" name="kondisi_upd" value="Rusak">Rusak</td>
            </tr>
            <tr>
                <td><label for="">Keterangan Terbaru :</label></td>
                <td><textarea name="keterangan_upd" rows="3" cols="30"></textarea></td>
            </tr>
            <tr>
                <td colspan="2"><input type="submit" name="dor" value="Rubah" id="tombol"></td>
            </tr>
        </form>
        </table>
    </body>
</html>