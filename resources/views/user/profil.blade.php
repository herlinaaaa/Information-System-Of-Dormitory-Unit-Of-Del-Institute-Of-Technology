<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Profil</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link rel="shortcut icon" href="{{ asset('assets/img/.png') }}">

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{ asset('user-asset/assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('user-asset/assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('user-asset/assets/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
    <link href="{{ asset('user-asset/assets/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
    <link href="{{ asset('user-asset/assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/dataTables.bootstrap5.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.3.6/css/buttons.bootstrap5.min.css">


    <!-- Template Main CSS File -->
    <link href="{{ asset('user-asset/assets/css/style.css ') }}" rel="stylesheet">
</head>

<body>

    <main id="main">
        <!-- ======= Services Section ======= -->
        <section id="services" class="services section-bg">
            <div class="container">
                <a class="btn btn-primary" href="../../beranda" role="button">Kembali</a><br>
                <br>
                <div class="section-title">
                    <h2>Profil</h2>
                </div>

                <div class="card">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Data Profil</h5>
                            <br>
                            @if (Session::has('sukses'))
                                <div class="alert alert-success">{{ Session::get('sukses') }}</div>
                            @endif
                            <form class="row g-3"
                                action="{{ isset($model) ? url('profile/' . $model->id) : url('profile') }}"
                                method="POST">
                                @csrf
                                @if (isset($model))
                                    @method('PUT')
                                @endif
                                <div class="col-md-6">
                                    <label for="username" class="form-label">Username</label>
                                    <input type="text" class="form-control" id="username" name="username"
                                        value="{{ Auth::user()->username }}" readonly>
                                </div>
                                <div class="col-md-6">
                                    <label for="name" class="form-label">Nama</label>
                                    <input type="text" class="form-control" id="name" name="name"
                                        value="{{ Auth::user()->name }}" readonly>
                                </div>

                                <div class="col-md-6">
                                    <label for="nim" class="form-label">NIM</label>
                                    <input type="text" class="form-control" id="nim" name="nim"
                                        value="{{ isset($model) ? $model->nim : '' }}" required>
                                </div>

                                <div class="col-md-6">
                                    <label for="prodi4" class="form-label">Prodi</label>
                                    <select class="form-select" id="prodi4" name="prodi4" required>
                                        <option selected disabled value="">Pilih..</option>
                                        <option value="D3 TI"
                                            {{ isset($model) && $model->prodi4 == 'D3 TI' ? 'selected' : '' }}>D3
                                            Teknologi Informasi</option>
                                        <option value="D3 TK"
                                            {{ isset($model) && $model->prodi4 == 'D3 TK' ? 'selected' : '' }}>D3
                                            Teknologi Komputer</option>
                                        <option value="D4 TRPL"
                                            {{ isset($model) && $model->prodi4 == 'D4 TRPL' ? 'selected' : '' }}>
                                            D4 Teknologi Rekayasa Perangkat Lunak</option>
                                        <option value="S1 SI"
                                            {{ isset($model) && $model->prodi4 == 'S1 SI' ? 'selected' : '' }}>S1
                                            Sistem Informasi</option>
                                        <option value="S1 IF"
                                            {{ isset($model) && $model->prodi4 == 'S1 IF' ? 'selected' : '' }}>S1
                                            Informatika</option>
                                        <option value="S1 TE"
                                            {{ isset($model) && $model->prodi4 == 'S1 TE' ? 'selected' : '' }}>S1
                                            Teknik Elektro</option>
                                        <option value="S1 MR"
                                            {{ isset($model) && $model->prodi4 == 'S1 MR' ? 'selected' : '' }}>S1
                                            Manajemen Rekayasa</option>
                                        <option value="S1 BP"
                                            {{ isset($model) && $model->prodi4 == 'S1 BP' ? 'selected' : '' }}>S1
                                            Teknik Bioproses</option>
                                    </select>
                                </div>

                                <div class="col-md-6">
                                    <label for="gender" class="form-label">Jenis Kelamin</label>
                                    <select class="form-select" id="gender" name="gender">
                                        <option selected disabled value="" required>Pilih..</option>
                                        <option value="Perempuan"
                                            {{ isset($model) && $model->gender == 'Perempuan' ? 'selected' : '' }}>
                                            Perempuan</option>
                                        <option value="Laki-laki"
                                            {{ isset($model) && $model->gender == 'Laki-laki' ? 'selected' : '' }}>
                                            Laki-laki</option>
                                    </select>
                                </div>

                                <div class="col-md-6">
                                    <label for="akt" class="form-label">Angkatan</label>
                                    <input type="text" class="form-control" id="akt" name="akt"
                                        value="{{ isset($model) ? $model->akt : '' }}"required>
                                </div>

                                <div class="col-md-6">
                                    <label for="asrama" class="form-label">Asrama</label>
                                    <select class="form-select" id="asrama" name="asrama">
                                        <option selected disabled value="">Pilih..</option>
                                        <option value="Rusun 1"
                                            {{ isset($model) && $model->asrama == 'Rusun 1' ? 'selected' : '' }}>
                                            Rusun
                                            1</option>
                                        <option value="Rusun 2"
                                            {{ isset($model) && $model->asrama == 'Rusun 2' ? 'selected' : '' }}>
                                            Rusun
                                            2</option>
                                        <option value="Rusun 3"
                                            {{ isset($model) && $model->asrama == 'Rusun 3' ? 'selected' : '' }}>
                                            Rusun
                                            3</option>
                                        <option value="Rusun 4"
                                            {{ isset($model) && $model->asrama == 'Rusun 4' ? 'selected' : '' }}>
                                            Rusun
                                            4</option>
                                        <option
                                            value="Pniel"{{ isset($model) && $model->asrama == 'Pniel' ? 'selected' : '' }}>
                                            Pniel</option>
                                        <option
                                            value="Silo"{{ isset($model) && $model->asrama == 'Silo' ? 'selected' : '' }}>
                                            Silo</option>
                                        <option
                                            value="Kapernaum"{{ isset($model) && $model->asrama == 'Kapernaum' ? 'selected' : '' }}">
                                            Kapernaum</option>
                                        <option value="Danau Toba"
                                            {{ isset($model) && $model->asrama == 'Danau Toba' ? 'selected' : '' }}>
                                            Danau Toba
                                        </option>
                                    </select>
                                </div>


                                <div class="col-md-6">
                                    <label for="kamar" class="form-label">Nomor Kamar</label>
                                    <input type="text" class="form-control" id="kamar" name="kamar"
                                        value="{{ isset($model) ? $model->kamar : '' }}">
                                </div>

                                <div class="col-12">
                                    <button type="submit" class="btn btn-warning btn-sm"><i
                                            class="bi bi-pencil-square"></i>
                                        {{ isset($model) ? 'Edit' : 'Create' }}</button>
                                </div>
                            </form>



                        </div>
                    </div>
                </div>

            </div>
        </section><!-- End Services Section -->
    </main><!-- End #main -->

    <!-- ======= Footer ======= -->
    <footer id="footer">

        <div class="container d-md-flex py-4">

            <div class="me-md-auto text-center text-md-start">
                <div class="copyright">
                    &copy; Copyright <strong><span>PA II KEL 07</span></strong>. All Rights Reserved
                </div>

            </div>
    </footer><!-- End Footer -->

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="user-asset/assets/vendor/purecounter/purecounter_vanilla.js"></script>
    <script src="user-asset/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="user-asset/assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="user-asset/assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="user-asset/assets/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="user-asset/assets/vendor/waypoints/noframework.waypoints.js"></script>
    <script src="user-asset/assets/vendor/php-email-form/validate.js"></script>

    <!-- Template Main JS File -->
    <script src="user-asset/assets/js/main.js"></script>
    <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.4/js/dataTables.bootstrap5.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.3.6/js/dataTables.buttons.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.3.6/js/buttons.bootstrap5.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.3.6/js/buttons.html5.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>

    <!-- Template Main JS File -->
    <script src="admin-asset/assets/js/main.js"></script>
</body>

</html>
