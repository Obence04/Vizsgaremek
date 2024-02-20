@extends('welcomelayout')
@section('content')
<body>
    <main class="container">
        <div class="my-5 d-flex justify-content-center">
            <div class="card belepteto rounded-3">
                <div class="card-header rounded-top-1 text-center fs-4">
                Belépés
                </div>
                <div class="p-2 d-flex justify-content-center text-end">
                    <form>
                        <label for="usern">Felhasználónév: </label>
                        <input type="text" name="usern" id="usern" class="mb-2"><br>
                        <label for="passw">Jelszó: </label>
                        <input type="password" name="passw" id="passw" class="mb-2"><br>
                        <button type="submit">Belépés</button>
                    </form>
                </div>
                <hr>
                <a href="" class="text-center">Elfelejtett jelszó</a>
            </div>
        </div>
    </main>
@endsection
