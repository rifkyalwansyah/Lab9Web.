<?php
include("koneksi.php");

if (isset($_POST['submit'])) {
    $nama = $_POST['nama'];
    $kategori = $_POST['kategori'];
    $harga_jual = $_POST['harga_jual'];
    $harga_beli = $_POST['harga_beli'];
    $stok = $_POST['stok'];
    $file_gambar = $_FILES['file_gambar'];
    $gambar = null;

    if ($file_gambar['error'] == 0) {
        $filename = str_replace(' ', '_', $file_gambar['name']);
        $destination = 'gambar/' . $filename;
        if (move_uploaded_file($file_gambar['tmp_name'], $destination)) {
            $gambar = $destination;
        }
    }

    $sql = "INSERT INTO data_barang (nama, kategori, harga_jual, harga_beli, stok, gambar) 
            VALUES ('$nama', '$kategori', '$harga_jual', '$harga_beli', '$stok', '$gambar')";
    $result = mysqli_query($conn, $sql);

    header("Location: index.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Tambah Barang</title>
</head>
<body>
    <h1>Tambah Barang</h1>
    <form method="POST" action="tambah.php" enctype="multipart/form-data">
        <label>Nama Barang:</label>
        <input type="text" name="nama" required><br>
        <label>Kategori:</label>
        <select name="kategori">
            <option value="Elektronik">Elektronik</option>
            <option value="Komputer">Komputer</option>
            <option value="Handphone">Handphone</option>
        </select><br>
        <label>Harga Jual:</label>
        <input type="number" name="harga_jual" required><br>
        <label>Harga Beli:</label>
        <input type="number" name="harga_beli" required><br>
        <label>Stok:</label>
        <input type="number" name="stok" required><br>
        <label>Gambar:</label>
        <input type="file" name="file_gambar"><br>
        <button type="submit" name="submit">Simpan</button>
    </form>
</body>
</html>
