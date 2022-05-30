<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <title>Patient sign up.</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link rel="stylesheet" href="../bootstrap/bootstrap.min.css"> -->
    <link rel="stylesheet" href='{{ asset('styling/fontawesome-free-6.0.0-web/css/all.css') }}'>
    <link rel="stylesheet" href="{{ asset('styling/css/patient_signin.css') }}">
    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
</head>

<body>
    <!-- <div class="title-bar">
        <p>Patient sign up</p>
    </div> -->
    <div class="content">
        <!-- FOR BACK END: file name is "addPatient.php", change accordingly -->
        <img src="{{asset('styling/css/img/signin_wallpaper.png')}}" alt="photo" id="image" class="left">
        <div id="color" class="left"></div>
        <div id="quote" class="left"> How can <br> we help you?</div>
      <div class="right">
        <form class="add-patient-form" action="{{ url('/register') }}"
            autocomplete="on"  method="post">
            @csrf
            <h1>Sign up</h1>
            <p>Please fill out the following data.</p>
            <!-- error message for backend -->
            @if ($errors->any())
              <div class="alert-block">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li><p>{{ $error }}</p></li>
                    @endforeach
                </ul>
              </div>

            @endif
            <!-- end of error message -->
            <hr>
            <!-- username field -->
            <label for="email"><b>Email</b></label>
            <input value="{{ old('email') }}" type="email" placeholder="Enter Email" name="email" required
                maxlength="50" tabindex="0">
            {{-- @error('email')
                <p class="alert-block">{{ Smessage }}</p>I
            @enderror --}}
            <!-- password field -->
            <label for="ppsw"><b>Password</b></label>
            <input type="password" placeholder="Enter Password" name="password" required maxlength="50">
            <!-- Name part  -->
            <label for="fname">First name:</label> <br>
            <input value="{{ old('fname') }}" type="text" id="fname" name="fname" required
                placeholder="Enter your first name" maxlength="20"> <br>

            <label for="mname">Middle name:</label> <br>
            <input value="{{ old('mname') }}" type="text" id="mname" name="mname" required
                placeholder="Enter your Middle name" maxlength="20">
            <br>

            <label for="lname">Last name:</label><br>
            <input value="{{ old('lname') }}" type="text" id="lname" name="lname" required
                placeholder="Enter your last name" maxlength="25"> <br>
            <!-- end of name part -->

            <!-- birthdate part -->
            <label for="birth_date">Birth date:</label> <br>
            <input value="{{ old('birth_date') }}" type="date" id="birth_date" name="birth_date" required>

            <!-- gender part -->
            <label for="gender">Gender:</label>
            <select value="{{ old('gender') }}" name="gender" id="gender" required>
                <option value="male">Male</option>
                <option value="female">Female</option>
            </select>
            <br>

            <!-- ssn part -->
            <label for="ssn">SSN: </label> <br>
            <input value="{{ old('ssn') }}" type="number" id="ssn" name="ssn" placeholder="enter patient's SSN"
                required min="0" max="99999999999999"> <br>

            <!-- Scans part -->
            <!-- <a href="">View patient's scans.</a> <br> -->
            <!-- history part -->
            <!-- <a href="">View patient's history.</a> <br> -->

            <!-- insurance part -->
            {{-- <label for="insurance">Insurance provider:</label><br>
            <input type="text" id="insurance" name="insurance" required placeholder="enter patient's insurance info."> --}}

            <label for="insurance">Insurance provider:</label>
            <select name="insurance_provider" value="{{ old('insurance_provider') }}" id="insurance_provider">

                <option value="Misr">Misr Life Insurance</option>
                <option value="Allianz">Allianz Life</option>
                <option value="Metlife">Metlife</option>
                <option value="AXA">AXA Life</option>
                <option value="QNB">QNB Alahli Life</option>
                <option value="Takaful">Egyptian Life Takaful</option>
                <option value="SuezCanal">Suez Canal Life Insurance</option>
                <option selected value="">None</option>
            </select>
            <br>

            <!-- phone numer part -->
            <label for="telphone">Phone Number 1:</label> <br>
            <input value="{{ old('phone_number1') }}" type="tel" id="phone_number1" name="phone_number1"
                placeholder="01012345678" maxlength="11" required />
            <br>

            <label for="telphone">Phone Number 2:</label> <br>
            <input value="{{ old('phone_number2') }}" type="tel" id="phone_number2" name="phone_number2"
                placeholder="01012345678" maxlength="11" /> <br>
            <!-- submit button -->
            <div class="clearfix">
                <button type="submit" class="signupbtn">Sign up</button>
            </div>
        </form>
        <!-- end of form -->
      </div>
    </div>

</body>

</html>
