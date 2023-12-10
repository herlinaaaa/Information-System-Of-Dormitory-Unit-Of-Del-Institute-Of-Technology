<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Data Kamar</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link rel="shortcut icon" href="{{ asset('assets/img/.png') }}">

    <!-- Google Fonts -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i">

    <!-- Vendor CSS Files -->
    <link rel="stylesheet" href="assets/vendor/aos/aos.css">
    <link rel="stylesheet" href="assets/vendor/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/vendor/bootstrap-icons/bootstrap-icons.css">
    <link rel="stylesheet" href="assets/vendor/boxicons/css/boxicons.min.css">
    <link rel="stylesheet" href="assets/vendor/glightbox/css/glightbox.min.css">
    <link rel="stylesheet" href="assets/vendor/remixicon/remixicon.css">
    <link rel="stylesheet" href="assets/vendor/swiper/swiper-bundle.min.css">

    <!-- Template Main CSS File -->
    <link rel="stylesheet" href="assets/css/style.css">

</head>

<body>

    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top">
        <div class="container d-flex align-items-center justify-content-between">

            <h1 class="logo"><a href="{{ url('beranda') }}">Dormitory ITD</a></h1>
            <!-- Uncomment below if you prefer to use an image logo -->
            <!-- <a href="index.html" class="logo"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

            <nav id="navbar" class="navbar">

            </nav><!-- .navbar -->

        </div>
    </header><!-- End Header -->
    @php
        function totalMahasiswa($asrama, $prodi)
        {
            $totalMhs = App\Models\Profil::where('asrama', $asrama)
                ->where('prodi4', $prodi)
                ->count();
        
            return $totalMhs;
        }
    @endphp
    <!-- ======= Hero Section ======= -->
    <section id="hero" class="d-flex align-items-center" style="overflow-y: scroll;">
        <div class="container position-relative" data-aos="fade-up" data-aos-delay="100" style="margin-top:300px;">
            <div class="row justify-content-center">
                <div class="col-xl-7 col-lg-9 text-center">
                    {{-- <h1>Keasramaan Institut Teknologi Del</h1> --}}
                    <h3>Data Kamar Mahasiswa\i IT Del</h3>
                </div>
            </div>

            <div class="row icon-boxes">
                <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="zoom-in"
                    data-aos-delay="200">
                    <div class="icon-box">
                        <div class="icon"><i class="ri-home-4-fill"></i></div>
                        <h4 class="title"><a href="{{ url('kamarrusun1') }}">Rusunawa 1</a></h4>
                        <p class="description">Nama - nama mahasiswa yang tinggal di Rusunawa 1 (Asrama Luar)</p>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">D-VIII TRPL = {{ totalMahasiswa('Rusun 1', 'D3 TRPL') }}</li>
                            <li class="list-group-item">S1-SI = {{ totalMahasiswa('Rusun 1', 'S1 SI') }}</li>
                            <li class="list-group-item">S1-TE = {{ totalMahasiswa('Rusun 1', 'S1 TE') }}</li>
                            <li class="list-group-item">S1-IF = {{ totalMahasiswa('Rusun 1', 'S1 IF') }}</li>
                            <li class="list-group-item">S1-MR = {{ totalMahasiswa('Rusun 1', 'S1 MR') }}</li>
                        </ul>

                    </div>
                </div>

                <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="zoom-in"
                    data-aos-delay="300">
                    <div class="icon-box">
                        <div class="icon"><i class="ri-home-4-line"></i></div>
                        <h4 class="title"><a href="kamarrusun2">Rusunawa 2</a></h4>
                        <p class="description">Nama - nama mahasiswa yang tinggal di Rusunawa 2 (Asrama Luar)</p>
                        <ul class="list-group list-group-flush">

                            <li class="list-group-item">D3 TI = {{ totalMahasiswa('Rusun 2', 'D3 TI') }}</li>
                            <li class="list-group-item">D3-TK = {{ totalMahasiswa('Rusun 2', 'D3 TK') }}</li>
                            <li class="list-group-item">D4-TRPL = {{ totalMahasiswa('Rusun 2', 'D4 TRPL') }}</li>
                            <li class="list-group-item">S1-SI = {{ totalMahasiswa('Rusun 2', 'S1 SI') }}</li>
                            <li class="list-group-item">S1-TE = {{ totalMahasiswa('Rusun 2', 'S1 TE') }}</li>
                            <li class="list-group-item">S1-IF = {{ totalMahasiswa('Rusun 2', 'S1 IF') }}</li>
                            <li class="list-group-item">S1-MR = {{ totalMahasiswa('Rusun 2', 'S1 MR') }}</li>
                            <li class="list-group-item">S1-BP = {{ totalMahasiswa('Rusun 2', 'S1 BP') }}</li>
                        </ul>
                    </div>
                </div>

                <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="zoom-in"
                    data-aos-delay="400">
                    <div class="icon-box">
                        <div class="icon"><i class="ri-home-4-fill"></i></div>
                        <h4 class="title"><a href="kamarrusun3">Rusunawa 3</a></h4>
                        <p class="description">Nama - nama mahasiswa yang tinggal di Rusunawa 3 (Asrama Luar)
                        </p>
                        <ul class="list-group list-group-flush">

                            <li class="list-group-item">D3 TI = {{ totalMahasiswa('Rusun 3', 'D3 TI') }}</li>
                            <li class="list-group-item">D3-TK = {{ totalMahasiswa('Rusun 3', 'D3 TK') }}</li>
                            <li class="list-group-item">D4-TRPL = {{ totalMahasiswa('Rusun 3', 'D4 TRPL') }}</li>
                            <li class="list-group-item">S1-SI = {{ totalMahasiswa('Rusun 3', 'S1 SI') }}</li>
                            <li class="list-group-item">S1-TE = {{ totalMahasiswa('Rusun 3', 'S1 TE') }}</li>
                            <li class="list-group-item">S1-IF = {{ totalMahasiswa('Rusun 3', 'S1 IF') }}</li>
                            <li class="list-group-item">S1-MR = {{ totalMahasiswa('Rusun 3', 'S1 MR') }}</li>
                            <li class="list-group-item">S1-BP = {{ totalMahasiswa('Rusun 3', 'S1 BP') }}</li>
                        </ul>
                    </div>
                </div>

                <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="zoom-in"
                    data-aos-delay="500">
                    <div class="icon-box">
                        <div class="icon"><i class="ri-home-4-line"></i></div>
                        <h4 class="title"><a href="kamarrusun4">Rusunawa 4</a></h4>
                        <p class="description">Nama - nama mahasiswa yang tinggal di Rusunawa 4 / Kana (Asrama Dalam)
                        </p>
                        <ul class="list-group list-group-flush">

                            <li class="list-group-item">D3 TI = {{ totalMahasiswa('Rusun 4', 'D3 TI') }}</li>
                            <li class="list-group-item">D3-TK = {{ totalMahasiswa('Rusun 4', 'D3 TK') }}</li>
                            <li class="list-group-item">D4-TRPL = {{ totalMahasiswa('Rusun 4', 'D4 TRPL') }}</li>
                            <li class="list-group-item">S1-SI = {{ totalMahasiswa('Rusun 4', 'S1 SI') }}</li>
                            <li class="list-group-item">S1-TE = {{ totalMahasiswa('Rusun 4', 'S1 TE') }}</li>
                            <li class="list-group-item">S1-IF = {{ totalMahasiswa('Rusun 4', 'S1 IF') }}</li>
                            <li class="list-group-item">S1-MR = {{ totalMahasiswa('Rusun 4', 'S1 MR') }}</li>
                            <li class="list-group-item">S1-BP = {{ totalMahasiswa('Rusun 4', 'S1 BP') }}</li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="row icon-boxes">
                <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="zoom-in"
                    data-aos-delay="200">
                    <div class="icon-box">
                        <div class="icon"><i class="ri-home-4-fill"></i></div>
                        <h4 class="title"><a href="kamarpniel">Pniel</a></h4>
                        <p class="description">Nama - nama mahasiswa yang tinggal di Pniel (Asrama Dalam)</p>

                        <ul class="list-group list-group-flush">

                            <li class="list-group-item">D3 TI = {{ totalMahasiswa('Pniel', 'D3 TI') }}</li>
                            <li class="list-group-item">D3-TK = {{ totalMahasiswa('Pniel', 'D3 TK') }}</li>
                            <li class="list-group-item">D4-TRPL = {{ totalMahasiswa('Pniel', 'D4 TRPL') }}</li>
                            <li class="list-group-item">S1-SI = {{ totalMahasiswa('Pniel', 'S1 SI') }}</li>
                            <li class="list-group-item">S1-TE = {{ totalMahasiswa('Pniel', 'S1 TE') }}</li>
                            <li class="list-group-item">S1-IF = {{ totalMahasiswa('Pniel', 'S1 IF') }}</li>
                            <li class="list-group-item">S1-MR = {{ totalMahasiswa('Pniel', 'S1 MR') }}</li>
                            <li class="list-group-item">S1-BP = {{ totalMahasiswa('Pniel', 'S1 BP') }}</li>
                        </ul>
                    </div>
                </div>

                <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="zoom-in"
                    data-aos-delay="300">
                    <div class="icon-box">
                        <div class="icon"><i class="ri-home-4-line"></i></div>
                        <h4 class="title"><a href="kamarsilo">Silo</a></h4>
                        <p class="description">Nama - nama mahasiswa yang tinggal di Silo (Asrama Dalam)</p>
                        <ul class="list-group list-group-flush">

                            <li class="list-group-item">D3 TI = {{ totalMahasiswa('Silo', 'D3 TI') }}</li>
                            <li class="list-group-item">D3-TK = {{ totalMahasiswa('Silo', 'D3 TK') }}</li>
                            <li class="list-group-item">D4-TRPL = {{ totalMahasiswa('Silo', 'D4 TRPL') }}</li>
                            <li class="list-group-item">S1-SI = {{ totalMahasiswa('Silo', 'S1 SI') }}</li>
                            <li class="list-group-item">S1-TE = {{ totalMahasiswa('Silo', 'S1 TE') }}</li>
                            <li class="list-group-item">S1-IF = {{ totalMahasiswa('Silo', 'S1 IF') }}</li>
                            <li class="list-group-item">S1-MR = {{ totalMahasiswa('Silo', 'S1 MR') }}</li>
                            <li class="list-group-item">S1-BP = {{ totalMahasiswa('Silo', 'S1 BP') }}</li>
                        </ul>
                    </div>
                </div>

                <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="zoom-in"
                    data-aos-delay="400">
                    <div class="icon-box">
                        <div class="icon"><i class="ri-home-4-fill"></i></div>
                        <h4 class="title"><a href="kamarkapernaum">Kapernaum</a></h4>
                        <p class="description">Nama - nama mahasiswa yang tinggal di Kapernaum (Asrama Dalam)</p>
                        <ul class="list-group list-group-flush">

                            <li class="list-group-item">D3 TI = {{ totalMahasiswa('Kapernaum', 'D3 TI') }}</li>
                            <li class="list-group-item">D3-TK = {{ totalMahasiswa('Kapernaum', 'D3 TK') }}</li>
                            <li class="list-group-item">D4-TRPL = {{ totalMahasiswa('Kapernaum', 'D4 TRPL') }}</li>
                            <li class="list-group-item">S1-SI = {{ totalMahasiswa('Kapernaum', 'S1 SI') }}</li>
                            <li class="list-group-item">S1-TE = {{ totalMahasiswa('Kapernaum', 'S1 TE') }}</li>
                            <li class="list-group-item">S1-IF = {{ totalMahasiswa('Kapernaum', 'S1 IF') }}</li>
                            <li class="list-group-item">S1-MR = {{ totalMahasiswa('Kapernaum', 'S1 MR') }}</li>
                            <li class="list-group-item">S1-BP = {{ totalMahasiswa('Kapernaum', 'S1 BP') }}</li>
                        </ul>
                    </div>
                </div>

                <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="zoom-in"
                    data-aos-delay="500">
                    <div class="icon-box">
                        <div class="icon"><i class="ri-home-4-line"></i></div>
                        <h4 class="title"><a href="kamardantob">Antiokhia (Danau Toba)</a></h4>
                        <p class="description">Nama - nama mahasiswa yang tinggal di Antiokhia (Asrama Dalam dekat
                            Danau Toba)</p>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">D3 TI = {{ totalMahasiswa('Danau Toba', 'D3 TI') }}</li>
                            <li class="list-group-item">D3-TK = {{ totalMahasiswa('Danau Toba', 'D3 TK') }}</li>
                            <li class="list-group-item">D4-TRPL = {{ totalMahasiswa('Danau Toba', 'D4 TRPL') }}</li>
                            <li class="list-group-item">S1-SI = {{ totalMahasiswa('Danau Toba', 'S1 SI') }}</li>
                            <li class="list-group-item">S1-TE = {{ totalMahasiswa('Danau Toba', 'S1 TE') }}</li>
                            <li class="list-group-item">S1-IF = {{ totalMahasiswa('Danau Toba', 'S1 IF') }}</li>
                            <li class="list-group-item">S1-MR = {{ totalMahasiswa('Danau Toba', 'S1 MR') }}</li>
                            <li class="list-group-item">S1-BP = {{ totalMahasiswa('Danau Toba', 'S1 BP') }}</li>
                        </ul>
                    </div>
                </div>
            </div>

        </div>
        <br>
    </section><!-- End Hero -->


    </main><!-- End #main -->

    <!-- ======= Footer ======= -->
    <footer id="footer">



        <div id="preloader"></div>
        <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
                class="bi bi-arrow-up-short"></i></a>

        <!-- Vendor JS Files -->
        <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
        <script src="assets/vendor/aos/aos.js"></script>
        <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
        <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
        <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
        <script src="assets/vendor/php-email-form/validate.js"></script>

        <!-- Template Main JS File -->
        <script src="assets/js/main.js"></script>

</body>

</html>
