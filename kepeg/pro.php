<?php 
include '../koneksi.php';

//pengecekan tipe harus pdf

    $nama     = ($_POST['nama']);
    $nomor    = ($_POST['nomor']);
    $checkbox1= ($_POST['jdwl']);
    $chk="";
    foreach($checkbox1 as $chk1)  
      {  
         $chk .= $chk1.",";  
      }  
   
    $sql = mysqli_query($koneksi, "INSERT INTO tb_dokter (nama, nip, jadwal) VALUES ('$nama', '$nomor', '$chk')");
    
    header('location:data.php?alert=upload-berhasil');
?>