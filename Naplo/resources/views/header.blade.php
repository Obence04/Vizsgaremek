@section('header')
<header class="color-bg-primary fw-bold">
    <nav class="container-fluid navbar navbar-expand">
        <a class="navbar-brand ms-5" id="nev" href="/">@if ($jog > 2) {{$user->fel_nev}} @elseif($jog == 2) {{$user->tanar_nev}} @else {{$user->diak_nev}} @endif</a>
        <ul class="navbar-nav ms-auto">
            <span id="datum" class="navbar-text pe-3 pt-2 fs-5"></span>
            <li class="nav-item pt-2" title="Üzenet">
                <a href="/uzenetek" class="ikon pe-2"><span class="material-symbols-rounded">mail</span></a>
            </li>
            <li class="nav-item pt-2" title="Profil">
                <a href="/profil" class="ikon pe-2"><span class="material-symbols-rounded">account_box</span></a>
            </li>
            <li class="nav-item pt-2" title="Beállítások">
                <a href="/beallitasok" class="ikon pe-2"><span class="material-symbols-rounded">settings</span></a>
            </li>
            <li class="nav-item pt-2" title="Kilépés">
                <a href="/kilepes" class="ikon pe-2"><span class="material-symbols-rounded">logout</span></a>
            </li>
        </ul>
    </nav>
    <nav class="container-fluid navbar navbar-expand-md">
        <a class="navbar-brand" href="#">
            <img class="text-center logo ms-5" src={{asset('img/ikon1.png')}} alt="logo1.png">
        </a>
        <button class="navbar-toggler bg-secondary" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav mx-auto">
                <li class="nav-item px-4">
                    <a class="nav-link" href="/orarend">Órarend</a>
                </li>
                <li class="nav-item px-4">
                    <a class="nav-link" href="/ertekelesek">Értékelések</a>
                </li>
                <li class="nav-item px-4">
                    <a class="nav-link" href="/feljegyzesek">Feljegyzések</a>
                </li>
                <li class="nav-item px-4">
                    <a class="nav-link" href="/igazolasok">Igazolás/Mulasztás</a>
                </li>
            </ul>
        </div>
    </nav>
</header>
@endsection