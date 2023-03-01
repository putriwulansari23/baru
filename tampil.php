<?php
include("koneksi.php");
?>

<html>
    <head>
</head>
<body>
    <h4><a href="tambah.php">Tambah Data</a></h4>
    <h2>Data Siswa</h2>
    <table border ="1">

    <tr>
        <th>No</th>
        <th>Nama Siswa</th>
        <th>Alamat</th>
        <th>Jenis Kelamin</th>
        <th>Tanggal Masuk</th>
        <th>Nama Kelas</th>
        <th>Guru Kelas</th>
        <th>Aksi</th>
</tr>

<?php
include("koneksi.php");
$sql="SELECT * FROM tb_siswa INNER JOIN tb_kelas ON tb_siswa.id_kelas=tb_kelas.id_kelas";
$query=mysqli_query($koneksi, $sql);


while($row=mysqli_fetch_array($query)){

    echo "<tr>";
    echo "<td>".$row['id_siswa']."</td>";
    echo "<td>".$row['nama_siswa']."</td>";
    echo "<td>".$row['alamat']."</td>";
    echo "<td>".$row['jenis_kelamin']."</td>";
    echo "<td>".$row['tanggal_masuk']."</td>";
    echo "<td>".$row['nama_kelas']."</td>";
    echo "<td>".$row['guru_kelas']."</td>";
    echo "<td>";
    echo "<a href='edit.php?id_siswa=".$row['id_siswa']."'>Edit ||";
    echo "<a href='hapus.php?id_siswa=".$row['id_siswa']."'>Hapus ||";
    echo "</td>";
    echo "</tr>";
   

}
?>

</body>
</html>
