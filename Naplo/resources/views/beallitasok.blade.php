@extends('layout_fooldal')
@section('content')
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
                                <option value="{{$row->id}}" {{$row->megnevezes == $tema ? "selected" : ""}}>{{$row->megnevezes}}</option>
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
                <input type="hidden" name="tipus" value="jelszo">
                <!-- jelszó változtatás -->
                @error('regi')
                                <span class="text-center text-warning">{{ $message }}</span>
                @enderror
                <div class="input-group mb-2">
                    <span class="input-group-text">Régi jelszó:</span>
                    <input type="password" name="regi" class="form-control">
                </div>
                <div class="row row-cols-1 row-cols-md-2 mb-3">
                    <div class="col mb-2">
                        @error('password')
                                <span class="text-center text-warning">{{ $message }}</span>
                        @enderror
                        <div class="input-group">
                            <span class="input-group-text">Új jelszó:</span>
                            <input type="password" name="password" class="form-control">
                        </div>
                    </div>
                    <div class="col mb-2">
                        @error('password_confirmation')
                                <span class="text-center text-warning">{{ $message }}</span>
                        @enderror
                        <div class="input-group">
                            <span class="input-group-text">Új jelszó megerősítése:</span>
                            <input type="password" name="password_confirmation" class="form-control">
                        </div>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary mb-2">Jelszó megváltoztatása</button>

            </form>
        </div>
    </main>
@endsection
