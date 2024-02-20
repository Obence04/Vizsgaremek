<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('css/bootstrap.css')}}">
    <link rel="stylesheet" href="{{asset('css/mystyle.css')}}">
    <script src="{{asset('js/bootstrap.bundle.js')}}"></script>
    <title>Napló</title>
</head>
<body>
    <header>
        <nav class="container-fluid navbar navbar-expand">
            <a class="navbar-brand ms-5" href="index.html">Név</a>
            <ul class="navbar-nav ms-auto">
                <span id="datum" class="navbar-text text-light"></span>
                <li class="nav-item">
                    <a class="nav-link" href="#">Üzenet</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Profil</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Beállítások</a>
                </li>
            </ul>
        </nav>
        <nav class="container-fluid navbar navbar-expand-md">
            <a class="navbar-brand" href="#">
                <img class="mx-5" src="img/logo.png" alt="logo.png">
            </a>
            <button class="navbar-toggler bg-secondary" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav mx-auto">
                    <li class="nav-item px-4">
                        <a class="nav-link" href="#">Órarend</a>
                    </li>
                    <li class="nav-item px-4">
                        <a class="nav-link" href="#">Értékelések</a>
                    </li>
                    <li class="nav-item px-4">
                        <a class="nav-link" href="#">Feljegyzések</a>
                    </li>
                    <li class="nav-item px-4">
                        <a class="nav-link" href="#">Igazolás/Mulasztás</a>
                    </li>
                </ul>
            </div>
        </nav>
    </header>
	<!--Vágás-->
    @yield('content')
    <!--Vágás-->
<footer class="bg-dark p-1">
    <div class="row mx-auto">
        <div class="col-6">
            <p>Elérhetőségek</p>
            <p>GYIK</p>
            <p>ÁSZF</p>
            <p>EULA</p>
        </div>
        <div class="col-6">
            <p class="text-end p-2">
                <a href="http://jigsaw.w3.org/css-validator/check/referer">
                    <img style="border:0;width:88px;height:31px"
                        src="http://jigsaw.w3.org/css-validator/images/vcss"
                        alt="Érvényes CSS!" >
                </a>
            </p>
        </div>
    </div>
</footer>
<script src="js/myjs.js"></script>
</body>
</html>
