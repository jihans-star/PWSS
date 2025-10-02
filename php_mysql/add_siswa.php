<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Siswa</title>
</head>
<body>
    <h1>Create Siswa</h1>
    <form action="" method="post" enctype="multipart/form-data">
        <table>
            <tr>
                <td>NISN</td>
                <td><input type="text" name="nisn" id=""></td>
            </tr>
            <tr>
                <td>Nama</td>
                <td><input type="text" name="nama" id=""></td>
            </tr>
            <tr>
                <td>Jenis Kelamin</td>
                <td>
                    <input type="radio" name="jk" id="" value="L">Laki-Laki
                    <input type="radio" name="jk" id="" value="P">Perempuan
                </td>
            </tr>
            <tr>
                <td>Alamat</td>
                <td>
                    <textarea name="alamat" id=""></textarea>
                </td>
            </tr>
            <tr>
                <td>No Hp</td>
                <td><input type="text" name="nohp" id=""></td>
            </tr>
            <tr>
                <td>Upload Foto</td>
                <td>
                    <input type="file" name="foto" id="" accept="image/*">
                </td>
            </tr>
            <tr>
                <td><input type="submit" value="SIMPAN" name="submit"></td>
            </tr>
        </table>
    </form>
    <?php
    if(isset($_POST['submit'])){
        include "koneksi.php";

        $nisn = mysqli_real_escape_string($koneksi, $_POST['nisn']);
        $nama = mysqli_real_escape_string($koneksi, $_POST['nama']);
        $jk = mysqli_real_escape_string($koneksi, $_POST['jk']);
        $alamat = mysqli_real_escape_string($koneksi, $_POST['alamat']);
        $nohp = mysqli_real_escape_string($koneksi, $_POST['nohp']);

        $foto = $_FILES['foto'];
        if($foto['size'] < 3000000){
            $file_name = basename($foto['name']);
            $file_extension = pathinfo($file_name, PATHINFO_EXTENSION);
            $new_fle_name = uniqid()."_".time().".".$file_extension;
            if(move_uploaded_file($foto['tmp_name'], 'foto/'.$new_fle_name)){
                $sql = "INSERT INTO siswa VALUES('$nisn', '$nama', '$jk', '$alamat', '$nohp','$new_fle_name')";
            }else{
                $sql = "INSERT INTO siswa VALUES('$nisn', '$nama', '$jk', '$alamat', '$nohp','-')";
            }
            $query = mysqli_query($koneksi, $sql);
            if($query){
                echo "data berhasil ditambah ";
                ?>
                <a href="siswa.php">Lihat Data</a>
                <?php
            }
        }else{
            echo "ukuran foto terlalu besar";
        }
    }
    ?>
</body>
</html>