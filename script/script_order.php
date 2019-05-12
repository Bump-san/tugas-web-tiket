<?php
if (isset($_POST['hitung']))
{
   panggilIsiForm();
}


function panggilIsiForm()
{
  if (isset($_POST["namadepan"]) && !empty($_POST["namadepan"]) && isset($_POST["email"]) && !empty($_POST["email"])){
    echo '<form action="#" method="POST">
          <div class="col-25">
            <div class="container">
              <h4>Data Anda</h4>';

        // set variable
        $nama = $_POST['namadepan'];
        $email = $_POST['email'];
        $kotaAsal = $_POST['kotaAsal'];
        $kotaTujuan = $_POST['kotaTujuan'];
        $jumlahPenumpang = $_POST['jumlahPenumpang'];
        $kelas = $_POST['kelas'];
        $tanggal_berangkat = $_POST['tanggal'];

        //sedikit trik buat data fiktif karena males ngetik awkoawkokaowko
        if ($kotaAsal == "Jakarta") {
          $lKotaAsal = 1;
        } elseif ($kotaAsal == "Bandung") {
          $lKotaAsal = 2;
        } elseif ($kotaAsal == "Kalimantan") {
          $lKotaAsal = 3;
        } else {
          $lKotaAsal = 4;
        }


        if ($kotaTujuan == "Jakarta") {
          $lKotaTujuan = 1;
        } elseif ($kotaTujuan == "Bandung") {
          $lKotaTujuan = 2;
        } elseif ($kotaTujuan == "Kalimantan") {
          $lKotaTujuan = 3;
        } else {
          $lKotaTujuan = 4;
        }
        // end disini

        //validasi nama
        if (isset($_POST["namadepan"]) && !empty($_POST["namadepan"])) {
          echo '<p>Nama : '.$nama.'</p>';
        } else {
          echo "<p>Nama belum diisi</p>";
        }

        //valisasi email
        if (isset($_POST["email"]) && !empty($_POST["email"])) {
          echo '<p>Email : '.$email.'</p>';
        } else {
          echo "<p>Email belum diisi</p>";
        }

        echo '<p> Kota Asal : '.$kotaAsal.'</p>';
        echo '<p> Kota Tujuan : '.$kotaTujuan.'</p>';

        // garis pemisah
        echo "<hr />
        <h4>Total Harga</h4>";

        //valisasi jumlah penumpang (gak guna sebenernya)
        if (isset($_POST["jumlahPenumpang"]) && !empty($_POST["jumlahPenumpang"] && $jumlahPenumpang < 6)) {
          echo '<p>Jumlah penumpang : <span class="value"> '.$jumlahPenumpang.' Orang</span></p>';
        } else {
          echo "<p>Jumlah penumpang melebihih batas maksimal";
        }


        if ($kelas == "Ekonomi") {

          if ($lKotaAsal == $lKotaTujuan) {
            $hargaTiket = 400000;
          } elseif ($lKotaAsal < $lKotaTujuan) {
            $lakhir = $lKotaTujuan - $lKotaAsal;
            $hargaTiket = 400000+($lakhir*200000);
          } else {
            $lakhir = $lKotaAsal - $lKotaTujuan ;
            $hargaTiket = 400000+($lakhir*200000);
          }
          $total_biaya = number_format(($hargaTiket*$jumlahPenumpang));

          echo '<p>Harga tiket Ekonomi : <span class="value"> Rp '.number_format($hargaTiket).'</span></p>';
          echo '<p>Total Harga :<span class="value"> Rp '.$total_biaya.'</span></p>';
        }
        else {

          if ($lKotaAsal == $lKotaTujuan) {
            $hargaTiket = 800000;
          } elseif ($lKotaAsal < $lKotaTujuan) {
            $lakhir = $lKotaTujuan - $lKotaAsal;
            $hargaTiket = 800000+($lakhir*300000);
          } else {
            $lakhir = $lKotaAsal - $lKotaTujuan ;
            $hargaTiket = 800000+($lakhir*300000);
          }

          $total_biaya = number_format(($hargaTiket*$jumlahPenumpang));

          echo '<p>Harga tiket VIP : <span class="value"> Rp '.number_format($hargaTiket).'</span></p>';
          echo '<p>Total Harga : <span class="value"> Rp '.$total_biaya.'</span></p>';
        }

          echo '<input type="submit" name="submitPesanan" id="submitPesanan" value="Proses" class="btn-sukses">
          </form>';


          } else {
        echo '<button type="button" class="btn-error" disabled>Data Belum lengkap Boss</button>';
        }

          include './script/sql_connection.php';
          if($conn === false){
            die("ERROR: Could not connect. " . mysqli_connect_error());
          }

          // Attempt insert query execution
          $sql = "INSERT INTO history_pembelian (nama, email, tanggal_berangkat, kota_asal, kota_tujuan, jumlah_penumpang, kelas, total_biaya, harga_tiket)
          VALUES ('".$nama."','".$email."','".$tanggal_berangkat."','".$kotaAsal."','".$kotaTujuan."','".$jumlahPenumpang."','".$kelas."','".$total_biaya."','".$hargaTiket."')";
          if(mysqli_query($conn, $sql)){
            echo "Records inserted successfully.";
          } else{
            echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
          }

          // Close connection
          mysqli_close($conn);


        




        }
?>
