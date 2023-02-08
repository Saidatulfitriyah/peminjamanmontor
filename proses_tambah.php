<?php
include("koneksi.php");
if(isset($_POST['tambah'])){
    $nama_peminjaman=$_POST['nama_peminjaman'];
    $alamat=$_POST['alamat'];
    $umur=$_POST['umur'];
    $keperluan=$_POST['keperluan'];
    $jaminan=$_POST['jaminan'];
    $nomor_rangka=$_POST['nomor_rangka'];
    $merek=$_POST['merek'];
    $jenis_montor=$_POST['jenis_montor'];
    $tahun_montor=$_POST['tahun_montor'];
    $tanggal_pinjam=$_POST['tanggal_pinjam'];
    $tanggal_kembali=$_POST['tanggal_kembali'];

    $sql="INSERT INTO tb_montor (nomor_rangka,merek,jenis_montor,tahun_montor,tanggal_pinjam,tanggal_kembali) 
    VALUES ('$nomor_rangka','$merek','$jenis_montor','$tahun_montor','$tanggal_pinjam',' $tanggal_kembali')"; 
    $query=mysqli_query($koneksi,$sql);

    $sql="SELECT max(id_montor) AS montor_id FROM tb_montor LIMIT 1";
    $query=mysqli_query($koneksi,$sql);

    $data=mysqli_fetch_array($query);
    $montor_id=$data['montor_id'];

    $sql="INSERT INTO tb_peminjaman (nama_peminjaman,alamat,umur,keperluan,jaminan,id_montor) 
    VALUES ('$nama_peminjaman',' $alamat','$umur','$keperluan','$jaminan','$montor_id')";
    $query=mysqli_query($koneksi,$sql);

    if($query){
        header('location:lihat-data.php?status=sukses');
    }else{
        header('location:lihat-data.php?status=gagal');
    }
}
?>
    




