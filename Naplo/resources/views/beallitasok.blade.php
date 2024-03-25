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
        @error('msg')
        <style>
            body {font-family: Arial, Helvetica, sans-serif;}

            /* The Modal (background) */
            .modal {
              display: none; /* Hidden by default */
              position: fixed; /* Stay in place */
              z-index: 1; /* Sit on top */
              padding-top: 100px; /* Location of the box */
              left: 0;
              top: 0;
              width: 100%; /* Full width */
              height: 100%; /* Full height */
              overflow: auto; /* Enable scroll if needed */
              background-color: rgb(0,0,0); /* Fallback color */
              background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
            }

            /* Modal Content */
            .modal-content {
              background-color: #fefefe;
              margin: auto;
              padding: 20px;
              border: 1px solid #888;
              width: 80%;
            }

            /* The Close Button */
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
              <p>{{$message}}</p>
            </div>
        </div>
        <script>
            // Get the modal
            var modal = document.getElementById("uzenet");
            var span = document.getElementsByClassName("close")[0];

            modal.style.display = "block";
            // When the user clicks on <span> (x), close the modal
            span.onclick = function() {
              modal.style.display = "none";
            }

            // When the user clicks anywhere outside of the modal, close it
            window.onclick = function(event) {
              if (event.target == modal) {
                modal.style.display = "none";
              }
            }
            </script>
          @enderror
    </main>
@endsection
