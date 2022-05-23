
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styling/fontawesome-free-6.0.0-web/css/all.css">

    <link rel="stylesheet" href="styling/bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="styling/css/dashboard_ad_doctors.css">
    <title>Admin Dashboard</title>
</head>
<body>
    <div class="sidebar">
        <img src="styling/css/img/blank-profile-picture-973460_640.png" alt="profile" id="side_profile">
        <h2 >Admin Name</h2>
        <p class="vertical_line"> </p>

        <a href="/"><i class=" icon home fa-solid fa-house" > </i>Home</a> 
        
        <div class="active">
        <a href="/admintasks" id="active"><i class=" icon fa-solid fa-list-check"></i> 
                Tasks </a></div>
                <a href="/adminappointments"><i class="icon fa-solid fa-calendar-check"></i> Appointments</a>
                <p class="vertical_line"> </p>

                <a href="/admindoctors"> <i class="icon fa-solid fa-user-doctor"></i> Doctors</a>
        <a href="/adminpatients"><i class="icon fa-solid fa-bed-pulse"></i> patient</a>
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
  Add Doctor
</button>

  <table class="table">
    <thead class="thead-dark">
      <tr>
        <th scope="col">#</th>
        <th scope="col">First Name</th>
        <th scope="col">Last Name</th>
        <th scope="col">SSN</th>
        <th scope="col">Mail</th>
        <th scope="col">phone</th>
        <th scope="col">Gender</th>
        <th scope="col"></th>
      </tr>
    </thead>
    <tbody>
      <tr id="Myid">
        <th scope="row">1</th>
        <td>Esraa</td>
        <td>Ali</td>
        <td>11</td>
        <td>skj@doc.com</td>
        <td>01111111111</td>
        <td>female</td>
        <td><button id="delete" onclick="toggleText()">Delete</button></td>
      </tr>
    </tbody>
  </table>
</div>
<!-- modal popup -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
 <div class="modal-dialog modal-l"> 
    <div class="modal-content" >
      <div class="modal-header">
        <h3 class="modal-title" id="exampleModalLabel" style="margin:0;">Add doctor </h3>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form class="add-staff-form"
         action="/addStaff.php"
         autocomplete="on"  method="post">

         <!-- Name part -->
          <label for="fname">First name:</label> <br>
          <input type="text" id="fname" name="fname" required
          tabindex="1" placeholder="Enter your first name" maxlength="20"> <br>

          <label for="mname">Middle name:</label> <br>
          <input type="text" id="mname" name="mname" required
          tabindex="2" placeholder="Enter your Middle name" maxlength="20"> <br>

          <label for="lname">Last name:</label><br>
          <input type="text" id="lname" name="lname" required
          tabindex="3" placeholder="Enter your last name" maxlength="25"> <br>
        <!-- end of name part -->

        <!-- birthdate part -->
        <label for="birth_date">Birth date:</label> <br>
        <input type="date" id="birth_date" name="birth_date" required><br>
        <!-- gener part -->
          <label for="gender">Gender:</label><br> 
          <select name="gender" id="gender" required>
            <option value="male">Male</option>
            <option value="female">Female</option>
          </select>
          <br>
        <!-- ssn part -->
          <label for="ssn">SSN: </label> <br>
          <input type="number" id="ssn" name="ssn" required min="0" max="99999999999999"> <br>
        

        <!-- Address part -->
          <label for="city">City:</label> <br>
          <input type="text" id="city" name="city" required> <br>

          <label for="street">Street:</label> <br>
          <input type="text" id="street" name="street" required> <br>

          <label for="build_num">Building Number:</label> <br>
          <input type="number" id="build_num" name="build_num" required> <br>
        <!-- end of address part   -->

        <!-- phone numer part -->
        <label for="telphone">Phone Number 1:</label> <br>
        <input type="tel" id="telephone1" name="telephone1"
         maxlength="11" minlength="11" required/> <br>

        <label for="telphone">Phone Number 2:</label> <br>
        <input type="tel" id="telephone2" name="telephone2"
        minlength="11" maxlength="11" required/> <br>
        <!-- Submit button -->
   
      </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Submit</button>
      </div>
    </div>
  </div>
</div>
 <script src="styling/bootstrap/bootstrap.bundle.min.js"></script>
 <script src="styling/Java Script/delete.js"></script>
</body>
</html>

  