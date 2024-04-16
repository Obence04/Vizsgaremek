@extends('layout')

@section('title') Hiányzások @endsection

@section('head')
<link rel="stylesheet" href="{{asset('css/hianyzasok.css')}}">

@endsection

@section('content')

@include('header')
<main class="container-fluid">
    @php
        use App\Models\hianyzasok;
        use App\Models\ora;
        use App\Models\osztaly;
        $datum = date('n');
        $aktualszin = "#AAAADD";
        dd($hianyzasok); //NEM TÖLTI BE AZ ADATOKAT
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
                    <a href="/hianyzasok/{{$row->oszt_id}}" class="btn btn-primary">Kiválaszt</a>
                </div>
                @endforeach
            </div>
        </div>
    </div>
    @elseif ($jog > 1)
    <div class="pt-5">
        <h2 class="text-center">Hiányzás felvétele</h2>
        <div class="w-75 bg-dark mx-auto text-light p-3 rounded m-3">
            <form action="/hianyzasok/{{$osztaly->oszt_id}}" method="post">
                @csrf
                <input type="hidden" name="osztaly" value="{{ $osztaly->oszt_id }}">
                <input type="hidden" name="diakcnt" value="{{ count($diakok); }}">
                <label for="ora" class="form-label">Óra:</label>
                <select name="ora" id="ora" class="form-select">
                    @foreach ($orak as $row)
                        <option value="{{$row->ora_id}}">@php echo($row->oszt_nev.': '.$row->ora_datum.' '.$row->ora_szam.'. óra - '.$row->tant_nev); @endphp</option>
                    @endforeach
                </select>
                <table class="table table-striped table-bordered">
                    <thead>
                        <tr>
                            <td>{{$osztaly->oszt_nev}}</td>
                            <td>Név</td>
                            <td>Hiányzás</td>
                            <td>Késés</td>
                        </tr>
                    </thead>
                    <tbody>
                        @for($i = 0; $i < count($diakok); $i++)
                        <input type="hidden" name="id{{$i}}" value="{{$diakok[$i]->diak_id}}">
                        <tr>
                            <td></td>
                            <td>{{$diakok[$i]->diak_nev}}</td>
                            <td>
                                <input type="checkbox" name="diak{{$i}}" id="hiany{{$i}}" class="btn-check">
                                <label for="hiany{{$i}}" class="btn btn-primary">hiányzik</label>
                            </td>
                            <td>
                                <input type="number" name="keses{{$i}}" id="keses{{$i}}" class="form-control" value="0">
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
        @if(count($hianyzasok) == 0)
            <h3>Még nem rögzítettek egyetlen hiányzást sem...</h3>
        @else
        <div class="table-responsive-xxl pt-5">
            <table class="table table-striped table-bordered mb-0 mx-auto text-center" id="table">
                <thead>
                    <tr>
                        <td class="align-middle">dátum</td>
                        <td class="align-middle">óra</td>
                        <td class="align-middle">hiányzás/késés</td>
                        <td class="align-middle">igazolva</td>
                    </tr>
                </thead>
                <tbody>
                        @foreach ($hianyzasok as $row)
                            <td class="align-middle">@php echo(date('Y.m.d.',strtotime($row->ora_datum)).' '.$row->ora_szam.'. óra'); @endphp</td>
                            <td class="align-middle">@php echo($row->tanar_nev.' - '.$row->tant_nev); @endphp</td>
                            <td class="align-middle">@if($row->hia_keses == 1) késés @else hiányzás @endif</td>
                            <td class="align-middle">@if($row->iga_id == null) nincs @else {{$row->iga_nev}} @endif</td>
                        @endforeach

                </tbody>
            </table>
        </div>
        @endif
    </div>
    @endif
</main>
@endsection

@section('js')
<script>
    document.getElementById('ertreszlet').style.display = "none";
</script>
@endsection
