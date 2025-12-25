<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Data Mahasiswa</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <?php
        require "koneksi.php";
        $id = $_GET['kode'];
        $sql = "select * from mhs where id='$id'";
        $qry = mysqli_query($koneksi, $sql);
        $row1 = mysqli_fetch_assoc($qry);
    ?>
    <h2 class="page-title">Form Edit Biodata</h2>
    <div class="content-wrapper">
        <div class="form-box">
            <form action="simpanKoreksiDataMhs.php" method="POST">
                NIM: 
                <input type="text" name="nim" id="nim" value="<?php echo htmlspecialchars($row1['nim'] ?? '', ENT_QUOTES, 'UTF-8'); ?>" required>
                <br><br>

                Nama: 
                <input type="text" name="nama" id="nama" value="<?php echo htmlspecialchars($row1['nama'] ?? '', ENT_QUOTES, 'UTF-8'); ?>" required>
                <br><br>

                Tempat Lahir: 
                <input type="text" name="tempatLahir" id="tempatLahir" value="<?php echo htmlspecialchars($row1['tempatLahir'] ?? '', ENT_QUOTES, 'UTF-8'); ?>" required>
                <br><br>

                Tanggal Lahir: 
                <input type="date" name="tanggalLahir" id="tanggalLahir" value="<?php echo htmlspecialchars($row1['tanggalLahir'] ?? '', ENT_QUOTES, 'UTF-8'); ?>" required>
                <br><br>

                Jumlah Saudara: 
                <input type="number" name="jumlahSaudara" id="jumlahSaudara" value="<?php echo htmlspecialchars($row1['jmlSaudara'] ?? '', ENT_QUOTES, 'UTF-8'); ?>" required>
                <br><br>

                Alamat: 
                <br>
                <textarea rows="5" cols="50" name="alamat" id="alamat" required><?php echo htmlspecialchars($row1['alamat'] ?? '', ENT_QUOTES, 'UTF-8'); ?></textarea>
                <br><br>

                Kota:
                <select name="kota">
                    <option value="Semarang" <?= ($row1['kota'] == 'Semarang') ? 'selected' : ''; ?>>Semarang</option>
                    <option value="Solo" <?= ($row1['kota'] == 'Solo') ? 'selected' : ''; ?>>Solo</option>
                    <option value="Brebes" <?= ($row1['kota'] == 'Brebes') ? 'selected' : ''; ?>>Brebes</option>
                    <option value="Kudus" <?= ($row1['kota'] == 'Kudus') ? 'selected' : ''; ?>>Kudus</option>
                    <option value="Demak" <?= ($row1['kota'] == 'Demak') ? 'selected' : ''; ?>>Demak</option>
                    <option value="Salatiga" <?= ($row1['kota'] == 'Salatiga') ? 'selected' : ''; ?>>Salatiga</option>
                </select>
                <br><br>

                Jenis Kelamin:
                <input type="radio" name="jenisKelamin" value="Pria" <?= ($row1['jenisKelamin'] == 'Pria' || $row1['jenisKelamin'] == 'L') ? 'checked' : ''; ?> required> Laki Laki
                <input type="radio" name="jenisKelamin" value="Wanita" <?= ($row1['jenisKelamin'] == 'Wanita' || $row1['jenisKelamin'] == 'P') ? 'checked' : ''; ?> required> Perempuan
                <br><br>

                Status Keluarga:
                <input type="radio" name="statusKeluarga" value="Belum Menikah" <?= ($row1['statusKeluarga'] == 'Belum Menikah' || $row1['statusKeluarga'] == 'B') ? 'checked' : ''; ?> required> Belum Menikah
                <input type="radio" name="statusKeluarga" value="Menikah" <?= ($row1['statusKeluarga'] == 'Menikah' || $row1['statusKeluarga'] == 'K') ? 'checked' : ''; ?> required> Menikah
                <br><br>

                Hobi (boleh lebih dari satu): 
                <br>
                <?php
                    $hobi_dr_db = $row1['hobi'] ?? '';
                    $hobi_array = !empty($hobi_dr_db) ? explode(',', $hobi_dr_db) : [];
                    $hobi_array = array_map('trim', $hobi_array);
                    $semua_hobi = ["Membaca", "Olahraga", "Musik", "Traveling"];
                    foreach ($semua_hobi as $hobi) {
                        $is_checked = in_array($hobi, $hobi_array) ? 'checked' : '';
                        echo "<input type='checkbox' name='hobi[]' value='$hobi' $is_checked>";
                        echo "<label>$hobi</label><br>";
                    }
                ?>
                <br>

                Email: 
                <input type="email" name="email" id="email" value="<?php echo htmlspecialchars($row1['email'] ?? '', ENT_QUOTES, 'UTF-8'); ?>" required>
                <br><br>

                <input type="hidden" name="id" value="<?php echo htmlspecialchars($id, ENT_QUOTES, 'UTF-8'); ?>">
                <input type="submit" value="Simpan">
            </form>
        </div>
    </div>
</body>
</html>