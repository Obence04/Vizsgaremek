@extends('layout_fooldal')
@section('content')
    <main class="container">
        <h3 class="text-center">Beállítások</h3>
        <div>
            <form action="/beallitasok" method="post">
                @csrf
                <input type="hidden" name="tipus" value="tema">
                <label for="tema" class="form-label">Téma:</label>
                <select name="tema" class="form-control">
                    @foreach ($temaoptions as $row)
                        <option value="{{$row->id}}">{{$row->megnevezes}}</option>
                    @endforeach
                </select>
                <button type="submit" class="btn btn-primary">Téma megváltoztatása</button>
            </form>

            <form action="/beallitasok" method="post">
                <input type="hidden" name="tipus" value="egyeb">

            </form>
        </div>
    </main>
@endsection
