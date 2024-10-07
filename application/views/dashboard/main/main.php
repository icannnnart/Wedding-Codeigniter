<!DOCTYPE html>
<html lang="en">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">
    
    <meta name="format-detection" content="telephone=no">
    <link rel="icon" type="image/png" href="https://icanart.dev/img/browser.png">
    <title>Revita-Ihsan | Undangan Pernikahan</title>

    <meta property="og:title" content="Revita-Ihsan | Undangan Pernikahan">
    <meta property="og:site_name" content="Revita-Ihsan | Undangan Pernikahan">
    <meta property="og:description" content="Revita-Ihsan | Undangan Pernikahan">
    <meta property="og:type" content="website">
    <meta property="og:image" content="<?=base_url('files/images/elegant-1/bg/header.jpg')?>">

    <meta name="twitter:title" content="Revita-Ihsan | Undangan Pernikahan" />
    <meta name="twitter:site" content="Revita-Ihsan | Undangan Pernikahan" />
    <meta name="twitter:card" content="Revita-Ihsan | Undangan Pernikahan" />
    <meta name="twitter:image" content="<?=base_url('files/images/elegant-1/bg/header.jpg')?>" />
    <meta name="color-scheme" content="only light">

    <!-- CSS  -->
    <link href="https://fonts.googleapis.com/css2?family=Great+Vibes&amp;display=swap" rel="stylesheet">
    <!-- Bootstrap -->
    <link href="<?=base_url('files/assets/')?>cdn.jsdelivr.net/npm/bootstrap%405.0.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?=base_url('files/assets/')?>cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" >
    <!-- Aos Animation on scroll -->
    <link href="<?=base_url('files/assets/')?>unpkg.com/aos%402.3.1/dist/aos.css" rel="stylesheet">
    <!-- Sweet Alert 2 -->
    <link rel="stylesheet" href="<?=base_url('files/sweetalert2/')?>sweetalert2.min.css">
    <!-- Core -->
    <link rel="stylesheet" href="<?=base_url('files/css/')?>appc5b1.css?id=869c47c87052b226bc3bfa2feba19463">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
    const queryString = window.location.search;
    const urlParams = new URLSearchParams(queryString);
    document.addEventListener('DOMContentLoaded', function() {

        var sections = { "menu": { "primary": { "style": "Great Vibes, cursive", "size": "9" }, "secondary": { "style": "Poppins, serif", "size": "4.8" }, "body": { "style": "Poppins, serif", "size": "1.8" } }, "header": { "primary": { "style": "Great Vibes, cursive", "size": "9" }, "secondary": { "style": "Poppins, serif", "size": "4.8" }, "body": { "style": "Poppins, serif", "size": "1.8" } }, "people": { "primary": { "style": "Great Vibes, cursive", "size": "9" }, "secondary": { "style": "Poppins, serif", "size": "4.8" }, "body": { "style": "Poppins, serif", "size": "1.8" } }, "acara": { "primary": { "style": "Great Vibes, cursive", "size": "9" }, "secondary": { "style": "Poppins, serif", "size": "4.8" }, "body": { "style": "Poppins, serif", "size": "1.8" } }, "galeri": { "primary": { "style": "Great Vibes, cursive", "size": "9" }, "secondary": { "style": "Poppins, serif", "size": "4.8" }, "body": { "style": "Poppins, serif", "size": "1.8" } }, "quotes": { "primary": { "style": "Great Vibes, cursive", "size": "9" }, "secondary": { "style": "Poppins, serif", "size": "4.8" }, "body": { "style": "Poppins, serif", "size": "1.8" } }, "cerita": { "primary": { "style": "Great Vibes, cursive", "size": "9" }, "secondary": { "style": "Poppins, serif", "size": "4.8" }, "body": { "style": "Poppins, serif", "size": "1.8" } }, "ucapan": { "primary": { "style": "Great Vibes, cursive", "size": "9" }, "secondary": { "style": "Poppins, serif", "size": "4.8" }, "body": { "style": "Poppins, serif", "size": "1.8" } }, "hadiah": { "primary": { "style": "Great Vibes, cursive", "size": "9" }, "secondary": { "style": "Poppins, serif", "size": "4.8" }, "body": { "style": "Poppins, serif", "size": "1.8" } }, "kado": { "primary": { "style": "Great Vibes, cursive", "size": "9" }, "secondary": { "style": "Poppins, serif", "size": "4.8" }, "body": { "style": "Poppins, serif", "size": "1.8" } }, "prokes": { "primary": { "style": "Great Vibes, cursive", "size": "9" }, "secondary": { "style": "Poppins, serif", "size": "4.8" }, "body": { "style": "Poppins, serif", "size": "1.8" } }, "vendor": { "primary": { "style": "Great Vibes, cursive", "size": "9" }, "secondary": { "style": "Poppins, serif", "size": "4.8" }, "body": { "style": "Poppins, serif", "size": "1.8" } }, "tambahan": { "primary": { "style": "Great Vibes, cursive", "size": "9" }, "secondary": { "style": "Poppins, serif", "size": "4.8" }, "body": { "style": "Poppins, serif", "size": "1.8" } }, "footer": { "primary": { "style": "Great Vibes, cursive", "size": "9" }, "secondary": { "style": "Poppins, serif", "size": "4.8" }, "body": { "style": "Poppins, serif", "size": "1.8" } }, "lokasi": { "primary": { "style": "Great Vibes, cursive", "size": "9" }, "secondary": { "style": "Poppins, serif", "size": "4.8" }, "body": { "style": "Poppins, serif", "size": "1.8" } } };

        var root = document.documentElement;

        Object.keys(sections).forEach(function(section) {
            var sectionData = sections[section];
            var primarySize = sectionData['primary']['size'];
            var secondarySize = sectionData['secondary']['size'];
            var bodySize = sectionData['body']['size'];

            var primaryFontFamily = sectionData['primary']['style'];
            var secondaryFontFamily = sectionData['secondary']['style'];
            var bodyFontFamily = sectionData['body']['style'];

            if (primarySize && secondarySize && bodySize) {
                root.style.setProperty('--section-' + section + '-primary', primarySize + 'rem');
                root.style.setProperty('--section-' + section + '-secondary', secondarySize + 'rem');
                root.style.setProperty('--section-' + section + '-body', bodySize + 'rem');

                root.style.setProperty('--section-' + section + '-primary-font', "" + primaryFontFamily + "");
                root.style.setProperty('--section-' + section + '-secondary-font', "" + secondaryFontFamily + "");
                root.style.setProperty('--section-' + section + '-body-font', "" + bodyFontFamily + "");

                // Generate dynamic classes for different font sizes and font families
                var classPrimary = '.section-' + section + '-primary { font-size: var(--section-' + section + '-primary) !important; font-family: var(--section-' + section + '-primary-font) !important; }';
                var classSecondary = '.section-' + section + '-secondary { font-size: var(--section-' + section + '-secondary) !important; font-family: var(--section-' + section + '-secondary-font) !important; }';
                var classBody = '.section-' + section + '-body { font-size: var(--section-' + section + '-body) !important; font-family: var(--section-' + section + '-body-font) !important; }';

                // Append the generated classes to a <style> element in the head
                var style = document.createElement('style');
                style.type = 'text/css';
                style.appendChild(document.createTextNode(classPrimary));
                style.appendChild(document.createTextNode(classSecondary));
                style.appendChild(document.createTextNode(classBody));
                document.head.insertBefore(style, document.head.firstChild);

                const primaryElements = document.querySelectorAll(`.section-${section}-primary`);
                const secondaryElements = document.querySelectorAll(`.section-${section}-secondary`);
                const bodyElements = document.querySelectorAll(`.section-${section}-body`);

                primaryElements.forEach(element => {
                    if (urlParams.has('font-label')) {
                        element.classList.add("badge-primary-font");
                    }
                    const currentSize = parseFloat(getComputedStyle(element).fontSize);
                    if (currentSize < 16) {
                        element.style.setProperty('font-size', adjustedFontSizePrimary, 'important');
                    }
                });

                secondaryElements.forEach(element => {
                    if (urlParams.has('font-label')) {
                        element.classList.add("badge-secondary-font");
                    }
                    const currentSize = parseFloat(getComputedStyle(element).fontSize);
                    if (currentSize < 16) {
                        element.style.setProperty('font-size', adjustedFontSizeSecondary, 'important');
                    }
                });

                bodyElements.forEach(element => {
                    if (urlParams.has('font-label')) {
                        element.classList.add("badge-body-font");
                    }
                    const currentSize = parseFloat(getComputedStyle(element).fontSize);
                    if (currentSize < 16) {
                        element.style.setProperty('font-size', adjustedFontSizeBody, 'important');
                    }
                });
            }
        });
    });
    </script>
    <meta name="theme-color" content="#3A4E3F">
    <link rel="stylesheet" href="<?=base_url('files/css/')?>elegant-1/appddf1.css?id=4fd074e2b57e2d4dd6ccab1b8844cb84">
    <link rel="stylesheet" href="<?=base_url('files/css/')?>elegant-1/customebfc2.css?id=bb8bd76880de14a9598ea29a4d2a97c4">
    <style>
        body#index section#opening {
                background-image: url(<?=base_url('files/images/')?>elegant-1/bg/header.jpg);
            }

            body#index header#header {
                background-image: url(<?=base_url('files/images/')?>elegant-1/bg/header.jpg);
            }

            @media  only screen and (max-width: 600px) {
                body#index section#opening {
                    background-image: url(<?=base_url('files/images/')?>elegant-1/bg/header.jpg);
                }

                body#index header#header {
                    background-image: url(<?=base_url('files/images/')?>elegant-1/bg/header.jpg);
                }
            }
        </style>
    <script>
    const adjustedFontSizePrimary = '1.6rem';
    const adjustedFontSizeSecondary = '1.6rem';
    const adjustedFontSizeBody = '1.7rem';
    </script>
    <style>.gmap_canvas {overflow:hidden;background:none!important;}</style>
    <style>
        :root{
            color-scheme: only light;
        }

        * {
            color-scheme: only light;
        }
    </style>
</head>

<body id="index" class="opening-show" style="cursor: default !important; overflow-y: hidden !important; overflow-x: hidden !important;">
    <button id="btn-soundcloud" class="showhim btn btn-white mt-5 ps-2 pt-1 pb-1 pe-2 shadow">
        <div class="row">
            <div class="col-2 my-auto btn btn-light" id="btn-play">
                <i class="fas fa-play"></i>
            </div>
            <div class="showme col-8 my-auto" id="content-btn-play" style="display: none;">
                <div class="row">
                    <div class="col-12 text-start">
                        <span id="title-soundcloud">Rio Clappy - Bunga Abadi</span>
                    </div>
                    <div class="col-12 text-start">
                        <img src="<?=base_url('files/images/')?>soundcloud/watermark.png" class="ml-auto" style="" alt="">
                    </div>
                </div>
            </div>
        </div>
    </button>
    <script src="<?=base_url('files/assets')?>/w.soundcloud.com/player/api.js" type="text/javascript"></script>
    <iframe style="display: none" id="sc-widget" width="100%" height="100" scrolling="no" frameborder="no" allow="autoplay" src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/1744989585&show_teaser=false&auto_play=false&single_active=true&show_playcount=false&sharing=false&buying=false&download=false">
    </iframe>
    <section id="opening">
        <div class="container text-white" data-aos="fade-up" data-aos-duration="1000">
            <h3 class="section-header-body">Undangan Pernikahan</h3>
            <h1 class="decoration-polygon mb-6 mt-9 section-header-primary">
                Ihsan Maulana <br />&<br /> Revita EliyaSari
            </h1>
            <div class="block-tamu">
                <div class="section-header-body">Yth Bapak/Ibu/Saudara/i</div>
                <h2 class="nama-tamu section-header-body"><?php if($nama_tamu==NULL){ echo"";}else{echo $nama_tamu;}?></h2>
                <div class="section-header-body">Anda diundang dengan hormat ke pernikahan kami</div>
                <div class="row mt-8">
                    <div class="col-auto">
                        <button id="btn-open-opening" class="btn btn-primary section-header-body">Buka Undangan</button>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <nav class="navbar navbar-expand fixed-bottom d-md-none border-top p-0 pb-3">
        <ul class="navbar-nav nav-justified w-100">
            <li class="nav-item">
                <a class="text-decoration-none  page-scroll-mobile nav-link" href="#header">
                    <span class="text-center">
                        <img src="<?=base_url('files/images/')?>elegant-1/icons/Icon-Home.svg" class="img-fluid" alt="">
                    </span>
                </a>
            </li>
            <li class="nav-item">
                <a class="text-decoration-none  page-scroll-mobile nav-link" href="#mempelai">
                    <span class="text-center">
                        <img src="<?=base_url('files/images/')?>elegant-1/icons/Icon-Mempelai.svg" class="img-fluid" alt="">
                    </span>
                </a>
            </li>
            <li class="nav-item">
                <a class="text-decoration-none  page-scroll-mobile nav-link" href="#acara">
                    <span class="text-center">
                        <img src="<?=base_url('files/images/')?>elegant-1/icons/Icon-Acara.svg" class="img-fluid" alt="">
                    </span>
                </a>
            </li>
            <li class="nav-item">
                <a class="text-decoration-none  page-scroll-mobile nav-link" href="#galeri">
                    <span class="text-center">
                        <img src="<?=base_url('files/images/')?>elegant-1/icons/Icon-Gallery.svg" class="img-fluid" alt="">
                    </span>
                </a>
            </li>
            <li class="nav-item">
                <a class="text-decoration-none  page-scroll-mobile nav-link" href="#ucapan">
                    <span class="text-center">
                        <img src="<?=base_url('files/images/')?>elegant-1/icons/Icon-Ucapan.svg" class="img-fluid" alt="">
                    </span>
                </a>
            </li>
            <li class="nav-item">
                <a href="#amplop" class="text-decoration-none  page-scroll-mobile nav-link">
                    <span class="text-center">
                        <img src="<?=base_url('files/images/')?>elegant-1/icons/Icon-Hadiah.svg" class="img-fluid" alt="">
                    </span>
                </a>
            </li>
        </ul>
    </nav>
    <header id="header">
        <div class="container text-white" data-aos="fade-up" data-aos-duration="1000">
            <div class="row" id="row-decoration-parent">
                <div class="col-12">
                    <h3 class="section-header-body">Undangan Pernikahan</h3>
                    <h1 class="decoration-polygon mb-6 mt-9 section-header-primary">Ihsan Maulana <br />&<br /> Revita EliyaSari </h1>
                </div>
            </div>
            <div class="block-tamu">
                <div class="section-header-body">Yth Bapak/Ibu/Saudara/i</div>
                <h2 class="nama-tamu section-header-body"><?php if($nama_tamu==NULL){ echo"";}else{echo $nama_tamu;}?></h2>
                <div class="section-header-body">Anda diundang dengan hormat ke pernikahan kami</div>
            </div>
        </div>
    </header>
    <section class="section-3" id="mempelai" data-aos="fade-in" data-aos-duration="1000">
        <div class="container">
            <div class="text-center mb-10">
                <h1 class="text-primary pb-10 section-people-primary">Mempelai</h1>
            </div>
            <div class="row justify-content-center">
                <div class="bride-man col-md-6 col-lg-4 d-flex flex-column align-items-center align-items-lg-center text-center mb-8 mb-md-0">
                    <div class="w-30rem h-32rem" data-aos="fade-up" data-aos-duration="1000">
                        <div class="img-parent">
                            <div class="image-1 image" data-aos="fade-up" data-aos-duration="1000">
                                <img src="<?=base_url('files/images/')?>ihsan.jpg" class="img-fluid" alt="">
                            </div>
                        </div>
                    </div>
                    <h2 class="text-primary mt-9 section-people-body" data-aos="fade-up" data-aos-duration="1200">Ihsan Maulana
                    </h2>
                    <p class="pt-2 px-5 px-md-0 section-people-body" data-aos="fade-up" data-aos-duration="1400">
                        Pengantin Pria
                    </p>
                    <div class="mt-3" data-aos="fade-left" data-aos-duration="1700">
                        <a href="https://facebook.com/ihsannaxbekasi" target="_blank"><img src="<?=base_url('files/images/')?>elegant-1/icons/Icon-FB.svg" alt=""></a>
                        <a href="https://instagram.com/icanart.dev" target="_blank"><img src="<?=base_url('files/images/')?>elegant-1/icons/Icon-IG.svg" alt="" class="mx-1 mx-md-3"></a>
                    </div>
                </div>
                <div class="bride-woman col-md-6 col-lg-4 d-flex flex-column align-items-center align-items-lg-center text-center">
                    <div class="w-30rem h-32rem" data-aos="fade-up" data-aos-duration="1000">
                        <div class="img-parent">
                            <div class="image-1 image" data-aos="fade-up" data-aos-duration="1000">
                                <img src="<?=base_url('files/images/')?>revita.jpg" class="img-fluid" alt="">
                            </div>
                        </div>
                    </div>
                    <h2 class="text-primary mt-9 section-people-body" data-aos="fade-up" data-aos-duration="1200">Revita EliyaSari
                    </h2>
                    <p class="pt-2 px-5 px-md-0 section-people-body" data-aos="fade-up" data-aos-duration="1400">
                        Pengantin Wanita
                    </p>
                    <div class="mt-3" data-aos="fade-left" data-aos-duration="1700">
                        <a href="https://www.facebook.com/rahma.siskabela" target="_blank"><img src="<?=base_url('files/images/')?>elegant-1/icons/Icon-FB.svg" alt=""></a>
                        <a href="https://www.instagram.com/revitaelyas/" target="_blank"><img src="<?=base_url('files/images/')?>elegant-1/icons/Icon-IG.svg" alt="" class="mx-1 mx-md-3"></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="section-2" id="acara">
        <div class="decoration-right" data-aos="slide-left" data-aos-duration="1000"></div>
        <div class="decoration-left" data-aos="fade-right" data-aos-duration="1000"></div>
        <div class="container">
            <div class="card">
                <div class="text-center" data-aos="fade-up" data-aos-duration="1000">
                    <h1 class="text-primary pb-10 section-acara-primary">Hari Pernikahan</h1>
                </div>
                <div class="row countdown-row justify-content-center mb-16 text-center">
                    <div class="col-3 col-md-2 px-md-5 px-2">
                        <div class="text-md fw-bold section-acara-body" data-days>66</div>
                        <div class="fw-bold h1 section-acara-body">Hari</div>
                    </div>
                    <div class="col-3 col-md-2 px-md-5 px-2">
                        <div class="text-md fw-bold section-acara-body" data-hours>66</div>
                        <div class="fw-bold h1 section-acara-body">Jam</div>
                    </div>
                    <div class="col-3 col-md-2 px-md-5 px-2">
                        <div class="text-md fw-bold section-acara-body" data-minutes>66</div>
                        <div class="fw-bold h1 section-acara-body">Menit</div>
                    </div>
                    <div class="col-3 col-md-2 px-md-5 px-2">
                        <div class="text-md fw-bold section-acara-body" data-seconds>66</div>
                        <div class="fw-bold h1 section-acara-body">Detik</div>
                    </div>
                </div>
                <script src="<?=base_url('files/')?>timezz.js"></script>
                <div class="row justify-content-center">
                    <div class="col-12 col-md-11">
                        <div class="row mt-12 list-acara justify-content-center" style="">
                            <div class="col-12 mb-2 mb-md-5 pb-5" data-aos="fade-up" data-aos-duration="1000">
                                <h2 class="text-center  section-acara-secondary">
                                    Akad Nikah
                                </h2>
                            </div>
                            <div class="col-12 col-md-4 text-center mb-3 mb-md-0" data-aos="fade-up" data-aos-duration="1000">
                                <div class=" section-acara-body">Tanggal</div>
                                <h3 class="fw-bold section-acara-body">
                                    26 OKt 2024
                                </h3>
                            </div>
                            <div class="col-12 col-md-4 text-center mb-3 mb-md-0" data-aos="fade-up" data-aos-duration="1000">
                                <div class="section-acara-body">Waktu</div>
                                <h3 class="fw-bold mt-3 section-acara-body">
                                    09.00 WIB
                                </h3>
                            </div>
                            <div class="col-12 col-md-4 text-center" data-aos="fade-up" data-aos-duration="1000">
                                <div class="section-acara-body">Tempat</div>
                                <h3 class="fw-bold mb-0 mt-3 section-acara-body">
                                    Kediaman Mempelai Wanita
                                </h3>
                                <p class="mb-5 pb-5 section-acara-body">
                                    <span class="">
                                        Jl.mawar 3, no.32, RT02/RW08, kp.karang mulya, desa, Karangsatria, Kec. Tambun Utara, Kabupaten Bekasi, Jawa Barat 17510
                                    </span>
                                </p>
                            </div>
                            <div class="gap-2 col-lg-7 text-center mb-16" data-aos="fade-up" data-aos-duration="1000">
                                <a class="btn btn-primary btn-sm shadow section-acara-body " href="https://maps.app.goo.gl/sF9rAHjd4YWo4iAcA" target="_blank">
                                    <img src="<?=base_url('files/images/')?>elegant-1/icons/marker-icon.svg" class="img-fluid me-4" alt="">
                                    Buka Map
                                </a>
                            </div>
                            <div class="col-12 mt-5 pt-5 mb-2 mb-md-5 pb-5 text-center" data-aos="fade-up" data-aos-duration="1000">
                                <h2 class="text-center  section-acara-secondary">
                                    Resepsi
                                </h2>
                            </div>
                            <div class="col-12 col-md-4 text-center mb-3 mb-md-0" data-aos="fade-up" data-aos-duration="1000">
                                <div class=" section-acara-body">Tanggal</div>
                                <h3 class="fw-bold section-acara-body">
                                    26 OKt 2024
                                </h3>
                            </div>
                            <div class="col-12 col-md-4 text-center mb-3 mb-md-0" data-aos="fade-up" data-aos-duration="1000">
                                <div class="section-acara-body">Waktu</div>
                                <h3 class="fw-bold mt-3 section-acara-body">
                                    11.00 WIB
                                </h3>
                            </div>
                            <div class="col-12 col-md-4 text-center" data-aos="fade-up" data-aos-duration="1000">
                                <div class="section-acara-body">Tempat</div>
                                <h3 class="fw-bold mb-0 mt-3 section-acara-body">
                                    Kediaman Mempelai Wanita
                                </h3>
                                <p class="mb-5 pb-5 section-acara-body">
                                    <span class="">
                                        Jl.mawar 3, no.32, RT02/RW08, kp.karang mulya, desa, Karangsatria, Kec. Tambun Utara, Kabupaten Bekasi, Jawa Barat 17510
                                    </span>
                                </p>
                            </div>
                            <div class="gap-2 col-lg-7 text-center mb-16" data-aos="fade-up" data-aos-duration="1000">
                                <a class="btn btn-primary btn-sm shadow section-acara-body " href="https://maps.app.goo.gl/sF9rAHjd4YWo4iAcA" target="_blank">
                                    <img src="<?=base_url('files/images/')?>elegant-1/icons/marker-icon.svg" class="img-fluid me-4" alt="">
                                    Buka Map
                                </a>
                            </div>
                            <div class="col-12 mt-5 pt-5 text-center " data-aos="fade-up" data-aos-duration="1000">
                                <h2 class="font-type-secondary section-acara-secondary">
                                    Live Stream
                                </h2>
                                <div class="fw-normal h1 my-5 pb-3 pt-2 section-acara-body">
                                    Kami akan menyiarkan upacara pernikahan secara virtual
                                </div>
                                <div class="gap-2 col-12 text-center mt-3">
                                    <a class="btn btn-primary btn-sm shadow section-acara-body" target="_blank" href="https://instagram.com/icanart.dev" type="button">
                                        <img src="<?=base_url('files/images/')?>elegant-1/icons/live-icon.svg" class="img-fluid me-4" alt="">
                                        AKSES STREAMING
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="decoration-right-2" data-aos="slide-left" data-aos-duration="1000"></div>
        <div class="decoration-left-2" data-aos="fade-right" data-aos-duration="1000"></div>
    </section>
    <!-- Tiny slider -->
    <link rel="stylesheet" href="<?=base_url('files/assets/')?>cdnjs.cloudflare.com/ajax/libs/tiny-slider/2.9.3/tiny-slider.css">
    <!-- Lightgallery -->
    <link rel="stylesheet" href="<?=base_url('files/assets/')?>cdnjs.cloudflare.com/ajax/libs/lightgallery-js/1.4.0/css/lightgallery.min.css" >
    <!-- section-4 : contains gallery -->
    <section class="section-4" id="galeri">
        <div class="container text-center">
            <div class="text-center" data-aos="fade-up" data-aos-duration="1000">
                <h1 class="text-primary pb-10 section-galeri-primary">Momen Kami</h1>
            </div>
            <!-- Gallery slider 1 -->
        </div>
        <div class="container-fluid p-0" data-aos="fade-up" data-aos-duration="1000">
            <!-- Gallery slider 1 -->
            <div class="row align-items-center justify-content-center mb-10 m-0">
                <div class="col-12 p-0">
                    <div class="tinyslider-container-wrapper" id="row-lightgallery">
                        <div id="tinyslider-container-gallery-1" class="tinyslider-container tinyslider">
                            <div class="tinyslider-item tinyslider-item-gallery-1" data-src="<?=base_url('files/images/')?>san/1.JPEG">
                                <div class="gallery-thumbnail " style="background:url(<?=base_url('files/images/')?>san/1.JPEG)"></div>
                            </div>
                            <div class="tinyslider-item tinyslider-item-gallery-1" data-src="<?=base_url('files/images/')?>san/2.JPEG">
                                <div class="gallery-thumbnail " style="background:url(<?=base_url('files/images/')?>san/2.JPEG)"></div>
                            </div>
                            <div class="tinyslider-item tinyslider-item-gallery-1" data-src="<?=base_url('files/images/')?>san/3.JPEG">
                                <div class="gallery-thumbnail " style="background:url(<?=base_url('files/images/')?>san/3.JPEG)"></div>
                            </div>
                            <div class="tinyslider-item tinyslider-item-gallery-1" data-src="<?=base_url('files/images/')?>san/4.JPEG">
                                <div class="gallery-thumbnail " style="background:url(<?=base_url('files/images/')?>san/4.JPEG)"></div>
                            </div>
                            <div class="tinyslider-item tinyslider-item-gallery-1" data-src="<?=base_url('files/images/')?>san/5.JPEG">
                                <div class="gallery-thumbnail " style="background:url(<?=base_url('files/images/')?>san/5.JPEG)"></div>
                            </div>
                            <div class="tinyslider-item tinyslider-item-gallery-1" data-src="<?=base_url('files/images/')?>san/6.JPEG">
                                <div class="gallery-thumbnail " style="background:url(<?=base_url('files/images/')?>san/6.JPEG)"></div>
                            </div>
                            <div class="tinyslider-item tinyslider-item-gallery-1" data-src="<?=base_url('files/images/')?>san/7.JPEG">
                                <div class="gallery-thumbnail " style="background:url(<?=base_url('files/images/')?>san/7.JPEG)"></div>
                            </div>
                            <div class="tinyslider-item tinyslider-item-gallery-1" data-src="<?=base_url('files/images/')?>san/8.JPEG">
                                <div class="gallery-thumbnail " style="background:url(<?=base_url('files/images/')?>san/8.JPEG)"></div>
                            </div>
                            <div class="tinyslider-item tinyslider-item-gallery-1" data-src="<?=base_url('files/images/')?>san/9.JPEG">
                                <div class="gallery-thumbnail " style="background:url(<?=base_url('files/images/')?>san/9.JPEG)"></div>
                            </div>
                            <div class="tinyslider-item tinyslider-item-gallery-1" data-src="<?=base_url('files/images/')?>san/10.JPEG">
                                <div class="gallery-thumbnail " style="background:url(<?=base_url('files/images/')?>san/10.JPEG)"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 p-0">
                    <div class="tinyslider-controls-wrapper me-10">
                        <div id="tinyslider-controls-gallery-1" class="tinyslider-controls d-flex justify-content-between px-10">
                            <div class="col-auto">
                                <img src="<?=base_url('files/images/')?>elegant-1/icons/tinyslider-prev.svg" class="csr-pointer w-8rem" alt="">
                            </div>
                            <div class="col-auto ms-4">
                                <img id="icon-tinyslider-next" src="<?=base_url('files/images/')?>elegant-1/icons/tinyslider-next.svg" class="csr-pointer w-8rem" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end of section-4 -->
    <!-- Lightgallery -->
    <script src="<?=base_url('files/assets')?>/cdnjs.cloudflare.com/ajax/libs/lightgallery-js/1.4.0/js/lightgallery.min.js" integrity="sha512-b4rL1m5b76KrUhDkj2Vf14Y0l1NtbiNXwV+SzOzLGv6Tz1roJHa70yr8RmTUswrauu2Wgb/xBJPR8v80pQYKtQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <!-- Tiny slider -->
    <script src="<?=base_url('files/assets')?>/cdnjs.cloudflare.com/ajax/libs/tiny-slider/2.9.2/min/tiny-slider.js"></script>
    <section class="section-5" id="quotes">
        <div class="container">
            <div class="row justify-content-center text-center" data-aos="fade-up" data-aos-duration="1000">
                <div class="col-12 col-md-9 quotes-content position-relative">
                    <div class="card">
                        <h2 class="quotes-tex position-relative section-quotes-secondary" style="font-size: 1rem;"> “Dan di antara ayat-ayat-Nya ialah Dia menciptakan untukmu istri-istri dari jenismu sendiri, supaya kamu merasa nyaman kepadanya, dan dijadikan-Nya di antaramu mawadah dan rahmah. Sesungguhnya pada yang demikian itu benar-benar terdapat tanda-tanda bagi kaum yang berpikir”</h2>
                        <div class="quotes-by position-relative fs-1 fw-bold mt-10 pt-10 section-quotes-body">( Ar-Rum : 21 )</div>
                    </div>
                </div>
            </div>
    </section>
    <section class="section-6" id="cerita">
        <div class="container">
            <div class="row justify-content-between text-primary">
                <div class="col-12 col-lg-4 mb-16" data-aos="fade-up" data-aos-duration="1000">
                    <h1 class="text-primary section-cerita-primary">Cerita Cinta Kami</h1>
                </div>
                <div class="col-12 col-lg-8 list-story" data-aos="fade-up" data-aos-duration="1000">
                    <div id="tinyslider-container-story">
                        <div class="tinyslider-item tinyslider-item-story  ps-2 pb-3 pt-3">
                            <div class="card shadow p-5">
                                <img src="<?=base_url('files/images/')?>elegant-1/love-story/1.png" class="rounded-circle" alt="gambar cerita" width="90" height="90">
                                <p class="my-2 fst-italic font-bold section-cerita-body">18-Okt-2021</p>
                                <h3 class="fs-1 fw-bold mb-1 pb-1 section-cerita-secondary">Bagaimana kita bertemu</h3>
                                <div class=" section-cerita-body">Kita adalah teman masa kecil saat SD dan SMP namun berpisah saat SMA dan kuliah akhirnya dipertemukan kembali melalui sosial media seiiring berjalannya waktu kami terus berkomunikasi dan bertukar cerita hingga akhirnya kita menjalani komitemen satu sama lain</div>
                            </div>
                        </div>
                        <div class="tinyslider-item tinyslider-item-story  ps-2 pb-3 pt-3">
                            <div class="card shadow p-5">
                                <img src="<?=base_url('files/images/')?>elegant-1/love-story/2.png" class="rounded-circle" alt="gambar cerita" width="90" height="90">
                                <p class="my-2 fst-italic font-bold section-cerita-body">29-Jun-2024</p>
                                <h3 class="fs-1 fw-bold mb-1 pb-1 section-cerita-secondary">Lamaran</h3>
                                <div class=" section-cerita-body">Setelah bebrapa tahun kami saling mengenal membuat kami yakin satu sama lain untuk menjalin hubungan yang lebih serius akhirnya a ihsan menyatakan keseriusan nya dengan membawa orangtuanya.</div>
                            </div>
                        </div>
                        <div class="tinyslider-item tinyslider-item-story  ps-2 pb-3 pt-3">
                            <div class="card shadow p-5">
                                <img src="<?=base_url('files/images/')?>elegant-1/love-story/3.png" class="rounded-circle" alt="gambar cerita" width="90" height="90">
                                <p class="my-2 fst-italic font-bold section-cerita-body">26-Okt-2024</p>
                                <h3 class="fs-1 fw-bold mb-1 pb-1 section-cerita-secondary">Menikah</h3>
                                <div class=" section-cerita-body">Pernikahan kita bukan hanya sekadar sebuah acara, tetapi awal dari sebuah babak baru dalam hidup kita. Sebuah babak yang dipenuhi dengan cinta, kerja sama, dan impian-impian yang akan kita wujudkan bersama. Kita sadar bahwa perjalanan ini tidak selalu mudah, tetapi kita percaya bahwa dengan saling mendukung, kita akan mampu menghadapi segala sesuatu yang akan datang.</div>
                            </div>
                        </div>
                    </div>
                    <div id="tinyslider-controls-story" class="row mt-4 mt-lg-6 justify-content-end">
                        <div class="col-auto">
                            <img src="<?=base_url('files/images/')?>elegant-1/icons/tinyslider-prev.svg" class="csr-pointer w-8rem" alt="">
                        </div>
                        <div class="col-auto">
                            <img src="<?=base_url('files/images/')?>elegant-1/icons/tinyslider-next.svg" class="csr-pointer w-8rem" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="section-8" id="ucapan">
        <div class="container text-primary">
            <div class="row justify-content-center mb-10" data-aos="fade-up" data-aos-duration="1000">
                <div class="col-12 col-lg-12">
                    <div class=" card shadow p-5  row justify-content-center">
                        <!-- form -->
                        <form id="pesankesan" class="col-12 col-md-12 mx-auto my-5">
                            <div class="row justify-content-between">
                                <div class="col-12 mb-10">
                                    <h1 class="text-primary section-ucapan-primary">RSVP</h1>
                                </div>
                                <style>
                                    section#ucapan .card.generated{
                                            background: transparent !important;
                                            border: 0.3px solid #767B67 !important;
                                            box-shadow: none;
                                            padding: 2rem !important;
                                            width: 100%;
                                            margin-left: 0;
                                        }

                                        section#ucapan .generated:before{
                                            border: 0
                                        }
                                    </style>
                                <div class="mb-5 form-group">
                                    <label class="form-label text-primary fs-2 section-ucapan-body">Nama Lengkap</label>
                                    <input type="text" name="name" class="form-control section-ucapan-body border border-primary" value="" placeholder="Masukkan nama anda…" required>
                                    <span class="invalid-feedback"></span>
                                </div>
                                <div class="mb-5 form-group">
                                    <label class="form-label text-primary fs-2 section-ucapan-body">No. HP</label>
                                    <input type="text" name="phone" class="form-control section-ucapan-body border border-primary" autocomplete="off" inputmode="numeric" value="" placeholder="Masukkan no. HP (628xxxxxxxx)" required>
                                    <span class="invalid-feedback"></span>
                                </div>
                                <div class="mb-5 form-group">
                                    <label for="" class="form-label d-flex text-primary fs-2 section-ucapan-body">Bersedia hadir di acara kami?</label>
                                    <div class="form-check form-check-inline d-inline-flex">
                                        <input checked class="form-check-input mb-2" type="radio" name="attendance" value="1" id="flexRadioDefault1">
                                        <label for="" class="form-check-label section-ucapan-body text-primary" for="flexRadioDefault1">Ya</label>
                                    </div>
                                    <div class="form-check form-check-inline d-inline-flex">
                                        <input class="form-check-input mb-2" type="radio" name="attendance" value="0" id="flexRadioDefault2">
                                        <label for="" class="form-check-label section-ucapan-body text-primary" for="flexRadioDefault2">Tidak</label>
                                    </div>
                                    <div class="form-check form-check-inline d-inline-flex">
                                        <input class="form-check-input mb-2" type="radio" name="attendance" value="2" id="flexRadioDefault2">
                                        <label for="" class="form-check-label section-ucapan-body text-primary" for="flexRadioDefault2">Belum Tau</label>
                                    </div>
                                </div>
                                <div class="mb-5 form-group">
                                    <label for="" class="form-label text-primary fs-2 section-ucapan-body">Kirim Ucapan</label>
                                    <textarea placeholder="Masukkan ucapan untuk mempelai…" name="greeting" id="ucapan" cols="30" rows="8" class="form-control section-ucapan-body border border-primary" required></textarea>
                                </div>
                                <div class="row">
                                    <div class="col-auto">
                                        <button type="submit" class="btn btn-primary shadow section-ucapan-body">Kirim Ucapan</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                    <!-- end of form -->
                </div>
            </div>
        </div>
    </section>
    <section id="message-block" data-aos="fade-up" data-aos-duration="1000">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <!-- messages -->
                    
                        <div id="tinyslider-container-message">
                            <?php foreach($comments as $dataskomen) {?>
                            <div class="tinyslider-item tinyslider-item-message  ps-2 pb-3 pt-3">
                                <div class="card shadow p-5">
                                    <div class="fs-2 fw-bold mb-1 pb-1 section-ucapan-body"><?=$dataskomen['name']?></div>
                                    <div class="fs-3 section-ucapan-body">
                                        <?=$dataskomen['greeting']?>
                                    </div>
                                    <hr>
                                    <p class="fw-lighter font-secondary text-e-body section-kado-body"><?=$dataskomen['created_at']?></p>
                                    <?php if($dataskomen['attendance'] == 1){?>
                                        <a class="btn btn-success btn-sm" style="padding: initial;">Hadir</a>
                                    <?php }elseif ($dataskomen['attendance'] == 0) {?>
                                        <a class="btn btn-danger btn-sm" style="padding: initial;">Tidak Hadir</a>
                                    <?php }else{?>
                                        <a class="btn btn-warning btn-sm" style="padding: initial;">Belum Tau</a>
                                    <?php }?>
                                </div>
                            </div>
                            <?php }?>
                        </div>
                    
                    <div id="tinyslider-controls-message" class="row mt-4 mt-lg-6 justify-content-end">
                        <div class="col-auto">
                            <img src="<?=base_url('files/images/')?>elegant-1/icons/tinyslider-prev.svg" class="csr-pointer w-8rem" alt="">
                        </div>
                        <div class="col-auto">
                            <img src="<?=base_url('files/images/')?>elegant-1/icons/tinyslider-next.svg" class="csr-pointer w-8rem" alt="">
                        </div>
                    </div>
                    <!-- end of messages -->
                </div>
            </div>
        </div>
    </section>
    <section class="section-4" id="amplop">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="text-center mb-16 position-relative" data-aos="fade-up" data-aos-duration="1000">
                        <h1 class="text-primary section-hadiah-primary">Kirim Hadiah</h1>
                    </div>
                    <div id="amplop-list" class="row justify-content-center">
                        <div class="col-12 col-md-6">
                            <div class="card shadow p-5 mb-8" data-aos="fade-up" data-aos-duration="1000">
                                <div class="row justify-content-between">
                                    <div class="w-auto">
                                        <img src="<?=base_url('files/assets')?>/sgp1.vultrobjects.com/production-invee/bank/bca.png" alt="" class="bank-logo mb-5">
                                        <h3 class="fs-1 fw-bold mb-1 section-hadiah-body" id="bca">0661347731</h3>
                                        <div class="fs-2 section-hadiah-body">Revita EliyaSari</div>
                                        <a href="#" class="h4 text-info text-decoration-none section-hadiah-body mt-1" onclick="CopyToClipboard('bca');return false;"><i class="fi fi-sr-copy-alt mr-2"></i>Salin no. rekening
                                        </a>
                                    </div>
                                </div>
                            </div>

                            <div class="card shadow p-5 mb-8" data-aos="fade-up" data-aos-duration="1000">
                                <div class="row justify-content-between">
                                    <div class="w-auto">
                                        <img src="<?=base_url('files/assets')?>/sgp1.vultrobjects.com/production-invee/bank/bca.png" alt="" class="bank-logo mb-5">
                                        <h3 class="fs-1 fw-bold mb-1 section-hadiah-body" id="bcaihsan">0661252641</h3>
                                        <div class="fs-2 section-hadiah-body">Ihsan Maulana</div>
                                        <a href="#" class="h4 text-info text-decoration-none section-hadiah-body mt-1" onclick="CopyToClipboard('bcaihsan');return false;"><i class="fi fi-sr-copy-alt mr-2"></i>Salin no. rekening
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-kado mt-10 position-relative">
            <div class="container col-11 col-md-9 col-lg-7 col-xl-5 mt-10 position-relative">
                <div class="text-center mb-16 position-relative" data-aos="fade-up" data-aos-duration="1000">
                    <h1 class="text-primary section-kado-primary">Kirim Kado</h1>
                </div>
                <div class="offlinegift card shadow p-5 mb-8" data-aos="fade-up" data-aos-duration="1000">
                    <div class="row justify-content-center py-6">
                        <div class="w-auto">
                            <div style="z-index: 99; position: relative;">
                                <p class="fw-lighter text-center font-secondary text-e-body section-kado-body">Untuk mengirimkan kado ke mempelai, silahkan kirim ke alamat dibawah ini:</p>
                                <h4 class="fw-light text-center section-kado-secondary" id="address-desc" onclick="CopyToClipboard('address-desc');return false;"><i class="fi fi-sr-copy-alt csr-pointer mr-2"></i>Jl.mawar 3, no.32, RT02/RW08, kp.karang mulya, desa, Karangsatria, Kec. Tambun Utara, Kabupaten Bekasi, Jawa Barat 17510
                                </h4>
                            </div>
                        </div>
                    </div>
                    <!-- <div class="kado-ornamenkanan position-absolute right-0">
                                    <img src="/<?=base_url('files/images/')?>elegant-1/decoration/giftbox-kanan.png" class="amplop-decoration-kado animated_movex" alt="kado">
                                </div> -->
                </div>
            </div>
        </div>
    </section>
    <section class="section-5" id="prokes">
        <div class="container text-dark text-center">
            <div class="row justify-content-center">
                <div class="col-12 col-md-12">
                    <div class="text-center mb-10 position-relative">
                        <h1 class="text-primary section-prokes-primary">Protokol Kesehatan
                            .</h1>
                    </div>
                    <div class="prokes-block" data-aos="fade-up" data-aos-duration="1000">
                        <div class="row justify-content-center mt-10 mb-3">
                            <div class="col-md-2 col-6 mb-4" data-aos="fade-up" data-aos-duration="1200">
                                <div class="card">
                                    <div class="card-body text-center">
                                        <h5>
                                            <img src="<?=base_url('files/images/')?>elegant-1/prokes/cucitangan.svg" alt="">
                                        </h5>
                                        <div class="mt-5 fw-lighter text-primary section-prokes-body">Memakai masker</div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-2 col-6 mb-4" data-aos="fade-up" data-aos-duration="1400">
                                <div class="card">
                                    <div class="card-body text-center">
                                        <h5>
                                            <img src="<?=base_url('files/images/')?>elegant-1/prokes/masker.svg" alt="">
                                        </h5>
                                        <div class="mt-5 fw-lighter text-primary section-prokes-body">Mencuci tangan</div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-2 col-6 mb-4" data-aos="fade-up" data-aos-duration="1600">
                                <div class="card">
                                    <div class="card-body text-center">
                                        <h5>
                                            <img src="<?=base_url('files/images/')?>elegant-1/prokes/sabun.svg" alt="">
                                        </h5>
                                        <div class="mt-5 fw-lighter text-primary section-prokes-body">Menggunakan sabun</div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-2 col-6 mb-4" data-aos="fade-up" data-aos-duration="1600">
                                <div class="card">
                                    <div class="card-body text-center">
                                        <h5>
                                            <img src="<?=base_url('files/images/')?>elegant-1/prokes/jagajarak.svg" alt="">
                                        </h5>
                                        <div class="mt-5 fw-lighter text-primary section-prokes-body">Jaga jarak</div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-2 col-6 mb-4" data-aos="fade-up" data-aos-duration="1600">
                                <div class="card">
                                    <div class="card-body text-center">
                                        <h5>
                                            <img src="<?=base_url('files/images/')?>elegant-1/prokes/sanitizer.svg" alt="">
                                        </h5>
                                        <div class="mt-5 fw-lighter text-primary section-prokes-body">Menggunakan sanitizer</div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-2 col-6 mb-4" data-aos="fade-up" data-aos-duration="1600">
                                <div class="card">
                                    <div class="card-body text-center">
                                        <h5>
                                            <img src="<?=base_url('files/images/')?>elegant-1/prokes/jabattangan.svg" alt="">
                                        </h5>
                                        <div class="mt-5 fw-lighter text-primary section-prokes-body">Tidak berjabat tangan</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="section-11" id="vendor">
        <div class="prokes-decoration-left animated_left"></div>
        <div class="container text-dark text-center">
            <div class="row justify-content-center">
                <div class="col-12 col-lg-10">
                    <div class="text-center mb-10 position-relative">
                        <h1 class="text-primary section-vendor-primary" data-aos="fade-up" data-aos-duration="1200">Vendor</h1>
                    </div>
                    <div class="justify-content-evenly align-items-center d-flex flex-wrap flex-row mt-10">
                        <div class="mb-4" data-aos="fade-up" data-aos-duration="1200">
                            <div class="card bg-transparent">
                                <div class="card-body text-center">
                                    <img src="<?=base_url('files/images/')?>icanart.png" alt="icanart">
                                </div>
                            </div>
                        </div>
                        <div class="mb-4" data-aos="fade-up" data-aos-duration="1200">
                            <div class="card bg-transparent">
                                <div class="card-body text-center">
                                    <img src="<?=base_url('files/images/')?>fulllogo_transparent_nobuffer.png" alt="airetech">
                                </div>
                            </div>
                        </div>
                        <div class="mb-4" data-aos="fade-up" data-aos-duration="1200">
                            <div class="card bg-transparent">
                                <div class="card-body text-center">
                                    <img src="<?=base_url('files/images/')?>elixia.jpg" alt="airetech">
                                </div>
                            </div>
                        </div>
                        <div class="mb-4" data-aos="fade-up" data-aos-duration="1200">
                            <div class="card bg-transparent">
                                <div class="card-body text-center">
                                    <img src="<?=base_url('files/images/')?>mamih.png" alt="airetech">
                                </div>
                            </div>
                        </div>
                        <div class="mb-4" data-aos="fade-up" data-aos-duration="1200">
                            <div class="card bg-transparent">
                                <div class="card-body text-center">
                                    <img src="https://upload.wikimedia.org/wikipedia/fr/b/bb/SoundCloud_logo.png" alt="soundcloud">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="section-10" id="closing">
        <div class="container text-e-black text-center">
            <p class="section-tambahan-body" data-aos="fade-up" data-aos-duration="1000">Kami Yang Berbahagia, Keluarga Besar Kedua Mempelai</p>
            <div class="text-center mb-5" data-aos="fade-up" data-aos-duration="1100">
                <h1 class="text-primary section-tambahan-primary">Revita &amp; Ihsan</h1>
            </div>
            <div class="row justify-content-center mt-10 pb-10">
                <div class="col-12">
                    <div class="row justify-content-around">
                        <div class="col-12 col-sm-auto mb-5 mb-sm-0">
                            <div>
                                <h6 class="text-e-red font-secondary section-tambahan-body" data-aos="fade-up" data-aos-duration="1300">Keluarga Besar</h6>
                                <h4 class="fw-500 mt-3 section-tambahan-secondary" data-aos="fade-up" data-aos-duration="1350">Ihsan Maulana</h4>
                                <h6 class="fw-500 section-tambahan-body" data-aos="fade-up" data-aos-duration="1400">Bapak Ukarta dan Ibu Nurhayati</h6>
                            </div>
                        </div>
                        <div class="col-12 col-sm-auto">
                            <div>
                                <h6 class="text-e-red font-secondary section-tambahan-body" data-aos="fade-up" data-aos-duration="1500">Keluarga Besar</h6>
                                <h4 class="fw-500 mt-3 section-tambahan-secondary" data-aos="fade-up" data-aos-duration="1550">Revita EliyaSari</h4>
                                <h6 class="fw-500 section-tambahan-body" data-aos="fade-up" data-aos-duration="1600">Bapak Sarbini RM dan Ibu Nurhayati</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container hr" data-aos="fade-up" data-aos-duration="1600"></div>
    </section>
    <footer id="footer" class="d-md-block d-none">
        <div class="container">
            <div class="row font-light">
                <div class="col-6 col-md mb-0 mb-md-0 section-footer-body">
                    Copyright 2024 ICANART - All Rights Reserved
                </div>
            </div>
        </div>
    </footer>
    <a href="#header" id="btn-to-top" class="btn btn-light page-scroll">
        <i class="fas fa-arrow-up"></i>
    </a>
    <!-- JS -->
    <script src="<?=base_url('files/assets')?>/code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <!-- Bootstrap -->
    <script src="<?=base_url('files/assets')?>/cdn.jsdelivr.net/npm/bootstrap%405.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous">
    </script>
    <!-- Font Awesome -->
    <script src="<?=base_url('files/assets')?>/cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/js/all.min.js" integrity="sha512-Tn2m0TIpgVyTzzvmxLNuqbSJH3JP8jm+Cy3hvHrW7ndTDcJ1w5mBiksqDBb8GpE2ksktFvDB/ykZ0mDpsZj20w==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <!-- Aos Animation os scroll -->
    <script src="<?=base_url('files/assets')?>/unpkg.com/aos%402.3.1/dist/aos.js"></script>
    <!-- Anime js -->
    <script src="<?=base_url('files/assets')?>/cdnjs.cloudflare.com/ajax/libs/animejs/3.2.1/anime.min.js" integrity="sha512-z4OUqw38qNLpn1libAN9BsoDx6nbNFio5lA6CuTp9NlK83b89hgyCVq+N5FdBJptINztxn1Z3SaKSKUS5UP60Q==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <!-- Sweet Alert 2 -->
    <script src="<?=base_url('files/sweetalert2/')?>sweetalert2.all.min.js"></script>
    <!-- Core -->
    <script src="<?=base_url('files/js/')?>appf2a4.js?id=d24984da8b38ba6056f61bf306234429"></script>
    <!-- App -->
    <script src="<?=base_url('files/js/')?>elegant-1/app4643.js?id=9ae15e9505a35e0237dccc161641d2a9"></script>
    <!-- Modal -->
    <script>
    var event_date = '2024-10-26';
    </script>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script>
    function CopyToClipboard(id) {
        var r = document.createRange();
        r.selectNode(document.getElementById(id));
        window.getSelection().removeAllRanges();
        window.getSelection().addRange(r);
        document.execCommand('copy');
        window.getSelection().removeAllRanges();
    }
    </script>
    <script>
       $(document).ready(function() {
           $('#pesankesan').submit(function(e) {
               e.preventDefault();
               $.ajax({
                   type: 'POST',
                   url: $(this).attr('action'),
                   data: $(this).serialize(),
                   dataType: 'json',
                   success: function(response) {
                       if (response.status == 1) {
                           Swal.fire('Success', response.message, 'success').then((result) => {
                               if (result.isConfirmed) {
                                   console.log('ok')
                               }
                           });
                       } else if(response.status == 2) {
                           Swal.fire('Error', response.message, 'error');
                       } else {
                           Swal.fire('Error', response.message, 'error');
                       }
                   }
               });
           });
       });
    </script>
</body>
</html>