<?php
include("koneksi.php");

$id=$_GET ['id_siswa'];
$sql="DELETE FROM tb_siswa where id_siswa='$id'";
$query=mysqli_query($koneksi, $sql);
$sql="DELETE FROM tb_kelas where id_kelas='$id'";
$query=mysqli_query($koneksi, $sql);

if($query){
    header("location:tampil.php");
}
?>
