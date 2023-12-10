<!DOCTYPE html>
<html lang="en">

<head>
    <title>Halaman Registrasi</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--===============================================================================================-->
    <link rel="icon" type="image/png" href="images/icons/favicon.ico" />
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="login-assets/vendor/bootstrap/css/bootstrap.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="login-assets/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="login-assets/vendor/animate/animate.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="login-assets/vendor/css-hamburgers/hamburgers.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="login-assets/vendor/select2/select2.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="login-assets/css/util.css">
    <link rel="stylesheet" type="text/css" href="login-assets/css/main.css">
    <!--===============================================================================================-->
</head>

<body>

    <div class="limiter">
        <div class="container-login100">
            <div class="wrap-login100">
                <div class="login100-pic js-tilt" data-tilt>
                    <img src="login-assets/images/img-01.png" alt="IMG">
                </div>
                <form class="login100-form validate-form" action="{{ route('registrasi-proses') }}" method="POST">
                    {{-- @if (Session::has('success'))
                        <div class="alert alert-success">{{ Session::get('success') }}</div>
                    @endif
                    @if (Session::has('gagal'))
                        <div class="alert alert-danger">{{ Session::get('fail') }}</div>
                    @endif
                    @csrf --}}

                    <span class="login100-form-title">
                        Registrasi
                    </span>

                    @if (Session::has('success'))
                        <div class="alert alert-success">{{ Session::get('success') }}</div>
                    @endif
                    @if (Session::has('error'))
                        <div class="alert alert-danger">{{ Session::get('error') }}</div>
                    @endif
                    @csrf

                    <div class="wrap-input100 validate-input @if ($errors->has('username')) alert-validate @endif"
                        @if ($errors->has('username')) data-validate="{{ $errors->first('username') }}" @endif>
                        <input autofocus class="input100" type="text" name="username" placeholder="Username">
                        <span class="focus-input100"></span>
                        <span class="symbol-input100">
                            <i class="fa fa-user" aria-hidden="true"></i>
                        </span>
                    </div>

                    <div class="wrap-input100 validate-input @if ($errors->has('name')) alert-validate @endif"
                        @if ($errors->has('name')) data-validate="{{ $errors->first('name') }}" @endif>
                        <input autofocus class="input100" type="text" name="name" placeholder="Nama">
                        <span class="focus-input100"></span>
                        <span class="symbol-input100">
                            <i class="fa fa-user" aria-hidden="true"></i>
                        </span>
                    </div>


                    <div class="wrap-input100 validate-input @if ($errors->has('password')) alert-validate @endif"
                        @if ($errors->has('password')) data-validate="{{ $errors->first('password') }}" @endif>
                        <input class="input100" type="password" name="password" placeholder="Password">
                        <span class="focus-input100"></span>
                        <span class="symbol-input100">
                            <i class="fa fa-lock" aria-hidden="true"></i>
                        </span>
                    </div>

                    <div class="wrap-input100 validate-input" data-validate="Role is required">
                        <select class="form-control @error('role') is-invalid @enderror" id="inputGroupSelect01"
                            name="role">
                            <option selected disabled>Role...</option>
                            <option value="admin">Admin</option>
                            <option value="user">User</option>
                        </select>
                        @error('role')
                            <span class="invalid-feedback">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="container-login100-form-btn">
                        <button class="login100-form-btn" type="submit">
                            Registrasi
                        </button>
                    </div>



                    <div class="text-center p-t-136">
                        <a class="txt2" href="dashboard">
                            Kembali
                            <i class="fa fa-long-arrow-right m-l-5" aria-hidden="true"></i>
                        </a>
                    </div>
                </form>
            </div>
        </div>
    </div>




    <!--===============================================================================================-->
    <script src="login-assets/vendor/jquery/jquery-3.2.1.min.js"></script>
    <!--===============================================================================================-->
    <script src="login-assets/vendor/bootstrap/js/popper.js"></script>
    <script src="login-assets/vendor/bootstrap/js/bootstrap.min.js"></script>
    <!--===============================================================================================-->
    <script src="login-assets/vendor/select2/select2.min.js"></script>
    <!--===============================================================================================-->
    <script src="login-assets/vendor/tilt/tilt.jquery.min.js"></script>
    <script>
        $('.js-tilt').tilt({
            scale: 1.1
        })
    </script>
    <!--===============================================================================================-->
    <script src="login-assets/js/main.js"></script>

</body>

</html>
