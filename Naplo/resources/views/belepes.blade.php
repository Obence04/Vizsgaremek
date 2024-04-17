@extends('layout')

@section('title') Belépés @endsection

@section('head')
<link rel="stylesheet" href="{{asset('css/belepes.css')}}">

@endsection

@section('content')
    <main class="container color-text">
        <div class="my-5 d-flex justify-content-center">
            <div class="card belepteto rounded-3 color-bg-secondary">
                <div class="card-header rounded-top-1 text-center fs-4 color-text color-bg-accent h-auto">
                Belépés
                </div>
                <div class="p-2 mx-auto w-75 color-text-secondary">
                    <form action="/belepes" method="POST">
                        @csrf
                        @error('msg')
                            <span class="text-danger fw-bold">{{ $message }}</span>
                        @enderror
                        <div class="beleptxt">
                            <label for="username" class="form-label">Felhasználónév: </label>
                            <input type="text" name="username" id="username" class="form-control mb-2">
                            @error('username')
                                <span class="text-danger fw-bold">{{ $message }}</span>
                            @enderror
                            <br>
                        </div class="beleptxt">
                            <div class="beleptxt">
                            <label for="password" class="form-label">Jelszó: </label>
                            <input type="password" name="password" id="password" class="form-control mb-2">
                            @error('password')
                                <span class="text-danger fw-bold">{{ $message }}</span>
                            @enderror<br>
                        </div>
                        <button type="submit" class="form-control mb-3 color-bg-primary gomb">Belépés</button>
                    </form>
                </div>
                <hr>
                <a onclick="megjelenit()" id="elfelejtett" class="text-center fs-4 align-bottom mb-3">elfelejtett jelszó</a>
            </div>
        </div>
    </main>
    <style>
    .modal {
        display: none;
        position: fixed;
        z-index: 1;
        padding-top: 100px;
        left: 0;
        top: 0;
        width: 100%;
        height: 100%;
        overflow: auto;
        background-color: rgb(0,0,0);
        background-color: rgba(0,0,0,0.4);
    }

    .modal-content {
        background-color: #fefefe;
        margin: auto;
        padding: 20px;
        border: 1px solid #888;
        width: 80%;
    }

    .close {
        color: #aaaaaa;
        float: right;
        font-size: 28px;
        font-weight: bold;
    }

    .close:hover,
    .close:focus {
        color: #000;
        text-decoration: none;
        cursor: pointer;
    }
    </style>
    <div id="uzenet" class="modal">
        <div class="modal-content">
          <span class="close">&times;</span>
          <p class="text-center">Elfelejtett jelszó esetén forduljon a rendszergazdájához.</p>
        </div>
    </div>
    <script>
        var modal = document.getElementById("uzenet");
        var span = document.getElementsByClassName("close")[0];
        modal.style.display = "none";

        function megjelenit(){
            modal.style.display = "block";
        }

        span.onclick = function() {
          modal.style.display = "none";
        }

        window.onclick = function(event) {
          if (event.target == modal) {
             modal.style.display = "none";
          }
        }
    </script>
@endsection
