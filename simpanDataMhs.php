<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simpan Data Mahasiswa</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="container centered">
        <div class="message-box">
            <?php
                include "koneksi.php";
                
                // Fungsi untuk sanitasi data
                function bersih($data) {
                    return htmlspecialchars($data, ENT_QUOTES, 'UTF-8');
                }
                
                // Ambil data dari form dan sanitasi
                $xnim = bersih($_POST['nim'] ?? '');
                $xnama = bersih($_POST['nama'] ?? '');
                $xtempatLahir = bersih($_POST['tempatLahir'] ?? '');
                $xtanggalLahir = bersih($_POST['tanggalLahir'] ?? '');
                $xjmlSaudara = bersih($_POST['jmlSaudara'] ?? '');
                $xalamat = bersih($_POST['alamat'] ?? '');
                $xkota = bersih($_POST['kota'] ?? '');
                $xjk = bersih($_POST['jk'] ?? ''); // L / P
                $xstatusKeluarga = bersih($_POST['statusKeluarga'] ?? ''); // K / B
                $xhobi = isset($_POST['hobi']) ? implode(", ", $_POST['hobi']) : "";
                $xemail = bersih($_POST['email'] ?? '');
                $xraw_password = bersih($_POST['password'] ?? '');
                
                // Validasi password (minimal 10 karakter)
                if (empty($xraw_password) || strlen($xraw_password) < 10) {
                    echo '<div class="error">Password minimal 10 karakter.</div>';
                    echo '<a href="tambahDataMhs.php" class="btn">Kembali ke Form</a>';
                } else {
                    // Hashing password menggunakan password_hash()
                    $hashed_password = password_hash($xraw_password, PASSWORD_BCRYPT);
                    
                    // Query untuk insert data
                    $sql1 = "INSERT INTO mhs (nim, nama, tempatLahir, tanggalLahir, jmlSaudara, alamat, kota, jenisKelamin, statusKeluarga, hobi, email, pass) 
                             VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
                    $stmt = $koneksi->prepare($sql1);
                    $stmt->bind_param("ssssssssssss", $xnim, $xnama, $xtempatLahir, $xtanggalLahir, $xjmlSaudara, $xalamat, $xkota, $xjk, $xstatusKeluarga, $xhobi, $xemail, $hashed_password);
                    
                    if ($stmt->execute()) {
                        echo '<div class="success">Data berhasil disimpan</div>';
                        echo '<a href="tampilDataMhs.php" class="btn">Lihat Data</a>';
                    } else {
                        echo '<div class="error">Error: ' . htmlspecialchars(mysqli_error($koneksi)) . '</div>';
                        echo '<a href="tambahDataMhs.php" class="btn">Kembali ke Form</a>';
                    }
                    
                    $koneksi->close();
                    $stmt->close();
                }
            ?>
        </div>
    </div>
</body>
</html>