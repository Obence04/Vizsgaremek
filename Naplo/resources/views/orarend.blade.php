@extends('layout')

@section('title') Órarend @endsection

@section('head')
<link rel="stylesheet" href="{{asset('css/orarend.css')}}">
@endsection

@section('content')

@include('header')

<main class="container-fluid text-center">
    @php
        use App\Models\ora;
        $datum = date('y-m-d');
        $aktualszin = "#AAAADD";
    @endphp
    <div class="table-responsive-xxl pt-5">
    <table class="table mb-0 mx-auto text-center" id="table">
        <thead>
            <tr id="days">
                <td class="align-middle">
                    @isset($osztaly)
                        {{$osztaly}}
                    @endisset
                </td>

                <script>
                    function Week(Day){
                        const HetNapjai = ["Vasárnap","Hétfő","Kedd","Szerda","Csütörtök","Péntek","Szombat"];
                        return HetNapjai[Day];
                    }

                    function Honev(Ho){
                        let Month = ["Január", "Február", "Március", "Április", "Május", "Június", "Július",
                        "Augusztus", "Szeptember", "Október", "November", "December"];
                        return Month[Ho];
                    }
                    const szin = "{{$aktualszin}}";
                    const datum = new Date();
                    const honap = datum.getMonth();
                    const nap = datum.getDate();
                    const NapSorsz = datum.getDay();

                    console.log(NapSorsz);
                    for (let i = 0; i < 7; i++) {
                        let day = NapSorsz-1+i;
                        if (day < 0) {
                            day = day + 7;
                        }
                        if (day > 6) {
                            day = day- 7;
                        }
                        console.log(day);
                        const td = document.createElement("td");
                        const br = document.createElement("br");
                        const text1 = document.createTextNode(Week(day) + ", ");
                        const text2 = document.createTextNode(Honev(honap) + " " + (nap-1+i) + ".");
                        td.appendChild(text1);
                        td.appendChild(br);
                        td.appendChild(text2);
                        if (i == 1) {
                            td.id = "today";
                        }
                        document.getElementById('days').appendChild(td);
                    }
                </script>
             </tr>
        </thead>
        <tbody>


            @for ($i = 0; $i < 10; $i++)
            @php
                $curdate = strtotime('-1 day',strtotime($datum));
                $enddate = strtotime('+7 days',$curdate);
                $csengo = [
                    '8:00 - 8:45',
                    '8:55 - 9:40',
                    '9:50 - 10:35',
                    '10:45 - 11:30',
                    '11:40 - 12:25',
                    '12:45 - 13:30',
                    '13:40 - 14:25',
                    '14:30 - 15:15',
                    '15:20 - 16:05',
                    '16:10 - 16:55',
                ];
            @endphp
            <tr>
                <td class="align-middle" style="width:100px">{{$csengo[$i]}}</td>
            @while ($curdate < $enddate)

                @php
                    if ($jog > 1) {
                        $ora = ora::join('osztalyok','osztalyok.oszt_id','orak.oszt_id')->join('tanitott','tanitott.tanit_id','orak.tanit_id')->join('tanarok','tanarok.tanar_id','tanitott.tanar_id')->join('tantargyak','tantargyak.tant_id','tanitott.tant_id')->whereRaw('tanarok.fel_id = '.$user->fel_id.' AND orak.ora_datum = "'.date('Y-m-d',$curdate).'" AND orak.ora_szam = '.($i+1))->get();
                    } else {
                        $ora = ora::join('osztalyok','osztalyok.oszt_id','orak.oszt_id')->join('tanitott','tanitott.tanit_id','orak.tanit_id')->join('tanarok','tanarok.tanar_id','tanitott.tanar_id')->join('tantargyak','tantargyak.tant_id','tanitott.tant_id')->whereRaw('orak.oszt_id = '.$user->oszt_id.' AND orak.ora_datum = "'.date('Y-m-d',$curdate).'" AND orak.ora_szam = '.($i+1))->get();
                    }
                @endphp
                <td class="align-middle" style="width:100px; height:100px" @if($curdate == strtotime($datum)) id="today" @endif>
                @isset($ora[0])
                <div class="card kartya">
                    <div class="card-header mt-0 pb-0 color-bg-accent color-background">
                        <h6 class="pb-0">{{$ora[0]->tant_nev}}</h6>
                    </div>
                    <div class="row px-2 mt-1" style="font-size: 10pt">
                        <div class="col text-start">
                            <p>@if($jog > 1) osztály: {{$ora[0]->oszt_nev}} @else {{$ora[0]->tanar_nev}} @endif</p>
                        </div>
                        <div class="col text-end">
                            <p>{{$ora[0]->ora_terem}}</p>
                        </div>
                    </div>
                </div>
                @endisset
                </td>
                @php $curdate = strtotime('+1 day',$curdate);
                @endphp

            @endwhile
            </tr>
            @endfor



        </tbody>
     </table>
    </div>
</main>
@endsection

@section('js')
<script src="{{ asset('js/myjs.js') }}"></script>
@endsection
