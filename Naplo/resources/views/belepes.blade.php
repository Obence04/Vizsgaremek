@extends('layout_belepes')
@section('content')
    <main class="container color-text">
        <div class="my-5 d-flex justify-content-center">
            <div class="card belepteto rounded-3 color-bg-secondary">
                <div class="card-header rounded-top-1 text-center fs-4 color-text color-bg-accent">
                Belépés
                </div>
                <div class="p-2 mx-auto w-75 color-text-secondary">
                    <form>
                        <label for="username" class="form-label">Felhasználónév: </label>
                        <input type="text" name="username" class="form-control mb-2"><br>
                        <label for="passw" class="form-label">Jelszó: </label>
                        <input type="password" name="passw" class="form-control mb-2"><br>
                        <button type="submit" class="form-control mb-3 color-bg-primary">Belépés</button>
                    </form>
                </div>
                <hr>
                <a href="" class="text-center fs-4" style="font-variant: small-caps">elfelejtett jelszó</a>
            </div>
        </div>
    </main>
@endsection
