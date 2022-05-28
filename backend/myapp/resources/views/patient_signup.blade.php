<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <title>Patient sign up.</title>
    <link rel="stylesheet" href='{{asset("styling/css/patient_signin.css")}}'>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link rel="stylesheet" href="../bootstrap/bootstrap.min.css"> -->
    <link rel="stylesheet" href='{{asset("styling/fontawesome-free-6.0.0-web/css/all.css")}}'>
    <link rel="stylesheet" href="{{asset('styling/css/patient_signin.css')}}">
  </head>
  <body>
    <div class="title-bar">
      <p>Patient sign up</p>
    </div>
    <div class="middle-cont">
        <!-- FOR BACK END: file name is "addPatient.php", change accordingly -->
        <form class="add-patient-form"
           action="/addPatient.php"
           autocomplete="on"  method="post">
           <h1>Sign up</h1>
           <p>Please fill out ths following data.</p>
           <hr>
           <!-- username field -->
           <label for="email"><b>Email</b></label>
           <input type="email" placeholder="Enter Email" name="pmail"
           required maxlength="50" tabindex="0">
           <!-- password field -->
           <label for="ppsw"><b>Password</b></label>
           <input type="password" placeholder="Enter Password" name="ppsw" required
           maxlength="20">
           <!-- Name part  -->
            <label for="fname">First name:</label> <br>
            <input type="text" id="fname" name="fname" required placeholder="Enter your first name" maxlength="20"> <br>

            <label for="mname">Middle name:</label> <br>
            <input type="text" id="mname" name="mname" required
            placeholder="Enter your Middle name" maxlength="20"> <br>

            <label for="lname">Last name:</label><br>
            <input type="text" id="lname" name="lname" required
            placeholder="Enter your last name" maxlength="25"> <br>
          <!-- end of name part -->

          <!-- birthdate part -->
          <label for="birth_date">Birth date:</label> <br>
          <input type="date" id="birth_date" name="birth_date" required>

          <!-- gender part -->
            <label for="gender">Gender:</label>
            <select name="gender" id="gender" required>
              <option value="male">Male</option>
              <option value="female">Female</option>
            </select>
            <br>

          <!-- ssn part -->
            <label for="ssn">SSN: </label> <br>
            <input type="number" id="ssn" name="ssn"
            placeholder="enter patient's SSN" required min="0" max="99999999999999"> <br>

          <!-- Scans part -->
          <!-- <a href="">View patient's scans.</a> <br> -->
          <!-- history part -->
          <!-- <a href="">View patient's history.</a> <br> -->

          <!-- insurance part -->
          <label for="insurance">Insurance provider:</label><br>
          <input type="text" id="insurance" name="insurance" required
          placeholder="enter patient's insurance info."> <br>

          <!-- phone numer part -->
          <label for="telphone">Phone Number 1:</label> <br>
          <input type="tel" id="telephone1" name="telephone1"
          placeholder="01012345678" maxlength="11" required/> <br>

          <label for="telphone">Phone Number 2:</label> <br>
          <input type="tel" id="telephone2" name="telephone2"
          placeholder="01012345678" maxlength="11"/> <br>

          <!-- submit button -->
          <div class="clearfix">
            <button type="submit" class="signupbtn">Sign up</button>
          </div>
        </form>
        <!-- end of form -->
    </div>
  </body>
</html>
