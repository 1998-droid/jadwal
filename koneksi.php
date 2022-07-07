<?php
$server   = "localhost";
$username = "root";
$password = "";
$database = "jd";

$koneksi = mysqli_connect($server,$username,$password,$database);

$a = mysqli_query($koneksi, "SELECT * FROM tb_user") or die (mysqli_error($koneksi));



while($b = mysqli_fetch_array($a)){
   echo $b['user'];
   echo $b['id_user'];
}


?>