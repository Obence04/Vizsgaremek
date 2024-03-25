@extends('layout_fooldal')
@section('content')
<body>
    <main>
        <div class="row row-cols-8 row-cols-sm-8 row-cols-md-12 d-flex justify-content-center mx-5">
            <a class="col btn btn-secondary my-1 mx-1" name="feltolt" id="osztfelv" onclick="Kivalasztas('osztaly')">Osztály felvétele</a>
            <a class="col btn btn-secondary my-1 mx-1" name="feltolt" id="tanulfelv" onclick="Kivalasztas('tanulo')">Tanuló felvétele</a>
            <a class="col btn btn-secondary my-1 mx-1" name="feltolt" id="tanarfelv" onclick="Kivalasztas('tanar')">Tanár felvétele</a>
            <a class="col btn btn-secondary my-1 mx-1" name="feltolt" id="tanitottfelv" onclick="Kivalasztas('tanitott')">Tanár hozzárendelése tantárgyhoz</a>
            <a class="col btn btn-secondary my-1 mx-1" name="feltolt" id="orafelv" onclick="Kivalasztas('orarend')">Órarend felvétele</a>
            <a class="col btn btn-secondary my-1 mx-1" name="feltolt" id="tantargyfelv" onclick="Kivalasztas('tantargy')">Tantárgy felvétele</a>
        </div>
        <div class="container">
            <div id="osztalyfelvetel" name="formok">
                <h1 class="text-center mt-3">Osztály felvitele</h1>
                <div class="w-60 bg-dark mx-auto text-light p-3 rounded m-3">
                    <div class="container">
                        <form action="/felvetel" method="post">
                            @csrf
                            <input type="hidden" name="tipus" value="osztály">
                            <label for="osztalynev" class="form-label">Osztály neve:</label>
                            <input type="text" name="osztalynev" id="osztalynev" class="form-control">
                            @error('osztalynev')
                                <span class="text-center text-warning">{{ $message }}</span>
                            @enderror<br>
                            @if ($tanardb == 0)
                            <p class="text-center">
                                <a class="btn btn-primary my-3" name="atiranyit" id="cigany" onclick="Kivalasztas('tanar')">Vegyen fel legalább 1 tanárt!</a>
                            </p>
                            @else
                                <label for="osztalyfonok_id" class="from-label mb-1">Osztályfőnök:</label>
                                <select name="osztalyfonok_id" id="osztalyfonok_id" class="form-select">
                                    @foreach ($tanarok as $row)
                                        <option value="{{$row->tanar_id}}">{{$row->nev}}</option>
                                    @endforeach
                                </select>
                            @endif

                            @error('osztalyfonok_id')
                                <span class="text-center text-warning">{{ $message }}</span>
                            @enderror<br>
                            <button type="submit" class="btn btn-success ">Mentés</button>
                        </form>
                    </div>
                </div>
            </div>

            <div id="tanulfelvetel" name="formok">
                <h1 class="text-center mt-3">Tanuló felvitele</h1>
                <div class="w-60 bg-dark mx-auto text-light p-3 rounded m-3">
                    <div class="container">
                        <form action="/felvetel" method="post">
                            @csrf
                            <input type="hidden" name="tipus" value="tanuló">
                            <label for="tanulonev" class="form-label">Tanuló neve:</label>
                            <input type="text" name="tanulonev" id="tanulonev" class="form-control">
                            <br>
                            <label for="oktazon" class="form-label">Oktatási azonosító:</label>
                            <input type="text" name="oktazon" id="oktazon" class="form-control">
                            <br>
                            @if ($osztalydb == 0)
                                <p class="text-center">
                                    <a class="btn btn-primary my-3" name="atiranyit" id="cigany" onclick="Kivalasztas('osztaly')">Vegyen fel legalább 1 osztályt!</a>
                                </p>
                            @else
                                <label for="osztaly" class="from-label mb-1">Osztály:</label>
                                <select name="osztaly" id="osztaly" class="form-control">
                                    @foreach ($osztalyok as $row)
                                    <option value="{{$row->osztaly_id}}">{{$row->megnevezes}}</option>
                                    @endforeach
                                </select><br>
                            @endif

                            <label for="szuldatum" class="form-label">Születési dátum:</label>
                            <input type="date" name="szuldatum" id="szuldatum" class="form-control"><br>
                            <label for="szulhely" class="form-label">Születési hely:</label>
                            <input type="text" name="szulhely" id="szulhely" class="form-control"><br>
                            <label for="anyjaneve" class="form-label">Anyja neve:</label>
                            <input type="text" name="anyjaneve" id="anyjaneve" class="form-control"><br>
                            <label for="lakcim" class="form-label">Lakcím:</label>
                            <input type="text" name="lakcim" id="lakcim" class="form-control"><br>
                            <label for="email" class="form-label">E-mail cím:</label>
                            <input type="text" name="email" id="email" class="form-control"><br>
                            <button type="submit" class="btn btn-success ">Mentés</button>
                        </form>
                    </div>
                </div>
            </div>

            <div id="tanarfelvetel" name="formok">
                <h1 class="text-center mt-3">Tanár felvitele</h1>
                <div class="w-60 bg-dark mx-auto text-light p-3 rounded m-3">
                    <div class="container">
                        <form action="/felvetel" method="post">
                            @csrf
                            <input type="hidden" name="tipus" value="tanár">
                            <label for="tanarnev" class="form-label">Tanár neve:</label>
                            <input type="text" name="tanarnev" id="tanarnev" class="form-control"><br>
                            <label for="email" class="form-label">E-mail cím:</label>
                            <input type="text" name="email" id="email" class="form-control"><br>
                            <label for="usern" class="form-label">Felhasználónév:</label>
                            <input type="text" name="usern" id="usern" class="form-control"><br>
                            <button type="submit" class="btn btn-success ">Mentés</button>
                        </form>
                    </div>
                </div>
            </div>

            <div id="tanitottfelvetel" name="formok">
                <h1 class="text-center mt-3">Tanár hozzárendelése tantárgyhoz</h1>
                <div class="w-60 bg-dark mx-auto text-light p-3 rounded m-3">
                    <div class="container">
                        <form action="/felvetel" method="post">
                            @csrf
                            <input type="hidden" name="tipus" value="tanított">
                            @if ($tanardb == 0)
                            <p class="text-center">
                                <a class="btn btn-primary my-3" name="atiranyit" onclick="Kivalasztas('tanar')">Vegyen fel legalább 1 tanárt!</a>
                            </p>
                            @else
                                <label for="tanar_id" class="from-label mb-1">Tanár:</label>
                                <select name="tanar_id" id="tanar_id" class="form-select">
                                    @foreach ($tanarok as $row)
                                        <option value="{{$row->tanar_id}}">{{$row->nev}}</option>
                                    @endforeach
                                </select>
                            @endif
                            @if ($tantargydb == 0)
                            <p class="text-center">
                                <a class="btn btn-primary my-3" name="atiranyit" onclick="Kivalasztas('tantargy')">Vegyen fel legalább 1 tantárgyat!</a>
                            </p>
                            @else
                                <label for="tantargy_id" class="from-label mb-1">Tantárgy:</label>
                                <select name="tantargy_id" id="tanartargy_id" class="form-select" multiple>
                                    @foreach ($tantargyak as $row)
                                        <option value="{{$row->tantargy_id}}">{{$row->megnevezes}}</option>
                                    @endforeach
                                </select>
                            @endif
                            @error('tanar_id')
                                <span class="text-center text-warning">{{ $message }}</span>
                            @enderror<br>
                            <button type="submit" class="btn btn-success ">Mentés</button>
                        </form>
                    </div>
                </div>
            </div>

            <div id="orarendfelvetel" name="formok">
                <h1 class="text-center mt-3">Órarend felvitele</h1>
                <div class="w-60 bg-dark mx-auto text-light p-3 rounded m-3">
                    <div class="container">
                        <form action="/felvetel" method="post">
                            @csrf
                            <input type="hidden" name="tipus" value="órarend">
                            <label for="datum" class="form-label">Dátum:</label>
                            <input type="date" name="datum" id="datum" class="form-control"><br>
                            @if($tantargydb == 0)
                                <p class="text-center">
                                    <a class="btn btn-primary my-3" name="atiranyit" id="cigany" onclick="Kivalasztas('tantargy')">Vegyen fel legalább 1 tantárgyat!</a>
                                </p>
                            @else
                                <label for="tantargy" class="form-label">Tantárgy:</label>
                                <select name="tantargy" id="tantargy" class="form-control">
                                    @foreach ($tantargyak as $row)
                                        <option value="{{$row->tantargy_id}}">{{$row->megnevezes}}</option>
                                    @endforeach
                                </select><br>
                            @endif
                            @if($osztalydb == 0)
                                <p class="text-center">
                                    <a class="btn btn-primary my-3" name="atiranyit" id="cigany" onclick="Kivalasztas('tantargy')">Vegyen fel legalább 1 osztályt!</a>
                                </p>
                            @else
                                <label for="osztaly" class="form-label">Osztály:</label>
                                <select name="osztaly" id="osztaly" class="form-control">
                                    @foreach ($osztalyok as $row)
                                        <option value="{{$row->id}}">{{$row->megnevezes}}</option>
                                    @endforeach
                                </select><br>
                            @endif
                            <label for="oraszam" class="form-label">Óraszám:</label>
                            <input type="number" class="form-control" name="oraszam" id="oraszam" min="0" max="10"><br>
                            <button type="submit" class="btn btn-success ">Mentés</button>
                        </form>
                    </div>
                </div>
            </div>

            <div id="tantargyfelvetel" name="formok">
                <h1 class="text-center mt-3">Tantárgy felvitele</h1>
                <div class="w-60 bg-dark mx-auto text-light p-3 rounded m-3">
                    <div class="container">
                        <form action="/felvetel" method="post">
                            @csrf
                            <input type="hidden" name="tipus" value="tantárgy">
                            <label for="tantargy" class="form-label">Tantárgy megnevezése:</label>
                            <input type="text" name="tantargy" id="tantargy" class="form-control"><br>
                            <button type="submit" class="btn btn-success ">Mentés</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <script src="{{asset('js/felvetel.js')}}"></script>
@endsection
