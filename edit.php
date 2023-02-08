<?php
include("koneksi.php");
if(!isset($_GET['id_peminjaman'])){
    header("Location:lihat-data.php?");
}
$id=$_GET['id_peminjaman'];
$sql="SELECT * FROM tb_peminjaman INNER JOIN tb_montor ON tb_peminjaman.id_montor = tb_montor.id_montor";
$query = mysqli_query($koneksi,$sql);
$row = mysqli_fetch_assoc($query);

if(mysqli_num_rows($query) < 1){
    die ("Data tidak ditemukan");
}
?>

<html>
    <head>
</head>
<body>
    <h1>Form Edit</h1>
    <a href="lihat-data.php"><input type="button" value="Kembali"></a>
    <form action="proses-edit.php" method="POST">
                <input type="hidden" name="id_peminjaman" value="<?php echo $row['id_peminjaman']?>" />
                <p>
        <label for="nama_peminjaman"> Nama Peminjaman : </label>
        <input type="text" name="nama_peminjaman" value="<?php echo $row['nama_peminjaman']?>" />
    </p>
    <p>
        <label for="alamat"> Alamat : </label>
        <input type="text" name="alamat" value="<?php echo $row['alamat']?>" />
    </p>
    <p>
        <label for="keperluan"> Keperluan : </label>
        <input type="text" name="keperluan" value="<?php echo $row['keperluan']?>" />
    </p>
    <p>
        <label for="jaminan"> Jaminan : </label>
        <input type="text" name="jaminan" value="<?php echo $row['jaminan']?>" />
    </p>
    <p>
        <label for="nomor_rangka"> Nomor Rangka : </label>
        <input type="number" name="nomor_rangka" value="<?php echo $row['nomor_rangka']?>" />
    </p>
    <p>
        <label for="merek"> Merek : </label>
        <input type="text" name="merek" value="<?php echo $row['merek']?>" />
    </p>
    <p>
        <label for="jenis_montor"> Jenis Montor : </label>
        <input type="text" name="jenis_montor" value="<?php echo $row['jenis_montor']?>" />
    </p>
    <p>
        <label for="tahun_montor"> Tahun Montor : </label>
        <input type="text" name="tahun_montor" value="<?php echo $row['tahun_montor']?>"/>
    </p>
    <p>
        <label for="tanggal_pinjam"> Tanggal Pinjam: </label>
        <input type="date" name="tanggal_pinjam" value="<?php echo $row['tanggal_pinjam']?>" />
    </p>
    <p>
        <label for="tanggal_kembali"> Tanggal Kembali : </label>
        <input type="date" name="tanggal_kembali" value="<?php echo $row['tanggal_kembali']?>"/>
    </p>
<p>
<input type="submit" value="Edit" name="edit" /> 
</p>
</form>
</body>
</html>