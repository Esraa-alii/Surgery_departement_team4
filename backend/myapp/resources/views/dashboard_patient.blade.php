<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../fontawesome-free-6.0.0-web/css/all.css">

    <link rel="stylesheet" href="../bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="../css/dashboard_patient.css">
    <title>Document</title>
</head>
<body>
    <div class="sidebar">
        <img src="../css/img/blank-profile-picture-973460_640.png" alt="profile" id="side_profile">
        <h2 >Patient Name</h2>
        <p class="vertical_line"> </p>



        <a href="#" id="log"><i class=" icon  fa-solid fa-right-from-bracket" ></i> Log out</a>
      </div>
      <div class="container">
          <div class="row">
            <div class="col">
            <h3 class="title"> Patient Dashboard</h5>
            </div>


   </div>


</div>
</div>
 <div class="contentt">
  <div id="details">
    <h2> Your operation's details </h2><br>
    <p> your surgery will be on : Mon 29/5 </p>
    <p> Please attend in the hospital at : 2:00 PM </p>
    <p> Fees :300 LE </p>
    <p> Room number : op123</p>


    <button id="cancle" onclick="toggleText()">Cancel</button>

  </div>

  <div id="no_op">
    <h2>There's no comming operation</h2>
    <a href="#" id="book">Book Appointment</a>
  </div>
  <div id="report">
    <h2>After Operation details</h2>
    <p> your preoperation medication will be on : Sun 2/6 </p>
    <p> Please attend in the hospital at : 5:00 PM </p>
    <button id="view" type="button" data-bs-toggle="modal" data-bs-target="#exampleModal">view report</button>
    </div>

 </div>
 <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-xl">
     <div class="modal-content" >
       <div class="modal-header">
         <h3 class="modal-title" id="exampleModalLabel" style="margin:0;">your report </h3>
       </div>
       <div class="modal-body">
        <img src="../css/img/006806688_1-177263f48504b0f4b5793f80cc5b65fe-768x994.png" alt="report" id="repo">

       </div>
       <div class="modal-footer">
         <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
       </div>
     </div>
   </div>
 </div>


 <script src="../bootstrap/bootstrap.bundle.min.js"></script>

 <script src="../Java Script/dashboard_patient.js"></script>
</body>
</html>
