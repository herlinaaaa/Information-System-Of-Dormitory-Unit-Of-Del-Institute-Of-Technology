<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Tentang Asrama dan Keasramaan</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link rel="shortcut icon" href="{{ asset('assets/img/.png') }}">

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Montserrat:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="asrama/assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="asrama/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="asrama/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="asrama/assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="asrama/assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="asrama/assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="asrama/assets/css/style.css" rel="stylesheet">

</head>

<body>


    <main id="main">

        <!-- ======= About Us Section ======= -->
        <section id="about" class="about">
            <div class="container">
                <a class="btn btn-primary" href="beranda" role="button">Beranda</a>
                <div class="section-title" data-aos="fade-up">
                    <h2>PROSES PENDIDIKAN DI ASRAMA</h2>
                </div>

                <div class="row">
                    <div class="col-lg-6" data-aos="fade-right">
                        <div class="image">
                            <img src="asrama/assets/img/about.jpg" class="img-fluid" alt="">
                        </div>
                    </div>
                    <div class="col-lg-6" data-aos="fade-left">
                        <div class="content pt-4 pt-lg-0 pl-0 pl-lg-3 ">
                            <h3>Rutinitas Kehidupan Mahasiswa di Asrama</h3>
                            <p class="fst-italic">
                                Secara umum proses pendidikan di asrama terlihat melalui rutinitas kehidupan harian yang
                                telah dirancang guna mencapai tujuan luhur pendidikan karakter Del. Berikut adalah
                                rutinitas kehidupan mahasiswa di asrama berdasarkan pembagian asrama mahasiswa.
                            </p>
                            <ul>
                                <li><i class="bx bx-check-double"></i> Pembagian asrama didasarkan pada tingkat
                                    pendidikan akademik mahasiswa, yaitu asrama bagi mahasiswa tingkat I, asrama bagi
                                    mahasiswa tingkat II & III Diploma, dan asrama bagi mahasiswa tingkat III dan IV
                                    Sarjana dan tingkat IV Diploma.</li>
                                <li><i class="bx bx-check-double"></i> Melalui Rutinitas Kehidupan Mahasiswa di asrama,
                                    masing-masing mahasiswa dilatih dan dibentuk untuk memiliki nilai dan karakter.</li>
                            </ul>
                            <p>

                                @if (file_exists(public_path('asset/pembagian-waktu.pdf')))
                                    <a href="{{ asset('asset/pembagian-waktu.pdf') }}" download>Unduh Tabel Pembagian
                                        Waktu</a>
                                @else
                                    File not found
                                @endif

                            </p>
                            <p>
                                @if (file_exists(public_path('asset/nilai-karakter.pdf')))
                                    <a href="{{ asset('asset/nilai-karakter.pdf') }}" download>Unduh Nilai/Karakter</a>
                                @else
                                    File not found
                                @endif
                            </p>
                        </div>
                    </div>
                </div>

            </div>
        </section><!-- End About Us Section -->

        <!-- ======= Services Section ======= -->
        <section id="services" class="services">
            <div class="container">

                <div class="section-title" data-aos="fade-up">
                    <h2>Program Keasramaan</h2>
                </div>

                <div class="row">
                    <div class="col-lg-6 order-2 order-lg-1">
                        <div class="icon-box mt-5 mt-lg-0" data-aos="fade-up">
                            <i class="bx bx-receipt"></i>
                            <h4>Ibadah Saat Teduh</h4>
                            <p>
                                Pelaksanaan Saat Teduh di asrama dilakukan dalam rangka mematangkan karakter MarTuhan
                                yang menekankan pentingnya hidup beriman dan disiplin beribadah. Ibadah ini dilakukan
                                pada hari Senin-Jumat, baik secara kelompok di asrama maupun secara bersama di lapangan
                                pada hari dilaksanakannya senam pagi.
                                <b>Saat Teduh dilaksanakan dalam rentan waktu:

                                    Pukul 05.00-05.15 WIB pada hari Senin, Rabu, Kamis di asrama.
                                    Pukul 05.30-05.45 WIB pada hari Selasa dan Jumat di lapangan.

                                </b>
                            </p>
                        </div>
                        <div class="icon-box mt-5" data-aos="fade-up" data-aos-delay="100">
                            <i class="bx bx-cube-alt"></i>
                            <h4>Evaluasi mahasiswa di Asrama</h4>
                            <p>
                                Kegiatan ini dilakukan pada hari Minggu-Kamis setiap malamnya. Melalui kegiatan ini
                                diharapkan juga mahasiswa menjadi semakin terlatih untuk memiliki kemauan dalam
                                mendengarkan, kemampuan dalam mengemukakan gagasan, berfikir kritis dalam menganalisis
                                masalah serta mampu menawarkan solusi pemecahan masalah (solutif).
                                <b>Kegiatan evaluasi dilakukan dalam rentan waktu pukul 22.00-22.30 WIB bersamaan dengan
                                    kegiatan Ibadah Malam</b>
                            </p>
                        </div>
                        <div class="icon-box mt-5" data-aos="fade-up" data-aos-delay="200">
                            <i class="bx bx-images"></i>
                            <h4>Pelaksanaan Ibadah Malam</h4>
                            <p>
                                Ibadah Malam dilakukan dalam rangka mematangkan karakter MarTuhan yang menekankan
                                pentingnya sikap hidup beriman dan disiplin beribadah. Ibadah malam dilakukan bersamaan
                                dengan kegiatan evaluasi mahasiswa di asrama, yang diadakan pada hari Minggu-Kamis
                                setiap malamnya.
                            </p>
                        </div>
                        <div class="icon-box mt-5" data-aos="fade-up" data-aos-delay="300">
                            <i class="bx bx-shield"></i>
                            <h4>Pelaksanaan Ibadah Jumat</h4>
                            <p>
                                Ibadah Jumat merupakan ibadah bersama seluruh mahasiswa IT Del yang dilakukan secara
                                rutin setiap minggunya yang dilaksanakan pada hari Jumat di lingkungan kampus IT Del.
                                Ibadah ini dilakukan sebagai bentuk perwujudan karakter MarTuhan. Pelaksanaan ibadah ini
                                dilakukan oleh Departemen Agama dan Sosial (Depagsos) BEM IT Del atas koordinasi dengan
                                Pembina Asrama.
                            </p>
                        </div>
                    </div>
                    <div class="image col-lg-6 order-1 order-lg-2"
                        style='background-image: url("asrama/assets/img/services.jpg");' data-aos="fade-left"
                        data-aos-delay="100"></div>
                </div>

            </div>
        </section><!-- End Services Section -->

        <!-- ======= Featured Section ======= -->
        <section id="featured" class="featured">
            <div class="container">

                <div class="row">
                    <div class="col-lg-6" data-aos="fade-right">
                        <div class="tab-content">
                            <div class="tab-pane active show" id="tab-1">
                                <figure>
                                    <img src="asrama/assets/img/featured-1.png" alt="" class="img-fluid">
                                </figure>
                            </div>
                            <div class="tab-pane" id="tab-2">
                                <figure>
                                    <img src="asrama/assets/img/featured-2.png" alt="" class="img-fluid">
                                </figure>
                            </div>
                            <div class="tab-pane" id="tab-3">
                                <figure>
                                    <img src="asrama/assets/img/featured-3.png" alt="" class="img-fluid">
                                </figure>
                            </div>
                            <div class="tab-pane" id="tab-4">
                                <figure>
                                    <img src="asrama/assets/img/featured-4.png" alt="" class="img-fluid">
                                </figure>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 mt-4 mt-lg-0" data-aos="fade-left">
                        <ul class="nav nav-tabs flex-column">

                            <li class="nav-item">
                                <a class="nav-link active show" data-bs-toggle="tab" href="#tab-1">
                                    <h4>Program Abang/Kakak Asuh (Student Leadership)</h4>
                                    <p>Tujuan: sebagai wadah latihan kepemimpinan bagi mahasiswa, membina kehidupan
                                        dalam kelompok dan pendampingan dalam proses adaptasi mahasiswa tingkat I.</p>
                                </a>
                            </li>
                            <li class="nav-item mt-2">
                                <a class="nav-link" data-bs-toggle="tab" href="#tab-2">
                                    <h4>Penyegaran Mahasiswa (Refreshing)</h4>
                                    <p>Tujuan: a) menjalin kerjasama mahasiswa melalui kegiatanpermainan (games) dan
                                        kegiatan pembersihan lingkungan setempat; b) menarik diri sejenak dari rutinitas
                                        harian dengan mangambil waktu untuk penyegaran bersama; dan c) belajar
                                        nilai-nilai hidup bersama.</p>
                                </a>
                            </li>
                            <li class="nav-item mt-2">
                                <a class="nav-link" data-bs-toggle="tab" href="#tab-3">
                                    <h4>Pemisahan/Pemulihan diri (Retreat)</h4>
                                    <p>Tujuan: a) Waktu mengevaluasidiridalamperjalanansebagaimahasiswaITDelselama 2
                                        (dua) tahun, khususnya mengevaluasi motivasi dan perilaku; b)Mempersiapkan
                                        mahasiswa tingkat II menjadibertanggungjawab; c) Memperolehpemahamanbarutentang
                                        iman dandisiplinrohani, dan 4) Meneguhkan nilai-nilaikehidupan bersama diITDel
                                        sebagai karakter penting bagi mahasiswa baik untuk dirinya sendiri maupun untuk
                                        berkarya dalam masyarakat global.</p>
                                </a>
                            </li>
                            <li class="nav-item mt-2">
                                <a class="nav-link" data-bs-toggle="tab" href="#tab-4">
                                    <h4>Pemilihan Kamar dan Mahasiswa Terbaik di Asrama</h4>
                                    <p>Tujuan: Program ini dilakukan mengingat pentingnya mengapresiasi sikap-sikap baik
                                        dari mahasiswa dan menambah semangat mahasiswa untuk melakukan yang terbaik di
                                        asrama.</p>
                                </a>
                            </li>
                            <li class="nav-item mt-2">
                                <a class="nav-link" data-bs-toggle="tab" href="#tab-4">
                                    <h4>Pemberian Pelatihan Mahasiswa</h4>
                                    <p>Tujuan: Program ini dilakukan mengingat pentingnya mengapresiasi sikap-sikap baik
                                        dari mahasiswa dan menambah semangat mahasiswa untuk melakukan yang terbaik di
                                        asrama.</p>
                                </a>
                            </li>
                        </ul>
                        <br>
                    </div>
                </div>

            </div>
        </section><!-- End Featured Section -->

        <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
                class="bi bi-arrow-up-short"></i></a>

        <!-- Vendor JS Files -->
        <script src="asrama/assets/vendor/aos/aos.js"></script>
        <script src="asrama/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="asrama/assets/vendor/glightbox/js/glightbox.min.js"></script>
        <script src="asrama/assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
        <script src="asrama/assets/vendor/swiper/swiper-bundle.min.js"></script>
        <script src="asrama/assets/vendor/php-email-form/validate.js"></script>

        <!-- Template Main JS File -->
        <script src="asrama/assets/js/main.js"></script>

</body>

</html>
