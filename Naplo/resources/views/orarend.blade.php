@extends('layout_fooldal')
@section('content')
<main class="container-fluid text-center">
    @php
        use App\Models\ora;
        $datum = date('y-m-d');
        echo $datum
    @endphp
    <div class="table-responsive-xxl pt-5">
    <table class="table mb-0 mx-auto text-center" id="table">
        <thead>
            <tr>
                <td class="align-middle">{{"osztály"}}</td>
                <td class="align-middle" id="weekday">Hétfő</td>
                <td class="align-middle" id="weekday">Kedd</td>
                <td class="align-middle" id="weekday">Szerda</td>
                <td class="align-middle" id="weekday">Csütörtök</td>
                <td class="align-middle" id="weekday">Péntek</td>
                <td class="align-middle" id="weekday">Szombat</td>
                <td class="align-middle" id="weekday">Vasárnap</td>
             </tr>
        </thead>
        <tbody>
            <!-- szopi szopi 5 dollá'
            @php
                $curdate = strtotime('-1 day',strtotime($datum));
                $enddate = strtotime('+5 days',$curdate);
            @endphp
            @while ($curdate < $enddate)
            <tr>
                @php $nap = ora::where('ora_datum','=',date('Y-m-d', $curdate))->orderby('ora_szam')->get() @endphp
                @for ($i = 0; $i < count($nap); $i++)
                @php $arr = ora::where('ora_datum','=',date('Y-m-d', $curdate))->where('ora_szam','=',$i); @endphp
                    @if (ora::where('ora_datum','=',date('Y-m-d', $curdate))->where('ora_szam','=',$i)->count() > 0)
                        <td class="align-middle">
                        {{ora::where('ora_datum','=',date('Y-m-d', $curdate))->where('ora_szam','=',$i)->first()->get()}}
                        </td>


                    @endif
                @endfor
                @php $curdate = strtotime('+1 day',$curdate); @endphp
                </tr>
            @endwhile
            <!--
            @for ($i = 0; $i < 11; $i++)
                <tr>
                @for ($j = 0; $j < 8; $j++)
                    <td class="align-middle">
                        {{ $orak[2]->ora_terem }}
                    </td>

                @endfor
                </tr>
            @endfor


            -->
           <tr>
                <td class="align-middle">8:00 - 8:45</td>
                <td class="align-middle">

                </td>
                <td class="align-middle"></td>
                <td class="align-middle"></td>
                <td class="align-middle"></td>
                <td class="align-middle"></td>
                <td class="align-middle"></td>
                <td class="align-middle"></td>
           </tr>
           <tr>
                <td class="align-middle">9:00 - 9:45</td>
                <td class="align-middle"></td>
                <td class="align-middle"></td>
                <td class="align-middle"></td>
                <td class="align-middle"></td>
                <td class="align-middle"></td>
                <td class="align-middle"></td>
                <td class="align-middle"></td>
           </tr>
           <tr>
                <td class="align-middle">10:00 - 10:45</td>
                <td class="align-middle"></td>
                <td class="align-middle"></td>
                <td class="align-middle"></td>
                <td class="align-middle"></td>
                <td class="align-middle"></td>
                <td class="align-middle"></td>
                <td class="align-middle"></td>
           </tr>
           <tr>
                <td class="align-middle">11:00 - 11:45</td>
                <td class="align-middle"></td>
                <td class="align-middle"></td>
                <td class="align-middle"></td>
                <td class="align-middle"></td>
                <td class="align-middle"></td>
                <td class="align-middle"></td>
                <td class="align-middle"></td>
           </tr>
           <tr>
                <td class="align-middle">12:00 - 12:45</td>
                <td class="align-middle"></td>
                <td class="align-middle"></td>
                <td class="align-middle"></td>
                <td class="align-middle"></td>
                <td class="align-middle"></td>
                <td class="align-middle"></td>
                <td class="align-middle"></td>
           </tr>
           <tr>
                <td class="align-middle">12:45 - 13:15</td>
                <td class="align-middle" colspan="7">Ebédszünet</td>
           </tr>
           <tr>
                <td class="align-middle">13:15 - 14:00</td>
                <td class="align-middle"></td>
                <td class="align-middle"></td>
                <td class="align-middle"></td>
                <td class="align-middle"></td>
                <td class="align-middle"></td>
                <td class="align-middle"></td>
                <td class="align-middle"></td>
           </tr>
           <tr>
                <td class="align-middle">14:15 - 15:00</td>
                <td class="align-middle"></td>
                <td class="align-middle"></td>
                <td class="align-middle"></td>
                <td class="align-middle"></td>
                <td class="align-middle"></td>
                <td class="align-middle"></td>
                <td class="align-middle"></td>
           </tr>
           <tr>
                <td class="align-middle">15:15 - 16:00</td>
                <td class="align-middle"></td>
                <td class="align-middle"></td>
                <td class="align-middle"></td>
                <td class="align-middle"></td>
                <td class="align-middle"></td>
                <td class="align-middle"></td>
                <td class="align-middle"></td>
           </tr>
        </tbody>
     </table>
    </div>
</main>
@endsection
