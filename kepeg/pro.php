<?php 
include '../koneksi.php';

//pengecekan tipe harus pdf

    $nama     = ($_POST['nama']);
    $nomor    = ($_POST['nomor']);
    $checkbox1= ($_POST['jdwl']);
    $checkbox2= ($_POST['shift']);
    $chk="";
    $chk2="";
    foreach($checkbox1 as $chk1)  
      {  
         $chk .= $chk1.",";  
      } 
    foreach($checkbox2 as $chk2)  
      {  
         $chk_1 .= $chk2.",";  
      } 
   
    $sql = mysqli_query($koneksi, "INSERT INTO tb_dokter (nama, nip, jadwal, shift) VALUES ('$nama', '$nomor', '$chk', '$chk_1')");
    
    header('location:data.php?alert=upload-berhasil');
?>