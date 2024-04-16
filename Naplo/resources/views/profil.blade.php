@extends('layout')

@section('title') Profil @endsection

@section('head')
<link rel="stylesheet" href="{{asset('css/profil.css')}}">
@endsection

@section('content')

@include('header')

<main class="container-fluid text-center">
    <div>
        <?php //if ($user->jog_id == 1) $diak = true; else $diak = false;
        use App\Models\osztaly;
        use App\Models\jog;
        use App\Models\tema;
        $diake = $user->jog_id == 1 ? true : false;
        if(isset($diak)){ $diak = $diak[0]; }
        if(isset($tanar)){ $tanar = $tanar[0]; }
        ?>
        <h3><?php if($diake) { echo($diak->diak_nev); } else { echo($tanar->tanar_nev); } ?> profilja</h3>
        <table class="table table-bordered table-striped">
            <thead>
                <tr>
                    <td>Adat</td>
                    <td>Régi</td>
                    <td>Új</td>
                </tr>
            </thead>
            <tbody>
                @if($diake)
                <tr>
                    <td>Oktatási azonosító:</td>
                    <td>{{$diak->diak_id}}</td>
                    <td></td>
                </tr>
                <tr>
                    <td>Tanuló neve:</td>
                    <td>{{$diak->diak_nev}}</td>
                    <td></td>
                </tr>
                <tr>
                    <td>Születési idő:</td>
                    <td>{{$diak->diak_szuldatum}}</td>
                    <td></td>
                </tr>
                <tr>
                    <td>Születési hely:</td>
                    <td>{{$diak->diak_szulhely}}</td>
                    <td></td>
                </tr>
                <tr>
                    <td>Anyja neve:</td>
                    <td>{{$diak->diak_anyja}}</td>
                    <td></td>
                </tr>
                <tr>
                    <td>Lakcím:</td>
                    <td>{{$diak->diak_lakcim}}</td>
                    <td><!-- módosítható --></td>
                </tr>
                <tr>
                    <td>Osztály:</td>
                    <td>{{osztaly::find($diak->oszt_id)->oszt_nev}}</td>
                    <td></td>
                </tr>
                @endif
                <tr>
                    <td>Felhasználó id:</td>
                    <td>@if(isset($diak)) {{$diak->fel_id}} @else {{$tanar->fel_id}} @endif</td>
                    <td></td>
                </tr>
                <tr>
                    <td>Felhasználónév:</td>
                    <td>{{$user->fel_nev}}</td>
                    <td></td>
                </tr>
                <tr>
                    <td>E-mail cím:</td>
                    <td>{{$user->fel_email}}</td>
                    <td><!-- módosítható --></td>
                </tr>
                <tr>
                    <td>Telefonszám:</td>
                    <td>@if(isset($user->fel_telszam)) {{$user->fel_telszam}} @else nincs megadva @endif</td>
                    <td><!-- módosítható --></td>
                </tr>
                <tr>
                    <td>Jog:</td>
                    <td>{{jog::find($user->jog_id)->jog_nev}}</td>
                    <td></td>
                </tr>
                <tr>
                    <td>Téma:</td>
                    <td>{{tema::find($user->tema_id)->tema_nev}}</td>
                    <td><a href="/beallitasok" class="btn btn-primary">Módosítás</a></td>
                </tr>
            </tbody>
        </table>
    </div>
</main>
@endsection

@section('js')
<script src="{{ asset('js/myjs.js') }}"></script>
@endsection
