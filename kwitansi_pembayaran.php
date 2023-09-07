<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kwitansi Pembayaran</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>

<body>

<!-- masukan php -->




<?php

$tanggal = $_POST["tanggal"];
$Id_Pelanggan = $_POST["id_pelanggan"];
$Nama_Pelanggan = $_POST["nama"];
$kwh = $_POST["kwh"];
$pemakaian = $_POST["pemakaian"];
$keterlambatan = $_POST["keterlambatan"];



if($kwh == 450) {
  $harga_per_meter = 300;
}
else if($kwh == 900) {
  $harga_per_meter = 400;
}
else if($kwh == 1300) {
  $harga_per_meter = 500;
}
else{
  $harga_per_meter = 0;
}

$denda = $keterlambatan * 1000;
$total_tagihan = ($harga_per_meter * $pemakaian) - $denda;

// echo "Tanggal :" . $tanggal . "<br>";
// echo "Id Pelanggan :"  . $Id_Pelanggan . "<br>";
// echo "Nama Pelanggan :"  . $Nama_Pelanggan .  "<br>";
// echo "kwh :"  . $kwh  .  "<br>";
// echo "pemakaian:"  . $pemakaian . "<br";
// echo "denda:"  . $denda . "<br";
// echo "Total Tagihan :"  . $total_tagihan . "<br>" ;


?>


    <div class="box-kwitansi" id="box-kwitansi">
        <center>
        <img src="imgs/logo2.png" alt="logo_perusahaan" width="75">
</center>
        <h2 align="center">PT SINAR NUSANTARA BERSAMA</h2>
        <h5 align="center">Kwitansi Pembayaran Listrik Pascabayar</h5>

        <table width="80%" align="center" cellpadding="5">
            <tr>
                <td>ID Pelanggan</td>
                <td>:4321 </td>
                <td>Bulan 12 / Tahun 2006</td>
                <td>: / </td>
            </tr>
            <tr>
                <td>Nama</td>
                <td>: <?php echo $Nama_Pelanggan?></td>
                <td>Stand Meter</td>
                <td>: xxxxx</td>
            </tr>
            <tr>
                <td>Tarif/Daya</td>
                <td colspan="3">:4</td>
            </tr>
            <tr>
                <td>RP Tagihan </td>
                <td colspan="3">: 200.000</td>
            </tr>
            <tr>
                <td>No Ref</td>
                <td colspan="3">: 125683</td>
            </tr>
        </table>
        <p align="center">
            PT Sinar Nusantara Bersama menyatakan struk ini sebagai bukti pembayaran yang sah <br>
            Terima Kasih <br>
            *Informasi Hubungi Call Center 777 atau Hub Kantor Terdekat*
        </p>
    </div>
    <p align="center">
        <button class="btn btn-success" onclick="print()">Cetak</button>
    </p>
       <script>
         function print() {
            var divContents = document.getElementById("box-kwitansi").innerHTML;
            var a = window.open('','', 'height=500, width=500');
            a.document.write('<html');
            a.document.write('<body>');
            a.document.write(divContents);
            a.document.write('</body></html>');
            a.document.close();
            a.print();

         }
        </script>
</body>

</html>