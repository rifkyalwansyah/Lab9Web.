<?php
include("koneksi.php");

$id = $_GET['id'];
$sql = "SELECT * FROM data_barang WHERE id_barang = $id";
$result = mysqli_query($conn, $sql);
$data = mysqli_fetch_assoc($result);

if (isset($_POST['submit'])) {
    $nama = $_POST['nama'];
    $kategori = $_POST['kategori'];
    $harga_jual = $_POST['harga_jual'];
    $harga_beli = $_POST['harga_beli'];
    $stok = $_POST['stok'];

    $sql_update = "UPDATE data_barang SET 
                   nama='$nama', kategori='$kategori', harga_jual='$harga_jual', harga_beli='$harga_beli', stok='$stok' 
                   WHERE id_barang=$id";
    mysqli_query($conn, $sql_update);

    header("Location: index.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Ubah Barang</title>
</head>
<body>
    <h1>Ubah Barang</h1>
    <form method="POST" action="">
        <label>Nama Barang:</label>
        <input type="text" name="nama" value="<?= $data['nama'] ?>" required><br>
        <label>Kategori:</label>
        <select name="kategori">
            <option value="Elektronik" <?= $data['kategori'] == 'Elektronik' ? 'selected' : '' ?>>Elektronik</option>
            <option value="Komputer" <?= $data['kategori'] == 'Komputer' ? 'selected' : '' ?>>Komputer</option>
            <option value="Handphone" <?= $data['kategori'] == 'Handphone' ? 'selected' : '' ?>>Handphone</option>
        </select><br>
        <label>Harga Jual:</label>
        <input type="number" name="harga_jual" value="<?= $data['harga_jual'] ?>" required><br>
        <label>Harga Beli:</label>
        <input type="number" name="harga_beli" value="<?= $data['harga_beli'] ?>" required><br>
        <label>Stok:</label>
        <input type="number" name="stok" value="<?= $data['stok'] ?>" required><br>
        <button type="submit" name="submit">Simpan</button>
    </form>
</body>
</html>
