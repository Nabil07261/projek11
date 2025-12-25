<?php
    require 'koneksi.php';
    
    // Ambil data dari form
    $id = $_POST['id'];
    $xnim = $_POST['nim'];
    $xnama = $_POST['nama'];
    $xtempatLahir = $_POST['tempatLahir'];
    $xtanggalLahir = $_POST['tanggalLahir'];
    $xjmlSaudara = $_POST['jumlahSaudara'];
    $xalamat = $_POST['alamat'];
    $xkota = $_POST['kota'];
    $xjenisKelamin = $_POST['jenisKelamin'];
    $xstatusKeluarga = $_POST['statusKeluarga'];
    $xhobi = isset($_POST['hobi']) ? implode(',', $_POST['hobi']) : '';
    $xemail = $_POST['email'];
    
    // Validasi ID
    if (empty($id)) {
        die("ERROR: ID tidak ditemukan");
    }
    
    // Query untuk update data
    $sql1 = "UPDATE mhs SET
                nim='$xnim',
                nama='$xnama',
                tempatLahir='$xtempatLahir',
                tanggalLahir='$xtanggalLahir',
                jmlSaudara='$xjmlSaudara',
                alamat='$xalamat',
                kota='$xkota',
                jenisKelamin='$xjenisKelamin',
                statusKeluarga='$xstatusKeluarga',
                hobi='$xhobi',
                email='$xemail'
             WHERE id='$id'";
    
    mysqli_query($koneksi, $sql1) or die(mysqli_error($koneksi));
    header('location:tampilDataMhs.php');
?>