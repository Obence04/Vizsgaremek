@extends('layout')

@section('title') Órarend @endsection

@section('head')
<link rel="stylesheet" href="{{asset('css/stilus.css')}}">
@endsection

@section('content')

@include('header')
    <main class="container">
        <h3 class="text-center">Beállítások</h3>
        <div>
            <form action="/beallitasok" method="post">

                <h5>Téma megváltoztatása</h5>
                <div class="row row-cols-1 row-cols-sm-2 mb-5">
                    <div class="col">
                    @csrf
                    <input type="hidden" name="tipus" value="tema">
                    <div class="input-group mb-2">
                        <span class="input-group-text">Téma:</span>
                        <select name="tema" class="form-select">
                            @foreach ($temaoptions as $row)
                                <option value="{{$row->tema_id}}" {{$row->tema_nev == $tema ? "selected" : ""}}>{{$row->tema_nev}}</option>
                            @endforeach
                        </select>
                    </div>
                    </div>
                    <div class="col">
                    <button type="submit" class="btn btn-primary mb-2">Téma megváltoztatása</button>
                    </div>
                </div>
            </form>

            <h5>Jelszó módosítása</h5>
            <form action="/beallitasok" method="post">
                @csrf
                <input type="hidden" name="tipus" value="jelszo">
                <!-- jelszó változtatás -->
                <div class="input-group mb-2">
                    <span class="input-group-text">Régi jelszó:</span>
                    <input type="password" name="regi" class="form-control">
                </div>
                @error('regi')
                                <span class="text-center text-warning">{{ $message }}</span>
                @enderror
                <div class="row row-cols-1 row-cols-md-2 mb-3">
                    <div class="col mb-2">
                        <div class="input-group">
                            <span class="input-group-text">Új jelszó:</span>
                            <input type="password" name="password" class="form-control">
                        </div>
                        @error('password')
                                <span class="text-center text-warning">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="col mb-2">
                        <div class="input-group">
                            <span class="input-group-text">Új jelszó megerősítése:</span>
                            <input type="password" name="password_confirmation" class="form-control">
                        </div>
                        @error('password_confirmation')
                                <span class="text-center text-warning">{{ $message }}</span>
                        @enderror
                    </div>
                    <p>Új jelszó: legalább 8 karakter, kis- és nagybetű, szám</p>
                </div>
                <button type="submit" class="btn btn-primary mb-2">Jelszó megváltoztatása</button>
            </form>
        </div>
        
    </main>
@endsection

@section('js')
<script src="{{ asset('js/myjs.js') }}"></script>
@endsection
