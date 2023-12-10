<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Rusun 4</title>
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
                    <h5 class="card-title">Kamar Rusun 4</h5>
                    <a class="btn btn-primary" href="guest-halamankamar" role="button">Kembali</a>

                    <br>

                    <!-- Table with stripped rows -->
                    <br>
                    <table class="table datatable" id="datatable">
                        <thead>
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">Nama</th>
                                <th scope="col">Prodi</th>
                                <th scope="col">Angkatan</th>
                                <th scope="col">Nomor Kamar</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php $no = 1; @endphp
                            @foreach ($data as $data)
                                <tr>
                                    <th scope="row">{{ $no++ }}</th>
                                    <td>{{ $data->name }}</td>
                                    <td>{{ $data->prodi }}</td>
                                    <td>{{ $data->angkatan }}</td>
                                    <td>{{ $data->kamar }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <!-- End Table with stripped rows -->

                </div>
            </div>

            </div>
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


    <script src="https://code.jquery.com/jquery-3.6.4.slim.min.js"
        integrity="sha256-a2yjHM4jnF9f54xUQakjZGaqYs/V1CYvWpoqZzC2/Bw=" crossorigin="anonymous"></script>
    <script src="admin-asset/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>


    <script src="admin-asset/assets/vendor/tinymce/tinymce.min.js"></script>
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
</body>

</html>
