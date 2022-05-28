<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <title>Sign in page.</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@1,900&display=swap" rel="stylesheet">
    <!-- <link rel="stylesheet" href="{{asset('styling/bootstrap/bootstrap.min.css')}}"> -->
    <link rel="stylesheet" href="{{asset('styling/css/patient_signin.css')}}">

  </head>
  <body>
    <!-- <div class="title-bar">
      <p>Sign in</p>
    </div> -->
    <div class="content">
      <!-- FOR BACK END: Image in the form should be linked properly here -->
        <img src="{{asset('styling/css/img/signin_wallpaper.png')}}" alt="photo" id="image" class="left">
        <div id="color" class="left"></div>
        <div id="quote" class="left"> How can <br> we help you?</div>
       <div class="right">
         <h1>Sign in</h1>
         <p>Please enter your login data.</p>
         <!-- for back end: file name is "patientSignup.php", change accordingly -->
         @if(isset(Auth::user()->email))
         @php
           redirect()->to('/patientdashboard');
         @endphp
         {{-- <script>window.location ="/dashboardpatient";</script> --}}
         @endif

          @if ($message = Session::get('error'))
          <div class="alert alert-danger alert-block">
            <strong>{{ $message }}</strong>
          </div>
          @endif


          @if (count($errors) > 0)
                <div class="alert alert-danger">
                  <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{$error}}</li>
                    @endforeach
                  </ul>
                </div>
          @endif
         <form class="patient_signup" action="{{url('/checklogin')}}" method="post">
            {{ csrf_field() }}
             <hr>
             <!-- email field -->
             <label for="email"><b>Email</b></label>
             <input type="text" placeholder="Enter Email" name="email"
             required maxlength="50" tabindex="0">
             <!-- password field -->
             <label for="ppsw"><b>Password</b></label>
             <input type="password" placeholder="Enter Password" name="password" required
             maxlength="20">
             <!-- submit button -->
             <div class="clearfix">
               <button type="submit" class="signinbtn">Sign in</button>
             </div>
          </form>
       </div>
    </div>

  </body>
</html>
