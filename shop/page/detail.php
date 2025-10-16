<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>detail product</title>
    <link rel="stylesheet" href="../style.css">
</head>
<body>
    <div class="header">
        <div class="container">
            <h2>FLOWERS SHOP</h2>
        </div>
    </div>
    <div class="nav">
        <div class="container">
            <ul>
                <li>Beranda</li>
                <li>Profil</li>
                <li>Produk</li>
                <li>Keranjang</li>
            </ul>
        </div>
    </div>

    <div class="contain">
        <div class="container">
            <div class="row">
                <?php
                include "../koneksi.php";
                $id = mysqli_real_escape_string($koneksi,($_GET['id']));
                $sql = "SELECT*FROM produk WHERE id=$id";
                $query = mysqli_query($koneksi, $sql);
                $data = mysqli_fetch_array($query);
                ?>
                <div class="detail-product">
                    <div class="img-product">
                        <img src="../image/<?= $data['gambar'] ?>" alt="">
                    </div>
                    <div class="desc-product">
                        <h2><?= $data['nama'] ?></h2>
                        <hr>
                        <h4>Rp. <?= number_format($data['harga'],0,',','.') ?></h4>
                        <br>
                        Description:
                        <br>
                        <p>
                            <?=$data['deskripsi'] ?>
                        </p>
                        <br>
                        <button>Check Out</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer">
        <div class="container">
            Copyright &copy; Jihan Safitri 2025
        </div>
    </div>
</body>
</html>