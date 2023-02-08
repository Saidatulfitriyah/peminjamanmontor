<?php
include 'koneksi.php';
?>

 <h1>Data Peminjaman Montor </h1>
  <a href=index.php><input type = "button" value="Kembali"></a>
  <a href=tambah.php><input type = "button" value="Tambah"></a>
<table border="1">
    <tr>
        <th>No</th>
        <th>Nama Peminjam</th>
        <th>Alamat</th>
        <th>Umur</th>
        <th>Keperluan</th>
        <th>Jaminan</th>
        <th>Nomor Rangka</th>
        <th>Merek</th>
        <th>Jenis Montor</th>
        <th>Tanggal Pinjam</th>
        <th>Tanggal Kembali</th>
    </tr>
    <?php
include("koneksi.php");
$sql="SELECT * FROM tb_peminjaman INNER JOIN tb_montor ON tb_peminjaman.id_montor=tb_montor.id_montor";
$query=mysqli_query($koneksi,$sql);
   
     while($pemijaman=mysqli_fetch_array($query)){
          echo "<tr>";
          
          echo "<td>".$pemijaman['nama_peminjaman']."</td>";
          echo "<td>".$pemijaman['alamat']."</td>"; 
          echo "<td>".$pemijaman['umur']."</td>"; 
          echo "<td>".$pemijaman['keperluan']."</td>"; 
          echo "<td>".$pemijaman['jaminan']."</td>"; 
          echo "<td>".$pemijaman['nomor_rangka']."</td>"; 
          echo "<td>".$pemijaman['merek']."</td>";
          echo "<td>".$pemijaman['jenis_montor']."</td>"; 
          echo "<td>".$pemijaman['tahun_montor']."</td>";  
          echo "<td>".$pemijaman['tanggal_pinjam']."</td>"; 
          echo "<td>".$pemijaman['tanggal_kembali']."</td>"; 
          echo "<td>";
          echo "<a href='edit.php?id=".$pemijaman['id_peminjaman']."'>Edit</a> |";
          echo "<a href='hapus.php?id=".$pemijaman['id_peminjaman']."'>Hapus</a> |";
          echo "</td>";
          echo "</tr>";
     }
     ?>
     </table>
    </body>
    </html>