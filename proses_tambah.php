<?php
include("koneksi.php");
if(isset($_POST['tambah'])){
    $nama_siswa=$_POST['nama_siswa'];
    $alamat=$_POST['alamat'];
    $jenis_kelamin=$_POST['jenis_kelamin'];
    $tanggal_masuk=$_POST['tanggal_masuk'];
    $nama_kelas=$_POST['nama_kelas'];
    $guru_kelas=$_POST['guru_kelas'];
    
    $sql="INSERT INTO tb_kelas(nama_kelas,guru_kelas) VALUES ('$nama_kelas','$guru_kelas')";
    $query=mysqli_query($koneksi, $sql);


    $sql="SELECT max(id_kelas) AS kelas_id FROM tb_kelas LIMIT 1";
    $query=mysqli_query($koneksi, $sql);

    $data=mysqli_fetch_array($query);
    $id_kelas=$data['kelas_id'];

    $sql="INSERT INTO tb_siswa(nama_siswa,alamat,jenis_kelamin,tanggal_masuk,id_kelas )VALUES ('$nama_kelas','$alamat','$jenis_kelamin','$tanggal_masuk', '$id_kelas')";
    $query=mysqli_query($koneksi, $sql);


    if($query){
        header('location:tampil.php?status=sukses');
    }else{
        header('location:tampil.php?status=gagal');
    }


}
?>