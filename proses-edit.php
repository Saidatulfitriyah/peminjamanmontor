<?php
include("koneksi.php");
if(isset($_POST['edit'])){
    $nama_peminjaman=$_POST['nama_peminjaman'];
    $alamat=$_POST['alamat'];
    $keperluan=$_POST['keperluan'];
    $jaminan=$_POST['jaminan'];
    $nomor_rangka=$_POST['nomor_rangka'];
    $merek=$_POST['merek'];
    $jenis_montor=$_POST['jenis_montor'];
    $tahun_montor=$_POST['tahun_montor'];
    $tanggal_pinjam=$_POST['tanggal_pinjam'];
    $tanggal_kembali=$_POST['tanggal_kembali'];

    $sql = "UPDATE tb_montor SET nomor_rangka='$nomor_rangka', merek='$merek', jenis_montor='$jenis_montor',
    tahun_montor='$tahun_montor', tanggal_pinjam='$tanggal_pinjam',tanggal_kembali='$tanggal_kembali'
     WHERE id_montor='$id'";
    $query= mysqli_query($koneksi,$sql);

    $sql = "UPDATE tb_peminjaman SET nama_peminjaman='$nama_peminjaman', alamat='$alamat', umur='$umur', 
    keperluan='$keperluan', jaminan='$jaminan' WHERE id_peminjaman='$id'";
    $query= mysqli_query($koneksi,$sql);

    if($query){
        header('location:lihat-data.php');
    }else{
        die ("gagal mengedit");
    }
    }
    ?>