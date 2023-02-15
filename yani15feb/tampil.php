<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>JOIN TABLE</title>
</head>
 <h1>Penyewaan DVD</h1>
 <a href="tambah.php"><input type="button" value = "Tambah"></a>
<body>
    <table border=1>
        <tr>
            <th>NO</th>
            <th>Nama Penyewa</th>
            <th>Alamat</th>
            <th>Genre Film</th>
            <th>Judul Film</th>
            <th>Tahun Film</th>
            <th>Tanggal Sewa</th>
            <th>Tanggal Kembali</th>
            <th>Harga</th>
            <th>Aksi</th>
        </tr>
        <?php
        include("koneksi.php");
        $sql="SELECT * FROM tb_penyewa INNER JOIN tb_dvd ON tb_penyewa.id_dvd=tb_dvd.id_dvd";
        $query=mysqli_query($koneksi,$sql);

        while($yan=mysqli_fetch_array($query)){
            echo "<tr>";
            echo "<td>".$yan['id_penyewa']."</td>";
            echo "<td>".$yan['nama_penyewa']."</td>";
            echo "<td>".$yan['alamat']."</td>";
            echo "<td>".$yan['genre_film']."</td>";
            echo "<td>".$yan['judul_film']."</td>";
            echo "<td>".$yan['tahun_film']."</td>";
            echo "<td>".$yan['tanggal_sewa']."</td>";
            echo "<td>".$yan['tanggal_kembali']."</td>";
            echo "<td>".$yan['harga']."</td>";
            echo "<td>";
            echo "<a href='edit.php?id_penyewa=".$yan['id_penyewa']."'>Edit</a> |";
            echo "<a href='hapus.php?id_penyewa=".$yan['id_penyewa']."'>Hapus</a> |";
            echo "</td>";
            echo "</tr>";
        }
        ?>


</table>  
</body>
</html>