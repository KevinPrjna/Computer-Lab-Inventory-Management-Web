<?php
include 'koneksi.php';

function hapus($data){
    $query = "DELETE FROM benda WHERE id='$data'";
    mysqli_query(db(), $query);
}

hapus(cek_data("id"));

?>
<script>
    alert("Data Telah Dihapus!");
    location.href="index.php";
</script>
<?php

?>