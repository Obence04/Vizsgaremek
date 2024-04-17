@extends('layout')

@section('title') Órarend @endsection

@section('head')
<link rel="stylesheet" href="{{asset('css/stilus.css')}}">
@endsection

@section('content')

@include('header')

    <main class="container text-center">
        @if($jog == 1)
        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-4">
            @isset($ora)
            <div class="col p-4">
                <a href="/orarend">
                        <div class="card kartya">
                            <div class="card-header mt-0 pb-0 color-bg-accent color-background">
                                <p class="text-center mb-0"><b>Következő óra</b></p>
                                <hr class="my-1">
                                <h6 class="pb-0">{{$ora[0]->tant_nev}}</h6>
                            </div>
                            <div class="row px-2 mt-1" style="font-size: 10pt">
                                <div class="col text-start">
                                    <p>{{$ora[0]->tanar_nev}}</p>
                                </div>
                                <div class="col text-end">
                                    <p>{{$ora[0]->ora_terem}}</p>
                                </div>
                                <p>{{$ora[0]->ora_datum}}</p>
                            </div>
                        </div>
                    </a>
            </div>
            @endisset
            @isset($jegyek[0])
            <div class="col p-4">
                <a href="/orarend">
                        <div class="card kartya">
                            <div class="card-header mt-0 pb-0 color-bg-accent color-background">
                                <p class="text-center mb-0"><b>Értékelés</b></p>
                                <hr class="my-1">
                                <h6 class="pb-0">{{$jegyek[0]->tant_nev}}</h6>
                            </div>
                            <div class="row px-2 mt-1" style="font-size: 10pt">
                                <div class="col text-start">
                                    <p>{{$jegyek[0]->ido_nev}}</p>
                                    <p>{{$jegyek[0]->tip_nev}}</p>
                                </div>
                                <div class="col text-end">
                                    <p>{{$jegyek[0]->ert_leiras}}</p>
                                </div>
                                <p>{{$jegyek[0]->ora_datum}}</p>
                            </div>
                        </div>
                    </a>
            </div>

            @endisset
            @isset($jegyek[1])
            <div class="col mx-auto p-4">
                <a href="/orarend">
                        <div class="card kartya">
                            <div class="card-header mt-0 pb-0 color-bg-accent color-background">
                                <p class="text-center mb-0"><b>Értékelés</b></p>
                                <hr class="my-1">
                                <h6 class="pb-0">{{$jegyek[1]->tant_nev}}</h6>
                            </div>
                            <div class="row px-2 mt-1" style="font-size: 10pt">
                                <div class="col text-start">
                                    <p>{{$jegyek[1]->ido_nev}}</p>
                                    <p>{{$jegyek[1]->tip_nev}}</p>
                                </div>
                                <div class="col text-end">
                                    <p>{{$jegyek[1]->ert_leiras}}</p>
                                </div>
                                <p>{{$jegyek[1]->ora_datum}}</p>
                            </div>
                        </div>
                </a>
            </div>
            @endisset
            @isset($hianyok[0])
            <div class="col mx-auto p-4">
                <a href="/hianyzasok">
                    <p class="text-center"><b>Értékelés</b></p>
                        <div class="card kartya">
                            <div class="card-header mt-0 pb-0 color-bg-accent color-background">
                                <h6 class="pb-0">{{$jegyek[1]->tant_nev}}</h6>
                            </div>
                            <div class="row px-2 mt-1" style="font-size: 10pt">
                                <div class="col text-start">
                                    <p>{{$jegyek[1]->tanar_nev}}</p>
                                </div>
                                <div class="col text-end">
                                <p>{{$jegyek[1]->ora_terem}}</p>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            @endisset
            @isset($hianyok[1])
            <div class="col mx-auto p-4">
                <a href="/hianyok">
                    <p class="text-center"><b>Értékelés</b></p>
                        <div class="card kartya">
                            <div class="card-header mt-0 pb-0 color-bg-accent color-background">
                                <h6 class="pb-0">{{$jegyek[1]->tant_nev}}</h6>
                            </div>
                            <div class="row px-2 mt-1" style="font-size: 10pt">
                                <div class="col text-start">
                                    <p>{{$jegyek[1]->tanar_nev}}</p>
                                </div>
                                <div class="col text-end">
                                <p>{{$jegyek[1]->ora_terem}}</p>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            @endisset
        </div>
        @else
        <h1>Üdv, {{$user->tanar_nev}}</h1>
        @isset($ora)
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
        @else
        <div class="col mx-auto p-4">
            <a href="">
                <div class="card kartya rounded-3">
                    <div class="card-header rounded-top-1">
                    Következő óra
                    </div>
                    <p class="text-center"><b>úgy néz ki, hogy nem lesz órája...</b></p>
                </div>
            </a>
        </div>
        @endisset
        @endif
    </main>
@endsection

@section('js')
<script src="{{ asset('js/myjs.js') }}"></script>
@endsection
