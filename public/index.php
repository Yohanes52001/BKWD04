<?php
    include_once ("koneksi.php") ;
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width",
        initial-scale="1.0">

        <!--Bootstrap Offline-->
        <link rel="stylesheet" href="assets/css/bootstrap.css">

        <!--Bootstrap Online-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" 
        rel="stylesheet" 
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
        crossorigin="anonymous"> 

        <title>Poliklinik</title>    <!--Judul Halaman-->
    </head>
    <body>
    <h3>
        Poliklinik
    </h3>
    <!--Form Input Data-->
    <form class="form row" method="POST" action="" name="myForm" onsubmit="return(validate());">
    <!-- Kode php untuk menghubungkan form dengan database -->
        <?php
            $isi = '';
            $tgl_awal = '';
            $tgl_akhir = '';
            if (isset($_GET['id'])) {
                $ambil = mysqli_query($mysqli, "SELECT * FROM poliklinik 
                WHERE id='" . $_GET['id'] . "'");
                while ($row = mysqli_fetch_array($ambil)) {
                    $isi = $row['isi'];
                    $tgl_awal = $row['tgl_awal'];
                    $tgl_akhir = $row['tgl_akhir'];
            }
        ?>
            <input type="hidden" name="id" value="<?php echo $_GET['id'] ?>">
        <?php
        }
        ?>
        <nav class="navbar-expand-lg navbar-dark bg-dark">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">
                    Sistem Informasi Poliklinik
                </a>
                <button class="navbar-toggler"
                    type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarNavDropdown"
                    aria-controls="navbarNavDropdown" aria-expanded="false"
                    aria-label="Toggle navigation">
                </button>
                <div class="collapse navbar-collapse" id="navbarNavDropdown">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" herf="index.php">
                                Home
                            </a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown toggle" href="#" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                                Data Master
                            </a>
                            <ul class="dropdow-menu">
                                <li>
                                    <a class="dropdown-item" herf="index.php?page=dokter">
                                        Dokter
                                    </a>
                                </li>
                                <li>
                                    <a class="dropdown-item" herf="index.php?page=pasien">
                                        Pasien
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link"
                            href="index.php?page=periksa">
                                Periksa
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <main role="main" class="container">
            <?php
                if (isset($_GET['page'])) {
            ?>
            <h2><?php echo ucwords($_GET['page']) ?></h2>
            <?php
                include($_GET['page'] . ".php");
            } else {
                echo "Selamat Datang di Sistem Informasi Poliklinik";
                }
            ?>
        </main>
    </body>
</html>