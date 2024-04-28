@extends('layout')

@section('title') Felvétel -  @endsection

@section('head')
<link rel="stylesheet" href="{{asset('css/stilus.css')}}">
@endsection

@section('content')

@include('header')

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
                            <input type="text" name="osztalynev" id="osztalynev" class="form-control" maxlength="45">
                            <br>
                            @if ($tanardb == 0)
                            <p class="text-center">
                                <a class="btn btn-primary my-3" name="atiranyit" onclick="Kivalasztas('tanar')">Vegyen fel legalább 1 tanárt!</a>
                            </p>
                            @else
                                <label for="osztalyfonok_id" class="form-label mb-1">Osztályfőnök:</label>
                                <select name="osztalyfonok_id" id="osztalyfonok_id" class="form-select">
                                    @foreach ($lehetofo as $row)
                                        <option value="{{$row->tanar_id}}">{{$row->tanar_nev}}</option>
                                    @endforeach
                                </select>
                            @endif
                            <br>
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
                            <input type="text" name="tanulonev" id="tanulonev" class="form-control" maxlength="45">
                            <br>
                            <label for="oktazon" class="form-label">Oktatási azonosító:</label>
                            <input type="text" name="oktazon" id="oktazon" class="form-control" maxlength="11">
                            <br>
                            @if ($osztalydb == 0)
                                <p class="text-center">
                                    <a class="btn btn-primary my-3" name="atiranyit" onclick="Kivalasztas('osztaly')">Vegyen fel legalább 1 osztályt!</a>
                                </p>
                            @else
                                <label for="osztaly" class="form-label mb-1">Osztály:</label>
                                <select name="osztaly" id="osztaly" class="form-control">
                                    @foreach ($osztalyok as $row)
                                    <option value="{{$row->oszt_id}}">{{$row->oszt_nev}}</option>
                                    @endforeach
                                </select><br>
                            @endif

                            <label for="szuldatum" class="form-label">Születési dátum:</label>
                            <input type="date" name="szuldatum" id="szuldatum" class="form-control"><br>
                            <label for="szulhely" class="form-label">Születési hely:</label>
                            <input type="text" name="szulhely" id="szulhely" class="form-control" maxlength="45"><br>
                            <label for="anyjaneve" class="form-label">Anyja neve:</label>
                            <input type="text" name="anyjaneve" id="anyjaneve" class="form-control" maxlength="45"><br>
                            <label for="lakcim" class="form-label">Lakcím:</label>
                            <input type="text" name="lakcim" id="lakcim" class="form-control" maxlength="45"><br>
                            <label for="email" class="form-label">E-mail cím:</label>
                            <input type="text" name="email" id="email" class="form-control" maxlength="45"><br>
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
                            <input type="text" name="tanarnev" id="tanarnev" class="form-control" maxlength="45"><br>
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
                                <label for="tanar_id" class="form-label mb-1">Tanár:</label>
                                <select name="tanar_id" id="tanar_id" class="form-select">
                                    @foreach ($tanarok as $row)
                                        <option value="{{$row->tanar_id}}">{{$row->tanar_nev}}</option>
                                    @endforeach
                                </select>
                            @endif
                            @if ($tantargydb == 0)
                            <p class="text-center">
                                <a class="btn btn-primary my-3" name="atiranyit" onclick="Kivalasztas('tantargy')">Vegyen fel legalább 1 tantárgyat!</a>
                            </p>
                            @else
                                <label for="tantargy_id" class="form-label mb-1">Tantárgy:</label>
                                <select name="tantargy_id" id="tanartargy_id" class="form-select">
                                    @foreach ($tantargyak as $row)
                                        <option value="{{$row->tant_id}}">{{$row->tant_nev}}</option>
                                    @endforeach
                                </select>
                            @endif
                            <br>
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
                            @if($osztalydb == 0)
                                <p class="text-center">
                                    <a class="btn btn-primary my-3" name="atiranyit" onclick="Kivalasztas('osztaly')">Vegyen fel legalább 1 osztályt!</a>
                                </p>
                            @else
                                <label for="osztaly" class="form-label mb-1">Osztály:</label>
                                <select name="osztaly" id="osztaly" class="form-control">
                                    @foreach ($osztalyok as $row)
                                    <option value="{{$row->oszt_id}}">{{$row->oszt_nev}}</option>
                                    @endforeach
                                </select><br>
                            @endif
                            <label for="datum" class="form-label">Dátum:</label>
                            <input type="date" name="datum" id="datum" class="form-control"><br>
                            <label for="oraszam" class="form-label">Óraszám:</label>
                            <input type="number" class="form-control" name="oraszam" id="oraszam" min="0" max="10"><br>
                            @if($tantargydb == 0)
                                <p class="text-center">
                                    <a class="btn btn-primary my-3" name="atiranyit" onclick="Kivalasztas('tantargy')">Vegyen fel legalább 1 tantárgyat!</a>
                                </p>
                            @else
                                <label for="tanit" class="form-label">Tantárgy:</label>
                                <select name="tanit" id="tanit" class="form-control">
                                    @foreach ($ttanar as $row)
                                        <option value="{{$row->tanit_id}}">{{$row->tant_nev.' - '.$row->tanar_nev}}</option>
                                    @endforeach
                                </select><br>
                            @endif
                            <label for="terem" class="form-label">Terem:</label>
                            <input type="text" class="form-control" name="terem" id="terem" maxlength="45"><br>

                            <button type="submit" class="btn btn-success">Mentés</button>
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
                            <input type="text" name="tantargy" id="tantargy" class="form-control" maxlength="45"><br>
                            <button type="submit" class="btn btn-success ">Mentés</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <script src="{{asset('js/felvetel.js')}}"></script>
@endsection

@section('js')
<script src="{{ asset('js/myjs.js') }}"></script>
@endsection
