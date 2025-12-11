<?php

include "koneksi.php";
// ambil data dan sanitasi
function bersih($data){
        return htmlspecialchars($data, ENT_QUOTES, 'UTF-8');
}

//Ambil password asli dari input form
$xnim           = bersih($_POST['nim']?? '');
$xnama          = bersih($_POST['nama']?? '');
$xtempatLahir   = bersih($_POST['tempatLahir']?? '');
$xtanggalLahir  = bersih($_POST['tanggalLahir']?? '');
$xtglLahir      = date("m/d/Y", strtotime($xtanggalLahir));
$xjmlSaudara    = bersih($_POST['jmlSaudara']?? '');
$xalamat        = bersih($_POST['alamat']?? '');
$xkota          = bersih($_POST['kota']?? '');
$xjk            = bersih($_POST['jk']?? '');            // L / P
$xstatusKeluarga= bersih($_POST['statusKeluarga']?? ''); // K / B
$xhobi          = isset($_POST['hobi']) ? implode(", ", $_POST['hobi']) : "";
$xemail         = bersih($_POST['email']?? '');
$xraw_password  = bersih($_POST['password'] ?? ''); // Misalnya dari input form

//Lakukan validasi pada password asli (panjang, kompleksitas, dll.)
if (empty($xraw_password) || strlen($xraw_password) < 10) {
        die("Password minimal 10 karakter.");
}

// Hashing password menggunakan password_hash()
$hashed_password = password_hash($xraw_password, PASSWORD_BCRYPT);
$sql1 = "INSERT INTO mhs (nim,nama,tempatLahir,tanggalLahir,jmlSaudara,alamat,kota,jenisKelamin 
                        ,statusKeluarga,hobi,email,pass) VALUES (?,?,?,?,?,?,?,?,?,?,?,?)";
$stmt=$koneksi->prepare($sql1);
$stmt->bind_param("ssssssssssss", $xnim, $xnama, $xtempatLahir,$xtglLahir,$xjmlSaudara,$xalamat,$xkota,$xjk 
                        ,$xstatusKeluarga,$xhobi,$xemail,$hashed_password);

if ($stmt->execute()) {
        echo "Data berhasil disimpan! <br>";
        echo "<a href='tampilDataMhs.php'>Lihat Data</a>";
} else {
        echo "Error: " . mysqli_error($koneksi);
}
$koneksi->close();
$stmt->close();
?>
