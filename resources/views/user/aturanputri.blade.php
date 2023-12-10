<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Aturan Asrama Putri</title>
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
                    <h5 class="card-title">Aturan Asrama Putri</h5>
                    <a class="btn btn-primary" href="beranda" role="button">Kembali</a>
                    <br>
                    <br>
                    <div class="card" style="width: 100rem;">
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">a. Mahasiswa tidak diizinkan lagi masuk ke asrama sesudah makan
                                pagi, kecuali atas izin dari Pembina Asrama.</li>
                            <li class="list-group-item">b. Mahasiswa tidak diperkenankan meninggalkan sepatu atau sendal
                                bermalam di teras asrama.</li>
                            <li class="list-group-item">c. Mahasiswa diharapkan membuka dan menutup loker sepatu dengan
                                tidak menimbulkan suara ribut.</li>
                            <li class="list-group-item">d. Mahasiswa membuka dan menutup jendela dan gorden pada waktu
                                yang telah ditentukan (pagi pukul 06.00 dan sore pukul 18.00 WIB).</li>
                            <li class="list-group-item">e. Mahasiswa tidak diperkenankan meletakkan atau menggantungkan
                                hanger atau baju di bankbed atau jendela, kecuali piyama.</li>
                            <li class="list-group-item">f. Mahasiswa tidak diperkenankan meletakkan barang apapun
                                dilantai kamar dan di atas lemari pakaian.</li>
                            <li class="list-group-item">g. Mahasiswa hanya diperkenankan meletakkan diatas tempat
                                tidur:selimut, sarung, bantal, boneka berukuran maksimal 50cm dan baju tidur.</li>
                            <li class="list-group-item">h. Mahasiswa wajib mencuci gorden seminggu sebelum libur
                                semester.</li>
                            <li class="list-group-item">i. Mahasiswa menyapu selasar setiap hari sesuai dengan jadwal
                                yang sudah ditentukan Pembina Asrama.</li>
                            <li class="list-group-item">j. Mahasiswa mengangkat air minum dari kantin sesudah makan
                                malam sesuai dengan jadwal yang sudah ditentukan Pembina Asrama.</li>
                            <li class="list-group-item">k. Mahasiswa tidak diperbolehkan meninggalkan barangdiatas
                                tempat pencucian selama mahasiswa tidak beraktivitas asrama.</li>
                            <li class="list-group-item">l. Mahasiswa tidak diperkenankan meninggalkan barang-barang
                                pribadi di kamar mandi maupun toilet.</li>
                            <li class="list-group-item">m. Mahasiswa tidak diperkenankan menjemur di jemuran dalam
                                asrama, kecuali pada waktu hujan.</li>
                            <li class="list-group-item">n. Mahasiswa wajib tinggal di kamar masing-masing dan menempati
                                tempat tidur masing-masing, dan tidak diperkenankan untuk tidur bersama dengan mahasiswa
                                lainnya dalam satu kasur.</li>
                            <li class="list-group-item">o. Pada hari Rabu pagi akan diadakan pembersihan kulkas, untuk
                                itu mahasiswa wajib mengosongkan kulkas pada hari Selasa malam. Makanan mahasiswa yang
                                tidak diambil pada saat pembersihan akan dikorsakan.</li>
                            <li class="list-group-item">p. Tidak boleh membawa nasi ke dalam asrama kecuali jika sedang
                                sakit.</li>
                            <li class="list-group-item">q. Mahasiswa menyusun hanger dengan rapi di tempat yang telah
                                disediakan.</li>
                            <li class="list-group-item">r. Mahasiswa menggunakan hanger di dalam lemari masing-masing
                                maksimal 5 hanger.</li>
                            <li class="list-group-item">s. Mahasiswa tidak diperkenankan mengunci lemari dan pintu kamar
                            </li>
                            <li class="list-group-item">t. Mahasiswa wajib menggunakan sarung ketika mengikuti ibadah
                                dan evaluasi. </li>
                            <li class="list-group-item">u. Mahasiswa mencuci pakaian maksimal 1x2 hari, mencuci sprei,
                                sarung dan handuk 1x2 minggu dan mencuci sepatu 1x1 minggu</li>
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
    <script>
        $(document).ready(function() {
            $('#datatable').DataTable({
                dom: 'Bfrtip',
                buttons: [{
                    "extend": 'pdfHtml5',
                    "text": 'Download',
                    "className": 'btn-warning text-white'
                }],

            })
        });
    </script>

</body>

</html>
