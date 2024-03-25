@extends('layout_fooldal')
@section('content')
<main class="container-fluid text-center">
    <div class="table-responsive-xxl pt-5">
    <table class="table mb-0 mx-auto text-center" id="table">
        <thead>
           <tr>
              <td>{{"osztály"}}</td>
              <td id="weekday">Hétfő</td>
              <td id="weekday">Kedd</td>
              <td id="weekday">Szerda</td>
              <td id="weekday">Csütörtök</td>
              <td id="weekday">Péntek</td>
              <td id="weekday">Szombat</td>
              <td id="weekday">Vasárnap</td>
           </tr>
        </thead>
        <tbody>
           <tr>
                <td id="weekday">8:00 - 8:45</td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
           </tr>
           <tr>
                <td id="weekday">9:00 - 9:45</td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
           </tr>
           <tr>
                <td id="weekday">10:00 - 10:45</td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
           </tr>
           <tr>
                <td id="weekday">11:00 - 11:45</td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
           </tr>
           <tr>
                <td id="weekday">12:00 - 12:45</td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
           </tr>
           <tr>
                <td id="weekday">12:45 - 13:15</td>
                <td colspan="7">Ebédszünet</td>
           </tr>
           <tr>
                <td id="weekday">13:15 - 14:00</td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
           </tr>
           <tr>
                <td id="weekday">14:15 - 15:00</td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
           </tr>
           <tr>
                <td id="weekday">15:15 - 16:00</td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
           </tr>
        </tbody>
     </table>
    </div>
</main>
@endsection
