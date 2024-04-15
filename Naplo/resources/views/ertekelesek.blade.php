@extends('layout')

@section('title') Órarend @endsection

@section('head')
<link rel="stylesheet" href="{{asset('css/ertekeles.css')}}">

@endsection

@section('content')

@include('header')
<main class="container-fluid">
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
            <form action="/ertekelesek" method="post">
                <label for="ora" class="form-label">Óra:</label>
                <select name="ora" class="form-select">
                    @foreach ($orak as $row)
                        <option value="{{$row->ora_id}}">@php echo($row->oszt_nev.': '.$row->ora_datum.' '.$row->ora_szam.'. óra - '.$row->tant_nev); @endphp</option>
                    @endforeach
                </select>
                <!-- AZ OSZTÁLY KIVÁLASZTÁSÁHOZ EGY MODAL KELL -> a modal a kiválasztás után újratölti az oldalt és isset() segítségével kiválaszt egy osztályt -->
            </form>
        </div>

    </div>
    @endif
    @else
    <div class="text-center">
        <div class="table-responsive-xxl pt-5">
            <table class="table mb-0 mx-auto text-center" id="table">
                <!-- TODO értékelések tábla 10(hónap) + 2(évvégi) oszlop -->
                <thead>
                    <tr>
                        <td class="align-middle">{{"osztály"}}</td>
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
                    <tr>
                        <td class="align-middle">{{"tantárgy"}}</td>
                        <td class="align-middle"></td>
                        <td class="align-middle"></td>
                        <td class="align-middle"></td>
                        <td class="align-middle"></td>
                        <td class="align-middle"></td>
                        <td class="align-middle"></td>
                        <td class="align-middle"></td>
                        <td class="align-middle"></td>
                        <td class="align-middle"></td>
                        <td class="align-middle"></td>
                        <td class="align-middle"></td>
                        <td class="align-middle"></td>
                    </tr>
                    <tr>
                        <td class="align-middle">{{"tantárgy"}}</td>
                        <td class="align-middle"></td>
                        <td class="align-middle"></td>
                        <td class="align-middle"></td>
                        <td class="align-middle"></td>
                        <td class="align-middle"></td>
                        <td class="align-middle"></td>
                        <td class="align-middle"></td>
                        <td class="align-middle"></td>
                        <td class="align-middle"></td>
                        <td class="align-middle"></td>
                        <td class="align-middle"></td>
                        <td class="align-middle"></td>
                    </tr>
                    <tr>
                        <td class="align-middle">{{"tantárgy"}}</td>
                        <td class="align-middle"></td>
                        <td class="align-middle"></td>
                        <td class="align-middle"></td>
                        <td class="align-middle"></td>
                        <td class="align-middle"></td>
                        <td class="align-middle"></td>
                        <td class="align-middle"></td>
                        <td class="align-middle"></td>
                        <td class="align-middle"></td>
                        <td class="align-middle"></td>
                        <td class="align-middle"></td>
                        <td class="align-middle"></td>
                    </tr>
                    <tr>
                        <td class="align-middle">{{"tantárgy"}}</td>
                        <td class="align-middle"></td>
                        <td class="align-middle"></td>
                        <td class="align-middle"></td>
                        <td class="align-middle"></td>
                        <td class="align-middle"></td>
                        <td class="align-middle"></td>
                        <td class="align-middle"></td>
                        <td class="align-middle"></td>
                        <td class="align-middle"></td>
                        <td class="align-middle"></td>
                        <td class="align-middle"></td>
                        <td class="align-middle"></td>
                    </tr>
                    <tr>
                        <td class="align-middle">{{"tantárgy"}}</td>
                        <td class="align-middle"></td>
                        <td class="align-middle"></td>
                        <td class="align-middle"></td>
                        <td class="align-middle"></td>
                        <td class="align-middle"></td>
                        <td class="align-middle"></td>
                        <td class="align-middle"></td>
                        <td class="align-middle"></td>
                        <td class="align-middle"></td>
                        <td class="align-middle"></td>
                        <td class="align-middle"></td>
                        <td class="align-middle"></td>
                    </tr>
                    <tr>
                        <td class="align-middle">{{"tantárgy"}}</td>
                        <td class="align-middle"></td>
                        <td class="align-middle"></td>
                        <td class="align-middle"></td>
                        <td class="align-middle"></td>
                        <td class="align-middle"></td>
                        <td class="align-middle"></td>
                        <td class="align-middle"></td>
                        <td class="align-middle"></td>
                        <td class="align-middle"></td>
                        <td class="align-middle"></td>
                        <td class="align-middle"></td>
                        <td class="align-middle"></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    @endif
</main>
@endsection

@section('js')
<script src="{{ asset('js/myjs.js') }}"></script>
@endsection
