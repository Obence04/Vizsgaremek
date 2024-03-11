@extends('layout_belepes')
@section('content')
    <main class="container color-text">
        <div class="my-5 d-flex justify-content-center">
            <div class="card belepteto rounded-3 color-bg-secondary">
                <div class="card-header rounded-top-1 text-center fs-4 color-text color-bg-accent">
                Belépés
                </div>
                <div class="p-2 mx-auto w-75 color-text-secondary">
                    @error('msg')
                        <span class="text-danger fw-bold">{{ $message }}</span>
                    @enderror
                    <form action="/belepes" method="POST">
                        @csrf
                        <div class="beleptxt">
                            <label for="username" class="form-label">Felhasználónév: </label>
                            <input type="text" name="username" class="form-control mb-2">
                            @error('username')
                                <span class="text-danger fw-bold">{{ $message }}</span>
                            @enderror
                            <br>
                        </div class="beleptxt">
                            <div class="beleptxt">
                            <label for="password" class="form-label">Jelszó: </label>
                            <input type="password" name="password" class="form-control mb-2">
                            @error('password')
                                <span class="text-danger fw-bold">{{ $message }}</span>
                            @enderror<br>
                        </div>
                        <button type="submit" class="form-control mb-3 color-bg-primary gomb">Belépés</button>
                    </form>
                </div>
                <hr>
                <a href="/elfelejtett" class="text-center fs-4 aign-bottom" style="font-variant: small-caps">elfelejtett jelszó</a>
            </div>
        </div>
    </main>
@endsection
