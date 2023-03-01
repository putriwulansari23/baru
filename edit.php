<?php

include("koneksi.php");
if(!isset($_GET['id_siswa'])){
    header("Location:tampil.php");
}
$id=$_GET['id_siswa'];
$sql="SELECT * FROM tb_siswa INNER JOIN tb_kelas ON tb_siswa.id_kelas=tb_kelas.id_kelas WHERE tb_siswa.id_siswa='$id'";
$query=mysqli_query($koneksi, $sql);
$row=mysqli_fetch_array($query);
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>FORM EDIT </h2>
    <form action="proses_edit.php" method="POST" >
        <a href="tampil.php"><input type="button" value="kembali"></a>
    <form>
        <fieldset>
            <input type="hidden" name="id_siswa" value="<?php echo $row ['id_siswa']?>"/>

            <p>
            <label for="nama_siswa">Nama Siswa</label>
            <input type="text" name="nama_siswa" value="<?php echo $row ['nama_siswa']?>"/>
            </p>

            <p>
            <label for="alamat">Alamat</label>
            <input type="text" name="alamat" value="<?php echo $row ['alamat']?>"/>
           </p>

           <p>
            <label for="jenis_kelamin">Jenis Kelamin</label>
            <input type="radio" name="jenis_kelamin"  value="laki-laki" value="<?php echo $row ['jenis_kelamin']?>"/>Laki-Laki
            <input type="radio" name="jenis_kelamin" value="perempuan" value="<?php echo $row ['jenis_kelamin']?>"/>Perempuan
           </p>

           <p>
            <label for="tanggal_masuk">Tanggal Masuk</label>
            <input type="date" name="tanggal_masuk"value="<?php echo $row ['tanggal_masuk']?>" />
           </p>

           <p>
            <label for="nama_kelas">Nama Kelas</label>
            <input type="text" name="nama_kelas" value="<?php echo $row ['nama_kelas']?>"/> 
           </p>
             
           <p>
            <label for="guru_kelas">Guru Kelas</label>
            <input type="text" name="guru_kelas" value="<?php echo $row ['guru_kelas']?>"/>
           </p>

           <p>
            <input type="submit" value="edit" name="edit"/>
           </p>
</from>
</fieldset>
</body>
</html>