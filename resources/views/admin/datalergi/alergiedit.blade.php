<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Dashboard - Admin</title>
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
    <link href="../../admin-asset/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="../../admin-asset/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="../../admin-asset/assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="../../admin-asset/assets/vendor/quill/quill.snow.css" rel="stylesheet">
    <link href="../../admin-asset/assets/vendor/quill/quill.bubble.css" rel="stylesheet">
    <link href="../../admin-asset/assets/vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="../../admin-asset/assets/vendor/simple-datatables/style.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="../../admin-asset/assets/css/style.css" rel="stylesheet">

</head>

<body>

    <!-- ======= Header ======= -->
    <header id="header" class="header fixed-top d-flex align-items-center">

        <div class="d-flex align-items-center justify-content-between">
            <a href="index.html" class="logo d-flex align-items-center">

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

                </li><!-- End Profile Nav -->

            </ul>
        </nav><!-- End Icons Navigation -->

    </header><!-- End Header -->

    <!-- ======= Sidebar ======= -->
    <aside id="sidebar" class="sidebar">

        <ul class="sidebar-nav" id="sidebar-nav">

            <li class="nav-item">
                <a class="nav-link collapsed" href="../../dashboard">
                    <i class="bi bi-grid-fill"></i>
                    <span>Dashboard</span>
                </a>
            </li><!-- End Dashboard Nav -->

            <li class="nav-item">
                <a class="nav-link collapsed" href="../../matedorm">
                    <i class="bi bi-file-earmark-fill"></i>
                    <span>Data Dorm Mate</span>
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link collapsed" href="../../kurvey">
                    <i class="bi bi-file-earmark-fill"></i>
                    <span>Data Kurve</span>
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link" data-bs-target="#icons-nav" data-bs-toggle="collapse" href="#">
                    <i class="bi bi-file-earmark-fill"></i><span>Data Dorm</span><i
                        class="bi bi-chevron-down ms-auto"></i>
                </a>
                <ul id="icons-nav" class="nav-content show" data-bs-parent="#sidebar-nav">
                    <li>
                        <a href="../../evaluation">
                            <i class="bi bi-circle"></i><span>Data Evaluation</span>
                        </a>
                    </li>
                    <li>
                        <a href="../../renungan">
                            <i class="bi bi-circle"></i><span>Data Renungan</span>
                        </a>
                    </li>
                    <li>
                        <a href="../../addsakit">
                            <i class="bi bi-circle"></i><span>Data Mahasiswa Sakit</span>
                        </a>
                    </li>
                    <li>
                        <a href="../../alergi" class="active">
                            <i class="bi bi-circle"></i><span>Data Mahasiswa Alergi</span>
                        </a>
                    </li>
                </ul>
            </li><!-- End Icons Nav -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="../../datadok">
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
                <a class="nav-link collapsed" href="../../../registrasi">
                    <i class="bi bi-receipt-cutoff"></i>
                    <span>Registrasi</span>
                </a>
            </li><!-- End Register Page Nav -->

        </ul>

    </aside><!-- End Sidebar-->

    <main id="main" class="main">

        <div class="alert alert-warning alert-dismissible fade show" role="alert">
            <i class="bi bi-exclamation-triangle me-1"></i>
            Penambahan data Alergi, mohon diisi dengan teliti dan lengkap!
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>

        <div class="row">
            <div class="col-lg-2">
                <div class="card text-justify">
                    <a href="../../alergi" class="btn btn-primary">Tambah Data Alergi</a>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-6">


                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Edit Data Alergi</h5>

                            <!-- General Form Elements -->
                            <form action="{{ route('alergi.update', $alergi->id) }}" method="POST">
                                @csrf
                                @method('PUT')

                                <div class="row mb-3">
                                    <label for="validationDefault04" class="col-sm-2 col-form-label">NIM</label>
                                    <div class="col-sm-10">
                                        <select class="form-select form-control" id="validationDefault04"
                                            name="user_nim" required>
                                            <option selected disabled value="">Pilih..</option>
                                            @foreach ($profiles as $item)
                                                <option value="{{ $item->nim }}" data-gender="{{ $item->gender }}"
                                                    {{ $item->nim == $alergi->user_nim ? 'selected' : '' }}>
                                                    {{ $item->nim }} - {{ $item->name }} - {{ $item->prodi4 }} -
                                                    {{ $item->akt }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="inputPassword" class="col-sm-2 col-form-label">Alergi</label>
                                    <div class="col-sm-10">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="alergi[]"
                                                value="Ikan Tongkol"
                                                {{ array_key_exists('Ikan Tongkol', $selectedAlergiArray) ? 'checked' : '' }}>
                                            <label class="form-check-label" for="alergi1">
                                                Ikan Tongkol
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="alergi[]"
                                                value="Ikan Dencis"
                                                {{ array_key_exists('Ikan Dencis', $selectedAlergiArray) ? 'checked' : '' }}>
                                            <label class="form-check-label" for="alergi2">
                                                Ikan Dencis
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="alergi[]"
                                                value="Ikan Salam"
                                                {{ array_key_exists('Ikan Salam', $selectedAlergiArray) ? 'checked' : '' }}>
                                            <label class="form-check-label" for="alergi3">
                                                Ikan Salam
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="alergi[]"
                                                value="Ikan Patin"
                                                {{ array_key_exists('Ikan Patin', $selectedAlergiArray) ? 'checked' : '' }}>
                                            <label class="form-check-label" for="alergi4">
                                                Ikan Patin
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="alergi[]"
                                                value="Ikan Lele"
                                                {{ array_key_exists('Ikan Lele', $selectedAlergiArray) ? 'checked' : '' }}>
                                            <label class="form-check-label" for="alergi5">
                                                Ikan Lele
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="alergi[]"
                                                value="Ikan Teri"
                                                {{ array_key_exists('Ikan Teri', $selectedAlergiArray) ? 'checked' : '' }}>
                                            <label class="form-check-label" for="alergi6">
                                                Ikan Teri
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="alergi[]"
                                                value="Ikan Gurame"
                                                {{ array_key_exists('Ikan Gurame', $selectedAlergiArray) ? 'checked' : '' }}>
                                            <label class="form-check-label" for="alergi7">
                                                Ikan Gurame
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="alergi[]"
                                                value="Telur"
                                                {{ array_key_exists('Telur', $selectedAlergiArray) ? 'checked' : '' }}>
                                            <label class="form-check-label" for="alergi8">
                                                Telur
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="alergi[]"
                                                value="Seafood"
                                                {{ array_key_exists('Seafood', $selectedAlergiArray) ? 'checked' : '' }}>
                                            <label class="form-check-label" for="alergi9">
                                                Seafood
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="alergi[]"
                                                value="Ayam"
                                                {{ array_key_exists('Ayam', $selectedAlergiArray) ? 'checked' : '' }}>
                                            <label class="form-check-label" for="alergi10">
                                                Ayam
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="alergi[]"
                                                value="Biji-bijian"
                                                {{ array_key_exists('Biji-bijian', $selectedAlergiArray) ? 'checked' : '' }}>
                                            <label class="form-check-label" for="alergi11">
                                                Biji-bijian
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="alergi[]"
                                                value="Mie"
                                                {{ array_key_exists('Mie', $selectedAlergiArray) ? 'checked' : '' }}>
                                            <label class="form-check-label" for="alergi12">
                                                Mie
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="alergi[]"
                                                value="Pedas"
                                                {{ array_key_exists('Pedas', $selectedAlergiArray) ? 'checked' : '' }}>
                                            <label class="form-check-label" for="alergi13">
                                                Pedas
                                            </label>
                                        </div>
                                        <!-- Tambahkan pilihan alergi lainnya sesuai kebutuhan -->
                                    </div>
                                </div>

                                <div class="col-sm-10">
                                    <button type="submit" class="btn btn-warning">Edit</button>
                                </div>
                            </form>

                            <!-- End General Form Elements -->
                        </div>
                    </div>
                </div>

            </div>
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
    <script src="../../admin-asset/assets/vendor/apexcharts/apexcharts.min.js"></script>
    <script src="../../admin-asset/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="../../admin-asset/assets/vendor/chart.js/chart.umd.js"></script>
    <script src="../../admin-asset/assets/vendor/echarts/echarts.min.js"></script>
    <script src="../../admin-asset/assets/vendor/quill/quill.min.js"></script>
    <script src="../../admin-asset/assets/vendor/simple-datatables/simple-datatables.js"></script>
    <script src="../../admin-asset/assets/vendor/tinymce/tinymce.min.js"></script>
    <script src="../../admin-asset/assets/vendor/php-email-form/validate.js"></script>

    <!-- Template Main JS File -->
    <script src="../../admin-asset/assets/js/main.js"></script>

</body>

</html>
