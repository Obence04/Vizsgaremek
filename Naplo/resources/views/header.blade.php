@section('header')

@php
    use App\Models\diak;
    use App\Models\tanar;
@endphp

<header class="color-bg-primary fw-bold">
    <nav class="container-fluid navbar navbar-expand">
        <a class="navbar-brand ms-3" id="nevnagy" href="/">@if (Auth::user()->jog_id == 1) {{diak::where('fel_id','=',Auth::id())->get()->first()->diak_nev}} @else {{tanar::where('fel_id','=',Auth::id())->get()->first()->tanar_nev}} @endif</a>
        <span id="datumkicsi" class="navbar-text ms-3 pe-3 pt-2 fs-5"></span>
        <ul class="navbar-nav ms-auto">
            <span id="datumnagy" class="navbar-text pe-3 pt-2 fs-5"></span>
            <li class="nav-item pt-2" title="Nincs implementálva!">
                <p class="pe-2"><span class="material-symbols-rounded">mail</span></p>
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
        <a class="navbar-brand" href="#footer" title="RAKÉTA">
            <img class="text-center logo ms-5" src={{asset('img/ikon1.png')}} alt="logo1.png">
        </a>
        <button class="navbar-toggler bg-secondary" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="material-symbols-sharp" style="font-size: 28pt">lists</span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav mx-auto">
                <li class="nav-item px-4">
                    <a class="navbar-brand" id="nevkicsi" href="/">@if (Auth::user()->jog_id == 1) {{diak::where('fel_id','=',Auth::id())->get()->first()->diak_nev}} @else {{tanar::where('fel_id','=',Auth::id())->get()->first()->tanar_nev}} @endif</a>
                </li>
                <li class="nav-item px-4">
                    <a class="nav-link" href="/orarend">Órarend</a>
                </li>
                <li class="nav-item px-4">
                    <a class="nav-link" href="/ertekelesek">Értékelések</a>
                </li>
                <li class="nav-item px-4">
                    <a class="nav-link" href="/hianyzasok">Igazolás/Mulasztás</a>
                </li>
                <li class="nav-item px-4" title="Nincs implementálva!">
                    <a class="nav-link disabled" href="/feljegyzesek">Feljegyzések</a>
                </li>
                @if(Auth::user()->jog_id > 2)
                <li class="nav-item px-4">
                    <a class="nav-link" href="/felvetel">Felvétel</a>
                </li>
                @endif
            </ul>
        </div>
    </nav>
</header>

@isset($errors)
@if(count($errors) > 0)
<div id="uzenet" class="modal">
    <div class="modal-content">
        <span class="close">&times;</span>
        @foreach ($errors->all() as $row)
            <p class="text-center text-danger mb-1">{{$row}}</p>
        @endforeach
    </div>
</div>
<script>
    var modal = document.getElementById("uzenet");
    var span = document.getElementsByClassName("close")[0];

    modal.style.display = "block";
    span.onclick = function() {
      modal.style.display = "none";
    }

    window.onclick = function(event) {
      if (event.target == modal) {
         modal.style.display = "none";
      }
    }
</script>
@endif
@endisset

@error('msg')
<div id="uzenet" class="modal">
    <div class="modal-content">
        <span class="close">&times;</span>
        <p class="text-center">{{$message}}</p>
    </div>
</div>
<script>
    var modal = document.getElementById("uzenet");
    var span = document.getElementsByClassName("close")[0];

    modal.style.display = "block";
    span.onclick = function() {
      modal.style.display = "none";
    }

    window.onclick = function(event) {
      if (event.target == modal) {
         modal.style.display = "none";
      }
    }
</script>
@enderror
@endsection
