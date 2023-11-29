<!doctype html>
<html lang="en" data-bs-theme="auto">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
        <meta name="generator" content="Hugo 0.118.2">
        <title>Registrasi Admin SMKS YP 17 Kota Blitar </title>

        <link href="/menuAdmin/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
        <link
            href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
            rel="stylesheet">

        <!-- Custom styles for this template-->
        <link href="/menuAdmin/css/sb-admin-2.min.css" rel="stylesheet">

        <!-- Bootstrap core JavaScript-->
        <script src="menuAdmin/vendor/jquery/jquery.min.js"></script>
        <script src="menuAdmin/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

        <!-- Core plugin JavaScript-->
        <script src="menuAdmin/vendor/jquery-easing/jquery.easing.min.js"></script>

        <!-- Custom scripts for all pages-->
        <script src="menuAdmin/js/sb-admin-2.min.js"></script>

        <style>
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            user-select: none;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
            font-size: 3.5rem;
            }
        }

        .b-example-divider {
            width: 100%;
            height: 3rem;
            background-color: rgba(0, 0, 0, .1);
            border: solid rgba(0, 0, 0, .15);
            border-width: 1px 0;
            box-shadow: inset 0 .5em 1.5em rgba(0, 0, 0, .1), inset 0 .125em .5em rgba(0, 0, 0, .15);
        }

        .b-example-vr {
            flex-shrink: 0;
            width: 1.5rem;
            height: 100vh;
        }

        .bi {
            vertical-align: -.125em;
            fill: currentColor;
        }

        .nav-scroller {
            position: relative;
            z-index: 2;
            height: 2.75rem;
            overflow-y: hidden;
        }

        .nav-scroller .nav {
            display: flex;
            flex-wrap: nowrap;
            padding-bottom: 1rem;
            margin-top: -1px;
            overflow-x: auto;
            text-align: center;
            white-space: nowrap;
            -webkit-overflow-scrolling: touch;
        }

        .btn-bd-primary {
            --bd-violet-bg: #712cf9;
            --bd-violet-rgb: 112.520718, 44.062154, 249.437846;

            --bs-btn-font-weight: 600;
            --bs-btn-color: var(--bs-white);
            --bs-btn-bg: var(--bd-violet-bg);
            --bs-btn-border-color: var(--bd-violet-bg);
            --bs-btn-hover-color: var(--bs-white);
            --bs-btn-hover-bg: #6528e0;
            --bs-btn-hover-border-color: #6528e0;
            --bs-btn-focus-shadow-rgb: var(--bd-violet-rgb);
            --bs-btn-active-color: var(--bs-btn-hover-color);
            --bs-btn-active-bg: #5a23c8;
            --bs-btn-active-border-color: #5a23c8;
        }

        .bd-mode-toggle {
            z-index: 1500;
        }

        .bd-mode-toggle .dropdown-menu .active .bi {
            display: block !important;
        }
        </style>

    
        <!-- Custom styles for this template -->
        <link href="/menuAdmin/css/sign-in.css" rel="stylesheet">
    </head>
    
    <body class="d-flex align-items-center py-4 bg-body-tertiary">
        <main class="form-registration w-100 m-auto">
            <form action="{{ route('registrasi.store') }}" method="POST">
                <h1 class="h3 mb-3 fw-normal">Registrasi Form</h1>

                <div class="form-floating">
                    <input type="text" class="form-control" id="name" name="name" placeholder="Name">
                    {{-- <label for="Name">Name</label> --}}
                </div>
                <div class="form-floating">
                    <input type="text" class="form-control" id="username" name="username" placeholder="Username">
                    {{-- <label for="Name">Username</label> --}}
                </div>
                <div class="form-floating">
                    <input type="email" class="form-control" id="email" name="email" placeholder="Email">
                    {{-- <label for="email">Email</label> --}}
                </div>
                <div class="form-floating">
                {{-- <label for="floatingPassword">Password</label> --}}
                <input type="password" class="form-control" id="password" name="password" placeholder="Password">
                </div>
                <button class="btn btn-primary w-100 py-2 mt-2" type="submit">Registrasi Akun</button>
                <p class="mt-5 mb-3 text-body-secondary">&copy; SMKS YP 17 Kota Blitar 2023</p>
            </form>
        </main>
    </body>
</html>
