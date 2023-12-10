<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Aturan Asrama Luar Kampus</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link rel="shortcut icon" href="{{ asset('assets/img/.png') }}">

    <!-- Google Fonts -->
    <link href="https://fonts.gstatic.com" rel="preconnect">
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="admin-asset/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="admin-asset/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="admin-asset/assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="admin-asset/assets/vendor/quill/quill.snow.css" rel="stylesheet">
    <link href="admin-asset/assets/vendor/quill/quill.bubble.css" rel="stylesheet">
    <link href="admin-asset/assets/vendor/remixicon/remixicon.css" rel="stylesheet">
    {{-- <link href="admin-asset/assets/vendor/simple-datatables/style.css" rel="stylesheet"> --}}
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/dataTables.bootstrap5.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.3.6/css/buttons.bootstrap5.min.css">

    <!-- Template Main CSS File -->
    <link href="admin-asset/assets/css/style.css" rel="stylesheet">

</head>

<body>
    @csrf
    <!-- ======= Sidebar ======= -->

    <main>
        <section class="section">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Aturan Asrama Luar Kampus</h5>
                    <a class="btn btn-primary" href="beranda" role="button">Kembali</a>
                    <br>
                    <br>
                    <div class="card" style="width: 100rem;">
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">a. Tidak disediakan kendaraan antarjemput dari kampus ke asrama
                                dan sebaliknya.</li>
                            <li class="list-group-item">b. Mahasiswa dapat keluar asrama paling cepat pukul 06.15 WIB
                                dan masuk ke asrama pada malam haripaling lama pukul 21.00 WIB. </li>
                            <li class="list-group-item">c. Ibadah dan Evaluasi malam dilaksanakan pada pukul 21.00-21.30
                                WIB.</li>
                            <li class="list-group-item">d. Jadwal kurve dilaksanakan dengan piket setiap harinya dan
                                hari Rabu adalah kurve umum.</li>
                            <li class="list-group-item">e. Mahasiswa membersihkan got di sekitar asrama dibersihkan
                                secara berkala.</li>
                            <li class="list-group-item">f. Alat kurve diletakkan di kamar mandi tempat pengambilan air
                                kurve.</li>
                            <li class="list-group-item">g. Mahasiswa wajib mencuci gorden seminggu sebelum libur
                                semester.</li>
                            <li class="list-group-item">h. Sapu lantai dimasukkan ke dalam kamar masing-masing. </li>
                            <li class="list-group-item">i. Mahasiswa tidak diperkenankan menggantungkan handuk, pakaian,
                                deterjen, dan sabun di dalam kamar mandi.</li>
                            <li class="list-group-item">j. Mahasiswa meletakkan sepatu di loker masing-masing di setiap
                                lantai yang sudah ditetapkan.</li>
                            <li class="list-group-item">k. Mahasiswa wajibtinggal di kamar masing-masing dan menempati
                                tempat tidur masing-masing, dan tidak diperkenankan untuk tidur bersama dengan mahasiswa
                                lainnya dalam satu kasur.</li>
                            <li class="list-group-item">l. Mahasiswa meletakkan hanger di bawah tangga lantai I dalam
                                keadaan rapi. </li>
                            <li class="list-group-item">m. Mahasiswa diperkenankan belajar mandiri dalam asrama dengan
                                ketentuan tidak menganggu mahasiswa lain yang sedang beristirahat.</li>
                            <li class="list-group-item">n. Waktu senyap di asrama adalah Pukul 00.00-4.00 WIB. Pada saat
                                ini lampu kamar dalam keadaan padam (off).</li>
                            <li class="list-group-item">o. Mahasiswa tidak diperkenankan tidur di kamar mahasiswa lain.
                            </li>

                        </ul>
                    </div>



        </section>

    </main><!-- End #main -->

    <!-- ======= Footer ======= -->
    <footer id="footer" class="footer">
        <div class="">
            &copy; Copyright <strong><span>PA-II Kelompok 7</span></strong>. All Rights Reserved
        </div>
    </footer><!-- End Footer -->

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    {{-- <script src="{{ $totalAspaAspi->cdn() }}"></script>
  {{ $totalAspaAspi->script() }} --}}
    <script src="https://code.jquery.com/jquery-3.6.4.slim.min.js"
        integrity="sha256-a2yjHM4jnF9f54xUQakjZGaqYs/V1CYvWpoqZzC2/Bw=" crossorigin="anonymous"></script>
    <script src="admin-asset/assets/vendor/apexcharts/apexcharts.min.js"></script>
    <script src="admin-asset/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="admin-asset/assets/vendor/chart.js/chart.umd.js"></script>
    <script src="admin-asset/assets/vendor/echarts/echarts.min.js"></script>
    <script src="admin-asset/assets/vendor/quill/quill.min.js"></script>
    {{-- <script src="admin-asset/assets/vendor/simple-datatables/simple-datatables.js"></script> --}}
    <script src="admin-asset/assets/vendor/tinymce/tinymce.min.js"></script>
    <script src="admin-asset/assets/vendor/php-email-form/validate.js"></script>
    <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.4/js/dataTables.bootstrap5.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.3.6/js/dataTables.buttons.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.3.6/js/buttons.bootstrap5.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.3.6/js/buttons.html5.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
    <!-- Template Main JS File -->
    {{-- <script src="admin-asset/assets/js/main.js"></script> --}}


</body>

</html>
