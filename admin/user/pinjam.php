<?php
include "../koneksi.php";

$id = $_GET['id'];

$data = mysqli_query(db(),"SELECT * FROM benda WHERE id='$id'");
$d = mysqli_fetch_array($data);
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
        <table>
            <form action="proses_pinjam.php" method="POST">
                <input type="hidden" name="id_barang" value="<?= $d['id']; ?>">
                <tr>
                    <th colspan="2">FORM PEMINJAMAN BARANG</th>
                </tr>
                <tr>
                    <td>Nama Barang :</td>
                    <td><input type="text" value="<?php echo $d['nama_barang']; ?>" readonly></td>
                </tr>
                <tr>
                    <td>Nama Peminjam : </td>
                    <td><input type="text" name="nama" required></td>
                </tr>
                <tr>
                    <td>Tanggal Pinjam : </td>
                    <td><input type="date" name="tanggal"></td>
                </tr>
                <tr>
                    <td colspan="2"><button type="submit">Ajukan Peminjaman</button></td>
                </tr>
        </form>
    </table>
    </body>
</html>