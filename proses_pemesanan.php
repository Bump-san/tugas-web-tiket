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
                            <h3>Data Pemesanan</h3>
                            <label for="fname"> Nama lengkap</label>
                            <input type="text" required id="nama-depan" name="namadepan" value="<?php echo isset($_POST["namadepan"]) ? $_POST["namadepan"] : ''; ?>" placeholder="John M. Doe">
                            <label for="email"> Email</label>
                            <input type="text" required id="email" name="email" value="<?php echo isset($_POST["email"]) ? $_POST["email"] : ''; ?>" placeholder="john@example.com">

                            <div class="row">
                                <div class="col-50">

                                    <div class="categories">
                                        <div class="select">
                                            <label for="kotaAsal"> Kota asal</label>
                                            <select name="kotaAsal" id="categories">
                                                <option value="Jakarta" selected="selected">Jakarta</option>
                                                <option value="Bandung">Bandung</option>
                                                <option value="Kalimantan">Kalimantan</option>
                                                <option value="Sumatera">Sumatera</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>

                                <!-- aduh mau jalan jalan -->

                                <div class="col-50">
                                    <div class="categories">
                                        <div class="select">
                                            <label for="kotaTujuan"> Kota tujuan</label>
                                            <select name="kotaTujuan" id="categories">
                                                <option value="Jakarta">Jakarta</option>
                                                <option value="Bandung" selected="selected">Bandung</option>
                                                <option value="Kalimantan">Kalimantan</option>
                                                <option value="Sumatera">Sumatera</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
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
                                    <label for="zip">Kelas Penerbangan</label>
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

                        <!-- <div class="col-50">
            <h3>Payment</h3>

            <label for="cname">Name on Card</label>
            <input type="text" required id="cname" name="cardname" placeholder="John More Doe">
            <label for="ccnum">Credit card number</label>
            <input type="text" required id="ccnum" name="cardnumber" placeholder="1111-2222-3333-4444">
            <label for="expmonth">Exp Month</label>
            <input type="text" required id="expmonth" name="expmonth" placeholder="September">
            <div class="row">
              <div class="col-50">
                <label for="expyear">Exp Year</label>
                <input type="text" id="expyear" name="expyear" placeholder="2018">
              </div>
              <div class="col-50">
                <label for="cvv">CVV</label>
                <input type="text" id="cvv" name="cvv" placeholder="352">
              </div>
            </div>
          </div> -->

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
