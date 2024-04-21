@extends('layout')

@section('title') Profil keresés - @endsection

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
    <div>
        <h3>Profil keresése</h3>
        <form action="/profilkeres" method="post" class="row row-cols-md-auto g-3 pt-2 align-items-center justify-content-center">
            @csrf
            <div class="col-12">
                <div class="btn-group ms-3" role="group">
                    <input type="radio" name="opcio" id="nev" value="nev" class="btn-check" checked>
                    <label for="nev" class="btn btn-primary">Felhasználónév</label>
                    <input type="radio" name="opcio" id="email" value="email" class="btn-check">
                    <label for="email" class="btn btn-primary">E-mail cím</label>
                </div>
            </div>
            <div class="col-12">
                <input type="text" name="keres" id="keres" class="form-control">
            </div>
            <div class="col">
                <button type="submit" class="ms-3 btn btn-primary">Keresés</button>
            </div>

        </form>

    </div>
    @isset($talalatok)
    <div class="py-4">
        <h3>Találatok:</h3>
        @if(count($talalatok) == 0)
        <h5>Nincs találat!</h5>
        @else
        <div class="row row-cols-1 row-cols-sm-2 row-cols-lg-4 g-3">
            @foreach ($talalatok as $row)
            <div class="col">
                <a href="/profil/{{$row->fel_id}}">
                <div class="card">
                    <p><b>Felhasználónév:</b> {{$row->fel_nev}}</p>
                    <p>{{$row->fel_email}}</p>
                </div>
                </a>
            </div>
        @endforeach
        </div>
        @endif
    </div>
    @endisset
</main>
@endsection

@section('js')
<script src="{{ asset('js/myjs.js') }}"></script>
@endsection
