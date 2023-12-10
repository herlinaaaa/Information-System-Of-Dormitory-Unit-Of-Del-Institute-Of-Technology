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
    <link rel="stylesheet" href="{{ asset('user-asset/assets/vendor/bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('user-asset/assets/vendor/bootstrap-icons/bootstrap-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('user-asset/assets/vendor/boxicons/css/boxicons.min.css') }}">
    <link rel="stylesheet" href="{{ asset('user-asset/assets/vendor/boxicons/css/boxicons.min.css') }}">
    <link rel="stylesheet" href="{{ asset('user-asset/assets/vendor/glightbox/css/glightbox.min.css') }}">
    <link rel="stylesheet" href="{{ asset('user-asset/assets/vendor/swiper/swiper-bundle.min.css') }}">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/dataTables.bootstrap5.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.3.6/css/buttons.bootstrap5.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css">


    <!-- Template Main CSS File -->
    <link rel="stylesheet" href="{{ asset('user-asset/assets/css/style.css') }}">
</head>

<body>

    <main id="main">
        <!-- ======= Services Section ======= -->
        <section id="services" class="services section-bg">
            <div class="container">
                <a class="btn btn-primary" href="{{ url('alergic') }}" role="button">Kembali</a><br>
                <br>
                <div class="section-title">
                    <h2>Data Alergi Kamu</h2>
                </div>

                <div class="card">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Tambah Data</h5>
                            <br>

                            <form class="row g-3" action="{{ route('simpanuser') }}" method="POST"
                                enctype="multipart/form-data">
                                @csrf
                                <div class="col-md-6">
                                    <label for="" class="form-label">Username</label>
                                    <input type="" class="form-control" name="user_nim"
                                        value="{{ Auth::user()->profil->nim }}" readonly>
                                </div>
                                <div class="col-md-6">
                                    <label for="inputPassword4" class="form-label">Nama</label>
                                    <input type="text" class="form-control" name="name"
                                        value="{{ Auth::user()->name }}" readonly>
                                </div>
                                <div class="col-md-6">
                                    <label for="inputPassword" class="col-sm-2 col-form-label">Alergi</label>
                                    <div class="col-sm-10">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="alergi[]"
                                                value="Ikan Tongkol">

                                            <label class="form-check-label" for="alergi1">
                                                Ikan Tongkol
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="alergi[]"
                                                value="Ikan Dencis">
                                            <label class="form-check-label" for="alergi2">
                                                Ikan Dencis
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="alergi[]"
                                                value="Ikan Salam">

                                            <label class="form-check-label" for="alergi3">
                                                Ikan Salam
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="alergi[]"
                                                value="Ikan Patin">

                                            <label class="form-check-label" for="alergi4">
                                                Ikan Patin
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="alergi[]"
                                                value="Ikan Lele">

                                            <label class="form-check-label" for="alergi5">
                                                Ikan Lele
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="alergi[]"
                                                value="Ikan Teri">

                                            <label class="form-check-label" for="alergi6">
                                                Ikan Teri
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="alergi[]"
                                                value="Ikan Gurame">

                                            <label class="form-check-label" for="alergi7">
                                                Ikan Gurame
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="alergi[]"
                                                value="Telur">

                                            <label class="form-check-label" for="alergi8">
                                                Telur
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="alergi[]"
                                                value="Seafood">

                                            <label class="form-check-label" for="alergi9">
                                                Seafood
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="alergi[]"
                                                value="Ayam">

                                            <label class="form-check-label" for="alergi10">
                                                Ayam
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="alergi[]"
                                                value="Biji-bijian">

                                            <label class="form-check-label" for="alergi11">
                                                Biji-bijian
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="alergi[]"
                                                value="Mie">

                                            <label class="form-check-label" for="alergi12">
                                                Mie
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="alergi[]"
                                                value="Pedas">
                                            <label class="form-check-label" for="alergi13">
                                                Pedas
                                            </label>
                                        </div>


                                        <!-- Tambahkan pilihan alergi lainnya sesuai kebutuhan -->
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <label for="" class="form-label">Surat Keterangan Alergi</label>
                                    <input type="file" class="form-control" name="bukti" id="img_file"
                                        required>
                                </div>

                                <div class="col-12">
                                    <button type="submit" class="btn btn-primary">Kirim</button>
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
    <script src="{{ asset('user-asset/assets/vendor/purecounter/purecounter_vanilla.js') }}"></script>
    <script src="{{ asset('user-asset/assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('user-asset/assets/vendor/glightbox/js/glightbox.min.js') }}"></script>
    <script src="{{ asset('user-asset/assets/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('user-asset/assets/vendor/swiper/swiper-bundle.min.js') }}"></script>
    <script src="{{ asset('user-asset/assets/vendor/waypoints/noframework.waypoints.js') }}"></script>
    <script src="{{ asset('user-asset/assets/vendor/php-email-form/validate.js') }}"></script>

    <!-- Template Main JS File -->
    <script src="{{ asset('user-asset/assets/js/main.js') }}"></script>
    <script src="https://code.jquery.com/jquery-3.7.0.min.js"
        integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>
    <script src="https://cdn.tiny.cloud/1/apikey/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
    <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.4/js/dataTables.bootstrap5.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.3.6/js/dataTables.buttons.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.3.6/js/buttons.bootstrap5.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.3.6/js/buttons.html5.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"
        integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <!-- Template Main JS File -->
    <script src="{{ asset('admin-asset/assets/js/main.js') }}"></script>
    <script>
        $(document).ready(function() {
            $("#img_file").change(function() {
                fileobj = document.getElementById('img_file').files[0];
                var fname = fileobj.name;
                var ext = fname.split(".").pop().toLowerCase();
                if (ext == "jpg" || ext == "jpeg" || ext == "png") {
                    $("#info_img_file").html(fname);
                } else {
                    alert("Accepted file jpg, jpeg and png only..");
                    $("#img_file").val("");
                    $("#info_img_file").html("No file selected");
                    return false;
                }
            });
        });
    </script>
</body>

</html>
