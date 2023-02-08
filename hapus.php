<?php
include("koneksi.php");

$id = $_GET['id_peminjaman'];

$sql = "DELETE FROM tb_montor WHERE id_montor='$id'"; 
 $query = mysqli_query($koneksi, $sql);

 $sql = "DELETE FROM tb_peminjaman WHERE id_peminjaman='$id'"; 
 $query = mysqli_query($koneksi, $sql);

 if($query){
    header('location:lihat-data.php?status=sukses');
 }else{
    header('location:lihat-data.php?status=gagal');
 }
 ?>
