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
        use App\Models\igazolas;
        $datum = date('n');
        $aktualszin = "#AAAADD";
        //dd($hianyzasok); //NEM TÖLTI BE AZ ADATOKAT
    @endphp
    @if($jog > 1)
    @if(isset($kiv))
    <div class="pt-5">
        <h2 class="text-center">Hiányzások</h2>
        <div class="card mx-auto px-5 py-3">
            <h3 class="text-center pb-2">Osztály kiválasztása</h3>
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
        <h2 class="text-center pt-5">Igazolások</h2>
        <div class="card mx-auto px-5 py-3">
            <h3 class="text-center pb-2">Osztály kiválasztása</h3>
            <div class="row align-items-center text-center">
                @foreach ($osztalyok as $row)
                <div class="col">
                    <p>{{$row->oszt_nev}}</p>
                </div>
                <div class="col">
                    <a href="/igazolasok/{{$row->oszt_id}}" class="btn btn-primary">Kiválaszt</a>
                </div>
                @endforeach
            </div>
        </div>
    </div>
    @elseif ($jog > 1)
    @if(isset($erttipus))
    <div class="pt-5">
        <h2 class="text-center">Hiányzás felvétele</h2>
        <div class="w-75 bg-dark mx-auto text-light p-3 rounded m-3">
            <form action="/hianyzasok/{{$osztaly->oszt_id}}" method="post">
                @csrf
                <input type="hidden" name="osztaly" value="{{ $osztaly->oszt_id }}">
                <input type="hidden" name="diakcnt" value="{{ count($diakok); }}">
                <label for="ora" class="form-label">Óra:</label>
                <select name="ora" id="ora" class="form-select mb-3">
                    @foreach ($orak as $row)
                        <option value="{{$row->ora_id}}">@php echo($row->oszt_nev.': '.date('Y.m.d. ',strtotime($row->ora_datum)).' '.$row->ora_szam.'. óra - '.$row->tant_nev); @endphp</option>
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
    @if(isset($igatipusok))
    <div class="pt-5">
        <h2 class="text-center">Igazolás</h2>
        <div class="w-75 bg-dark mx-auto text-light p-3 rounded m-3">
            <h3 class="text-center">osztály: {{$osztaly->oszt_nev}}</h3>
            <form action="/igazolasok/{{$osztaly->oszt_id}}" method="post">
                @csrf
                <input type="hidden" name="hiacnt" value="{{ count($hianyzasok); }}">
                <table class="table table-striped table-bordered">
                    <thead>
                        <tr>
                            <th>Név</th>
                            <th>Hiányzás ideje</th>
                            <th>Hiányzás típusa</th>
                            <th>Igazolás</th>

                        </tr>
                    </thead>
                    <tbody>
                        @for($i = 0; $i < count($hianyzasok); $i++)
                        <input type="hidden" name="id{{$i}}" value="{{$hianyzasok[$i]->hia_id}}">
                        <tr>
                            <td>{{$hianyzasok[$i]->diak_nev}}</td>
                            <td>{{date('Y.m.d. ',strtotime($hianyzasok[$i]->ora_datum)).$hianyzasok[$i]->ora_szam}}. óra: {{$hianyzasok[$i]->tant_nev.' - '.$hianyzasok[$i]->tanar_nev}}</td>
                            <td>
                                @if(($hianyzasok[$i]->hia_keses == 1)) késés: {{$hianyzasok[$i]->hia_perc}} perc @else hiányzás @endif
                            </td>
                            <td>
                                <div class="btn-group" role="group">
                                    <input type="radio" name="diak{{$i}}" id="igaz{{$i}}-0" value="{{$i}}-0" class="btn-check">
                                    <label for="igaz{{$i}}-0" class="btn btn-primary">Nincs igazolva</label>

                                    @for ($j = 0; $j < count($igatipusok); $j++)
                                        <input type="radio" name="diak{{$i}}" id="igaz{{$i}}-{{$j+1}}" value="{{$i}}-{{$j+1}}" class="btn-check">
                                        <label for="igaz{{$i}}-{{$j+1}}" class="btn btn-primary">{{$igatipusok[$j]->iga_nev}}</label>
                                    @endfor
                                </div>
                            </td>
                        </tr>
                        @endfor
                    </tbody>
                </table>
                <button type="submit" class="btn btn-primary">Igazolások mentése</button>
            </form>
        </div>
    </div>
    @endif
    @endif
    @else
    <div class="text-center">
        @if(count($hianyzasok) == 0)
            <h3>Még nem rögzítettek egyetlen hiányzást sem...</h3>
        @else
        <div class="table-responsive-xxl pt-5">
            <table class="table table-striped table-bordered mb-0 mx-auto text-center" id="table">
                <thead>
                    <tr>
                        <th class="align-middle">dátum</th>
                        <th class="align-middle">óra</th>
                        <th class="align-middle">hiányzás/késés</th>
                        <th class="align-middle">igazolva</th>
                    </tr>
                </thead>
                <tbody>
                        @foreach ($hianyzasok as $row)
                        @php
                        if (is_null($row->iga_id)) {
                            $igazolas = 'nincs';
                        } else {
                            $igazolas = igazolas::find($row->iga_id)->iga_nev;
                        }
                        @endphp
                        <tr>
                            <td class="align-middle">@php echo(date('Y.m.d.',strtotime($row->ora_datum)).' '.$row->ora_szam.'. óra'); @endphp</td>
                            <td class="align-middle">@php echo($row->tanar_nev.' - '.$row->tant_nev); @endphp</td>
                            <td class="align-middle">@if($row->hia_keses == 1) késés: {{$row->hia_perc}} perc @else hiányzás @endif</td>
                            <td class="align-middle">{{$igazolas}}</td>
                        </tr>
                        @endforeach

                </tbody>
            </table>
        </div>
        @endif
    </div>
    @endif
</main>
@endsection
