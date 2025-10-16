<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Template</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="header">
        <div class="container">
            <h2>FLOWERS SHOP</h2>
        </div>
    </div>
    <div class="nav">
        <div class="container">
            <input type="checkbox" id="nav-toggle">
            <label for="nav-toggle" class="humberger">
                <span class="line"></span>
                <span class="line"></span>
                <span class="line"></span>
            </label>
            <div class="navi">
                <ul>
                    <li>Beranda</li>
                    <li>Profil</li>
                    <li>Produk</li>
                    <li>Keranjang</li>
                </ul>
                <ul>
                    <li>Login</li>
                </ul>
            </div>
        </div>
    </div>
    <div class="contain">
        <div class="container">
            <div class="row">
                <div class="banner">
                    <img class="img-banner" src="image/bung.jpg" alt="">
                </div>
            </div>
            <div class="row">
                <h4>Item Best Seller</h4>
                <hr>
                <br>
                <div class="best-seller">
                    <?php
                    include "koneksi.php";
                    $sql = "SELECT * FROM produk";
                    $query = mysqli_query($koneksi, $sql);
                    while($data = mysqli_fetch_array($query)){
                        ?>
                        <div class="item-card">
                            <a href="page/detail.php?id=<?= $data['id']?>">
                                <img src="image/<?= $data['gambar'] ?>" alt="">
                                <div class="name-product"><?= $data['nama']?></div>
                            </a>
                        </div>
                        <?php
                    }
                    ?>
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