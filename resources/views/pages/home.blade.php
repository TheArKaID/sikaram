@extends('layouts.default')
@section('content')

<section id="main-slider" class="no-margin">
    <div class="carousel slide">
        <ol class="carousel-indicators">
            <li data-target="#main-slider" data-slide-to="0" class="active"></li>
            <li data-target="#main-slider" data-slide-to="1"></li>
            <li data-target="#main-slider" data-slide-to="2"></li>
        </ol>
    <div class="carousel-inner">
        <div class="item active" style="background-image:url(images/slider/bg1.jpg)">
            <div class="container">
                <div class="row slide-margin">
                    <div class="col-sm-6">
                        <div class="carousel-content">
                            <h1 class="animation animated-item-1">بِسْمِ اللَّهِ الرَّحْمَنِ الرَّحِيم</h1>
                            <h2 class="animation animated-item-2">Assalamualaikum warohmatullahi wabarakatu selamat datang di web SIKARAM kami.</h2>
                        </div>
                    </div>
                <div class="col-sm-6 hidden-xs animation animated-item-4">
                    <div class="slider-img">
                        <img src="images/slider/img1.png" class="img-responsive">
                    </div>
                </div>
            </div>
        </div>
    </div>
        <div class="item" style="background-image:url(images/slider/bg2.jpg)">
            <div class="container">
                <div class="row slide-margin">
                    <div class="col-sm-6">
                        <div class="carousel-content">
                            <h1 class="animation animated-item-1">Kajian Sikaram</h1>
                                <h2 class="animation animated-item-2">“Barangsiapa menempuh jalan menuntut ilmu, maka Allah akan memudahkan jalannya untuk menuju surga” 
                                    (HR. At Tirmidzi no. 2682, Abu Daud no. 3641, dishahihkan Al Albani dalam Shahih Abu Daud).</h2>
                        </div>
</div>
<div class="col-sm-6 hidden-xs animation animated-item-4">
<div class="slider-img">
<img src="images/slider/img2.png" class="img-responsive">
</div>
</div>
</div>
</div>
</div>
<div class="item" style="background-image:url(images/slider/bg3.jpg)">
<div class="container">
<div class="row slide-margin">
<div class="col-sm-6">
<div class="carousel-content">
<h1 class="animation animated-item-1">Berlombalah Dalam Kebaikan</h1>
<h2 class="animation animated-item-2">Allah SWT berfirman dalam Al-Qur’an Surah Al-Baqarah ayat 148, yang artinya : ”Dan bagi tiap-tiap umat ada kiblatnya (sendiri) yang ia menghadap kepadanya. Maka berlomba-lombalah kamu (dalam berbuat) kebaikan. 
Di mana saja kamu berada pasti Allah akan mengumpulkan kamu sekalian (pada hari kiamat). Sesungguhnya Allah Maha Kuasa atas segala sesuatu”. (AQS. Al-Baqarah/2:148)</h2>
</div>
</div>
<div class="col-sm-6 hidden-xs animation animated-item-4">
<div class="slider-img">
<img src="images/slider/img3.png" class="img-responsive">
</div>
</div>
</div>
</div>
</div>
</div>
</div>
<a class="prev hidden-xs" href="#main-slider" data-slide="prev">
<i class="fa fa-chevron-left"></i>
</a>
<a class="next hidden-xs" href="#main-slider" data-slide="next">
<i class="fa fa-chevron-right"></i>
</a>
</section>

<section id="partner">
<div class="container">
<div class="center wow fadeInDown">
<h2>Anggota</h2>
<p class="lead">بِسْمِ اللَّهِ الرَّحْمَنِ الرَّحِيم<br> Selamat datang di aplikasi SIKARAM yang mana membantu pengguna untuk melihat jadwal kajian , masjid dan mubaligh</p>
</div>
<div class="partners">
<ul>
<li> <a href="#"><img class="img-responsive wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="300ms" src="images/partners/partner1.png"></a></li>
<li> <a href="#"><img class="img-responsive wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms" src="images/partners/partner2.png"></a></li>
<li> <a href="#"><img class="img-responsive wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="900ms" src="images/partners/partner3.png"></a></li>
<li> <a href="#"><img class="img-responsive wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="1200ms" src="images/partners/partner4.png"></a></li>
<li> <a href="#"><img class="img-responsive wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="1500ms" src="images/partners/partner5.png"></a></li>
<li> <a href="#"><img class="img-responsive wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="1800ms" src="images/partners/partner6.png"></a></li>
</ul>
</div>
</div>
</section>
<section id="conatcat-info">
<div class="container">
<div class="row">
<div class="col-sm-8">
<div class="media contact-info wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
<div class="pull-left">
<img class="img-responsive" src="images/service/phone.png" width="60" height="60" alt="Phone">
</div>
<div class="media-body">
<h2>Apakah ada pertanyaan tentang aplikasi ini ?</h2>
<p>بِسْمِ اللَّهِ الرَّحْمَنِ الرَّحِيم<br>Mari belajar bersama dengan kelompok kami, di Universitas Muhammadiyah Yogyakarta , Fakultas Teknik , Tehnologi Informasi +0123 456 70 80 90</p>
</div>
</div>
</div>
</div>
</div>
</section>

    
@endsection