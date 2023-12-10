<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Welcome Guest</title>
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

            <h1 class="logo"><a href="{{ url('welcome') }}">Dormitory ITD</a></h1>
            <!-- Uncomment below if you prefer to use an image logo -->
            <!-- <a href="index.html" class="logo"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

            <nav id="navbar" class="navbar">
                <ul>
                    <li><a class="nav-link scrollto active" href="#">Home</a></li>
                    <li class="dropdown"><a href="#"><span>About Dormitory</span> <i
                                class="bi bi-chevron-down"></i></a>
                        <ul>
                            <li><a href="#team">Profile Keasramaan</a></li>
                            <li class="dropdown"><a href="#services"><span>Rules of Dormitory</span> <i
                                        class="bi bi-chevron-down"></i></a>
                                <ul>
                                    <li><a href="guest-aturanumum">Aturan Umum</a></li>
                                    <li><a href="aturanputri">Aturan Asrama Putri</a></li>
                                    <li><a href="aturanaskembar">Aturan Asrama Kembar</a></li>
                                    <li><a href="aturanasantiokhia">Aturan Asrama Antiokhia</a></li>
                                    <li><a href="aturanasrus1">Aturan Asrama Rusunawa 1</a></li>
                                    <li><a href="aturanasmandiri">Aturan Asrama Luar Kampus (Asrama Mandiri)</a></li>
                                </ul>
                            </li>
                            <li><a href="#tupoksimi">TuPokSiMi</a></li>
                        </ul>
                    </li>

                    <li class="dropdown"><a href="#"><span>Data Dorm</span> <i class="bi bi-chevron-down"></i></a>
                        <ul>
                            <li><a href="#mate">Data Kamar Mahasiswa</a></li>
                            <li><a href="#dataasrama">Data Mahasiswa Alergi</a></li>
                        </ul>
                    </li>
                    <li><a class="nav-link scrollto" href="login"><button type="button"
                                class="btn btn-warning">Login</button></a></li>



                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav><!-- .navbar -->

        </div>
    </header><!-- End Header -->

    <!-- ======= Hero Section ======= -->
    <section id="hero" class="d-flex align-items-center">
        <div class="container position-relative" data-aos="fade-up" data-aos-delay="100">
            <div class="row justify-content-center">
                <div class="col-xl-7 col-lg-9 text-center">
                    <h1>Keasramaan Institut Teknologi Del</h1>
                    <h2>MarTuhan - MarRoha - MarBisuk</h2>
                </div>
            </div>

            <div class="text-center">
                <a href="login" class="btn-get-started scrollto">Contact Person!</a>
            </div>

            <div class="row icon-boxes">
                <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="zoom-in"
                    data-aos-delay="200">
                    <div class="icon-box">
                        <div class="icon"><i class="ri-stack-line"></i></div>
                        <h4 class="title"><a href="kurveyharian">Jadwal Kurve</a></h4>
                        <p class="description">Kegiatan kurve (bersih-bersih) merupakan kegiatan rutinitas Civitas
                            Institut Teknologi Del</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="zoom-in"
                    data-aos-delay="300">
                    <div class="icon-box">
                        <div class="icon"><i class="ri-book-open-line"></i></div>
                        <h4 class="title"><a href="ibadah">Renungan Harian</a></h4>
                        <p class="description">Pelaksanaan Ibadah di Asrama IT Del terdiri dari dua sesi yaitu, Sesi
                            Saat Teduh dan Sesi Ibadah Malam.</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="zoom-in"
                    data-aos-delay="400">
                    <div class="icon-box">
                        <div class="icon"><i class="ri-file-copy-2-line"></i></div>
                        <h4 class="title"><a href="eval">Evaluasi</a></h4>
                        <p class="description">Evaluasi mahasiswa merupakan kegiatan rutin asrama yang dilakukan guna
                            mengevaluasi program/rutinitas mahasiswa di asrama.</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="zoom-in"
                    data-aos-delay="500">
                    <div class="icon-box">
                        <div class="icon"><i class="ri-home-gear-line"></i></div>
                        <h4 class="title"><a href="aturanumum">Aturan Asrama</a></h4>
                        <p class="description">Mahasiswa yang telah menjadi bagian Institut Teknologi Del wajib untuk
                            mengikuti tata tertib maupun aturan Asrama.</p>
                    </div>
                </div>


            </div>


        </div>
    </section><!-- End Hero -->

    <main id="main">

        <!-- ======= About Section ======= -->
        <section id="about" class="about">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                    <h2>Tentang Asrama dan Keasramaan</h2>
                    <p>Seluruh mahasiswa IT Del diwajibkan tinggal di asrama yang disediakan. Hal ini untuk mendukung
                        sistem pendidikan vokasi dimana mahasiswa akan melaksanakan kegiatan akademis terjadwal sampai
                        sore hari ditambah kegiatan mandiri hingga pukul 10 malam hari.
                        Dengan tinggal di asrama yang lokasinya berada di dalam lingkungan kampus, mahasiswa dapat
                        segera beristirahat setelah melaksanakan kegiatan terjadwal di kampus. Dengan beristirahat yang
                        cukup dan baik diharapkan performansi mahasiswa dalam setiap kegiatan di dalam kampus akan
                        maksimal.
                    </p>
                </div>

                <div class="row content">
                    <div class="col-lg-6">
                        <p>
                            Setiap Asrama Institut Teknologi Del memiliki fasilitas dan diawasi oleh Bapak/Ibu Asrama
                            yang merupakan orang tua di asrama tersebut. Mahasiswa juga diharapkan untuk :
                        </p>
                        <ul>
                            <li><i class="ri-check-double-line"></i> Mengikuti Ibadah mahasiswa sesuai dengan
                                kepercayaan masing-masing.</li>
                            <li><i class="ri-check-double-line"></i> Mengikuti Evaluasi mahasiswa sesuai dengan jadwal
                                yang telah ditentukan.</li>
                            <li><i class="ri-check-double-line"></i> Mahasiswa wajib mengikuti acara senam pagi yang
                                diselenggarakan pada hari Selasa dan Jumat</li>
                        </ul>
                    </div>
                    <div class="col-lg-6 pt-4 pt-lg-0">
                        <p align="justify">
                            Untuk mendukung kualitas hidup berasrama, mahasiswa akan diawasi oleh Bapak/Ibu asrama
                            dibantu oleh Kakak/Abang asrama. Dengan peraturan asrama yang diberlakukan, mahasiswa akan
                            hidup lebih disiplin dan berbudaya. Mahasiswa juga memiliki hak dan kewajiban sebagai
                            asrama, menggunakan fasilitas asrama, dan lainnya yang akan dilampirkan pada halaman link
                            dibawah ini.
                        </p>
                        <a href="ketentuan-umum" class="btn-learn-more">Ketentuan Umum</a>
                    </div>
                </div>

            </div>
        </section><!-- End About Section -->
        <!-- ======= Counts Section ======= -->
        {{-- <section id="counts" class="counts section-bg">
            <div class="container">

                <div class="row justify-content-end">

                    <div class="col-lg-3 col-md-5 col-6 d-md-flex align-items-md-stretch">
                        <div class="count-box">
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-5 col-6 d-md-flex align-items-md-stretch">
                        <div class="count-box">
                            <span data-purecounter-start="0" data-purecounter-end="350" data-purecounter-duration="2"
                                class="purecounter"></span>
                            <p>Mahasiswa</p>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-5 col-6 d-md-flex align-items-md-stretch">
                        <div class="count-box">
                            <span data-purecounter-start="0" data-purecounter-end="500" data-purecounter-duration="2"
                                class="purecounter"></span>
                            <p>Mahasiswi</p>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-5 col-6 d-md-flex align-items-md-stretch">
                        <div class="count-box">
                        </div>
                    </div>

                </div>

            </div>
        </section><!-- End Counts Section --> --}}

        <!-- ======= About Video Section ======= -->
        <section id="" class="about-video">
            <div class="container" data-aos="fade-up">

                <div class="row">

                    <div class="col-lg-6 video-box align-self-baseline" data-aos="fade-right" data-aos-delay="100">
                        <br><br>
                        <img src="assets/img/about-video.jpg" class="img-fluid" alt="">
                        <a href="https://youtu.be/eQNuaqx1xQI" class="glightbox play-btn mb-4" data-vbtype="video"
                            data-autoplay="true"></a>
                    </div>

                    <div class="col-lg-6 pt-3 pt-lg-0 content" data-aos="fade-left" data-aos-delay="100">
                        <h3>Bapak/Ibu asrama memiliki latar belakang yang menempuh pendidikan menjadi Pendeta</h3>
                        <br><br>

                        <ul align="justify">
                            <li><i class="bx bx-check-double"></i> Satu orang Bapak dan atau Ibu Pendeta yang ditugasi
                                di kampus IT Del sebagai Pembina Asrama, sesuai yang ditunjuk oleh Wakil Rektor Bidang
                                Akademik dan Kemahasiswaan sebagai “Koordinator Pembina Asrama”</li>
                            <li><i class="bx bx-check-double"></i> Selanjutnya. Bapak dan Ibu Pendeta yang ditugasi
                                sebagai Pembina Asrama, secara langsung dinamai Bapak/Ibu Asrama.</li>
                            <li><i class="bx bx-check-double"></i> Bapak dan Ibu Pendeta atau yang ditunjuk bertugas
                                sebagai Pembina Asrama di IT Del, namun situasi di asrama terdapat Pembina asrama senior
                                masa kerja masih disetarakan dengan masa penyesuaian disebut sebagai “Pendamping Pembian
                                Asrama. Waktu pelaksanaan atau penugasan sebagai Pendamping Pembina asrama, disesuaikan
                                kebutuhan, ketentuan penilaian atau rekomendasi pimpinan (Direktur Pendidikan, Wakil
                                Rektor dan Rektor).</li>
                        </ul>

                    </div>

                </div>

            </div>
        </section><!-- End About Video Section -->

        <!-- ======= About Section ======= -->
        <section id="tupoksimi" class="about">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                    <h2>Tugas Pokok, Visi dan Misi</h2>
                    <p>Tugas Koordinator Pembina Asrama, Tugas Bapak/Ibu Pembina Asrama dan Tugas Pendamping Bapak/Ibu
                        Asrama.</p>
                </div>

                <div class="row content">
                    <div class="col-lg-6">
                        <p>
                            <b>
                                Tugas Koordinator Pembina Asrama
                            </b>
                        </p>
                        <ul align="justify">
                            <li><i class="ri-check-double-line"></i> Bertanggung jawab dalam menyusun rencana,
                                memberikan arahan, mengatur dan mengkoordinasikan sistem pelayanan dan teknis
                                pelaksanaan kegiatan asrama baik internal maupun eksternal, serta mengevaluasi
                                keseluruhan rangkaian program di Asrama mahasiswa IT Del berdasarkan nilai-nilai Del
                                MarTuhan-Marroha-Marbisuk;</li>
                            <li><i class="ri-check-double-line"></i> Bertanggungjawab langsung kepada Direktur
                                Pendidikan;</li>
                            <li><i class="ri-check-double-line"></i> Membuat rencana program Asrama (kalender Kegiatan
                                Keasramaan) untuk jangka pendek, jangka menengah dan jangka panjang;</li>
                            <li><i class="ri-check-double-line"></i> Memberikan arahan job description kepada Bapak-Ibu
                                Pembina Asrama untuk mengelola masing -masing Asrama;</li>
                            <li><i class="ri-check-double-line"></i> Melakukan koordinasi dengan berbagai pihak yang
                                terlibat dalam pengelolaan Asrama (termasuk dengan dosen wali, dosen matakuliah, satpam,
                                pihak kantin dan lain-lain);</li>
                            <li><i class="ri-check-double-line"></i> Mengatur dan mengkoordinasikan sistem pelayanan
                                asrama yang berhubungan dengan aktivitas dan pengembangan kegiatan Asrama;</li>
                            <li><i class="ri-check-double-line"></i> Memantau dan mengevaluasi kelangsungan program
                                pada struktur;</li>
                            <li><i class="ri-check-double-line"></i> Mengeluarkan kebijakan pengelolaan asrama,
                                disesuaikan dengan kondisi di asrama;</li>
                            <li><i class="ri-check-double-line"></i> Membuat laporan bulanan dan tahunan;</li>
                            <li><i class="ri-check-double-line"></i> Membuat laporan Nilai Perilaku</li>
                        </ul>
                    </div>
                    <div class="col-lg-6 pt-4 pt-lg-0">
                        <p align="justify">
                            Tugas Bapak/Ibu Pembina Asrama, Tata Tertib Asrama, Tanggung Jawab Pembina Asrama, Sistem
                            Penilaian Perilaku dapat dilihat dan diunduh pada link dibawah ini
                        </p>
                        <a href="halamanasrama" class="btn-learn-more">Lihat</a>
                    </div>
                </div>

            </div>
        </section><!-- End About Section -->


        <!-- ======= Team Section ======= -->
        <section id="team" class="team section-bg">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                    <h2>Profil Keasramaan</h2>
                </div>

                <div style="text-align: center;">
                    <div class="col-lg col-md" data-aos="fade-up" data-aos-delay="100">
                        <div class="member">
                            <div class="member-img">
                                <img src="images/irianto.jpeg" class="img-fluid" alt="">
                                <div class="social">
                                    <i class="bi bi-telephone"> 0812-9291-4244</i>
                                </div>
                            </div>
                            <div class="member-info">
                                <h4>Pdt. Irianto Sitorus, STh</h4>
                                <span>Bapak Asrama Mahanaim</span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up"
                        data-aos-delay="100">
                        <div class="member">
                            <div class="member-img">
                                <img src="images/herlin.jpeg" class="img-fluid" alt="">
                                <div class="social">
                                    <i class="bi bi-telephone"> 0813-6697-9988</i>
                                </div>
                            </div>
                            <div class="member-info">
                                <h4>Pdt. Herlin Juni Sitompul, STh</h4>
                                <span>Ibu Asrama Kapernaum</span>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up"
                        data-aos-delay="200">
                        <div class="member">
                            <div class="member-img">
                                <img src="images/vebby.jpeg" class="img-fluid" alt="">
                                <div class="social">
                                    <i class="bi bi-telephone"> 0812-9291-4244</i>
                                </div>
                            </div>
                            <div class="member-info">
                                <h4>Pdt. Vebby Monica Srihartati Sirait, STh</h4>
                                <span>Ibu Asrama Mamre</span>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up"
                        data-aos-delay="300">
                        <div class="member">
                            <div class="member-img">
                                <img src="images/triana.jpeg" class="img-fluid" alt="">
                                <div class="social">
                                    <i class="bi bi-telephone"> 0822-7676-7462</i>
                                </div>
                            </div>
                            <div class="member-info">
                                <h4>Pdt. Triana Novita Pane, STh</h4>
                                <span>Ibu Asrama Mamre</span>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up"
                        data-aos-delay="300">
                        <div class="member">
                            <div class="member-img">
                                <img src="images/Elsa.jpg" class="img-fluid" alt="">
                                <div class="social">
                                    <i class="bi bi-telephone"> 0822-7309-6297</i>
                                </div>
                            </div>
                            <div class="member-info">
                                <h4>CPdt. Elsa Evangelina Panggabean, STh</h4>
                                <span>Ibu Asrama Mamre</span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up"
                        data-aos-delay="100">
                        <div class="member">
                            <div class="member-img">
                                <img src="images/desmon.jpeg" class="img-fluid" alt="">
                                <div class="social">
                                    <i class="bi bi-telephone"> 0853-6110-2992</i>
                                </div>
                            </div>
                            <div class="member-info">
                                <h4>Pdt. Desmon Pentus Sitohang, STh</h4>
                                <span>Bapak Asrama Nazareth</span>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up"
                        data-aos-delay="200">
                        <div class="member">
                            <div class="member-img">
                                <img src="images/josua.jpeg" class="img-fluid" alt="">
                                <div class="social">
                                    <i class="bi bi-telephone"> 0823-6356-7593</i>
                                </div>
                            </div>
                            <div class="member-info">
                                <h4>CPdt. Josua Panggabean, STh</h4>
                                <span>Bapak Asrama Nazareth</span>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up"
                        data-aos-delay="300">
                        <div class="member">
                            <div class="member-img">
                                <img src="images/albert.jpeg" class="img-fluid" alt="">
                                <div class="social">
                                    <i class="bi bi-telephone"> 0821-6775-9443</i>
                                </div>
                            </div>
                            <div class="member-info">
                                <h4>CPdt. Albert F. Simorangkir, STh</h4>
                                <span>Bapak Asrama Nazareth</span>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up"
                        data-aos-delay="300">
                        <div class="member">
                            <div class="member-img">
                                <img src="images/jossy.jpeg" class="img-fluid" alt="">
                                <div class="social">
                                    <i class="bi bi-telephone"> 0823-6335-3746</i>
                                </div>
                            </div>
                            <div class="member-info">
                                <h4>CPdt. Josianna Widya Permata Lumbantobing, STh</h4>
                                <span>Ibu Asrama Kana</span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up"
                        data-aos-delay="100">
                        <div class="member">
                            <div class="member-img">
                                <img src="images/leonal.jpeg" class="img-fluid" alt="">
                                <div class="social">
                                    <i class="bi bi-telephone"> 0821-6518-3608</i>
                                </div>
                            </div>
                            <div class="member-info">
                                <h4>Pdt. Leonal Ady Winata Purba, STh</h4>
                                <span>Bapak Asrama Pniel</span>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up"
                        data-aos-delay="200">
                        <div class="member">
                            <div class="member-img">
                                <img src="images/herman.jpeg" class="img-fluid" alt="">
                                <div class="social">
                                    <i class="bi bi-telephone"> 0812-7785-7682</i>
                                </div>
                            </div>
                            <div class="member-info">
                                <h4>CPdt. Herman Manurung, STh</h4>
                                <span>Bapak Asrama Pniel</span>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up"
                        data-aos-delay="300">
                        <div class="member">
                            <div class="member-img">
                                <img src="images/begawan.jpeg" class="img-fluid" alt="">
                                <div class="social">
                                    <i class="bi bi-telephone"> 0853-7365-1164</i>
                                </div>
                            </div>
                            <div class="member-info">
                                <h4>CPdt. Begawan Johannes Sitompul, STh</h4>
                                <span>Bapak Asrama Antiokhia</span>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up"
                        data-aos-delay="300">
                        <div class="member">
                            <div class="member-img">
                                <img src="images/sry.jpeg" class="img-fluid" alt="">
                                <div class="social">
                                    <i class="bi bi-telephone"> 0822-7669-8002</i>
                                </div>
                            </div>
                            <div class="member-info">
                                <h4>CPdt. Sri Wahyuni Sitanggang, STh</h4>
                                <span>Ibu Asrama Silo</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            </div>

        </section><!-- End Team Section -->


        <!-- ======= Services Section ======= -->
        <section id="services" class="services section-bg">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                    <h2>Tata Tertib dan Aturan Asrama</h2>
                    <p>Asrama IT Del adalah tempat tinggal warga asrama yang juga berfungsi sebagai tempat pembentukan
                        karakter mahasiswa dan mahasiswa IT Del wajibb mengikuti ketentuan, tata tertib dan aturan yang
                        telah ditetapkan</p>
                </div>

                <div class="row">
                    <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="zoom-in"
                        data-aos-delay="100">
                        <div class="icon-box iconbox-blue">
                            <div class="icon">
                                <svg width="100" height="100" viewBox="0 0 600 600"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path stroke="none" stroke-width="0" fill="#f5f5f5"
                                        d="M300,541.5067337569781C382.14930387511276,545.0595476570109,479.8736841581634,548.3450877840088,526.4010558755058,480.5488172755941C571.5218469581645,414.80211281144784,517.5187510058486,332.0715597781072,496.52539010469104,255.14436215662573C477.37192572678356,184.95920475031193,473.57363656557914,105.61284051026155,413.0603344069578,65.22779650032875C343.27470386102294,18.654635553484475,251.2091493199835,5.337323636656869,175.0934190732945,40.62881213300186C97.87086631185822,76.43348514350839,51.98124368387456,156.15599469081315,36.44837278890362,239.84606092416172C21.716077023791087,319.22268207091537,43.775223500013084,401.1760424656574,96.891909868211,461.97329694683043C147.22146801428983,519.5804099606455,223.5754009179313,538.201503339737,300,541.5067337569781">
                                    </path>
                                </svg>
                                <i class="bi bi-houses-fill"></i>
                            </div>
                            <h4><a href="guest-aturanumum">Aturan Umum</a></h4>
                            <p>Aturan yang berlaku pada seluruh asrama Institut Teknologi Del dilengkapi dengan tingkat
                                pelanggaran dan poin yang berlaku</p>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-lg-0" data-aos="zoom-in"
                        data-aos-delay="300">
                        <div class="icon-box iconbox-pink">
                            <div class="icon">
                                <svg width="100" height="100" viewBox="0 0 600 600"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path stroke="none" stroke-width="0" fill="#f5f5f5"
                                        d="M300,541.5067337569781C382.14930387511276,545.0595476570109,479.8736841581634,548.3450877840088,526.4010558755058,480.5488172755941C571.5218469581645,414.80211281144784,517.5187510058486,332.0715597781072,496.52539010469104,255.14436215662573C477.37192572678356,184.95920475031193,473.57363656557914,105.61284051026155,413.0603344069578,65.22779650032875C343.27470386102294,18.654635553484475,251.2091493199835,5.337323636656869,175.0934190732945,40.62881213300186C97.87086631185822,76.43348514350839,51.98124368387456,156.15599469081315,36.44837278890362,239.84606092416172C21.716077023791087,319.22268207091537,43.775223500013084,401.1760424656574,96.891909868211,461.97329694683043C147.22146801428983,519.5804099606455,223.5754009179313,538.201503339737,300,541.5067337569781">
                                    </path>
                                </svg>
                                <i class="bi bi-person-fill"></i>
                            </div>
                            <h4><a href="aturanputri">Aturan Asrama Putri</a></h4>
                            <p>Aturan yang berlaku pada setiap asrama yang dihuni oleh mahasiswi (Perempuan)</p><br>
                            {{-- <p>
                                @if (file_exists(public_path('asset/aturan-putri.pdf')))
                                    <a href="{{ asset('asset/aturan-putri.pdf') }}" download>Unduh</a>
                                @else
                                    File not found
                                @endif
                            </p> --}}
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-lg-0" data-aos="zoom-in"
                        data-aos-delay="300">
                        <div class="icon-box iconbox-blue">
                            <div class="icon">
                                <svg width="100" height="100" viewBox="0 0 600 600"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path stroke="none" stroke-width="0" fill="#f5f5f5"
                                        d="M300,541.5067337569781C382.14930387511276,545.0595476570109,479.8736841581634,548.3450877840088,526.4010558755058,480.5488172755941C571.5218469581645,414.80211281144784,517.5187510058486,332.0715597781072,496.52539010469104,255.14436215662573C477.37192572678356,184.95920475031193,473.57363656557914,105.61284051026155,413.0603344069578,65.22779650032875C343.27470386102294,18.654635553484475,251.2091493199835,5.337323636656869,175.0934190732945,40.62881213300186C97.87086631185822,76.43348514350839,51.98124368387456,156.15599469081315,36.44837278890362,239.84606092416172C21.716077023791087,319.22268207091537,43.775223500013084,401.1760424656574,96.891909868211,461.97329694683043C147.22146801428983,519.5804099606455,223.5754009179313,538.201503339737,300,541.5067337569781">
                                    </path>
                                </svg>
                                <i class="bi bi-people-fill"></i>
                            </div>
                            <h4><a href="aturanaskembar">Aturan Asrama Kembar</a></h4>
                            <p>Aturan yang berlaku pada asrama dalam yang memiliki nama Silo dan Kapernaum</p><br>
                            {{-- <p>
                                @if (file_exists(public_path('asset/aturan-asrama-kembar.pdf')))
                                    <a href="{{ asset('asset/aturan-asrama-kembar.pdf') }}" download>Unduh</a>
                                @else
                                    File not found
                                @endif
                            </p> --}}
                        </div>
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-lg-0" data-aos="zoom-in"
                        data-aos-delay="300">
                        <div class="icon-box iconbox-blue">
                            <div class="icon">
                                <svg width="100" height="100" viewBox="0 0 600 600"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path stroke="none" stroke-width="0" fill="#f5f5f5"
                                        d="M300,541.5067337569781C382.14930387511276,545.0595476570109,479.8736841581634,548.3450877840088,526.4010558755058,480.5488172755941C571.5218469581645,414.80211281144784,517.5187510058486,332.0715597781072,496.52539010469104,255.14436215662573C477.37192572678356,184.95920475031193,473.57363656557914,105.61284051026155,413.0603344069578,65.22779650032875C343.27470386102294,18.654635553484475,251.2091493199835,5.337323636656869,175.0934190732945,40.62881213300186C97.87086631185822,76.43348514350839,51.98124368387456,156.15599469081315,36.44837278890362,239.84606092416172C21.716077023791087,319.22268207091537,43.775223500013084,401.1760424656574,96.891909868211,461.97329694683043C147.22146801428983,519.5804099606455,223.5754009179313,538.201503339737,300,541.5067337569781">
                                    </path>
                                </svg>
                                <i class="bi bi-house-gear-fill"></i>
                            </div>
                            <h4><a href="aturanasantiokhia">Aturan Asrama Antiokhia (Danau Toba)</a></h4>
                            <p>Aturan yang berlaku pada asrama dalam yang berlokasi disamping pemandangan Danau Toba</p>
                            <br>
                            {{-- <p>
                                @if (file_exists(public_path('asset/aturan-asrama-dantob.pdf')))
                                    <a href="{{ asset('asset/aturan-asrama-dantob.pdf') }}" download>Unduh</a>
                                @else
                                    File not found
                                @endif
                            </p> --}}
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-lg-0" data-aos="zoom-in"
                        data-aos-delay="300">
                        <div class="icon-box iconbox-pink">
                            <div class="icon">
                                <svg width="100" height="100" viewBox="0 0 600 600"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path stroke="none" stroke-width="0" fill="#f5f5f5"
                                        d="M300,541.5067337569781C382.14930387511276,545.0595476570109,479.8736841581634,548.3450877840088,526.4010558755058,480.5488172755941C571.5218469581645,414.80211281144784,517.5187510058486,332.0715597781072,496.52539010469104,255.14436215662573C477.37192572678356,184.95920475031193,473.57363656557914,105.61284051026155,413.0603344069578,65.22779650032875C343.27470386102294,18.654635553484475,251.2091493199835,5.337323636656869,175.0934190732945,40.62881213300186C97.87086631185822,76.43348514350839,51.98124368387456,156.15599469081315,36.44837278890362,239.84606092416172C21.716077023791087,319.22268207091537,43.775223500013084,401.1760424656574,96.891909868211,461.97329694683043C147.22146801428983,519.5804099606455,223.5754009179313,538.201503339737,300,541.5067337569781">
                                    </path>
                                </svg>
                                <i class="bi bi-house-gear-fill"></i>
                            </div>
                            <h4><a href="aturanasrus1">Aturan Asrama Luar Kampus (Rusunawa 1)</a></h4>
                            <p>Aturan yang berlaku pada asrama luar kampus yang bernama Rusunawa 1</p><br>
                            {{-- <p>
                                @if (file_exists(public_path('asset/aturan-asrama-rusun1.pdf')))
                                    <a href="{{ asset('asset/aturan-asrama-rusun1.pdf') }}" download>Unduh</a>
                                @else
                                    File not found
                                @endif
                            </p> --}}
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-lg-0" data-aos="zoom-in"
                        data-aos-delay="300">
                        <div class="icon-box iconbox-blue">
                            <div class="icon">
                                <svg width="100" height="100" viewBox="0 0 600 600"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path stroke="none" stroke-width="0" fill="#f5f5f5"
                                        d="M300,541.5067337569781C382.14930387511276,545.0595476570109,479.8736841581634,548.3450877840088,526.4010558755058,480.5488172755941C571.5218469581645,414.80211281144784,517.5187510058486,332.0715597781072,496.52539010469104,255.14436215662573C477.37192572678356,184.95920475031193,473.57363656557914,105.61284051026155,413.0603344069578,65.22779650032875C343.27470386102294,18.654635553484475,251.2091493199835,5.337323636656869,175.0934190732945,40.62881213300186C97.87086631185822,76.43348514350839,51.98124368387456,156.15599469081315,36.44837278890362,239.84606092416172C21.716077023791087,319.22268207091537,43.775223500013084,401.1760424656574,96.891909868211,461.97329694683043C147.22146801428983,519.5804099606455,223.5754009179313,538.201503339737,300,541.5067337569781">
                                    </path>
                                </svg>
                                <i class="bi bi-house-gear-fill"></i>
                            </div>
                            <h4><a href="aturanasmandiri">Aturan Asrama Luar Kampus (Asrama Mandiri)</a></h4>
                            <p>Aturan yang berlaku pada asrama luar kampus</p><br>
                            {{-- <p>
                                @if (file_exists(public_path('asset/aturan-asrama-mandiri.pdf')))
                                    <a href="{{ asset('asset/aturan-asrama-mandiri.pdf') }}" download>Unduh</a>
                                @else
                                    File not found
                                @endif
                            </p> --}}
                        </div>
                    </div>
                </div>
            </div>

            </div>
        </section><!-- End Sevices Section -->

        <!-- ======= Cta Section ======= -->
        <section id="mate" class="cta">
            <div class="container" data-aos="zoom-in">
                <div class="text-center">
                    <h3>Data Kamar Mahasiswa</h3>
                    <p> Nama - nama mahasiswa Institut Teknologi Del yang tinggal di Asrama.</p>
                    <a class="cta-btn" href="guest-halamankamar">Lihat kamar</a>
                </div>
            </div>
        </section><!-- End Cta Section -->

        <!-- ======= Portfolio Section ======= -->
        <section id="portfolio" class="portfolio">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                    <h2>Kegiatan Program Keasramaan</h2>
                </div>

                <div class="row" data-aos="fade-up" data-aos-delay="150">
                    <div class="col-lg-12 d-flex justify-content-center">
                        <ul id="portfolio-flters">
                            <li data-filter="*" class="filter-active">All</li>
                            <li data-filter=".filter-app">Refreshing</li>
                            <li data-filter=".filter-card">Retreat</li>
                            <li data-filter=".filter-web">Student Leadership</li>
                        </ul>
                    </div>
                </div>

                <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="300">

                    <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                        <div class="portfolio-wrap">
                            <img src="images/1.jpeg" class="img-fluid" alt="">
                            <div class="portfolio-info">
                                <div class="portfolio-links">
                                    <a href="images/1.jpeg" data-gallery="portfolioGallery"
                                        class="portfolio-lightbox"
                                        title="menjalin kerjasama mahasiswa melalui kegiatan permainan (games) "><i
                                            class="bx bx-plus"></i></a>
                                    <a href="halamanasrama" title="More Details"><i class="bx bx-link"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-web">
                        <div class="portfolio-wrap">
                            <img src="assets/img/portfolio/portfolio-2.jpg" class="img-fluid" alt="">
                            <div class="portfolio-info">
                                <h4>Web 3</h4>
                                <p>Web</p>
                                <div class="portfolio-links">
                                    <a href="assets/img/portfolio/portfolio-2.jpg" data-gallery="portfolioGallery"
                                        class="portfolio-lightbox" title="Web 3"><i class="bx bx-plus"></i></a>
                                    <a href="portfolio-details.html" title="More Details"><i
                                            class="bx bx-link"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                        <div class="portfolio-wrap">
                            <img src="images/2.jpeg" class="img-fluid" alt="">
                            <div class="portfolio-info">
                                <div class="portfolio-links">
                                    <a href="images/2.jpeg" data-gallery="portfolioGallery"
                                        class="portfolio-lightbox" title="Belajar nilai-nilai karakter"><i
                                            class="bx bx-plus"></i></a>
                                    <a href="halamanasrama" title="More Details"><i class="bx bx-link"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-card">
                        <div class="portfolio-wrap">
                            <img src="assets/img/portfolio/portfolio-4.jpg" class="img-fluid" alt="">
                            <div class="portfolio-info">
                                <h4>Card 2</h4>
                                <p>Card</p>
                                <div class="portfolio-links">
                                    <a href="assets/img/portfolio/portfolio-4.jpg" data-gallery="portfolioGallery"
                                        class="portfolio-lightbox" title="Card 2"><i class="bx bx-plus"></i></a>
                                    <a href="portfolio-details.html" title="More Details"><i
                                            class="bx bx-link"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-web">
                        <div class="portfolio-wrap">
                            <img src="assets/img/portfolio/portfolio-5.jpg" class="img-fluid" alt="">
                            <div class="portfolio-info">
                                <h4>Web 2</h4>
                                <p>Web</p>
                                <div class="portfolio-links">
                                    <a href="assets/img/portfolio/portfolio-5.jpg" data-gallery="portfolioGallery"
                                        class="portfolio-lightbox" title="Web 2"><i class="bx bx-plus"></i></a>
                                    <a href="portfolio-details.html" title="More Details"><i
                                            class="bx bx-link"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                        <div class="portfolio-wrap">
                            <img src="assets/img/portfolio/portfolio-6.jpg" class="img-fluid" alt="">
                            <div class="portfolio-info">
                                <h4>App 3</h4>
                                <p>App</p>
                                <div class="portfolio-links">
                                    <a href="assets/img/portfolio/portfolio-6.jpg" data-gallery="portfolioGallery"
                                        class="portfolio-lightbox" title="App 3"><i class="bx bx-plus"></i></a>
                                    <a href="portfolio-details.html" title="More Details"><i
                                            class="bx bx-link"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                        <div class="portfolio-wrap">
                            <img src="images/3.jpeg" class="img-fluid" alt="">
                            <div class="portfolio-info">
                                <div class="portfolio-links">
                                    <a href="images/3.jpeg" data-gallery="portfolioGallery"
                                        class="portfolio-lightbox" title="Kegiatan kebersihan"><i
                                            class="bx bx-plus"></i></a>
                                    <a href="halamanasrama" title=""><i class="bx bx-link"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-card">
                        <div class="portfolio-wrap">
                            <img src="assets/img/portfolio/portfolio-8.jpg" class="img-fluid" alt="">
                            <div class="portfolio-info">
                                <h4>Card 3</h4>
                                <p>Card</p>
                                <div class="portfolio-links">
                                    <a href="assets/img/portfolio/portfolio-8.jpg" data-gallery="portfolioGallery"
                                        class="portfolio-lightbox" title="Card 3"><i class="bx bx-plus"></i></a>
                                    <a href="portfolio-details.html" title="More Details"><i
                                            class="bx bx-link"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-web">
                        <div class="portfolio-wrap">
                            <img src="assets/img/portfolio/portfolio-9.jpg" class="img-fluid" alt="">
                            <div class="portfolio-info">
                                <h4>Web 3</h4>
                                <p>Web</p>
                                <div class="portfolio-links">
                                    <a href="assets/img/portfolio/portfolio-9.jpg" data-gallery="portfolioGallery"
                                        class="portfolio-lightbox" title="Web 3"><i class="bx bx-plus"></i></a>
                                    <a href="portfolio-details.html" title="More Details"><i
                                            class="bx bx-link"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </section><!-- End Portfolio Section -->



        <!-- ======= Pricing Section ======= -->
        <section id="dataasrama" class="pricing">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                    <h2>Data Asrama</h2>
                    <p>Mahasiswa Sakit, Mahasiswa Alergi, dan Dokumen.</p>
                </div>

                <div class="row">

                    <div class="col-lg-4 col-md-6" data-aos="zoom-im" data-aos-delay="100">
                        <div class="box">
                            <h3>Data Mahasiswa Alergi</h3>
                            <ul>
                                <li>Mahasiswa diizinkan untuk menukar lauk jika dan hanya jika ada pantangan atau alergi
                                    terhadap jenis lauk tertentu yang disajikan saat itu. Penukaran dilakukan kepada
                                    pihak kantin di tempat yang ditentukan. Daftar mahasiswa yang memiliki pantangan
                                    sudah dimiliki oleh pihak kantin melalui Pembina Asrama.</li>

                            </ul>
                            <div class="btn-wrap">
                                <a href="guest-alergic" class="btn-buy">Lihat</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 mt-4 mt-md-0" data-aos="zoom-in" data-aos-delay="100">
                        <div class="box featured">
                            <h3>Data Mahasiswa Sakit</h3>

                            <ul>
                                <li>Mahasiswa yang mengalami sakit wajib melapor kepada Pembina Asrama, baik secara
                                    langsung maupun melalui teman mahasiswa. Pembina Asrama akan memberikan penanganan
                                    awal sesuai dengan petunjuk dokter kampus, misalnya: dengan istirahat, pemberian
                                    obat tertentu, dibawa ke klinik Del atau ke Rumah Sakit.</li>
                            </ul>
                            <div class="btn-wrap">
                                <a href="sakit" class="btn-buy">Lihat</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 mt-4 mt-lg-0" data-aos="zoom-in" data-aos-delay="100">
                        <div class="box">
                            <h3>Dokumen</h3>
                            <br><br>
                            <ul>
                                <li>File - file mengenai asrama dan keasramaan dapat di unduh langsung pada halaman ini.
                                </li>
                                <br>
                            </ul>
                            <div class="btn-wrap">
                                <a href="'document" class="btn-buy">Lihat</a>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </section><!-- End Pricing Section -->

        <!-- ======= Frequently Asked Questions Section ======= -->
        <section id="keterangan" class="faq section-bg">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                    <h2>Izin Bermalam dan Izin Keluar</h2>
                    <p>
                        Sesuai dengan Surat Edaran Rektor IT Del Nomor: 070/ITDel/REK/SE/SDM/VI/22 Tentang
                        Pemberlakuan Working From Office (WFO) dan Pertemuan Tatap Muka (PTM) dan dengan
                        memperhatikan kondisi pandemi Covid-19 yang sudah menurun di Indonesia khususnya di
                        daerah Kabupaten Toba, maka Institut Teknologi Del kembali memberikan Izin Keluar dan Izin
                        Bermalam (IB).
                    </p>
                </div>

                <div class="faq-list">
                    <ul>
                        <li data-aos="fade-up">
                            <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" class="collapse"
                                data-bs-target="#faq-list-1">Bagaimana ketentuan pengolaan waktu yang baik dalam
                                Kampus? <i class="bx bx-chevron-down icon-show"></i><i
                                    class="bx bx-chevron-up icon-close"></i></a>
                            <div id="faq-list-1" class="collapse show" data-bs-parent=".faq-list">
                                <p>
                                <ul>
                                    <li>
                                        <p>
                                            <i class="bi bi-balloon-fill"></i> Mahasiswa diharapkan memanfaatkan jam
                                            akademik dan jam kolaboratif untuk berada
                                            di dalam lingkungan kampus IT Del untuk melakukan kegiatan akademik,
                                            kegiatan pendukung akademik,
                                            serta kegiatan pengembangan diri dan organisasi.
                                        </p>
                                        <p>
                                            <i class="bi bi-balloon-fill"></i> Mahasiswa diharapkan dapat memanfaatkan
                                            periode dimana mahasiswa diijinkan berada diluar kampus,
                                            yaitu pukul 17.00 - 19.00 WIB dihari Senin sampai Jumat dan diakhir pekan,
                                            untuk melakukan kegiatan non-akademik
                                            seperti mengambil uang ke ATM.
                                        </p>
                                        <p>
                                            <i class="bi bi-balloon-fill"></i> Mahasiswa diharapkan dapat memeriksa dan
                                            membawa kelengkapan sebelum meninggalkan asrama, seperti: laptop, charger,
                                            buku, dan lainnya.
                                        </p>
                                        <p>
                                            <i class="bi bi-exclamation-triangle-fill"></i> Dengan melakukan ketiga hal
                                            tersebut di atas maka mahasiswa <b>TIDAK DIIJINKAN</b> untuk melakukan
                                            kegiatan
                                            non akademik seperti yang disebutkan pada butir <b>(2)</b> dan kembali ke
                                            asrama karena lupa membawa keperluan yang disebut pada butir <b>(3)</b> di
                                            atas pada jam akademik dan
                                            jam kolaboratif kecuali untuk hal yang <b>SANGAT MENDESAK</b>, dan atas
                                            persetujuan Koordinator Kemahasiswaan dan Koordinator Keasramaan.
                                        </p>
                                    </li>
                                </ul>
                                </p>
                            </div>
                        </li>

                        <li data-aos="fade-up" data-aos-delay="100">
                            <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse"
                                data-bs-target="#faq-list-2" class="collapsed">Bagaimana ketentuan Izin Keluar Kampus?
                                <i class="bx bx-chevron-down icon-show"></i><i
                                    class="bx bx-chevron-up icon-close"></i></a>
                            <div id="faq-list-2" class="collapse" data-bs-parent=".faq-list">
                                <ul>
                                    <li>
                                        <p>
                                            <i class="bi bi-balloon"></i> Mahasiswa diperkenankan keluar kampus setelah
                                            jam perkuliahan pada hari Senin-Jumat
                                            (pukul 17.00-18.30 WIB). Pada saat masuk kembali ke kampus, mahasiswa tidak
                                            diperkenankan membawa makanan yang tidak diperkenankan untuk dikonsumsi di
                                            lingkungan Del.
                                        </p>
                                        <p>
                                            <i class="bi bi-balloon"></i> IK pada jam akademik dilakukan melalui CIS
                                            dengan persetujuan Dosen Wali, Dosen
                                            Pengampu MK dan Keasramaan.
                                        </p>
                                        <p>
                                            <i class="bi bi-balloon"></i> IK pada Sabtu Minggu* dapat dilakukan pada :
                                        <ul>
                                            <li>
                                                <p>
                                                    Sabtu : 13.00 - 19.00 WIB (Makan Malam tidak disediakan di Kantin)
                                                </p>
                                                <p>
                                                    Minggu : 07.00 -14.00 WIB (Makan Pagi dan Makan Siang tidak
                                                    disediakan di Kantin)
                                                </p>
                                            </li>
                                        </ul>
                                        <b>*khusus tingkat II, III dan tingkat akhir</b>
                                        </p>
                                    </li>
                                </ul>
                            </div>
                        </li>

                        <li data-aos="fade-up" data-aos-delay="200">
                            <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse"
                                data-bs-target="#faq-list-3" class="collapsed">Bagaimana ketentuan Izin Bermalam? <i
                                    class="bx bx-chevron-down icon-show"></i><i
                                    class="bx bx-chevron-up icon-close"></i></a>
                            <div id="faq-list-3" class="collapse" data-bs-parent=".faq-list">
                                <ul>
                                    <li>
                                        <p>
                                            <i class="bi bi-balloon-fill"></i> IB dilakukan H-2 dengan mengisi : <a
                                                href="https://cis.del.ac.id/askm/izin-bermalam/izin-by-mahasiswa-add">Form
                                                Izin Bermalam</a>
                                            Dan mencetak form IBL untuk ditandatangani Bapak/Ibu Asrama dan ditunjukan
                                            di Pos Satpam saat keluar kampus.
                                        </p>
                                        <p>
                                            <i class="bi bi-balloon-fill"></i> Mahasiswa diberikan Izin Bermalam di
                                            Luar Kampus (IBL) di hari Jumat atau Sabtu atau di hari lain dimana keesokan
                                            harinya tidak ada kegiatan akademik atau kegiatan lainnya yang tidak
                                            mengharuskan mahasiswa berada di kampus IT Del.
                                        </p>
                                        <p>
                                            <i class="bi bi-balloon-fill"></i> Pada saat kembali ke kampus, mahasiswa
                                            mengumpulkan kertas IBL yang telah ditandatangani oleh orangtua di Pos
                                            Satpam untuk selanjutnya dikumpulkan dan direkap oleh Pembina Asrama.
                                        </p>
                                        <p>
                                            <i class="bi bi-balloon-fill"></i> Apabila terdapat kegiatan Badan
                                            Eksekutif Mahasiswa (BEM) yang mengharuskan seluruh mahasiswa mengikuti
                                            kegiatan tersebut, maka mahasiswa tidak diperbolehkan IBL.
                                        </p>
                                        <p>
                                            <i class="bi bi-exclamation-triangle-fill"></i> Mahasiswa yang tidak
                                            mengajukan IBL sesuai ketentuan pada butir 3 (tiga) <b>tidak diizinkan untuk
                                                IBL</b> kecuali dalam kondisi mendesak (emergency) seperti sakit atau
                                            ada keluarga meninggal
                                        </p>
                                    </li>
                                </ul>
                            </div>
                        </li>

                        <li data-aos="fade-up" data-aos-delay="300">
                            <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse"
                                data-bs-target="#faq-list-4" class="collapsed">Apa Sanksi jika melakukan Izin Keluar
                                Kampus, Kelas dan Izin Bermalam tanpa keterangan? <i
                                    class="bx bx-chevron-down icon-show"></i><i
                                    class="bx bx-chevron-up icon-close"></i></a>
                            <div id="faq-list-4" class="collapse" data-bs-parent=".faq-list">
                                <ul>
                                    <li>
                                        <p>
                                            <i class="bi bi-emoji-frown-fill"></i> Tidur di luar asrama tanpa
                                            sepengetahuan/izin dari Pembina Asrama atau IBL secara gelap mendapatkan
                                            poin <b>20</b> dan termasuk pelanggaran <b>sedang</b>
                                        </p>
                                        <p>
                                            <i class="bi bi-emoji-frown-fill"></i> Meninggalkan kelas/jam pelajaran
                                            tanpa izin mendapatkan poin <b>5</b> dan termasuk pelanggaran <b>ringan</b>
                                        </p>
                                    </li>
                                </ul>
                            </div>
                        </li>
                    </ul>
                </div>

            </div>
        </section><!-- End Frequently Asked Questions Section -->

        <!-- ======= Contact Section ======= -->
        <section id="contact" class="contact">
            <div class="container" data-aos="fade-up">
                <div>
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15945.455082679036!2d99.1384086390879!3d2.384449515907751!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x302e00fdad2d7341%3A0xf59ef99c591fe451!2sDel%20Institute%20of%20Technology!5e0!3m2!1sen!2sid!4v1683770829916!5m2!1sen!2sid"
                        width="1300" height="270" style="border:0;" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>

    </main><!-- End #main -->

    <!-- ======= Footer ======= -->
    <footer id="footer">

        <div class="footer-top">
            <div class="container">
                <div class="row">

                    <div class="col-lg-3 col-md-6 footer-contact">
                        <h3>IT - Del</h3>
                        <p>
                            Institut Teknologi Del <br>
                            Jl. Sisingamangaraja<br>
                            Sitoluama, Laguboti <br>
                            Indonesia<br><br>
                            <strong>Phone:</strong> +62 632 331234<br>
                            <strong>Email:</strong> info@del.ac.id<br>
                        </p>
                    </div>

                    <div class="col-lg-2 col-md-6 footer-links">
                        <h4>Useful Links</h4>
                        <ul>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Home</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Tentang Asrama</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Kritik & Saran</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Terms of service</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Privacy policy</a></li>
                        </ul>
                    </div>

                    <div class="col-lg-3 col-md-6 footer-links">
                        <h4>Akomodasi Lain IT Del</h4>
                        <ul>
                            <li><i class="bx bx-chevron-right"></i> <a
                                    href="https://www.del.ac.id/?page_id=144">Kantin IT - Del</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="https://www.del.ac.id/?page_id=142">Guest
                                    House</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="https://www.del.ac.id/?page_id=142">Town
                                    House</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a
                                    href="https://www.del.ac.id/?page_id=142">Mansionette</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a
                                    href="https://www.del.ac.id/?page_id=142">Studio</a></li>
                        </ul>
                    </div>

                    <div class="col-lg-4 col-md-6 footer-newsletter">
                        <h4>Join Us In IT - Del</h4>
                        <p>Halo Teman Del! Mari daftarkan diri kamu menjadi bagian Sobat Del</p>

                    </div>

                </div>
            </div>
        </div>

        <div class="container d-md-flex py-4">

            <div class="me-md-auto text-center text-md-start">
                <div class="copyright">
                    &copy; Copyright <strong><span>PA II KEL 07</span></strong>. All Rights Reserved
                </div>

            </div>
            <div class="social-links text-center text-md-right pt-3 pt-md-0">
                <a href="https://twitter.com/institut_del" class="twitter"><i class="bx bxl-twitter"></i></a>
                <a href="https://www.facebook.com/profile.php?id=403538753086034&fref=ts" class="facebook"><i
                        class="bx bxl-facebook"></i></a>
                <a href="https://www.instagram.com/it.del/?hl=en" class="instagram"><i
                        class="bx bxl-instagram"></i></a>
                <a href="http://www.del.ac.id" class="google-plus"><i class="bx bxl-skype"></i></a>

            </div>
        </div>
    </footer><!-- End Footer -->

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
