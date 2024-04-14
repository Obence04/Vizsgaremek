@extends('layout')

@section('title') Órarend @endsection

@section('head')
<link rel="stylesheet" href="{{asset('css/stilus.css')}}">
@endsection

@section('content')

@include('header')

    <main class="container text-center">
        <button type="button" class="btn btn-secondary mt-5" onclick="Napinezet()">Napi nézet</button>
        <button type="button" class="btn btn-secondary mt-5" onclick="Hetinezet()">Heti nézet</button>
        <div class="table-responsive pt-3">
            <table class="table table-bordered border-dark align-middle" id="orarend">
                <thead>
                    <tr>
                        <th>Hétfő</th>
                        <th>Kedd</th>
                        <th>Szerda</th>
                        <th>Csütörtök</th>
                        <th>Péntek</th>
                        <th>Szombat</th>
                        <th>Vasárnap</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Matek</td>
                        <td>Irodalom</td>
                        <td>Erkölcstan</td>
                        <td>Nyelvtan</td>
                        <td>Történelem</td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>Irodalom</td>
                        <td>Erkölcstan</td>
                        <td>Nyelvtan</td>
                        <td>Történelem</td>
                        <td>Vizuális kultúra</td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>Erkölcstan</td>
                        <td>Nyelvtan</td>
                        <td>Történelem</td>
                        <td>Vizuális kultúra</td>
                        <td>Matek</td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>Nyelvtan</td>
                        <td>Történelem</td>
                        <td>Vizuális kultúra</td>
                        <td>Matek</td>
                        <td>Irodalom</td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>Történelem</td>
                        <td>Vizuális kultúra</td>
                        <td>Matek</td>
                        <td>Irodalom</td>
                        <td>Erkölcstan</td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>Vizuális kultúra</td>
                        <td>Matek</td>
                        <td>Irodalom</td>
                        <td>Erkölcstan</td>
                        <td>Nyelvtan</td>
                        <td></td>
                        <td></td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="table-responsive">
            <table class="table table-bordered border-dark align-middle">
                <thead>
                    <tr>
                        <th></th>
                        <th scope="col">Szeptember</th>
                        <th scope="col">Október</th>
                        <th scope="col">November</th>
                        <th scope="col">December</th>
                        <th scope="col">Január</th>
                        <th scope="col">Félév</th>
                        <th scope="col">Február</th>
                        <th scope="col">Március</th>
                        <th scope="col">Április</th>
                        <th scope="col">Május</th>
                        <th scope="col">Június</th>
                        <th scope="col">Év vége</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row"><a href="">Gyerek1</a></th>
                        <th></th>
                        <td>1, 5</td>
                        <td>2</td>
                        <td>4, 2</td>
                        <td>3</td>
                        <td>5, 5, 4</td>
                        <td></td>
                        <td>5</td>
                        <td></td>
                        <td>4</td>
                        <td></td>
                        <td>2, 4, 4</td>
                    </tr>
                    <tr>
                        <th scope="row"><a href="">Gyerek2</a></th>
                        <th></th>
                        <td>2</td>
                        <td>2</td>
                        <td>1, 5, 3</td>
                        <td></td>
                        <td>1</td>
                        <td>5, 1</td>
                        <td></td>
                        <td>3, 3, 3</td>
                        <td>2</td>
                        <td>4</td>
                        <td>5, 5, 4</td>
                    </tr>
                    <tr>
                        <th scope="row"><a href="">Gyerek3</a></th>
                        <th></th>
                        <td>3</td>
                        <td>2, 2</td>
                        <td>3</td>
                        <td>3, 4</td>
                        <td>1, 5, 3</td>
                        <td></td>
                        <td>5, 5, 4</td>
                        <td></td>
                        <td></td>
                        <td>1, 5, 3</td>
                        <td>3, 3, 3</td>
                    </tr>
            </table>
        </div>
        <div class="row">
            <div class="col mx-auto p-4">
                <a href="">
                    <div class="card kartya rounded-3">
                        <div class="card-header rounded-top-1">
                        Feljegyzés
                        </div>
                        <p class="text-center"><b>Beírás</b></p>
                        <p>A gyereke az órán ......</p>
                    </div>
                </a>
            </div>
            <div class="col mx-auto p-4">
                <a href="">
                    <div class="card kartya rounded-3">
                        <div class="card-header rounded-top-1">
                        Üzenet
                        </div>
                        <div>
                            <p class="text-center"><b>Hiányzás</b></p>
                            <p>2024. 01. 08.</p>
                            <p>1. óráról hiányzott</p>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </main>
@endsection
