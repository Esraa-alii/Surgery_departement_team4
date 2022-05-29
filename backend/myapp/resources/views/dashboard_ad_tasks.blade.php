
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('styling/fontawesome-free-6.0.0-web/css/all.css')}}">

    <link rel="stylesheet" href="{{asset('styling/bootstrap/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('styling/css/dashboard_ad_tasks.css')}}">
    <title>Admin Dashboard</title>
</head>
<body>
    <div class="sidebar">
        <img src="{{asset('styling/css/img/blank-profile-picture-973460_640.png')}}" alt="profile" id="side_profile">
        <h2 >{{ Auth::user()->fname}}</h2>
        <p class="vertical_line"> </p>

        <a href="{{route('admindashboard')}}"><i class=" icon home fa-solid fa-house" > </i>Home</a>

        <div class="active">
        <a href="{{route('admintasks')}}" id="active"><i class=" icon fa-solid fa-list-check"></i>
                Tasks </a></div>
                <a href="{{route('adminappo')}}"><i class="icon fa-solid fa-calendar-check"></i> Appointments</a>
                <p class="vertical_line"> </p>

                <a href="{{route('admindoctors')}}"> <i class="icon fa-solid fa-user-doctor"></i> Doctors</a>
        <a href="{{route("adminpatients")}}"><i class="icon fa-solid fa-bed-pulse"></i> patient</a>
        <p class="vertical_line"> </p>

        <a href="#"><i class=" icon  fa-solid fa-right-from-bracket"></i> Log out</a>
      </div>
      <div class="container">
          <div class="row">
            <div class="col">
            <h3 class="title"> Admin Dashboard</h3>
        </div>

</div>
</div>
<div class="contentt">
  <table class="table">
    <thead class="thead-dark">
      <tr>
        <th scope="col">#</th>
        <th scope="col">Sender Name</th>
        <th scope="col">Task</th>
        <th scope="col">Status</th>


      </tr>
    </thead>
    <tbody>
      <tr id="Myid">
        <th scope="row" >1</th>
        <td >Esraa</td>
        <td >task details</td>
        <td ><button id="done" onclick="toggleText()">Done</button>
        </td>
      </tr>

        <tr id="Myid2">
          <th scope="row" >2</th>
          <td >Esraa</td>
          <td >task details</td>
          <td ><button id="done" onclick="toggleText2()">Done</button>
          </td>

      </tr>

    </tbody>
  </table>
</div>



 <script src="{{asset("styling/bootstrap/bootstrap.bundle.min.js")}}"></script>

 <script src="{{asset("Java Script/delete.js")}}"></script>
</body>
</html>

