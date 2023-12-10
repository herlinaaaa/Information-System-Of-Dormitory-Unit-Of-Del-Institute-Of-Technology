<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Sakit</title>
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
                    <h2>Data Sakit Kamu</h2>
                </div>

                <div class="card">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Tambah Data</h5>
                            <br>

                            <form class="row g-3" action="{{ url('sakit') }}" method="POST">
                                @csrf
                                <div class="col-md-6">
                                    <label for="" class="form-label">Username</label>
                                    <input type="" class="form-control" name="username"
                                        value="{{ Auth::user()->username }}" readonly>
                                </div>
                                <div class="col-md-6">
                                    <label for="inputPassword4" class="form-label">Nama</label>
                                    <input type="text" class="form-control" name="name"
                                        value="{{ Auth::user()->name }}" readonly>
                                </div>

                                <div class="col-md-6">
                                    <label for="" class="form-label">Kelas</label>
                                    <input type="text" class="form-control @error('kelas') is-invalid @enderror"
                                        name="kelas">
                                    @error('kelas')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>

                                <div class="col-md-6">
                                    <label for="inputDate" class="form-label">Tanggal</label>
                                    <input type="date" class="form-control @error('date') is-invalid @enderror"
                                        name="date" id="inputDate">
                                    @error('date')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>

                                <div class="col-md-6">
                                    <label for="" class="form-label">Dosen & Mata Kuliah</label>
                                    <textarea class="form-control @error('dmk') is-invalid @enderror" style="height: 100px" name="dmk"></textarea>
                                    @error('dmk')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>

                                <div class="col-md-6">
                                    <label for="" class="form-label">Deskripsi Sakit</label>
                                    <textarea class="form-control @error('pesan') is-invalid @enderror" style="height: 100px" name="pesan"></textarea>
                                    @error('pesan')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
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
                                    <th scope="col">Tanggal</th>
                                    <th scope="col">Sakit</th>
                                    <th scope="col">Keterangan</th>
                                </tr>
                            </thead>
                            <tbody>

                                @php $no = 1; @endphp
                                @foreach ($data as $data)
                                    <tr>
                                        <th scope="row">{{ $no++ }}</th>
                                        <td>{{ $data->date }}</td>
                                        <td>{{ $data->pesan }}</td>
                                        <td>{{ $data->penanganan }}</td>
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
    <script>
        var today = new Date().toISOString().split('T')[0]; // Mendapatkan tanggal saat ini

        document.addEventListener("DOMContentLoaded", function() {
            document.getElementById("inputDate").setAttribute("min", today);
        });
    </script>
</body>

</html>
