<?php

include("conn.php");

// cek apakah tombol daftar sudah diklik atau blum?
if(isset($_POST['add'])){

    // ambil data dari formulir
    $casir = $_POST['casir'];
    $cat = $_POST['cat'];
    $nama = $_POST['nama_p'];
    $price = $_POST['price'];
   

    // buat query
    $sql = "INSERT INTO Product (name_prd, price, id_category, id_cashier) VALUE ('$nama', '$price', '$cat', '$casir')";
    $query = mysqli_query($db, $sql);

    // apakah query simpan berhasil?
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