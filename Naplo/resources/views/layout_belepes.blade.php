<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="{{asset('img/favicon.ico')}}" type="image/x-icon">
    <link rel="stylesheet" href="{{asset('css/bootstrap.css')}}">
    <link rel="stylesheet" href="{{asset('css/mystyle.css')}}">
    <script src="{{asset('js/bootstrap.bundle.js')}}"></script>
    <title>Napló</title>
</head>
<body data-theme="light" class="color-bg-background">
<!--Vágás-->
@yield('content')
<!--Vágás-->
</body>
<footer class="bg-dark p-1 fixed-bottom">
    <div class="row">
        <div class="col">
            <p>Elérhetőségek</p>
            <p>GYIK</p>
            <p>ÁSZF</p>
            <p>EULA</p>
        </div>
        <div class="col">
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
</body>
</html>
