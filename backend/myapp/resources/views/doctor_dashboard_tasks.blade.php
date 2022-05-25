<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset("styling/fontawesome-free-6.0.0-web/css/all.css")}}">

    <link rel="stylesheet" href="{{asset("styling/bootstrap/bootstrap.min.css")}}">
    <link rel="stylesheet" href="{{asset("styling/css/doctor_dashboard.css")}}">
    <title>Doctor dashboard</title>
</head>
<body>
    <div class="sidebar">
        <img src="{{asset("styling/css/img/blank-profile-picture-973460_640.png")}}" alt="profile" id="side_profile">
        <h2 >Doctor Name</h2>
        <p class="vertical_line"> </p>

        <!-- <a href="../html/dashboard.html"><i class=" icon home fa-solid fa-house" > </i>Home</a>  -->
        

        <a href="{{route('doctortasks')}}"><i class=" icon fa-solid fa-list-check"></i> 
                Tasks </a>
                <a href="{{route('doctorappo')}}"><i class="icon fa-solid fa-calendar-check"></i> Appointments</a>
                <p class="vertical_line"> </p>

                <!-- <a href="../html/dashboard_ad_doctors.html"> <i class="icon fa-solid fa-user-doctor"></i> Doctors</a> -->
        <a href="{{route('doctorpatients')}}"><i class="icon fa-solid fa-bed-pulse"></i> patient</a>
        <p class="vertical_line"> </p>

        <a href="#"><i class=" icon  fa-solid fa-right-from-bracket"></i> Log out</a>
      </div>
      <div class="container">
          <div class="row">
            <div class="col">
            <h3 class="title"> Doctor Dashboard</h5>
        </div>
      <div class="  col-">
          <div class="right">
        <!-- <button type="button" class="btn btn-primary position-relative"> -->
            

            </span>
          </button>
        </div>
    </div>
 
</div>
</div>

 <div class="contentt">
  <table class="table">
    <thead class="thead-dark">
      <tr>
        <th scope="col">#</th>
        <th scope="col">patient Name</th>
        <th scope="col">Surgery Name</th>
        <th scope="col">Date</th>
        <th scope="col">time</th>
        <th scope="col">fees</th>
        <th scope="col">Status</th>
        

      </tr>
    </thead>
    <tbody>
      <tr id="Myid">
        <th scope="row" >1</th>
        <td >Esraa</td>
        <td >Surgery1</td>
        <form action="#">
          <td ><input type="date" required></td>
          <td ><input type="time" required></td>
          <td ><input type="number" min="1200" max="20000" step="100" required></td>
          <td ><button id="done" onclick="toggleText()" type="submit">Done</button></td>
        </form></tr>

      <tr id="Myid2">
        <th scope="row" >2</th>
        <td >Esraa</td>
        <td >Surgery1</td>
        <form action="#">
        <td ><input type="date" required></td>
        <td ><input type="time" required></td>
        <td ><input type="number" min="1200" max="20000" step="100" required></td>
        <td ><button id="done" onclick="toggleText2()" type="submit">Done</button></td>
      </form></tr>
      
    </tbody>
  </table>
</div>

 <script src="{{asset("/Java Script/delete.js")}}"></script>
</body>
</html>

  