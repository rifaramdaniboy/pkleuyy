<!DOCTYPE html>
<html lang="en">

<head>
    <title>kawalcorona.com</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Rubik:300,400,500,700,900" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('assets/square/css/open-iconic-bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/square/css/animate.css') }}">

    <link rel="stylesheet" href="{{ asset('assets/square/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/square/css/owl.theme.default.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/square/css/magnific-popup.css') }}">

    <link rel="stylesheet" href="{{ asset('assets/square/css/aos.css') }}">

    <link rel="stylesheet" href="{{ asset('assets/square/css/ionicons.min.css') }}">

    <link rel="stylesheet" href="{{ asset('assets/square/css/flaticon.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/square/css/icomoon.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/square/css/style.css') }}">
</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
        <div class="container">
            <a class="navbar-brand" href="#"><span>Kawal Covid</span></a>
            <button class="navbar-toggler js-fh5co-nav-toggle fh5co-nav-toggle" type="button" data-toggle="collapse"
                data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="oi oi-menu"></span> Menu
            </button>

            <div class="collapse navbar-collapse" id="ftco-nav">
                <ul class="navbar-nav nav ml-auto">
                    <li class="nav-item"><a href="#" class="nav-link" data-nav-section="home"><span>Dashboard</span></a>
                    </li>
                    <li class="nav-item"><a href="#" class="nav-link" data-nav-section="about"><span>Data
                                Indonesia</span></a>
                    </li>
                    <li class="nav-item"><a href="#" class="nav-link" data-nav-section="projects"><span>Data
                                Global</span></a></li>
                    <li class="nav-item"><a href="#" class="nav-link" data-nav-section="blog"><span>Berita</span></a>
                    </li>
                    <li class="nav-item"><a href="#" class="nav-link" data-nav-section="contact"><span>Kontak</span></a>
                    </li>

                </ul>
            </div>
        </div>
    </nav>

    <section class="hero-wrap js-fullheight"
        style="background-image: url('{{ asset('assets/square/images/asek1.jpg') }}');" data-section="home">
        <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-start"
                data-scrollax-parent="true">
                <div class="col-md-8 ftco-animate mt-5" data-scrollax=" properties: { translateY: '70%' }">
                    <p class="d-flex align-items-center"
                        data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">
                        <a href="https://www.youtube.com/watch?v=ciRwAED2mVs"
                            class="icon-video popup-vimeo d-flex justify-content-center align-items-center mr-3">
                            <span class="ion-ios-play play mr-2"></span>
                            <span class="watch">Watch Video</span>
                        </a>
                    </p>
                    <h1 class="mb-4" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">Selamat Datang di
                        Kawal
                        Corona</h1>
                    <p class="mb-4" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">COVID 19 adalah
                        penyakit
                        menular yang disebabkan oleh
                        virus corona yang
                        baru-baru
                        ini ditemukan.
                        Sebagian besar orang yang tertular COVID-19 akan mengalami gejala ringan hingga sedang, dan
                        akan pulih tanpa penanganan khusus.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-section ftco-services ftco-no-pt">
        <div class="container">
            <div class="row services-section">
                <div class="col-md-6 col-lg-3 d-flex">
                    <div class="media block-3 services text-center d-block">
                        <div class="icon"><img src="{{ asset('assets/images/indonesia.png') }}"></div>
                        <div class="media-body">
                            <h3 class="heading mb-3">Indonesia</h3>
                            <h6>
                                <?php echo $positif; ?>POSITIF
                                <?php echo $sembuh; ?>SEMBUH
                                <?php echo $meninggal; ?>MENINGGAL
                            </h6>
                            <p>ORANG</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 d-flex">
                    <div class="media block-3 services text-center d-block">
                        <div class="icon"><img src="{{ asset('assets/images/sad.png') }}"></div>
                        <div class="media-body">
                            <h3 class="heading mb-3">Positif</h3>
                            <h1> <?php echo $posglobal['value']; ?></h1>
                            <p>ORANG</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 d-flex">
                    <div class="media block-3 services text-center d-block">
                        <div class="icon"><img src="{{ asset('assets/images/happy.png') }}"></div>
                        <div class="media-body">
                            <h3 class="heading mb-3">Sembuh</h3>
                            <h1> <?php echo $possembuh['value']; ?></h1>
                            <p>ORANG</p>
                        </div>
                    </div>
                </div>
                {{-- <div class="col-md-6 col-lg-3 d-flex">
                    <div class="align-self-stretch box p-4 text-center">
                        <div class="icon d-flex align-items-center justify-content-center">
                            <span class="icon-map-signs"></span>
                        </div>
                        <h3 class="mb-4">Address</h3>
                        <p> Jl Bintaro Permai Raya 105, Dki Jakarta</p>
                    </div>
                </div> --}}
                <div class="col-md-12 col-lg-3 d-flex">
                    <div class="media block-12 services text-center d-block">
                        <div class="icon"><img src="{{ asset('assets/images/sedih.png') }}"></div>
                        <div class="media-body">
                            <h3 class="heading mb-12">Meninggal</h3>
                            <h1> <?php echo $posmeninggal['value']; ?></h1>
                            <p>ORANG</p>
                        </div>
                    </div>
                </div>
                <div class="col text-center">
                    <br>
                    <h6>{{ $tanggal }}</h6>
                </div>

            </div>
        </div>
    </section>

    <section class="ftco-counter img ftco-section ftco-no-pt ftco-no-pb" id="section-counter" data-section="about">
        <div class="Container">
            <div class="container_width">
                <div class="card">
                    <div class="container my-4">
                        <div class="card-header ">
                        </div>
                        <div class="card-body">
                            <h1 class="text-center my-3">Data Kasus Corona virus di Indonesia</h1>
                            <div style="height:600px;overflow:auto;margin-right:15px;">
                                <table class="table table-striped" fixed-header>
                                    <thead>
                                        <tr>
                                            <th scope="col">No</th>
                                            <th scope="col">Provinsi</th>
                                            <th scope="col">Positif</th>
                                            <th scope="col">Sembuh</th>
                                            <th scope="col">Meninggal</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                        @php
                                            $no = 1;
                                        @endphp

                                        <tr>
                                            @foreach ($tampil as $item)
                                                <td> <?php echo $no++; ?></td>
                                                <td>{{ $item->nama_provinsi }}</td>
                                                <td>{{ number_format($item->jumlah_positif) }}</td>
                                                <td>{{ number_format($item->jumlah_sembuh) }}</td>
                                                <td>{{ number_format($item->jumlah_meninggal) }}</td>
                                        </tr>
                                    </tbody>
                                    @endforeach
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
    </section>

    <section class="ftco-section ftco-project bg-light" data-section="projects">
        <div class="Container">
            <div class="container_width">
                <div class="card">
                    <div class="container my-4">
                        <div class="card-header ">
                        </div>
                        <div class="card-body">
                            <h1 class="text-center mb-4">Data Kasus Corona virus di Dunia</h1>
                            <div style="height:600px;overflow:auto;margin-right:15px;">
                                <table class="table table-striped" fixed-header>
                                    <thead>
                                        <tr>
                                            <th scope="col">No</th>
                                            <th scope="col">Negara</th>
                                            <th scope="col">Positif</th>
                                            <th scope="col">Sembuh</th>
                                            <th scope="col">Meninggal</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                        @php
                                            $no = 1;
                                        @endphp

                                        @foreach ($dunia as $data)
                                            <tr>
                                                <td> <?php echo $no++; ?></td>
                                                <td> <?php echo $data['attributes']['Country_Region'];
                                                    ?></td>
                                                <td> <?php echo
                                                    number_format($data['attributes']['Confirmed']); ?>
                                                </td>
                                                <td><?php echo
                                                    number_format($data['attributes']['Recovered']); ?>
                                                </td>
                                                <td><?php echo
                                                    number_format($data['attributes']['Deaths']); ?>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
    </section>

    <section class="ftco-section bg-light" data-section="blog">
        <div class="container">
            <div class="row justify-content-center mb-5 pb-5">
                <div class="col-md-7 heading-section text-center ftco-animate">
                    <h2 class="mb-4">Berita</h2>
                </div>
            </div>
            <div class="row d-flex">
                <div class="col-md-4 d-flex ftco-animate">
                    <div class="blog-entry justify-content-end">
                        <a href="https://www.unicef.org/indonesia/id/coronavirus" class="block-20"
                            style="background-image: url('{{ asset('assets/square/images/unicef.jpg') }}');">
                        </a>
                        <div class="text mt-3 float-right d-block">
                            <div class="d-flex align-items-center pt-2 mb-4 topp">
                                <div class="one mr-3">
                                    <span class="day">11</span>
                                </div>
                                <div class="two">
                                    <span class="yr">2020</span>
                                    <span class="mos">September</span>
                                </div>
                            </div>
                            <h3 class="heading"><a href="https://www.unicef.org/indonesia/id/coronavirus">Novel
                                    coronavirus (COVID-19): Hal-hal yang perlu anda ketahui.</a>
                            </h3>
                            <p>Unicef Indonesia</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 d-flex ftco-animate">
                    <div class="blog-entry justify-content-end">
                        <a href="https://www.kompas.com/tren/read/2020/03/03/183500265/infografik-daftar-100-rumah-sakit-rujukan-penanganan-virus-corona"
                            class="block-20"
                            style="background-image: url('{{ asset('assets/square/images/rms.jpg') }}');">
                        </a>
                        <div class="text mt-3 float-right d-block">
                            <div class="d-flex align-items-center pt-2 mb-4 topp">
                                <div class="one mr-3">
                                    <span class="day">10</span>
                                </div>
                                <div class="two">
                                    <span class="yr">2020</span>
                                    <span class="mos">April</span>
                                </div>
                            </div>
                            <h3 class="heading"><a
                                    href="https://www.kompas.com/tren/read/2020/03/03/183500265/infografik-daftar-100-rumah-sakit-rujukan-penanganan-virus-corona">Daftar
                                    100 Rumah Sakit Rujukan Penanganan Virus Corona.</a>
                            </h3>
                            <p>Kompas</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 d-flex ftco-animate">
                    <div class="blog-entry">
                        <a href="https://infeksiemerging.kemkes.go.id" class="block-20"
                            style="background-image: url(' {{ asset('assets/square/images/kk.png') }}');">
                        </a>
                        <div class="text mt-3 float-right d-block">
                            <div class="d-flex align-items-center pt-2 mb-4 topp">
                                <div class="one mr-3">
                                    <span class="day">05</span>
                                </div>
                                <div class="two">
                                    <span class="yr">2020</span>
                                    <span class="mos">Mei</span>
                                </div>
                            </div>
                            <h3 class="heading"><a href="https://infeksiemerging.kemkes.go.id">Media Informasi Resmi
                                    Penyakit Infeksi Emerging.</a>
                            </h3>
                            <p>Kementrian Kesehatan</p>
                        </div>
                    </div>
                </div>

                {{-- <div class="col-md-4 d-flex ftco-animate">
                    <div class="blog-entry justify-content-end">
                        <a href="single.html" class="block-20" style="background-image: url('images/image_4.jpg');">
                        </a>
                        <div class="text mt-3 float-right d-block">
                            <div class="d-flex align-items-center pt-2 mb-4 topp">
                                <div class="one mr-3">
                                    <span class="day">12</span>
                                </div>
                                <div class="two">
                                    <span class="yr">2019</span>
                                    <span class="mos">March</span>
                                </div>
                            </div>
                            <h3 class="heading"><a href="single.html">Why Lead Generation is Key for Business Growth</a>
                            </h3>
                            <p>A small river named Duden flows by their place and supplies it with the necessary
                                regelialia.</p>
                            <div class="d-flex align-items-center mt-4 meta">
                                <p class="mb-0"><a href="#" class="btn btn-secondary">Read More <span
                                            class="ion-ios-arrow-round-forward"></span></a></p>
                                <p class="ml-auto mb-0">
                                    <a href="#" class="mr-2">Admin</a>
                                    <a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 d-flex ftco-animate">
                    <div class="blog-entry justify-content-end">
                        <a href="single.html" class="block-20" style="background-image: url('images/image_5.jpg');">
                        </a>
                        <div class="text mt-3 float-right d-block">
                            <div class="d-flex align-items-center pt-2 mb-4 topp">
                                <div class="one mr-3">
                                    <span class="day">10</span>
                                </div>
                                <div class="two">
                                    <span class="yr">2019</span>
                                    <span class="mos">March</span>
                                </div>
                            </div>
                            <h3 class="heading"><a href="single.html">Why Lead Generation is Key for Business Growth</a>
                            </h3>
                            <p>A small river named Duden flows by their place and supplies it with the necessary
                                regelialia.</p>
                            <div class="d-flex align-items-center mt-4 meta">
                                <p class="mb-0"><a href="#" class="btn btn-secondary">Read More <span
                                            class="ion-ios-arrow-round-forward"></span></a></p>
                                <p class="ml-auto mb-0">
                                    <a href="#" class="mr-2">Admin</a>
                                    <a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 d-flex ftco-animate">
                    <div class="blog-entry">
                        <a href="single.html" class="block-20" style="background-image: url('images/image_6.jpg');">
                        </a>
                        <div class="text mt-3 float-right d-block">
                            <div class="d-flex align-items-center pt-2 mb-4 topp">
                                <div class="one mr-3">
                                    <span class="day">05</span>
                                </div>
                                <div class="two">
                                    <span class="yr">2019</span>
                                    <span class="mos">March</span>
                                </div>
                            </div>
                            <h3 class="heading"><a href="single.html">Why Lead Generation is Key for Business Growth</a>
                            </h3>
                            <p>A small river named Duden flows by their place and supplies it with the necessary
                                regelialia.</p>
                            <div class="d-flex align-items-center mt-4 meta">
                                <p class="mb-0"><a href="#" class="btn btn-secondary">Read More <span
                                            class="ion-ios-arrow-round-forward"></span></a></p>
                                <p class="ml-auto mb-0">
                                    <a href="#" class="mr-2">Admin</a>
                                    <a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div> --}}
            </div>
        </div>
    </section>

    <section class="ftco-section contact-section ftco-no-pb" data-section="contact">
        <div class="container">
            <div class="row justify-content-center mb-5 pb-3">
                <div class="col-md-7 heading-section text-center ftco-animate">
                    <h2 class="mb-4">Kontak</h2>
                </div>
            </div>
            <div class="row no-gutters block-9">
                <div class="col-md-12 order-md-last d-flex">
                    <form action="#" class="bg-light p-5 contact-form">
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Your Name">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Your Email">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Subject">
                        </div>
                        <div class="form-group">
                            <textarea name="" id="" cols="30" rows="7" class="form-control"
                                placeholder="Message"></textarea>
                        </div>
                        <div class="form-group">
                            <input type="submit" value="Send Message" class="btn btn-secondary py-3 px-5">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-section contact-section">
        <div class="container">
            <div class="row d-flex contact-info">
                <div class="col-md-6 col-lg-3 d-flex">
                    <div class="align-self-stretch box p-4 text-center">
                        <div class="icon d-flex align-items-center justify-content-center">
                            <span class="icon-map-signs"></span>
                        </div>
                        <h3 class="mb-4">Address</h3>
                        <p> Jl Bintaro Permai Raya 105, Dki Jakarta</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 d-flex">
                    <div class="align-self-stretch box p-4 text-center">
                        <div class="icon d-flex align-items-center justify-content-center">
                            <span class="icon-phone2"></span>
                        </div>
                        <h3 class="mb-4">Contact Number</h3>
                        <p><a href="tel://1234567920">0812-1212-3119 </a></p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 d-flex">
                    <div class="align-self-stretch box p-4 text-center">
                        <div class="icon d-flex align-items-center justify-content-center">
                            <span class="icon-paper-plane"></span>
                        </div>
                        <h3 class="mb-4">Email Address</h3>
                        <p><a href="mailto:info@yoursite.com">kawalcorona@gmail.com</a></p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 d-flex">
                    <div class="align-self-stretch box p-4 text-center">
                        <div class="icon d-flex align-items-center justify-content-center">
                            <span class="icon-globe"></span>
                        </div>
                        <h3 class="mb-4">Website</h3>
                        <p><a href="#">kawalcorona.com</a></p>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <footer class="ftco-footer ftco-section">
        <div class="container">
            <div class="row mb-5">
                <div class="col-md">
                    <div class="ftco-footer-widget mb-4">
                        <h2 class="ftco-heading-2">Informasi</h2>
                        <p>Live Data Kasus COVID-19 di Indonesia dan
                            Dunia dan berita mengenai informasi covid 19.</p>
                        <ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-5">
                            <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
                            <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
                            <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md">
                    <div class="ftco-footer-widget mb-4 ml-md-4">
                        <h2 class="ftco-heading-2">Links</h2>
                        <ul class="list-unstyled">
                            <li><a href="#"><span class="icon-long-arrow-right mr-2"></span>Dashboard</a></li>
                            <li><a href="#"><span class="icon-long-arrow-right mr-2"></span>Data Indonesia</a></li>
                            <li><a href="#"><span class="icon-long-arrow-right mr-2"></span>Data Global</a></li>
                            <li><a href="#"><span class="icon-long-arrow-right mr-2"></span>Berita</a></li>
                            <li><a href="#"><span class="icon-long-arrow-right mr-2"></span>Kontak</a></li>
                        </ul>
                    </div>
                </div>
                {{-- <div class="col-md">
                    <div class="ftco-footer-widget mb-4">
                        <h2 class="ftco-heading-2">Services</h2>
                        <ul class="list-unstyled">
                            <li><a href="#"><span class="icon-long-arrow-right mr-2"></span>Architectural Design</a>
                            </li>
                            <li><a href="#"><span class="icon-long-arrow-right mr-2"></span>Interior Design</a></li>
                            <li><a href="#"><span class="icon-long-arrow-right mr-2"></span>Exterior Design</a></li>
                            <li><a href="#"><span class="icon-long-arrow-right mr-2"></span>Lighting Design</a></li>
                            <li><a href="#"><span class="icon-long-arrow-right mr-2"></span>AutoCAD Service</a></li>
                        </ul>
                    </div>
                </div> --}}
                <div class="col-md">
                    <div class="ftco-footer-widget mb-4">
                        <h2 class="ftco-heading-2">Have a Questions?</h2>
                        <div class="block-23 mb-3">
                            <ul>
                                <li><span class="icon icon-map-marker"></span><span class="text">Jl Bintaro Permai Raya
                                        105, Dki Jakarta , Indonesia.</span></li>
                                <li><a href="#"><span class="icon icon-phone"></span><span
                                            class="text">0812-1212-3119</span></a></li>
                                <li><a href="#"><span class="icon icon-envelope"></span><span
                                            class="text">kawalcorona@gmail.com</span></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 text-center">

                    <p>
                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        Powered&copy;<script>
                            document.write(new Date().getFullYear());

                        </script> Kawal Corona | Made with <i class="icon-heart color-danger" aria-hidden="true"></i> by
                        <a href="https://colorlib.com" target="_blank">Rifa Ramdani</a>
                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                    </p>
                </div>
            </div>
        </div>
    </footer>



    <!-- loader -->
    <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px">
            <circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee" />
            <circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10"
                stroke="#F96D00" />
        </svg></div>


    <script src="{{ asset('assets/square/js/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/square/js/jquery-migrate-3.0.1.min.js') }}"></script>
    <script src="{{ asset('assets/square/js/popper.min.js') }}"></script>
    <script src="{{ asset('assets/square/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/square/js/jquery.easing.1.3.js') }}"></script>
    <script src="{{ asset('assets/square/js/jquery.waypoints.min.js') }}"></script>
    <script src="{{ asset('assets/square/js/jquery.stellar.min.js') }}"></script>
    <script src="{{ asset('assets/square/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('assets/square/js/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ asset('assets/square/js/aos.js') }}"></script>
    <script src="{{ asset('assets/square/js/jquery.animateNumber.min.js') }}"></script>
    <script src="{{ asset('assets/square/js/scrollax.min.js') }}"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false">
    </script>
    <script src="{{ asset('assets/square/js/google-map.js') }}"></script>
    <script src="{{ asset('assets/square/js/main.js') }}"></script>

</body>

</html>
