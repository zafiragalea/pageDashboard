<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh"
        crossorigin="anonymous"/>
    <link rel="stylesheet" href="<?php echo base_url('assets/css/pages/dashboard.css')?>"/>
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" 
    integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g==" 
    crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" 
    integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw==" 
    crossorigin="anonymous" referrerpolicy="no-referrer" />

    <a href="https://icons8.com/icon/40217/back"></a>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lato&family=Roboto:wght@300&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@700&family=Lato&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans&display=swap" rel="stylesheet">

    <title>Dashboard Classico</title>

    <style>
        html, body {
    height: 100%;
    overflow-x: hidden; 
}
.judul h2{
    font-family: Josefin Sans;
    font-weight: bold;
    font-size: 36px;
    line-height: 36px;
    color: #000000;
}
.dashboard{
    height: 100vh;
    width: 100%;
}
.pengguna h1{
    font-family: Josefin Sans;
    font-weight: light;
    font-size: 48px;
    line-height: 48px;
}
.pengguna p {
    font-family: Lato;
    font-size: 24px;
    line-height: 29px;
    text-align: justify;
    color: #A59898;
}
.header h1{
    font-family: Josefin Sans;
    font-weight:bold;
    font-size: 48px;
    line-height: 48px;
    color: #000000;
}
.logo{
    font-family: Josefin Sans;
    font-style: normal;
    font-weight: bold;
    font-size: 36px;
    line-height: 36px;
    color: #000000;
}
.isi a {
    font-family: Josefin Sans;
    font-weight: bold;
    font-size: 22px;
    line-height: 24px;
    color: black;
    text-decoration: none;
    padding: 15px 10px;
}

.isi a:hover {
    background-color: rgba(131, 219, 231, 1);
}
.paket{
    background: #F3FDFF;
    box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);
    overflow: hidden;
    width: 441px;
    height: 299px;
}
.paket h2{
    font-family: Josefin Sans;
    font-weight: bold;
    font-size: 24px;
    line-height: 24px;
    position: relative;
    left: 40px;
    top: 15px;
}
.slide-img ul{
    font-family: Lato;
    font-size: 16px;
    line-height: 19px;
    color: #3E3333;
}
.detailPaket p, .detailDaftar a{
    font-family: Josefin Sans;
    font-style: normal;
    font-size: 18px;
    line-height: 18px;
}
.detailPaket p{
    font-weight: bold;
}
.footer{
    height: 260px;
    background: linear-gradient(180deg, rgba(0, 125, 159, 0.1378) 0%, rgba(210, 233, 243, 0) 11.46%);
    text-align: justify;
}
.footer a{
    font-family: Lato;
    font-size: 16px;
    line-height: 19px;
    color: black;
}
.top{
    font-family: Josefin Sans;
    font-weight: bold;
    font-size: 16px;
}
    </style>
</head>
<body>
    <div class="row">
        <!-- sidenav -->
        <div class="col-3 kiri d-flex flex-column flex-shrink-0 p-3 sidenav position-fixed "
            style="background-color: #E2F6F9; height: 1271px;">
            <div class="container">
                <div class="d-flex flex-column ">
                    <div class="judul pt-4 ml-3">
                        <h2>Classico</h2>
                    </div>
                    <div class="isi d-flex flex-column mt-4 pt-2 px-3">
                        <a href=""><img src="<?php echo base_url('assets/img/dashboard.png')?>" alt=""> Dashboard</a>
                        <a href=""><img src="<?php echo base_url('assets/img/gantiKataSandi.png')?>" alt=""> Ganti Kata Sandi</a>
                        <a href=""><img src="<?php echo base_url('assets/img/keluar.png')?>" alt=""> Keluar</a>
                    </div>
                </div>
            </div>
        </div>

        <!-- header -->
        <div class="col-3">
        </div>
        <div class="col-9 g-4">
            <div class="container pt-2 pb-5">
                
                <!-- main content -->
                <div class="row">
                    <div class="dashboard col-12 mt-5" style="background: white;">
                        <div class="header d-flex flex-row ml-5">
                            <h1>Dashboard</h1>
                        </div>
                        <div class="pengguna d-flex flex-row my-4 mr-5">
                            <div class="gambar col">
                                <img style="widht:400px; height:359px;" src="<?php echo base_url('assets/img/dashboardIMG.png')?>"/>
                            </div>
                            <div class="text col ml-4" style="top: 60px;">
                                <h1>Selamat datang, <br> Tarisa Rafika!</h1><br>
                                <p>Anda belum terdaftar pada paket mana pun. 
                                Silahkan lakukan pembelian paket terlebih dahulu.</p>
                            </div>
                            <div class="col-1">
                            </div>
                        </div>
                    </div>
                </div>
<!-- 
                <div class="row"> -->
                <div class="owl-carousel owl-theme">
                    <div class="item"><h4>1</h4></div>
                    <div class="item"><h4>2</h4></div>
                    <div class="item"><h4>3</h4></div>
                    <div class="item"><h4>4</h4></div>
                    <div class="item"><h4>5</h4></div>
                    <div class="item"><h4>6</h4></div>
                    <div class="item"><h4>7</h4></div>
                    <div class="item"><h4>8</h4></div>
                    <div class="item"><h4>9</h4></div>
                    <div class="item"><h4>10</h4></div>
                    <div class="item"><h4>11</h4></div>
                    <div class="item"><h4>12</h4></div>
                </div>
                        <!-- <ul id="autoWidth" class="cs-hidden">
                            <li class="item-a">
                                <div class="paket">
                                    <div class="slide-img">
                                        <h2>Private</h2>
                                        <div class="row mt-4">
                                            <div class="col-7">
                                                <ul type="disc">
                                                    <li>Maksimal 4 anggota kelas</li>
                                                    <li>Materi yang diajarkan disesuaikan dengan kebutuhan</li>
                                                    <li>Jadwal pembelajaran fleksibel</li>
                                                </ul>
                                            </div>
                                            <div class="col-5">
                                                <img style="" src="<?php echo base_url('assets/img/dashboardPrivate.png')?>"/>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="detail-box row mt-3 border-top">
                                        <div class="detailPaket col d-flex justify-content-end mr-3 mt-3">
                                            <p> Rp.400.000,- / Pertemuan</p>
                                        </div>
                                        <div class="w-100">
                                        </div>
                                        <div class="detailDaftar col d-flex justify-content-end  mr-3">
                                            <a href="">Daftar Sekarang
                                                <img src="<?php echo base_url('assets/img/nextDaftar.png')?>" alt="">
                                            </a>
                                        </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="item-b">
                                <div class="paket">
                                    <div class="slide-img">
                                        <h2>Private</h2>
                                        <div class="row mt-4">
                                            <div class="col-7">
                                                <ul type="disc">
                                                    <li>Maksimal 4 anggota kelas</li>
                                                    <li>Materi yang diajarkan disesuaikan dengan kebutuhan</li>
                                                    <li>Jadwal pembelajaran fleksibel</li>
                                                </ul>
                                            </div>
                                            <div class="col-5">
                                                <img style="" src="<?php echo base_url('assets/img/dashboardPrivate.png')?>"/>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="detail-box row mt-3 border-top">
                                        <div class="detailPaket col d-flex justify-content-end mr-3 mt-3">
                                            <p> Rp.400.000,- / Pertemuan</p>
                                        </div>
                                        <div class="w-100">
                                        </div>
                                        <div class="detailDaftar col d-flex justify-content-end  mr-3">
                                            <a href="">Daftar Sekarang
                                                <img src="<?php echo base_url('assets/img/nextDaftar.png')?>" alt="">
                                            </a>
                                        </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="item-c">
                                <div class="paket">
                                    <div class="slide-img">
                                        <h2>Private</h2>
                                        <div class="row mt-4">
                                            <div class="col-7">
                                                <ul type="disc">
                                                    <li>Maksimal 4 anggota kelas</li>
                                                    <li>Materi yang diajarkan disesuaikan dengan kebutuhan</li>
                                                    <li>Jadwal pembelajaran fleksibel</li>
                                                </ul>
                                            </div>
                                            <div class="col-5">
                                                <img style="" src="<?php echo base_url('assets/img/dashboardPrivate.png')?>"/>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="detail-box row mt-3 border-top">
                                        <div class="detailPaket col d-flex justify-content-end mr-3 mt-3">
                                            <p> Rp.400.000,- / Pertemuan</p>
                                        </div>
                                        <div class="w-100">
                                        </div>
                                        <div class="detailDaftar col d-flex justify-content-end  mr-3">
                                            <a href="">Daftar Sekarang
                                                <img src="<?php echo base_url('assets/img/nextDaftar.png')?>" alt="">
                                            </a>
                                        </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                </div> -->

                <div class="footer row">
                    <div class="col-5">
                        <div class="row top mt-4 ml-4 "> 
                            Tentang Classico
                        </div>
                        <div class="row bottom mt-4 ml-4"> 
                            CLASSICO merupakan singkatan dari Class Interaction Community yang hadir sebagai media pembelajaran online yang membantu kalian mendapatkan pengalaman dalam mengeksplor kemampuan mengajar, membantu kalian mendapatkan ilmu diluar Pendidikan formal serta mempermudah kalian dalam berinteraksi dengan suatu kelompok belajar.
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="row top mt-4 ml-4 "> 
                            Location
                        </div>
                        <div class="row bottom mt-4 ml-3 "> 
                            <div class="row ml-2">
                                <img style="width: 20px;height: 20px;" src="<?php echo base_url('assets/img/map.png')?>" alt="">
                            </div>
                            <div class="col-10">
                                <a href="https://www.google.com/maps/place/CV+Digital+Creative/@-2.969753,104.752457,16z/data=!4m5!3m4!1s0x0:0xced91e4b000cd6b0!8m2!3d-2.9697199!4d104.7525228?hl=en">
                                Sekip Pangkal, Jalan Mayor Salim Batubara I, Lrg. Asrama Putra No.6416, Sekip Jaya, Ilir Timur I Kota Palembang , Sumatera Selatan 30114, Palembang, 30113
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-3">
                            <div class="row top mt-4"> 
                            Contact Us
                        </div>
                        <div class="row bottom mt-4"> 
                            <div class="col">
                                <img src="<?php echo base_url('assets/img/mail.png')?>" alt="">
                                <a href="">Classico@gmail.com</a>
                            </div>
                            <div class="w-100">
                            </div>
                            <div class="col">
                                <img src="<?php echo base_url('assets/img/wa.png')?>" alt="">
                                <a href="">+62 812-1234-5678</a>
                            </div>
                            <div class="w-100">
                            </div>
                            <div class="col">
                                <img src="<?php echo base_url('assets/img/ig.png')?>" alt="">
                                <a href="">Instagram</a>
                            </div>
                            <div class="w-100">
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <script>
        $('.owl-carousel').owlCarousel({
            loop:true,
            margin:10,
            nav:true,
            responsive:{
                0:{
                    items:1
                },
                600:{
                    items:3
                },
                1000:{
                    items:5
                }
            }
        })
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" 
    integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" 
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" 
    integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" 
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>

</body>
</html>