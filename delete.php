<?php
include 'koneksi.php';
//Menyimpan data id kedalam variabel
$id_mhs     = $_GET['id_mhs'];

//Query SQL untuk delete data
$query="DELETE from mahasiswa where id_mhs='$id_mhs'";
mysqli_query($koneksi, $query);

//mengalihkan ke halaman index.php
header("location:index.php");
?>