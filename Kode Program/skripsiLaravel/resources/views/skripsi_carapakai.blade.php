<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <link rel="icon" href="{{ asset('assets/unpar.png') }}">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    <title>Cara Pakai | Skripsi</title>
    <link href="{{ asset('css/skripsi_mainstyle.css') }}" rel="stylesheet" type="text/css" >
</head>
<style>
    body{
        background-image: url("assets/carapakai_bg.jpg") ;
        background-size: 100%;
        padding-left: 99px;
        padding-right: 108px;
        background-repeat: no-repeat;
        /* box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19); */
    }
</style>
<body style="background-color: #ececec41;">
    @include('skripsi_header')

    <h1>Aplikasi Pemantauan<br> 
        Kualitas Tanah Sawah<br>
        Berbasis WSN
    </h1>

    <hr>

    <h2 style="font-size: 14px;">
        Skripsi II<br>
    </h2>

    <div class="carapakaihead">
        <img src="assets/carapakai1.png" style="width:78%;height:78%;">
    </div>
    <div class="carapakaicontent">
        <h1>Cara Penggunaan</h1>
        <hr>
        <div class="cpisi" style="margin-top: 80px;">
            <img src="assets/cp1.jpg">
                <h1>Aktifkan Perangkat</h1>
                <a>Aktifkan seluruh node sensor (perangkat keras Arduino dan Raspberry) 
                   juga pastikan setiap sensor sensing pada setiap node sensor aktif 
                   ,untuk melakukan pemantauan kualitas tanah sawah yang diuji.
                </a>
        </div>


        <div class="cpisi">
            <img src="assets/cp2.jpeg">
                <h1>Sebar Perangkat</h1>
                <a>Sebarkan node sensor ke berbagai titik sesuai dengan topologi yang digunakan.
                    Penyebaran node sensor dilakukan pada satu bidang petak tanah sawah.
                    Untuk node sensor Raspberry akan terhubung langsung dengan laptop.
                </a>
        </div>

        <div class="cpisi">
            <img src="assets/cp3.jpg">
                <h1>Aktifkan Internet</h1>
                <a>Pastikan laptop yang terhubung dengan perangkat Rapsberry terhubung dengan internet.
                    Hasil sensing yang didapatkan oleh node sensor akan dikirimkan ke Rapsberry lalu disimpan
                    di internet (local-host).
                </a>
        </div>

        <div class="cpisi">
            <img src="assets/cp4.jpg">
                <h1>Lakukan Sensing</h1>
                <a>Untuk melakukan sensing, masuk ke halaman sensing pada website. Hasil sensing yang 
                    diambil oleh node sensor secara otomatis akan ditampilkan pada halaman tersebut.
                    Pengguna juga dapat menghentikan sensing ataupun memulai kembali sensing pada halaman tersebut.
                </a>
        </div>      
    </div>

    <a class="trademark">Pengembangan Aplikasi Pemantauan Kualitas Tanah Sawah Berbasis WSN</a>

</body>
</html>