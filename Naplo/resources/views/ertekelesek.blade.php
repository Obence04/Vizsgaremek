@extends('layout')

@section('title') Értékelések @endsection

@section('head')
<link rel="stylesheet" href="{{asset('css/ertekeles.css')}}">

@endsection

@section('content')

@include('header')
<main class="container-fluid">
    @php
        use App\Models\ertekeles;
        use App\Models\ora;
        use App\Models\osztaly;
        $datum = date('n');
        $aktualszin = "#AAAADD";
    @endphp
    @if($jog > 1)
    @if(!isset($osztaly))
    <div class="pt-5">
        <div class="card mx-auto px-5 py-3">
            <h2 class="text-center pb-2">Osztály kiválasztása</h2>
            <div class="row align-items-center text-center">
                @foreach ($osztalyok as $row)
                <div class="col">
                    <p>{{$row->oszt_nev}}</p>
                </div>
                <div class="col">
                    <a href="/ertekelesek/{{$row->oszt_id}}" class="btn btn-primary">Kiválaszt</a>
                </div>
                @endforeach
            </div>
        </div>
    </div>
    @elseif ($jog > 1)
    <div class="pt-5">
        <h2 class="text-center">Értékelés felvétele</h2>
        <div class="w-75 bg-dark mx-auto text-light p-3 rounded m-3">
            <form action="/ertekelesek/{{$osztaly->oszt_id}}" method="post">
                @csrf
                <input type="hidden" name="osztaly" value="{{ $osztaly->oszt_id }}">
                <input type="hidden" name="diakcnt" value="{{ count($diakok); }}">
                <label for="ora" class="form-label">Óra:</label>
                <select name="ora" id="ora" class="form-select">
                    @foreach ($orak as $row)
                        <option value="{{$row->ora_id}}">@php echo($row->oszt_nev.': '.$row->ora_datum.' '.$row->ora_szam.'. óra - '.$row->tant_nev); @endphp</option>
                    @endforeach
                </select>
                <label for="ertido" class="form-label">Értékelés típusa:</label>
                <select name="ertido" id="ertido" class="form-select">
                    @foreach ($ertido as $row)
                        <option value="{{$row->ido_id}}">@php echo($row->ido_nev); @endphp</option>
                    @endforeach
                </select>
                <label for="erttip" class="form-label">Értékelés témája:</label>
                <select name="erttip" id="erttip" class="form-select">
                    @foreach ($erttipus as $row)
                        <option value="{{$row->tip_id}}">@php echo($row->tip_nev); @endphp</option>
                    @endforeach
                </select>
                <label for="leiras" class="form-label">Értékelés leírása:</label>
                <input type="text" name="leiras" id="leiras" class="form-control">
                <label for="szazalek" class="form-label">Jegy erőssége (százalék):</label>
                <input type="number" name="szazalek" id="szazalek" min="25" max="500" value="100" class="form-control">
                <table class="table table-striped table-bordered">
                    <thead>
                        <tr>
                            <td>{{$osztaly->oszt_nev}}</td>
                            <td>Név</td>
                            <td>Átlag</td>
                            <td>Jegy</td>
                        </tr>
                    </thead>
                    <tbody>
                        @for($i = 0; $i < count($diakok); $i++)
                        <input type="hidden" name="id{{$i}}" value="{{$diakok[$i]->diak_id}}">
                        <tr>
                            <td></td>
                            <td>{{$diakok[$i]->diak_nev}}</td>
                            <td>@if(isset($atlagok[$i])) @if($atlagok[$i]->diak_id == $diakok[$i]->diak_id) {{$atlagok[$i]->atlag}} @endif @else 0 @endif</td>
                            <td>
                                <div class="btn-group" role="group">
                                    @for ($j = 1; $j < 6; $j++)
                                        <input type="radio" name="diak{{$i}}" id="jegy{{$i}}-{{$j}}" value="{{$i}}-{{$j}}" class="btn-check">
                                        <label for="jegy{{$i}}-{{$j}}" class="btn btn-primary">{{$j}}</label>
                                    @endfor
                                </div>
                            </td>
                        </tr>
                        @endfor
                    </tbody>
                </table>
                <button type="submit" class="btn btn-primary">Értékelések mentése</button>
            </form>
        </div>

    </div>
    @endif
    @else
    <div class="text-center">
        <div class="card mt-5 w-25" id="ertreszlet">
            <div class="card-header">
                <h1 id="erttantargy">tantárgy</h1>
            </div>
            <div class="row">
                <div class="col-3">
                    <h3 id="ertjegy">2</h3>
                    <p id="ertszazalek" style="font-size: 10pt">0</p>
                </div>
                <div class="col-9">
                    <p id="ertdatum">ad</p>
                    <p id="ertido">a</p>
                    <p id="erttip">a</p>
                    <p id="ertleiras">a</p>
                </div>
            </div>
        </div>
        <div class="table-responsive-xxl pt-5">
            <table class="table table-striped table-bordered mb-0 mx-auto text-center" id="table">
                <thead>
                    <tr>
                        <td class="align-middle">{{osztaly::find($user->oszt_id)->oszt_nev}}</td>
                        <td class="align-middle">09.</td>
                        <td class="align-middle">10.</td>
                        <td class="align-middle">11.</td>
                        <td class="align-middle">12.</td>
                        <td class="align-middle">01.</td>
                        <td class="align-middle">I.</td>
                        <td class="align-middle">02.</td>
                        <td class="align-middle">03.</td>
                        <td class="align-middle">04.</td>
                        <td class="align-middle">05.</td>
                        <td class="align-middle">06.</td>
                        <td class="align-middle">II.</td>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        for($i = 0; $i < count($tantargyak); $i++)
                        {
                            echo('<tr><td class="align-middle">'.$tantargyak[$i]->tant_nev.'</td>');
                            for ($j=0; $j < 12; $j++) {
                                $honap = 9+$j;
                                if ($honap == 13) {
                                    $honap = 1;
                                } elseif ($honap == 14) {
                                    $honap = -1;
                                } elseif ($honap == 20) {
                                    $honap = -1;
                                } elseif ($honap > 12) {
                                    $honap = $j-4;
                                }
                                $ert    = ertekeles::selectraw('orak.ora_datum, orak.ora_szam, ertekelesek.*, tantargyak.tant_nev, erttipusok.tip_nev, ertidopontok.ido_nev')->join('erttipusok','erttipusok.tip_id','ertekelesek.tip_id')->join('ertidopontok','ertidopontok.ido_id','ertekelesek.ido_id')->join('orak','orak.ora_id','ertekelesek.ora_id')->join('tanitott','tanitott.tanit_id','orak.tanit_id')->join('tantargyak','tantargyak.tant_id','tanitott.tant_id')->where('tanitott.tant_id','=',$tantargyak[$i]->tant_id)->groupby('ertekelesek.ert_id')->get();
                                $felev  = ertekeles::selectraw('orak.ora_datum, orak.ora_szam, ertekelesek.*, tantargyak.tant_nev, erttipusok.tip_nev, ertidopontok.ido_nev')->join('erttipusok','erttipusok.tip_id','ertekelesek.tip_id')->join('ertidopontok','ertidopontok.ido_id','ertekelesek.ido_id')->join('orak','orak.ora_id','ertekelesek.ora_id')->join('tanitott','tanitott.tanit_id','orak.tanit_id')->join('tantargyak','tantargyak.tant_id','tanitott.tant_id')->where('tanitott.tant_id','=',$tantargyak[$i]->tant_id)->where('ertekelesek.ido_id','=',2)->groupby('ertekelesek.ert_id')->get();
                                $evvege = ertekeles::selectraw('orak.ora_datum, orak.ora_szam, ertekelesek.*, tantargyak.tant_nev, erttipusok.tip_nev, ertidopontok.ido_nev')->join('erttipusok','erttipusok.tip_id','ertekelesek.tip_id')->join('ertidopontok','ertidopontok.ido_id','ertekelesek.ido_id')->join('orak','orak.ora_id','ertekelesek.ora_id')->join('tanitott','tanitott.tanit_id','orak.tanit_id')->join('tantargyak','tantargyak.tant_id','tanitott.tant_id')->where('tanitott.tant_id','=',$tantargyak[$i]->tant_id)->where('ertekelesek.ido_id','=',3)->groupby('ertekelesek.ert_id')->get();
                                echo('<td>');
                                if ($j == 5 && count($felev) != 0) {
                                    ?> <a href="#top" onClick='ertekelesReszlet({{$felev[0]}})'>{{$felev[0]->ert_jegy}}</a> <?php
                                } elseif ($j == 11 && count($evvege) != 0) {
                                    ?> <a href="#top" onClick='ertekelesReszlet({{$evvege[0]}})'>{{$evvege[0]->ert_jegy}}</a> <?php
                                } else {
                                    foreach ($ert as $row) {
                                        if (date('n',strtotime($row->ora_datum)) == $honap && $row->ido_id == 1) {
                                            ?> <a href="#top" onClick='ertekelesReszlet({{$row}})'>{{$row->ert_jegy}}</a> <?php
                                        }
                                    }
                                }
                                echo('</td>');
                            }

                            echo('</td></tr>');
                        }
                    ?>
                <script src="{{ asset('js/ertekeles.js') }}"></script>

                </tbody>
            </table>
        </div>
    </div>
    @endif
</main>
@endsection

@section('js')
<script>
    document.getElementById('ertreszlet').style.display = "none";
</script>
@endsection
