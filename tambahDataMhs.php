<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Input Data Mahasiswa</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="container form-container">
        <h2>Form Input Data Mahasiswa</h2>
        <form action="simpanDataMhs.php" method="post">
        NIM: 
        <input type="text" name="nim" required>
        <br><br>

        Nama: 
        <input type="text" name="nama" required>
        <br><br>

        Tempat Lahir: 
        <input type="text" name="tempatLahir" required>
        <br><br>

        Tanggal Lahir: 
        <input type="date" name="tanggalLahir" required>
        <br><br>

        Jumlah Saudara: 
        <input type="number" name="jmlSaudara" required>
        <br><br>

        Alamat: 
        <br>
        <textarea rows="5" cols="50" name="alamat" required></textarea>
        <br><br>

        Kota:
        <select name="kota">
            <option>Semarang</option>
            <option>Solo</option>
            <option>Brebes</option>
            <option>Kudus</option>
            <option>Demak</option>
            <option>Salatiga</option>
        </select>
        <br><br>

        Jenis Kelamin:
        <input type="radio" name="jk" value="Pria" required> Pria
        <input type="radio" name="jk" value="Wanita" required> Wanita
        <br><br>

        Status:
        <input type="radio" name="statusKeluarga" value="Menikah" required> Menikah
        <input type="radio" name="statusKeluarga" value="Belum Menikah" required> Belum Menikah
        <br><br>

        Hobi (boleh lebih dari satu): 
        <br>
        <input type="checkbox" name="hobi[]" value="Membaca"> Membaca 
        <br>
        <input type="checkbox" name="hobi[]" value="Olahraga"> Olahraga 
        <br>
        <input type="checkbox" name="hobi[]" value="Musik"> Musik 
        <br>
        <input type="checkbox" name="hobi[]" value="Traveling"> Traveling 
        <br><br>

        Email: 
        <input type="email" name="email" required>
        <br><br>

        Password: 
        <input type="password" name="password" required>
        <br><br>

        <input type="submit" value="Simpan">
        </form>
    </div>
</body>
</html>