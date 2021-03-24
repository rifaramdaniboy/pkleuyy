<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <style>
        html {
            scroll-behavior: smooth;
        }

        .ignielToTop {
            width: 50px;
            height: 50px;
            position: fixed;
            bottom: 50px;
            right: 50px;
            z-index: 99;
            cursor: pointer;
            border-radius: 100px;
            transition: all .5s;
            background: blue url("data:image/svg+xml,%3Csvg viewBox='0 0 24 24' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M7.41,15.41L12,10.83L16.59,15.41L18,14L12,8L6,14L7.41,15.41Z' fill='%23fff'/%3E%3C/svg%3E") no-repeat center center;
        }

        .ignielToTop:hover {
            background: #1d2129 url("data:image/svg+xml,%3Csvg viewBox='0 0 24 24' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M7.41,15.41L12,10.83L16.59,15.41L18,14L12,8L6,14L7.41,15.41Z' fill='%23fff'/%3E%3C/svg%3E") no-repeat center center;
        }

    </style>

    <title>Tracking Covid</title>
</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-dark bg-primary px-5 sticky-top">
        <a class="navbar-brand text-warning font-weight-bold" href="javascript:void(0)">TrackingCovid</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="#home">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#global">Global</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#indonesia">Indonesia</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#News">Berita</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#contact">Contact</a>
                </li>
            </ul>
            {{-- <form class="form-inline my-2 my-lg-0">
                    <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-danger my-2 my-sm-0" type="submit">Search</button>
                </form>
                <div class="mx-2">
                    <form action="{{route('login')}}">
                        @csrf
                    <button class="btn btn-danger">Login</button>
                    </form>
                </div>
                <div class="mx-2">
                    <form action="{{route('register')}}">
                        @csrf
                        
                    <button class="btn btn-danger">Signup</button>
                    </form>
                </div> --}}

        </div>
    </nav>


    <!-- slider start  -->
    <div id="carouselExampleCaptions" class="carousel slide carousel-fade" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
            <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
        </ol>
        <section id="home" class="home">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="{{ asset('assets/images/gambar1.jpg') }}" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h1 style="color: black">Welcome to Tracking Covid</h1>
                        <h5 style="color: black" style="font-family: unset">Live Data Kasus COVID-19 di Indonesia dan
                            Dunia</h5>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="{{ asset('assets/images/gambar2.png') }}" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h1 style="color: black">COVID-19</h1>
                        <h5 style="color: black" style="font-family: unset">adalah penyakit menular yang disebabkan oleh
                            virus corona yang
                            baru-baru
                            ini ditemukan.
                            Sebagian besar orang yang tertular COVID-19 akan mengalami gejala ringan hingga sedang, dan
                            akan pulih tanpa penanganan khusus.</h5>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="{{ asset('assets/images/gambar3.jpg') }}" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h1 style="color: black">TENTANG COVID-19</h1>
                        <h5 style="color: black" style="font-family: unset">Virus yang menyebabkan COVID-19 terutama
                            ditransmisikan melalui droplet
                            (percikan air liur)
                            yang dihasilkan saat orang yang terinfeksi batuk, bersin, atau mengembuskan nafas. Droplet
                            ini terlalu berat dan tidak bisa bertahan di udara, sehingga dengan cepat jatuh dan menempel
                            pada lantai atau permukaan lainnya.</h5>
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </section>

        <!-- ======= Counts Section ======= -->
        <section id="why-us" class="why-us">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 d-flex align-items-stretch">
                        <div class="content">
                            <p>INDONESIA</p>
                            <div class="text-center ">
                                <img src="{{ asset('assets/images/indonesia.png') }}" width="70" height="70"
                                    alt="Positif">
                                <h6>
                                    <?php echo $positif; ?>POSITIF<br>
                                    <?php echo $sembuh; ?>SEMBUH<br>
                                    <?php echo $meninggal; ?>MENINGGAL<br>
                                </h6>
                                <p>ORANG</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-8 d-flex align-items-stretch">
                        <div class="icon-boxes d-flex flex-column justify-content-center">
                            <div class="row">

                                <div class="col-xl-4 d-flex align-items-stretch">
                                    <div class="icon-box mt-4 mt-xl-0">
                                        <img src="{{ asset('assets/images/sedih.png') }}" width="70" height="70"
                                            alt="Positif">
                                        <p>TOTAL POSITIF</p>
                                        <h1> <?php echo $posglobal['value']; ?></h1>
                                        <p>ORANG</p>
                                    </div>
                                </div>
                                <div class="col-xl-4 d-flex align-items-stretch">
                                    <div class="icon-box mt-4 mt-xl-0">
                                        <img src="{{ asset('assets/images/happy.png') }}" width="70" height="70"
                                            alt="Sembuh">
                                        <p>TOTAL SEMBUH</p>
                                        <h1> <?php echo $possembuh['value']; ?></h1>
                                        <p>ORANG</p>
                                    </div>
                                </div>
                                <div class="col-xl-4 d-flex align-items-stretch">
                                    <div class="icon-box mt-4 mt-xl-0">
                                        <img src="{{ asset('assets/images/sad.png') }}" width="70" height="70"
                                            alt="Meninggal">
                                        <p>TOTAL MENINGGAL</p>
                                        <h1> <?php echo $posmeninggal['value']; ?></h1>
                                        <p>ORANG</p>
                                    </div>
                                </div>
                            </div>
                        </div><!-- End .content-->
                    </div>
                </div>
            </div>
        </section>
        <!-- End Counts Section -->


        <!-- Global  -->
        <section id="global" class="global">
            <div class="global">
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
                                                    <td> <?php echo
                                                        $data['attributes']['Country_Region']; ?></td>
                                                    <td> <?php echo
                                                        number_format($data['attributes']['Confirmed']); ?></td>
                                                    <td><?php echo
                                                        number_format($data['attributes']['Recovered']); ?></td>
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
        <!-- end global -->

        <!-- Indonesia -->
        <section id="indonesia" class="indonesia">
            <div class="indonesia">
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
        <!-- end Indonesia -->

        <!-- Service -->
        <section id="News" class="News">
            <div class="card-body">
                <h1 class="text-center my-3">Berita</h1>
                <br>
                <br>
                <div class="row">
                    <div class="col-md-12 col-xl-6">
                        <a href="https://www.unicef.org/indonesia/id/coronavirus">
                            <div class="card text-white bg-info">
                                <div class="card-body">
                                    <h4 class="card-title">Novel coronavirus (COVID-19)
                                    </h4>
                                    <p class="card-text">Unicef Indonesia</p>
                                </div>
                            </div>
                            <br>
                    </div></a><!-- COL END -->
                    <div class="col-md-12 col-xl-6">
                        <a
                            href="https://www.kompas.com/tren/read/2020/03/03/183500265/infografik-daftar-100-rumah-sakit-rujukan-penanganan-virus-corona">
                            <div class="card text-white bg-secondary">
                                <div class="card-body">
                                    <h4 class="card-title">Daftar 100 Rumah Sakit Rujukan Virus Corona</h4>
                                    <p class="card-text">Kompas</p>
                                </div>
                            </div>
                            <br>
                    </div></a><!-- COL END -->
                    <div class="col-md-12 col-xl-6">
                        <a href="https://infeksiemerging.kemkes.go.id/">
                            <div class="card text-white bg-success">
                                <div class="card-body">
                                    <h4 class="card-title">Media Informasi Resmi Penyakit Infeksi Emerging</h4>
                                    <p class="card-text">Kementrian Kesehatan </p>
                                </div>
                            </div>
                    </div></a><!-- COL END -->
                    <div class="col-md-12 col-xl-6">
                        <a href="https://www.who.int/emergencies/diseases/novel-coronavirus-2019/advice-for-public">
                            <div class="card text-white bg-danger">
                                <div class="card-body">
                                    <h4 class="card-title">Coronavirus Disease (COVID-19) Advice for The Public</h4>
                                    <p class="card-text">WHO</p>
                                </div>
                            </div>
                    </div></a>
        </section>
        <!-- end Service -->

        <!-- Contact -->
        <section id="contact" class="contact">
            <div class="container my-4 col-8 p-5 contact">
                <h1 class="text-center my-3">Contact</h1>
                <form>
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Ful Name</label>
                        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Ful Name">
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Phone</label>
                        <input type="number" class="form-control" id="exampleFormControlInput1" placeholder="Phone">
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Email</label>
                        <input type="email" class="form-control" id="exampleFormControlInput1"
                            placeholder="name@example.com">
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlTextarea1">Message</label>
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"
                            placeholder="Message"></textarea>
                    </div>
                    <button class="btn btn-primary w-25">Submit</button>
                </form>
            </div>
        </section>
        <!-- End Contact -->

        <!-- Footer -->
        <a href="#" class="ignielToTop"></a>
        <!-- End Footer -->

        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
            integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous">
        </script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
            integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
        </script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
            integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous">
        </script>
</body>

</html>
