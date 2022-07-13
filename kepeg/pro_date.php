<?php
include '../koneksi.php';
$id = $_POST['id'];
$nama= $_POST['nama'];
$nomor= $_POST['nomor'];
$hobi  = implode(', ', $_POST['jdwl']);
$sql = mysqli_query ($koneksi, "UPDATE tb_dokter SET nama ='$nama', nip='$nomor', jadwal='$hobi' WHERE id_dokter = '$id' ");
header ('location:data.php?sukses');
?>