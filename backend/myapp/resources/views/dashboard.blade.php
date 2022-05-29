<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('styling/fontawesome-free-6.0.0-web/css/all.css')}}">

    <link rel="stylesheet" href="{{asset('styling/bootstrap/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('styling/css/dashboard.css')}}">

    <title>Document</title>
</head>
<body>
    <div class="sidebar">
        <img src="{{asset('styling/css/img/blank-profile-picture-973460_640.png')}}" alt="profile" id="side_profile">
        <h2 >{{ Auth::user()->fname}}</h2>
        <p class="vertical_line"> </p>

        <a href="{{route('admindashboard')}}"><i class=" icon home fa-solid fa-house" > </i>Home</a>


        <a href="{{route('admintasks')}}"><i class=" icon fa-solid fa-list-check"></i>
                Tasks </a>
                <a href="{{route('adminappo')}}"><i class="icon fa-solid fa-calendar-check"></i> Appointments</a>
                <p class="vertical_line"> </p>

                <a href="{{route('admindoctors')}}"> <i class="icon fa-solid fa-user-doctor"></i> Doctors</a>
        <a href="{{route('adminpatients')}}"><i class="icon fa-solid fa-bed-pulse"></i> patient</a>
        <p class="vertical_line"> </p>

        <a href="{{route('logout')}}"><i class=" icon  fa-solid fa-right-from-bracket"></i> Log out</a>
      </div>
      <div class="container">
          <div class="row">
            <div class="col">
            <h3 class="title"> Admin Dashboard</h3>
        </div>

</div>
</div>
 <div class="contentt">
     {{-- TODO --}}
  <div id="tasks" ></div>
  <div id="doc_pat" ></div>
  <div id="chartContainer"></div>


 </div>
 <script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
 <script src={{asset("styling/Java Script/dashboard_home.js")}}></script>
</body>
</html>

