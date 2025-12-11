<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Input Data Mahasiswa</title>
</head>
<body>
    <h2>Form Input Data Mahasiswa</h2>
    <form action="simpanDataMhs.php" method="post">
        NIM: <input type="text" name="nim" required><br><br>
        Nama: <input type="text" name="nama" required><br><br>
        Tempat Lahir: <input type="textarea" name="tempatLahir" required><br><br>
        Tanggal Lahir: <input type="date" name="tanggalLahir" required><br><br>
        Jumlah Saudara: <input type="number" name="jmlSaudara" required><br><br>
        Alamat: <br>
            <textarea rows="5" cols="50" name="alamat" required></textarea><br><br>
        Kota:
        <select name="kota" >
            <option>Semarang</option>
            <option>Solo</option>
            <option>Brebes</option>
            <option>Kudus</option>
            <option>Demak</option>
            <option>Salatiga</option>
        </select>
        <br><br>
        Jenis Kelamin:
        <input type="radio" name="jk" value="L" required> Laki Laki
        <input type="radio" name="jk" value="P" required> Perempuan
        <br><br>
        Status:
        <input type="radio" name="statusKeluarga" value="K" required> Kawin
        <input type="radio" name="statusKeluarga" value="B" required> Belum Kawin
        <br><br>
        Hobi (boleh lebih dari satu): <br>
        <input type="checkbox" name="hobi[]" value="Membaca"> Membaca <br>
        <input type="checkbox" name="hobi[]" value="Olahraga"> Olahraga <br>
        <input type="checkbox" name="hobi[]" value="Musik"> Musik <br>
        <input type="checkbox" name="hobi[]" value="Traveling"> Traveling <br>
        Email: <input type="email" name="email" required><br><br>
        <input type="password" name="password" required><br><br>
        <input type="submit" value="Simpan">
    </form>
</body>
</html>