<?php
include("koneksi.php");
if(isset( $_POST['edit'])){
    $id=$_POST['id_siswa'];
    $nama_siswa=$_POST['nama_siswa'];
    $alamat=$_POST['alamat'];
    $jenis_kelamin=$_POST['jenis_kelamin'];
    $tanggal_masuk=$_POST['tanggal_masuk'];
    $nama_kelas=$_POST['nama_kelas'];
    $guru_kelas=$_POST['guru_kelas'];


    $sql = "UPDATE tb_siswa SET nama_siswa='$nama_siswa', alamat='$alamat', jenis_kelamin='$jenis_kelamin', tanggal_masuk='$tanggal_masuk' WHERE id_siswa='$id'";
    $query =mysqli_query($koneksi, $sql);

    $sql = "UPDATE tb_kelas SET nama_kelas='$nama_kelas', guru_kelas='$guru_kelas' WHERE id_kelas='$id'";
    $queryy =mysqli_query($koneksi, $sql);

    if($query){
        header('location:tampil.php?status=sukses');
    }else{
        die('gagal mengedit');
    }


}
?>