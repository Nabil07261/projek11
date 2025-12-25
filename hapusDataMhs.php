<?php
    // Memanggil file koneksi database
    require "koneksi.php";
    
    // Ambil ID dari parameter URL
    $id = $_GET["kode"];
    
    // Query untuk menghapus data
    $sqlb = "DELETE FROM mhs WHERE id=$id";
    mysqli_query($koneksi, $sqlb);
    
    // Redirect ke halaman tampil data
    header("location:tampilDataMhs.php");
?>