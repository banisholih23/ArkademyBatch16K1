<?php

include("conn.php");

// cek apakah tombol simpan sudah diklik atau blum?
if(isset($_POST['edit'])){

    // ambil data dari formulir
    $id = $_POST['id'];
    $casir = $_POST['casir'];
    $cat = $_POST['cat'];
    $nama = $_POST['nama_p'];
    $price = $_POST['price'];
   

    // buat query update
    $sql = "UPDATE Product SET name_prd='$nama', price='$price', id_category='$cat', id_cashier='$casir' WHERE id='$id'";
    $query = mysqli_query($db, $sql);

    // apakah query update berhasil?
    if( $query ) {
        // kalau berhasil alihkan ke halaman index.php dengan status=sukses
        header('Location: index.php?status=sukses');
    } else {
        // kalau gagal alihkan ke halaman indek.php dengan status=gagal
        header('Location: index.php?status=gagal');
    }


} else {
    die("Akses dilarang...");
}

?>