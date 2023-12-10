<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Kritik dan Saran</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link rel="shortcut icon" href="{{ asset('assets/img/.png') }}">
    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="user-asset/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="user-asset/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="user-asset/assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="user-asset/assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="user-asset/assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/dataTables.bootstrap5.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.3.6/css/buttons.bootstrap5.min.css">


    <!-- Template Main CSS File -->
    <link href="user-asset/assets/css/style.css" rel="stylesheet">
</head>

<body>

    <main id="main">
        <!-- ======= Services Section ======= -->
        <section id="services" class="services section-bg">
            <div class="container">
                <a class="btn btn-primary" href="beranda" role="button">Kembali</a><br>
                <br>
                <div class="section-title">
                    <h2>Kritik dan Saran</h2>
                </div>

                <div class="card">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Tambah Kritik dan Saran</h5>
                            <br>
                            <form class="row g-3" action="{{ url('userkritiksaran') }}" method="POST">
                                @csrf
                                <div class="col-md-6">
                                    <label for="" class="form-label">NIM</label>
                                    <input type="" class="form-control" name="username"
                                        value="{{ Auth::user()->username }}" readonly>
                                </div>
                                <div class="col-md-6">
                                    <label for="inputPassword4" class="form-label">Nama</label>
                                    <input type="text" class="form-control" name="name"
                                        value="{{ Auth::user()->name }}" readonly>
                                </div>

                                <div class="col-md-6">
                                    <label for="" class="form-label">Kritik atau Saran</label>
                                    <textarea type="text" class="form-control" id="" name="deskripsi" require></textarea>
                                </div>

                                <div class="col-12">
                                    <button type="submit" class="btn btn-primary">Kirim</button>
                                </div>
                            </form>
                        </div>
                    </div>

                    <div class="card-body">
                        <br>
                        <!-- Table with stripped rows -->
                        <br>
                        <table class="table datatable" id="datatable">
                            <thead>
                                <tr>
                                    <th scope="col">No</th>
                                    <th scope="col">Pesan</th>
                                    <th scope="col">Aksi</th>
                                </tr>
                            </thead>

                            <tbody>

                                @php $no = 1; @endphp
                                @foreach ($data as $data)
                                    <tr>
                                        <th scope="row">{{ $no++ }}</th>
                                        <td>{{ $data->deskripsi }}</td>
                                        <td>
                                            <form action="{{ url('kritiksaran/' . $data->id) }}" method="POST">
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
