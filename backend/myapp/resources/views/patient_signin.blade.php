<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <title>Patient sign in.</title>
    <link rel="stylesheet" href="{{asset('styling/css/patient_signin.css')}}">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link rel="stylesheet" href="{{asset('styling/bootstrap/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('styling/fontawesome-free-6.0.0-web/css/all.css')}}">

  </head>
  <body>
    <div class="title-bar">
      <p>Patient sign in</p>
    </div>
    <div class="middle-cont">
        <!-- for back end: file name is "patientSignup.php", change accordingly -->
       @if(isset(Auth::user()->email))
       @php
         redirect()->to('/patientdashboard');
       @endphp
       {{-- <script>window.location ="/dashboardpatient";</script> --}}
       @endif 

        @if ($message = Session::get('error'))
        <div class="alert alert-danger alert-block">
          <button type="button" class="close" data-dismiss="alert">x</button>
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
          <h1>Sign in</h1>
           <p>Please enter your login data.</p>
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
  </body>
</html>
