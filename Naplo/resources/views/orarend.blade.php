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
                        if (i == NapSorsz+1) {
                            td.style.backgroundColor =szin;
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
                    $stilus = '';
                    if ($curdate == strtotime($datum)){
                        $stilus = '; background-color: '.$aktualszin;
                    }
                @endphp
                <td class="align-middle" style="width:100px; height:100px{{$stilus}}">
                @isset($ora[0])
                    <p style="font-size: 10pt">
                        {{$ora[0]->tanar_nev}}
                        {{$ora[0]->tant_nev}}
                        {{$ora[0]->ora_terem}}
                    </p>
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
