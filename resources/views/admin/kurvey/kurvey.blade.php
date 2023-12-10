<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <<title>Dashboard - Admin</title>
        <meta content="" name="description">
        <meta content="" name="keywords">

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
        <link href="admin-asset/assets/vendor/simple-datatables/style.css" rel="stylesheet">

        <!-- Template Main CSS File -->
        <link href="admin-asset/assets/css/style.css" rel="stylesheet">

        {{-- Select Css --}}
        <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/css/select2.min.css" rel="stylesheet" />
</head>

<body>

    <!-- ======= Header ======= -->
    <header id="header" class="header fixed-top d-flex align-items-center">

        <div class="d-flex align-items-center justify-content-between">
            <a href="index.html" class="logo d-flex align-items-center">
                <img src="assets/img/logo.png" alt="">
                <span class="d-none d-lg-block">Keasramaan IT-Del</span>
            </a>
            <i class="bi bi-list toggle-sidebar-btn"></i>
        </div><!-- End Logo -->



        <nav class="header-nav ms-auto">
            <ul class="d-flex align-items-center">


                <li class="nav-item dropdown pe-3">
                    <a class="dropdown-item d-flex align-items-center" href="logout"><button type="button"
                            class="btn btn-danger"><i class="bi bi-box-arrow-right"></i> Logout</button>
                    </a>
                </li><!-- End Profile Nav -->

            </ul>
        </nav><!-- End Icons Navigation -->

    </header><!-- End Header -->

    <!-- ======= Sidebar ======= -->
    <aside id="sidebar" class="sidebar">

        <ul class="sidebar-nav" id="sidebar-nav">

            <li class="nav-item">
                <a class="nav-link collapsed" href="dashboard">
                    <i class="bi bi-grid-fill"></i>
                    <span>Dashboard</span>
                </a>
            </li><!-- End Dashboard Nav -->

            <li class="nav-item">
                <a class="nav-link collapsed" href="matedorm">
                    <i class="bi bi-file-earmark-fill"></i>
                    <span>Data Dorm Mate</span>
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="kurvey">
                    <i class="bi bi-file-earmark-fill"></i>
                    <span>Data Kurve</span>
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link collapsed" data-bs-target="#icons-nav" data-bs-toggle="collapse" href="#">
                    <i class="bi bi-file-earmark-fill"></i><span>Data Dorm</span><i
                        class="bi bi-chevron-down ms-auto"></i>
                </a>
                <ul id="icons-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                    <li>
                        <a href="evaluation">
                            <i class="bi bi-circle"></i><span>Data Evaluation</span>
                        </a>
                    </li>
                    <li>
                        <a href="renungan">
                            <i class="bi bi-circle"></i><span>Data Renungan</span>
                        </a>
                    </li>
                    <li>
                        <a href="addsakit">
                            <i class="bi bi-circle"></i><span>Data Mahasiswa Sakit</span>
                        </a>
                    </li>
                    <li>
                        <a href="alergi">
                            <i class="bi bi-circle"></i><span>Data Mahasiswa Alergi</span>
                        </a>
                    </li>
                </ul>
            </li><!-- End Icons Nav -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="datadok">
                    <i class="bi bi-file-word-fill"></i>
                    <span>Dokumen</span>
                </a>
            </li>
            <li class="nav-heading">Pages</li>


            <li class="nav-item">
                <a class="nav-link collapsed" href="../../kritiksaran">
                    <i class="bi bi-envelope-fill"></i>
                    <span>Kritik Saran</span>
                </a>
            </li><!-- End Contact Page Nav -->

            <li class="nav-item">
                <a class="nav-link collapsed" href="/registrasi">
                    <i class="bi bi-receipt-cutoff"></i>
                    <span>Registrasi</span>
                </a>
            </li><!-- End Register Page Nav -->

        </ul>

    </aside><!-- End Sidebar-->
    <main id="main" class="main">

        <div class="alert alert-warning alert-dismissible fade show" role="alert">
            <i class="bi bi-exclamation-triangle me-1"></i>
            Penambahan data Kurve, mohon diisi dengan teliti dan lengkap!
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>

        <div class="row">
            <div class="col-lg-6">


                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Tambah Data Kurve Harian Asrama</h5>

                        <!-- General Form Elements -->
                        <form action="{{ route('kurvey.store') }}" method="POST">
                            @csrf

                            <div class="row mb-3">
                                <label for="validationDefault04" class="col-sm-2 col-form-label">NIM</label>
                                <div class="col-sm-10">

                                    <select class="form-select form-control" id="validationDefault04" name="user_nim"
                                        required>
                                        <option selected disabled value="">Pilih..</option>
                                        @foreach ($profiles as $item)
                                            <option value="{{ $item->nim }}" data-asrama="{{ $item->asrama }}">
                                                {{ $item->nim }} - {{ $item->name }}</option>
                                        @endforeach
                                    </select>

                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="validationDefault04" class="col-sm-2 col-form-label">Asrama</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="asrama" id="asrama"
                                        readonly>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="validationDefault04" class="col-sm-2 col-form-label">Jadwal</label>
                                <div class="col-sm-10">
                                    <select class="form-select" id="validationDefault04" name="jadwal" required>
                                        <option selected disabled value="">Pilih..</option>
                                        <option value="Senin">Senin</option>
                                        <option value="Selasa">Selasa</option>
                                        <option value="Rabu">Rabu</option>
                                        <option value="Kamis">Kamis</option>
                                        <option value="Jumat">Jumat</option>
                                    </select>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="inputPassword" class="col-sm-2 col-form-label">Tugas</label>
                                <div class="col-sm-10">
                                    <textarea class="form-control" style="height: 100px" required name="tugas"></textarea>
                                </div>
                            </div>

                            <div class="col-sm-10">
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>

                        </form><!-- End General Form Elements -->
                    </div>
                </div>
            </div>

            <div class="col-lg-6">

                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Data Kurve Harian</h5>

                        <!-- Table with stripped rows -->
                        <table class="table datatable">
                            <thead>
                                <tr>
                                    <th scope="col">Nama</th>
                                    <th scope="col">Jadwal</th>
                                    <th scope="col">Tugas</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($data as $data)
                                    <tr>
                                        <th>{{ $data->profil->name }}</th>
                                        <td>{{ $data->jadwal }}</td>
                                        <td>{{ $data->tugas }}</td>
                                        <td>
                                            <a class="btn btn-warning btn-sm"
                                                href="{{ url('kurvey/' . $data->id . '/edit') }}"><i
                                                    class="bi bi-pencil-square"></i></a>
                                            <form action="{{ url('kurvey/' . $data->id) }}" method="POST">
                                                @csrf
                                                <input type="hidden" name="_method" value="DELETE">
                                                <button class="btn btn-danger btn-sm" type="submit"
                                                    title="Delete Contact"
                                                    onclick="return confirm(&quot;Confirm delete?&quot;)"><i
                                                        class="bi bi-eraser"></i></button>
                                            </form>
                                        </td>

                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                        <!-- End Table with stripped rows -->

                    </div>
                </div>
            </div>
        </div>


        <div class="row">
            <div class="col-lg-6">
                <div class="card text-justify">

                    <div class="card-body">
                        <h5 class="card-title">Data Kurve Massal</h5>
                        <a href="kurvemassal" class="btn btn-primary">Tambah Data</a>
                    </div>
                </div>

            </div>


            </section>

    </main><!-- End #main -->






    <!-- ======= Footer ======= -->
    <footer id="footer" class="footer">
        <div class="copyright">
            &copy; Copyright <strong><span>PA-II Kelompok 7</span></strong>. All Rights Reserved
        </div>

    </footer><!-- End Footer -->

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="admin-asset/assets/vendor/apexcharts/apexcharts.min.js"></script>
    <script src="admin-asset/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="admin-asset/assets/vendor/chart.js/chart.umd.js"></script>
    <script src="admin-asset/assets/vendor/echarts/echarts.min.js"></script>
    <script src="admin-asset/assets/vendor/quill/quill.min.js"></script>
    <script src="admin-asset/assets/vendor/simple-datatables/simple-datatables.js"></script>
    <script src="admin-asset/assets/vendor/tinymce/tinymce.min.js"></script>
    <script src="admin-asset/assets/vendor/php-email-form/validate.js"></script>

    <!-- Template Main JS File -->
    <script src="admin-asset/assets/js/main.js"></script>

    {{-- Select Js --}}
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/js/select2.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#validationDefault04').select2();

            // Mengisi nilai asrama saat halaman dimuat
            var selectedAsrama = $('#validationDefault04 option:selected').data('asrama');
            $('#asrama').val(selectedAsrama);

            // Mengubah nilai asrama saat NIM dipilih
            $('#validationDefault04').change(function() {
                var selectedAsrama = $('option:selected', this).data('asrama');
                $('#asrama').val(selectedAsrama);
            });
        });
    </script>

</body>

</html>
