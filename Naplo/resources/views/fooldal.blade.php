@extends('layout')

@section('title')@endsection

@section('head')
<link rel="stylesheet" href="{{asset('css/stilus.css')}}">
@endsection

@section('content')

@include('header')
<?php
    if(count($jovo) > 0){
        $idok = [
            '8:00' ,
            '8:55' ,
            '9:50' ,
            '10:45',
            '11:40',
            '12:45',
            '13:40',
            '14:30',
            '15:10',
            '16:05'
        ];
        if(count($jovo) > 0) {
            $ora = [$jovo[0]];
            for ($i=1; $i < count($jovo); $i++) {
                $row = $jovo[$i];
                if(strtotime('+2 hours', strtotime(date('H:i'))) < strtotime($idok[($row->ora_szam-1)])){

                    array_push($ora, $row);
                }
            }
        }


    }

?>
    <main class="container text-center">
        @if($jog == 1)
            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-4">
                @if(isset($ora))
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
                                            <span>{{$ora[1]->tanar_nev}}</span>
                                        </div>
                                        <div class="col text-end">
                                            <span>{{$ora[1]->ora_terem}}</span>
                                        </div>
                                        <p>{{date('Y.m.d. ',strtotime($ora[0]->ora_datum)).$ora[1]->ora_szam}}. óra</p>
                                </div>
                                </div>
                            </a>
                        </div>
                    @endif
                @else
                    <div class="col mx-auto p-4">
                        <a href="/orarend">
                            <div class="card kartya ertesites">
                                <div class="card-header mt-0 pb-1 color-bg-accent color-background">
                                Következő óra
                                </div>
                                <p class="text-center"><b>úgy néz ki, hogy ma nem lesz órája...</b></p>
                            </div>
                        </a>
                    </div>
                @endif
                @isset($jegyek)
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
                @endisset

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
        @else
            <h1 class="mt-3">Üdv, {{$user->tanar_nev}}</h1>
            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-4">
            @isset($ora)
                @if(count($ora) > 1)
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
                    @if(count($ora) > 2)
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
                @else
                    <div class="col mx-auto p-4">
                        <a href="/orarend">
                            <div class="card kartya ertesites">
                                <div class="card-header mt-0 pb-0 color-bg-accent color-background">
                                Következő óra
                                </div>
                                <p class="text-center"><b>úgy néz ki, hogy ma nem lesz órája...</b></p>
                            </div>
                        </a>
                    </div>
                </div>
                @endif
            @endisset
        @endif
    </main>
@endsection

@section('js')
<script src="{{ asset('js/myjs.js') }}"></script>
@endsection
