
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('styling/fontawesome-free-6.0.0-web/css/all.css')}}">

    <link rel="stylesheet" href="{{asset('styling/bootstrap/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset("styling/css/dashboard_ad_appo.css")}}">
    <title>Admin Dashboard</title>
</head>
<body>
    <div class="sidebar">
        <img src="{{asset("styling/css/img/blank-profile-picture-973460_640.png")}}" alt="profile" id="side_profile">
        <h2 >Admin Name</h2>
        <p class="vertical_line"> </p>

        <a href="{{route('admindashboard')}}"><i class=" icon home fa-solid fa-house" > </i>Home</a> 
        
        <div class="active">
        <a href="{{route('admintasks')}}" id="active"><i class=" icon fa-solid fa-list-check"></i> 
                Tasks </a></div>
                <a href="{{route('adminappo')}}"><i class="icon fa-solid fa-calendar-check"></i> Appointments</a>
                <p class="vertical_line"> </p>

                <a href="{{route("admindoctors")}}"> <i class="icon fa-solid fa-user-doctor"></i> Doctors</a>
        <a href="{{route('adminpatients')}}"><i class="icon fa-solid fa-bed-pulse"></i> patient</a>
        <p class="vertical_line"> </p>

        <a href="#"><i class=" icon  fa-solid fa-right-from-bracket"></i> Log out</a>
      </div>
      <div class="container">
          <div class="row">
            <div class="col">
            <h3 class="title"> Admin Dashboard</h5>
        </div>
      
     
</div>
</div>
<div class="contentt">
  <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal" id="add">
    Add Appointment
  </button>
  <table class="table">
    <thead class="thead-dark">
      <tr>
        <th scope="col">#</th>
        <th scope="col">Patient Name</th>
        <th scope="col">Patient SSN</th>
        <th scope="col">Doctor Name</th>
        <th scope="col">Doctor SSN</th>
        <th scope="col">Operation code</th>
        <th scope="col">Date</th>
        <th scope="col">Fees</th>
        <th scope="col">report</th>

      </tr>
    </thead>
    <tbody></div>
      <tr>
        <th class="first" scope="row">1</th>
        <td>Esraa</td>
        <td>11</td>
        <td>Ali</td>
        <!-- <td>22</td> -->
        <td>TYPE1</td>
        <td>OP12</td>
        <td>2/4/2022</td>
        <td>6000</td>
        <td class="first">file</td>

      </tr>
      
    </tbody>
  </table>

<!-- modal popup -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-l"> 
     <div class="modal-content" >
       <div class="modal-header">
         <h3 class="modal-title" id="exampleModalLabel" style="margin:0;">Add Appointment </h3>
         <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
       </div>
       <div class="modal-body">
        <form class="add-operation-form"
        action="/addOperation.php"
        autocomplete="on"  method="post">
  
          <!-- operation type part -->
          <label for="op_type">Operation type:</label> <br>
          <input type="text" id="op_type" name="op_type" required
           placeholder="Enter the operation type"> <br>
  
          <!-- operation code part -->
          <label for="op_code"> Operation code: </label> <br>
          <input type="number" id="op_code" name="op_code" required
          min="0" max="99999999999999"
          tabindex="1"> <br>
  
          <!-- post operation appt part -->
          <label for="post_op_appt">Post op Appointment:</label> <br>
          <input type="date" id="post_op_appt" name="post_op_appt" required> <br>
  
          <!-- report part -->
          <!-- <a href="">View operation report.</a> <br> -->
  
         <!-- medication after surgery part -->
         <label for="med_after_sur">medication after surgery:</label> <br>
         <input type="text" id="med_after_sur" name="med_after_sur" required
          placeholder="Enter the medication after surgery."> <br>
  
          <!-- fees part -->
          <label for="fees">Operation fees: </label> <br>
          <input type="number" id="fees" name="fees"
          placeholder="enter Operation fees." required min="5" max="99999999999999"> <br>
  
          <label for="exit_date">operation report.</label> <br>
            <input type="file" class="form-control" id="inputGroupFile04" aria-describedby="inputGroupFileAddon04" aria-label="Upload" ><br>
        </form>
       
       </div>
       <div class="modal-footer">
         <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Submit</button>
       </div>
     </div>
   </div>
 </div>


 

 <script src={{asset("styling/bootstrap/bootstrap.bundle.min.js")}}></script>
</body>
</html>

  