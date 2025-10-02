<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Siswa</title>
</head>
<body>
    <?php
    if(!isset($_GET['nisn'])){
        header("location: siswa.php");
    }
    include "koneksi.php";
    if(isset($_POST['submit'])){
        $nisn = mysqli_real_escape_string($koneksi, $_POST['nisn']);
        $nama = mysqli_real_escape_string($koneksi, $_POST['nama']);
        $jk = mysqli_real_escape_string($koneksi, $_POST['jk']);
        $alamat = mysqli_real_escape_string($koneksi, $_POST['alamat']);
        $nohp = mysqli_real_escape_string($koneksi, $_POST['nohp']);
        $nohp = mysqli_real_escape_string($koneksi, $_POST['nohp']);
        $nohp = mysqli_real_escape_string($koneksi, $_POST['nohp']);
        $old_foto_name = mysqli_real_escape_string($koneksi, $_POST['old_foto_name']);

        $foto = $_FILES['foto'];

        if($foto['size'] < 3000000){

            $file_name = basename($foto['name']);
            $file_extension = pathinfo($file_name, PATHINFO_EXTENSION);
            $new_fle_name = uniqid()."_".time().".".$file_extension;
            if(move_uploaded_file($foto['tmp_name'], 'foto/'.$new_fle_name)){
                if(file_exists('foto/'.$old_foto_name)){
                    unlink('foto/'.$old_foto_name);
                }
                $sql = "UPDATE siswa SET nama='$nama', jk='$jk', alamat='$alamat', nohp='$nohp', foto='$new_fle_name' WHERE nisn='$nisn'";
            }else{
                $sql = "UPDATE siswa SET nama='$nama', jk='$jk', alamat='$alamat', nohp='$nohp' WHERE nisn='$nisn'";
            }
            $query = mysqli_query($koneksi, $sql);
        }else{
            echo "ukuran foto terlalu besar";
        }

    }
    $nisn = $_GET['nisn'];
    $sql = "SELECT*FROM siswa WHERE nisn='$nisn'";
    $query = mysqli_query($koneksi, $sql);
    $data = mysqli_fetch_array($query);
    ?>
    <h1>Edit Siswa</h1>
    <form action="" method="post" enctype="multipart/form-data">
        <table>
            <tr>
                <td>NISN</td>
                <td><input type="text" name="nisn" id="" value="<?=$data['nisn'] ?>"></td>
            </tr>
            <tr>
                <td>Nama</td>
                <td><input type="text" name="nama" id="" value="<?=$data['nama'] ?>"></td>
            </tr>
            <tr>
                <td>Jenis Kelamin</td>
                <td>
                    <input type="radio" name="jk" id="" value="L" <?=$data['jk'] == 'L' ? 'checked' : '' ?>>Laki-Laki
                    <input type="radio" name="jk" id="" value="P" <?=$data['jk'] == 'P' ? 'checked' : '' ?>>Perempuan
                </td>
            </tr>
            <tr>
                <td>Alamat</td>
                <td>
                    <textarea name="alamat" id=""><?=$data['alamat'] ?></textarea>
                </td>
            </tr>
            <tr>
                <td>No Hp</td>
                <td><input type="text" name="nohp" id="" value="<?=$data['nohp'] ?>"></td>
            </tr>
            <tr>
                <td>Foto</td>
                <td>
                    <?php
                    if(file_exists('foto/'.$data['foto'])){
                        ?>
                        <img src="<?= 'foto/'.$data['foto'] ?>" alt="" style="width: 50px; height: 50px;">
                        <?php
                    }
                    ?>
                </td>
                <tr>
                    <td>Edit Photo</td>
                    <td>
                        <input type="file" name="foto" id="" accept="image/*">
                        <input type="hidden" name="old_foto_name" value="<?=$data['foto']?>">
                    </td>
                </tr>
            </tr>
            <tr>
                <td><input type="submit" value="UPDATE" name="submit"></td>
            </tr>
        </table>
    </form>
    <?php
    if(isset($_POST['submit'])){
        if($query){
            echo "data berhasil diubah ";
            ?>
            <a href="siswa.php">Lihat Data</a>
            <?php
        }
    }
    ?>
</body>
</html>