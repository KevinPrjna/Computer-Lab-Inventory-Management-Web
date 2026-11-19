<?php
function db(){
    // pake fungsi mysqli
    $koneksi = mysqli_connect(
        "localhost",
        "root",
        "",
        "inventaris"
    );
    if($koneksi->connect_errno == 1){
        return $koneksi->connect_error;
    }else{
        return $koneksi;
    }
}

function cek_data($data){
    if(isset($_GET[$data])==true){
        if($_GET[$data] == NULL){
            return ;
        }else{
            return $_GET[$data];
        }
    }else{
        return ;
    }
}

function tampil(){
    $query = "SELECT benda.*, peminjaman.status
    FROM benda
    LEFT JOIN peminjaman
    ON benda.id = peminjaman.id_barang
    GROUP BY benda.id";

$data = mysqli_query(db(), $query);
return $data;
}

    function tambah($data){

    $koneksi = db();

    $nama = $_GET['benda'] ?? '';
    $jumlah = $_GET['jumlah'] ?? 0;
    $kondisi = $_GET['kondisi'] ?? '';
    $keterangan = $_GET['keterangan'] ?? '';

    if($nama == '' || $jumlah <= 0 || $kondisi == ''){
        echo "<script>alert('Data belum lengkap!'); location.href='index.php';</script>";
        return;
    }

    $query = "
    INSERT INTO benda (nama_barang, jumlah_barang, kondisi_barang, keterangan)
    VALUES ('$nama', '$jumlah', '$kondisi', '$keterangan')
    ON DUPLICATE KEY UPDATE
    jumlah_barang = jumlah_barang + VALUES(jumlah_barang)
    ";

    mysqli_query($koneksi, $query);

    echo "<script>alert('Data berhasil diproses!'); location.href='index.php';</script>";
}

function rubah($id, $benda_baru, $kondisi_baru, $keterangan_baru){
    $query = "UPDATE benda SET nama_barang = '$benda_baru' , kondisi_barang = '$kondisi_baru' , keterangan = '$keterangan_baru' WHERE id = '$id'";
    $data = mysqli_query(db(), $query);
    ?>
    <script>
        alert("Data telah dirubah!");
        location.href = "index.php";
    </script>
    <?php
}

if(cek_data("dor") == "Kirim"){
tambah(cek_data("benda"));
}else if(cek_data("dor") == "Rubah"){
    rubah(cek_data("id_upd"), cek_data("benda_upd"), cek_data("kondisi_upd"), cek_data("keterangan_upd"));
}
?>