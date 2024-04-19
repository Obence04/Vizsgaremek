@extends('layout')

@section('title') Profil @endsection

@section('head')
<link rel="stylesheet" href="{{asset('css/profil.css')}}">
@endsection

@section('content')

@include('header')
@php
    use App\Models\osztaly;
    use App\Models\jog;
    use App\Models\tema;
@endphp
<main class="container-fluid text-center py-4">
    @if(isset($mod))
    <div>
        <h1>Biztosan visszállítja a kiválasztott felhasználó jelszavát?</h1>
        <form action="/visszaallit/{{$mod->fel_id}}" method="post">
            @csrf
            <a href="/profil/{{$mod->fel_id}}" class="btn btn-danger">NEM</a>
            <button type="submit" class="btn btn-success">IGEN</button>
        </form>
    </div>
    @else
    <div>
        @if($jog > 2) <a href="/profilkeres" class="btn btn-primary py-2 my-2">Fiók keresése</a>@endif
        <?php

        $diake = $user->jog_id == 1 ? true : false;
        if(isset($diak)){
            if (is_null($diak)){ $diak = $diak[0]; }
            }
        if(isset($tanar)){
            if (is_null($tanar)) { $tanar = $tanar[0]; }
        }
        ?>
        <h3><?php if($diake) { echo($diak->diak_nev); } else { echo($tanar->tanar_nev); } ?> profilja</h3>
        <table class="table table-bordered table-striped">
            <thead>
                <tr>
                    <td>Adat</td>
                    <td>Régi</td>
                    <td>Módosítás</td>
                </tr>
            </thead>
            <tbody>
                <form action="/profil/{{$user->fel_id}}" method="post">
                    @csrf
                @if($diake)
                <tr>
                    <td>Oktatási azonosító:</td>
                    <td>{{$diak->diak_id}}</td>
                    <td></td>
                </tr>
                <tr>
                    <td>Tanuló neve:</td>
                    <td>{{$diak->diak_nev}}</td>
                    <td>
                        @if($jog > 2) <input type="text" name="dnev" id="dnev" value="{{$diak->diak_nev}}" class="form-control"> @endif
                        @error('dnev')
                        <span class="fw-bold text-danger">{{$message}}</span>
                        @enderror
                    </td>
                </tr>
                <tr>
                    <td>Születési idő:</td>
                    <td>{{$diak->diak_szuldatum}}</td>
                    <td>
                        @if($jog > 2) <input type="date" name="dszulido" id="dszulido" value="{{$diak->diak_szuldatum}}" class="form-control"> @endif
                        @error('dszulido')
                        <span class="fw-bold text-danger">{{$message}}</span>
                        @enderror
                    </td>
                </tr>
                <tr>
                    <td>Születési hely:</td>
                    <td>{{$diak->diak_szulhely}}</td>
                    <td>
                        @if($jog > 2) <input type="text" name="dszulhely" id="dszulhely" value="{{$diak->diak_szulhely}}" class="form-control"> @endif
                        @error('dszulhely')
                        <span class="fw-bold text-danger">{{$message}}</span>
                        @enderror
                    </td>
                </tr>
                <tr>
                    <td>Anyja neve:</td>
                    <td>{{$diak->diak_anyja}}</td>
                    <td>
                        @if($jog > 2) <input type="text" name="danyja" id="danyja" value="{{$diak->diak_anyja}}" class="form-control"> @endif
                        @error('danyja')
                        <span class="fw-bold text-danger">{{$message}}</span>
                        @enderror
                    </td>
                </tr>
                <tr>
                    <td>Lakcím:</td>
                    <td>{{$diak->diak_lakcim}}</td>
                    <td>
                        <input type="text" name="dlakcim" id="dlakcim" value="{{$diak->diak_lakcim}}" class="form-control">
                        @error('dlakcim')
                        <span class="fw-bold text-danger">{{$message}}</span>
                        @enderror
                    </td>
                </tr>
                <tr>
                    <td>Osztály:</td>
                    <td>{{osztaly::find($diak->oszt_id)->oszt_nev}}</td>
                    <td>
                        @if($jog > 2)
                        <select name="doszt" id="doszt" class="form-select">
                            @foreach (osztaly::all() as $row)
                            <option value="{{$row->oszt_id}}" @if($diak->oszt_id == $row->oszt_id) selected @endif>{{$row->oszt_nev}}</option>
                            @endforeach
                        </select>
                        @endif
                    </td>
                </tr>
                @endif
                @if(Auth::user()->jog_id > 3)
                <tr>
                    <td>Felhasználó id:</td>
                    <td>@if(isset($diak)) {{$diak->fel_id}} @else {{$tanar->fel_id}} @endif</td>
                    <td></td>
                </tr>
                @endif
                <tr>
                    <td>Felhasználónév:</td>
                    <td>{{$user->fel_nev}}</td>
                    <td>
                        @if($jog > 3) <input type="text" name="fnev" id="fnev" value="{{$user->fel_nev}}" class="form-control"> @endif
                        @error('fnev')
                        <span class="fw-bold text-danger">{{$message}}</span>
                        @enderror
                    </td>
                </tr>
                <tr>
                    <td>E-mail cím:</td>
                    <td>{{$user->fel_email}}</td>
                    <td>
                        <input type="email" name="femail" id="femail" value="{{$user->fel_email}}" class="form-control">
                        @error('femail')
                        <span class="fw-bold text-danger">{{$message}}</span>
                        @enderror
                    </td>
                </tr>
                <tr>
                    <td>Telefonszám:</td>
                    <td>@if(isset($user->fel_telszam)) {{$user->fel_telszam}} @else nincs megadva @endif</td>
                    <td><input type="number" name="ftel" id="ftel" value="{{$user->fel_telszam}}" class="form-control"></td>
                </tr>
                <tr>
                    <td>Jog:</td>
                    <td>{{jog::find($user->jog_id)->jog_nev}}</td>
                    <td>
                        @if($jog > 3)
                        <select name="fjog" id="fjog" class="form-select">
                            @foreach (jog::all() as $row)
                            <option value="{{$row->jog_id}}" @if($user->jog_id == $row->jog_id) selected @endif>{{$row->jog_nev}}</option>
                            @endforeach
                        </select>
                        @endif
                    </td>
                </tr>
                <tr>
                    <td>Téma:</td>
                    <td>{{tema::find($user->tema_id)->tema_nev}}</td>
                    @if(!isset($id) && $user->fel_id != Auth::id())<td><a href="/beallitasok" class="btn btn-primary">Módosítás</a></td>@endif
                </tr>
            </tbody>

        </table>
        <button type="submit" class="btn btn-primary">Módosítások végrehajtása</button>
        </form>
        @if(isset($id) && $jog > 3) <a href="/visszaallit/{{$id}}" class="btn btn-primary">Jelszó vissaállítása</a> @endif
    </div>
    @endif
</main>
@endsection

@section('js')
<script src="{{ asset('js/myjs.js') }}"></script>
@endsection
