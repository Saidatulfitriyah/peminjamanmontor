<!DOCTYPE html>
<html lang="en">
    <center>
<head>
</head>

<body>
    <h3>Form Tambah</h3>
        <form action="proses_tambah.php" method="POST">
            <form>
    <p>
        <label for="nama_peminjaman"> Nama Peminjaman : </label>
        <input type="text" name="nama_peminjaman" />
    </p>
    <p>
        <label for="alamat"> Alamat : </label>
        <input type="text" name="alamat" />
    </p>
    <p>
        <label for="umur"> Umur : </label>
        <input type="number" name="umur" />
    </p>
    <p>
        <label for="keperluan">Keperluan : </label>
        <input type="text" name="Keperluan" />
    </p>
    <p>
        <label for="jaminan"> Jaminan : </label>
        <input type="text" name="jaminan" />
    </p>
    <p>
        <label for="nomor_rangka"> Nomor Montor : </label>
        <input type="number" name="nomor_rangka" />
    </p>
    <p>
        <label for="merek"> Merek : </label>
        <input type="text" name="merek" />
    </p>
    <p>
        <label for="Jenis_montor"> Jenis Montor : </label>
        <input type="text" name="jenis_montor" />
    </p>
    <p>
        <label for="tahun_montor"> Tahun Montor : </label>
        <input type="text" name="tahun_montor" />
    </p>
    <p>
        <label for="tanggal_pinjam"> Tanggal Pinjam : </label>
        <input type="date" name="tanggal_pinjam" />
    </p>
    <p>
        <label for="tanggal_kembali"> Tanggal Kembali : </label>
        <input type="date" name="tanggal_kembali" />
    </p>
    <p>
       <input type="submit" value="Tambah" name="tambah"/>
    </p>
</form>
</body>

</html>