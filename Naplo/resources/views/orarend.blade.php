@extends('layout_fooldal')
@section('content')
<main class="container-fluid text-center">
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
           <tr>
                <td class="align-middle">8:00 - 8:45</td>
                <td class="align-middle"></td>
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
