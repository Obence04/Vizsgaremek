@extends('layout')

@section('title') Órarend @endsection

@section('head')
<link rel="stylesheet" href="{{asset('css/stilus.css')}}">
@endsection

@section('content')

@include('header')
<?php
    if(count($jovo) > 0){
        $idok = [
            '800' ,
            '855' ,
            '950' ,
            '1045',
            '1140',
            '1245',
            '1340',
            '1430',
            '1510',
            '1605'
        ];
        $ora =  [];
        //$oraszam = date('hm') < $idok[$ora->ora_szam];
        foreach ($ora as $row) {
            if(date('Hi') < $idok[$row->ora_szam-1]){
                array_push($jelenlegiora, ($idok[$row->ora_szam-1]));
            }
            //echo($ora->where('ora_szam','>' date('Hi') < $idok[$row->ora_szam-1]));
        }
    }
?>
    <main class="container text-center">
        @if($jog == 1)
        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-4">
            @if(count($ora) != 0)
            <div class="col p-4">
                <a href="/orarend">
                        <div class="card kartya ertesites">
                            <div class="card-header mt-0 pb-0 color-bg-accent color-background">
                                <p class="text-center mb-0"><b>Következő óra</b></p>
                                <hr class="my-1">
                                <h6 class="pb-0">{{$ora[0]->tant_nev}}</h6>
                            </div>
                            <div class="row px-2 mt-1" style="font-size: 10pt">
                                <div class="col text-start">
                                    <span>{{$ora[0]->tanar_nev}}</span>
                                </div>
                                <div class="col text-end">
                                    <span>{{$ora[0]->ora_terem}}</span>
                                </div>
                                <p>{{date('Y.m.d. ',strtotime($ora[0]->ora_datum)).$ora[0]->ora_szam}}. óra</p>

                            </div>
                        </div>
                    </a>
            </div>
            @endif
            @if(count($jegyek) > 0)
            <div class="col p-4">
                <a href="/ertekelesek">
                    <div class="card kartya ertesites">
                        <div class="card-header mt-0 pb-0 color-bg-accent color-background">
                            <p class="text-center mb-0"><b>Értékelés</b></p>
                            <hr class="my-1">
                            <h6 class="pb-0">{{$jegyek[0]->tant_nev}}</h6>
                        </div>
                        <div class="row px-2 mt-1" style="font-size: 10pt">
                            <div class="col text-start">
                                <span>{{$jegyek[0]->ido_nev}}</span>
                                <span>{{$jegyek[0]->tip_nev}}</span>
                            </div>
                            <div class="col text-end">
                                <span>{{$jegyek[0]->ert_leiras}}</span>
                            </div>
                            <span class="fs-5"><b>{{$jegyek[0]->ert_jegy}}</b></span>
                            <span>({{$jegyek[0]->ert_szazalek}}% súlyozású)</span>
                            <p>{{date('Y.m.d. ',strtotime($jegyek[0]->ora_datum)).$jegyek[0]->ora_szam}}. óra</p>
                        </div>
                    </div>
                </a>
            </div>

            @endif
            @if(count($jegyek) > 1)
            <div class="col p-4">
                <a href="/ertekelesek">
                    <div class="card kartya ertesites">
                        <div class="card-header mt-0 pb-0 color-bg-accent color-background">
                            <p class="text-center mb-0"><b>Értékelés</b></p>
                            <hr class="my-1">
                            <h6 class="pb-0">{{$jegyek[1]->tant_nev}}</h6>
                        </div>
                        <div class="row px-2 mt-1" style="font-size: 10pt">
                            <div class="col text-start">
                                <span>{{$jegyek[1]->ido_nev}}</span>
                                <span>{{$jegyek[1]->tip_nev}}</span>
                            </div>
                            <div class="col text-end">
                                <span>{{$jegyek[1]->ert_leiras}}</span>
                            </div>
                            <span class="fs-5"><b>{{$jegyek[1]->ert_jegy}}</b></span>
                            <span>({{$jegyek[1]->ert_szazalek}}% súlyozású)</span>
                            <p>{{date('Y.m.d. ',strtotime($jegyek[1]->ora_datum)).$jegyek[1]->ora_szam}}. óra</p>
                        </div>
                    </div>
                </a>
            </div>
            @endif
            @if(count($hianyzasok) > 0)
            <div class="col p-4">
                <a href="/hianyzasok">
                    <div class="card kartya ertesites">
                        <div class="card-header mt-0 pb-0 color-bg-accent color-background">
                            <p class="text-center mb-0"><b>Mulasztás</b></p>
                            <hr class="my-1">
                            <h6 class="pb-0">{{$hianyzasok[0]->tant_nev}}</h6>
                        </div>
                        <div class="px-2 mt-1" style="font-size: 10pt">
                            <span>@if($hianyzasok[0]->hia_keses == 1) {{$hianyzasok[0]->hia_perc}} perc késés @else hiányzás @endif</span>
                            <span>{{$hianyzasok[0]->tip_nev}}</span>
                            <p>{{date('Y.m.d. ',strtotime($hianyzasok[0]->ora_datum)).$hianyzasok[0]->ora_szam}}. óra</p>
                        </div>

                    </div>
                </a>
            </div>
            @endif
            @if(count($hianyzasok) > 1)
                <div class="col p-4">
                    <a href="/hianyzasok">
                        <div class="card kartya ertesites">
                            <div class="card-header mt-0 pb-0 color-bg-accent color-background">
                                <p class="text-center mb-0"><b>Mulasztás</b></p>
                                <hr class="my-1">
                                <h6 class="pb-0">{{$hianyzasok[1]->tant_nev}}</h6>
                            </div>
                            <div class="px-2 mt-1" style="font-size: 10pt">
                                <span>@if($hianyzasok[1]->hia_keses == 1) {{$hianyzasok[1]->hia_perc}} perc késés @else hiányzás @endif</span>
                                <span>{{$hianyzasok[1]->tip_nev}}</span>
                                <p>{{date('Y.m.d. ',strtotime($hianyzasok[1]->ora_datum)).$hianyzasok[1]->ora_szam}}. óra</p>
                            </div>

                        </div>
                    </a>
                </div>
                @endif
            </div>
        </div>
        @else
        <h1 class="mt-3">Üdv, {{$user->tanar_nev}}</h1>
        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-4">
            @if(count($ora) != 0)
                <div class="col p-4">
                    <a href="/orarend">
                        <div class="card kartya ertesites">
                            <div class="card-header mt-0 pb-0 color-bg-accent color-background">
                                <p class="text-center mb-0"><b>Következő óra</b></p>
                                <hr class="my-1">
                                <h6 class="pb-0">{{$ora[0]->tant_nev}}</h6>
                            </div>
                            <div class="row px-2 mt-1" style="font-size: 10pt">
                                <div class="col text-start">
                                    <span>osztály: {{$ora[0]->oszt_nev}}</span>
                                </div>
                                <div class="col text-end">
                                    <span>{{$ora[0]->ora_terem}}</span>
                                </div>
                                <p>{{date('Y.m.d. ',strtotime($ora[0]->ora_datum)).$ora[0]->ora_szam}}. óra</p>
                            </div>
                        </div>
                    </a>
                </div>
            @endif
            @if(count($ora) > 1)
                <div class="col p-4">
                    <a href="/orarend">
                        <div class="card kartya ertesites">
                            <div class="card-header mt-0 pb-0 color-bg-accent color-background">
                                <p class="text-center mb-0"><b>Következő óra</b></p>
                                <hr class="my-1">
                                <h6 class="pb-0">{{$ora[1]->tant_nev}}</h6>
                            </div>
                            <div class="row px-2 mt-1" style="font-size: 10pt">
                                <div class="col text-start">
                                    <span>osztály: {{$ora[1]->oszt_nev}}</span>
                                </div>
                                <div class="col text-end">
                                    <span>{{$ora[1]->ora_terem}}</span>
                                </div>
                                <p>{{date('Y.m.d. ',strtotime($ora[1]->ora_datum)).$ora[1]->ora_szam}}. óra</p>
                            </div>
                        </div>
                    </a>
                </div>
            @endif
            @if (count($ora) == 0)
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
        </div>
        @endisset
        @endif
    </main>
@endsection

@section('js')
<script src="{{ asset('js/myjs.js') }}"></script>
@endsection
