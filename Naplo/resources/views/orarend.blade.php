@extends('layout_fooldal')
@section('content')
<main class="container-fluid text-center">
    @php
        use App\Models\ora;
        $datum = date('y-m-d');
        echo $datum;
    @endphp
    <div class="table-responsive-xxl pt-5">
    <table class="table mb-0 mx-auto text-center" id="table">
        <thead>
            <tr id="days">
                <td class="align-middle">{{"osztály"}}</td>

                <script>
                    function Week(Day){
                        const HetNapjai = ["Vasárnap","Hétfő","Kedd","Szerda","Csütörtök","Péntek","Szombat"];
                        return HetNapjai[Day];
                    }

                    const datum = new Date();
                    const NapSorsz = datum.getDay();

                    console.log(NapSorsz);
                    for (let i = NapSorsz; i < 7; i++) {
                        const day = NapSorsz-1+i
                        //todo
                        // if (day > 7) {
                        //     i = 0;
                        // }
                        const td = document.createElement("td")
                        const text = document.createTextNode(Week(day));
                        td.appendChild(text);
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
                <td class="align-middle">{{$csengo[$i]}}</td>
            @while ($curdate < $enddate)

                @php
                    $val = ora::whereRaw('oszt_id = '.$user->oszt_id.' AND ora_datum = "'.date('Y-m-d',$curdate).'" AND ora_szam = '.($i+1))->get();
                @endphp
                <td class="align-middle">
                @isset($val[0])
                    {{$val[0]}}
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
