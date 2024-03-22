@extends('layout_fooldal')
@section('content')
<main class="container text-center">
    <div class="table-responsive-xxl pt-5">
    <table class="table mb-0" id="table">
        <thead>
           <tr>
              <td id="sub1"></td>
              <td id="sub">8:00-8:45</td>
              <td id="sub">9:00-9:45</td>
              <td id="sub">10:00-10:45</td>
              <td id="sub">11:00-11:45</td>
              <td id="sub">12:00-12:30</td>
              <td id="sub">12:30-13:15</td>
              <td id="sub">13:30-14:15</td>
              <td id="sub">14:30-15:15</td>
           </tr>
        </thead>
        <tbody>
           <tr>
              <td id="sub">MONDAY</td>
              <td id="blank">---</td>
              <td id="box1">SUB1</td>
              <td id="box2">SUB2</td>
              <td id="box3">SUB3</td>
              <td rowspan="6" id="lunch" class="text-center">Ebéd szünet</td>
              <td id="box4">SUB4</td>
              <td id="box5">SUB5</td>
              <td id="s">counselling class</td>
           </tr>
           <tr>
              <td id="sub">TUESDAY</td>
              <td id="box1">SUB1</td>
              <td id="box2">SUB2</td>
              <td id="box3">SUB3</td>
              <td id="blank">---</td>
              <td id="box2">SUB2</td>
              <td id="box2">SUB2</td>
              <td id="sub2">library</td>
           </tr>
           <tr>
              <td id="sub">WEDNESDAY</td>
              <td id="box1">SUB1</td>
              <td id="box2">SUB2</td>
              <td id="box5">SWA</td>
              <td id="blank">---</td>
              <td colspan="3"id="sub3" >LAB</td>
           </tr>
           <tr>
              <td id="sub">THURSDAY</td>
              <td id="box1">SUB1</td>
              <td id="box2">SUB2</td>
              <td id="box3">SUB3</td>
              <td id="blank">---</td>
              <td id="box2">SUB2</td>
              <td id="box2">SUB2</td>
              <td id="sub2">library</td>
           </tr>
           <tr>
              <td id="sub">FRIDAY</td>
              <td id="box1">SUB1</td>
              <td id="box2">SUB2</td>
              <td id="box3">SUB3</td>
              <td id="blank">---</td>
              <td id="box4">SUB4</td>
              <td id="box5">SUB5</td>
              <td id="sub2">library</td>
           </tr>
           <tr>
              <td id="sub">SATURDAY</td>
              <td id="box1">SUB1</td>
              <td colspan="3" id="seminar">seminar</td>
              <td id="box4">SUB4</td>
              <td id="box5">SUB5</td>
              <td id="sub2">library</td>
           </tr>
        </tbody>
     </table>
    </div>
</main>
@endsection
