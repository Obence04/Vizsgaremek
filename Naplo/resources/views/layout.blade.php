<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>@yield('title') - Napló</title>

    <link rel="icon" href="{{asset('img/favicon.ico')}}" type="image/x-icon">
    <link rel="preconnect" href="https://fonts.googleapis.com"> <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@24,400,0,0"/>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Sharp:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="stylesheet" href="{{asset('css/bootstrap.css')}}">
    @yield('head')

    <script src="{{asset('js/bootstrap.bundle.js')}}"></script>
</head>
<body data-theme="@php if(isset($tema)) { echo($tema); } else { echo('light'); } @endphp" class="color-bg-background">
    @yield('header')

    @yield('content')
</body>
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
@yield('js')
</body>
</html>
