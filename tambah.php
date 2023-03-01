<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>FORM TAMBAH</h2>
    <form action="proses_tambah.php" method=POST >
    <form>
        <fieldset>
        
            <p>
            <label for="nama_siswa">Nama Siswa</label>
            <input type="text" name="nama_siswa" />
            </p>

            <p>
            <label for="alamat">Alamat</label>
            <input type="text" name="alamat" />
           </p>

           <p>
            <label for="jenis_kelamin">Jenis Kelamin</label>
            <input type="radio" name="jenis_kelamin" value="laki-laki" />Laki-Laki</td>
            <input type="radio" name="jenis_kelamin" value="peremuan" />Perempuan</td>
           </p>

           <p>
            <label for="tanggal_masuk">Tanggal Masuk</label>
            <input type="date" name="tanggal_masuk" />
           </p>
           <p>
            <label for="nama_kelas">Nama Kelas</label>
            <input type="text" name="nama_kelas" />
           </p>
             
           <p>
            <label for="guru_kelas">Guru Kelas</label>
            <input type="text" name="guru_kelas" />
           </p>


           <p>
               <input type="submit" value="tambah" name="tambah">
</p>
</form>
</fieldset>
</body>
</html>