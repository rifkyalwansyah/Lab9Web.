<?php
include("koneksi.php");

$id = $_GET['id'];
$sql = "DELETE FROM data_barang WHERE id_barang = $id";
mysqli_query($conn, $sql);

header("Location: index.php");
?>
