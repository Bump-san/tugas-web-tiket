<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="./css/style_order.css">
    <link rel="stylesheet" href="./css/responsive.css">
    <link rel="stylesheet" href="./css/navbar.css">
</head>

<body>

    <div class="navbar">
        <a href="index.php">Home</a>
        <a href="about.php">About</a>
    </div>

    <div class="judul container col-75">

        <h2>Form Pemesanan tiket</h2>
        <p>Masukan data anda untuk memesan tiket</p>
    </div>
    <div>

    </div>
    <div class="row">
        <div class="col-75">
            <div class="container">
                <form action="#" method="POST">

                    <div class="row">
                        <div class="col-50">
                            <!-- <h3>Data Pemesanan</h3> -->
                            <label for="fname"> Nama lengkap</label>
                            <input type="text" required id="nama-depan" name="namadepan" value="<?php echo isset($_POST["namadepan"]) ? $_POST["namadepan"] : ''; ?>" placeholder="whatsittoya">
                            <div class="row">
                              <div class="col-50">
                                <label for="email"> Email</label>
                                <input type="email" required id="email" name="email" value="<?php echo isset($_POST["email"]) ? $_POST["email"] : ''; ?>" placeholder="walach@email.com">
                              </div>
                              <div class="col-50">
                                <label for="tanggal"> Tanggal berangkat</label>
                                <input type="date" name="tanggal" value="<?php echo isset($_POST["tanggal"]) ? $_POST["tanggal"] : ''; ?>">
                              </div>

                            </div>

                            <div class="row">
                              <?php

                              include './script/sql_connection.php';
                              $q = "select * from kota";

                              for ($i=0; $i < 2; $i++) {
                                echo '<div class="col-50">
                                    <div class="categories">
                                        <div class="select">';
                                        if ($i==0) {
                                          echo '<label for="kotaAsal"> Kota asal</label>';
                                          echo '<select name="kotaAsal" id="categories">';
                                        } else {
                                          echo '<label for="kotaTujuan"> Kota Tujuan</label>';
                                          echo '<select name="kotaTujuan" id="categories">';
                                        }
                                        $ex = mysqli_query($conn, $q);
                                        while ($r = mysqli_fetch_array($ex)) {
                                          echo '<option value="'.$r['nama_kota'].'">'.$r['nama_kota'].'</option>';
                                        }
                                            echo "</select>
                                                 </div>
                                               </div>
                                              </div>";
                              }
                              ?>
                            </div>
                              <div class="row">

                                <div class="col-50">
                                    <label for="state">Jumlah penumpang</label>
                                    <div class="categories">
                                        <div class="counter">
                                            <input type="number" name="jumlahPenumpang" value="<?php echo isset($_POST["jumlahPenumpang"]) ? $_POST["jumlahPenumpang"] : '1'; ?>" step="1" min="1" max="5">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-50">
                                    <label for="kelas">Kelas Penerbangan</label>
                                    <div class="categories">
                                        <div class="select">
                                            <select name="kelas" id="categories">
                                                <option value="Ekonomi" selected="selected">Ekonomi</option>
                                                <option value="VIP">VIP</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>

                              </div>

                          </div>
                          </div>
                    <label>
                        <input type="checkbox" checked="checked" name="sameadr"> kirim bukti transaksi ke Email terkait
                    </label>
                    <input type="submit" name="submit" value="Hitung Total" class="btn">
                </form>
            </div>
        </div>

        <!--  Untuk PHP-->
        <?php
        include './script/script_order.php';
        ?>

</body>

</html>
