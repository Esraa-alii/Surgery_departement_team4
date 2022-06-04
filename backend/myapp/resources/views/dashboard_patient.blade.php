<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('styling/fontawesome-free-6.0.0-web/css/all.css') }}">

    <link rel="stylesheet" href="{{ asset('styling/bootstrap/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('styling/css/dashboard_patient.css') }}">

    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <title>Document</title>
</head>

<body>

    @if (isset(Auth::user()->email))
        <div class="sidebar">
            @if (Auth::user()->profile_image == null)
                <img src="{{ asset('styling\css\img\blank-profile-picture-973460_640.png') }}" width="70px"
                    height="180px" alt="profile" id="side_profile">
            @else
                <img src="{{ asset('uploads/pictures/' . Auth::user()->profile_image) }}" width="70px" height="180px"
                    alt="profile" id="side_profile">
            @endif
            <h2>{{ Auth::user()->fname }}</h2>


            <a href="{{ route('logout') }}" id="log"><i class=" icon  fa-solid fa-right-from-bracket"></i> Log out</a>
        </div>
    @else
        <script>
            window.location = "/signin";
        </script>
    @endif
    <div class="container">
        <div class="row">
            <div class="row">
                <div class="col d-flex">
                    <h3 class="title mb-0"> Patient Dashboard</h3>
                    <img class="p-0 align-self-center ms-2" src="{{asset("styling/css/img/bluelogo.ico")}}" style="width:25px; height:25px">
                </div>
            </div>


        </div>


    </div>
    </div>
    <div class="contentt">
        <img src="{{asset("styling/css/img/gray-and-white-gradient-abstract-vector.png")}}" alt="background" id="background">

        <div id="details">
            <h2> Your operation's details </h2><br>
            <p> your surgery will be on : Mon 29/5 </p>
            <p> Please attend in the hospital at : 2:00 PM </p>
            <p> Fees :300 LE </p>
            <p> Room number : op123</p>


            <button id="cancel" onclick="toggleText()">Cancel</button>

        </div>

  <div id="no_op">
    <h2>There's no coming operation</h2>
    <button id="book" type="button" data-bs-toggle="modal" data-bs-target="#exampleModalLabel_appo">Book Appointment</button>

    <!-- <a href="#" id="book">Book Appointment</a> -->
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
            <div class="modal-content">
                <div class="modal-header">
                    <h3 class="modal-title" id="exampleModalLabel" style="margin:0;">your report </h3>
                </div>
                <div class="modal-body">
                    <img src="{{ asset('styling/css/img/006806688_1-177263f48504b0f4b5793f80cc5b65fe-768x994.png') }}"
                        alt="report" id="repo">

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

 <!-- modal popup for appointement -->
 <div class="modal fade" id="exampleModalLabel_appo" tabindex="-1" aria-labelledby="exampleModalLabel_appo" aria-hidden="true">
  <div class="modal-dialog modal-xl">
     <div class="modal-content" >
       <div class="modal-header">
         <h3 class="modal-title" id="exampleModalLabel_appo" style="margin:0;">Book appointement </h3>
       </div>
       <div class="modal-body">
        <form>
          <h3 class="app_title"> Choose your Surgical Specialties</h3>

                <label>
                  <input type="radio" name="nature">
                  <img class="Specialties" id="cardio" onclick="showcardio()" src="{{asset("surgeryDepartement/cardio.jpeg")}}" alt="cardio">
                  <h4>cardiothoracic</h4>
                </label>

                <label  >
                  <input type="radio" name="nature" >
                  <img class="Specialties" onclick="showurology()" src="{{asset("surgeryDepartement/urology.jpg")}}" alt="conference1">
                  <h4>urology</h4>
                </label>



                <label>
                  <input type="radio" name="nature" >
                  <img class="Specialties" onclick="neuroshow()" src="{{asset("surgeryDepartement/neurology.jpg")}}" alt="conference1">
                  <h4>neurological</h4>
                </label>

                <br>


                <label>
                  <input type="radio" name="nature" >
                  <img class="Specialties" onclick="showOrthopaedic_doc()"src="{{asset("surgeryDepartement/orth2.jpeg")}}" id="orth" alt="conference1">
                  <h4 id="or" >Orthopaedic</h4>
                </label>
                <label >
                  <input type="radio" name="nature" >
                  <img class="Specialties" onclick="dentalshow()" id="dental" src="{{asset("surgeryDepartement/dental.jpeg")}}" alt="conference1">
                  <h4 id="dent">dental</h4>
                </label>
                <label >
                  <input type="radio" name="nature" >
                  <img class="Specialties" onclick="showObstetrics()" id="Obstetrics" src="{{asset("surgeryDepartement/Obstetrics.jpeg")}}" alt="conference1">
                  <h4 id="obs">Obstetrics</h4>
                </label>
                  <!-- <button type="submit" id="Select"> Select </button>
        </form> -->
            <!-- Doctors -->
            <br>
            <hr>
        <!-- <form > -->
          <h3 class="app_title" id="do"> Choose your Doctor</h3>

            <!-- cardio doc -->
            <div id="cardio_doc">
              <label >
                <input type="radio" name="nature" >
                <img class="doctors"  src="{{asset("surgeryDepartement/magdy_y.jpeg")}}" alt="conference1">
                <h4 class="ma">Dr Magdy Yacoub</h4>
              </label>
              <label >
                <input type="radio" name="nature" >
                <img class="ahmed" src='{{asset("surgeryDepartement/ahmed helmy.jpeg")}}' alt="conference1">
                <h4 class="a">Dr Ahmed helmy</h4>
              </label>
            </div>


            <!-- urology doc -->
            <div id="urology_doc">
              <label >
                <input type="radio" name="nature" >
                <img class="abdel"  src="{{asset("surgeryDepartement/abdelnasser.jpeg")}}" alt="conference1">
                <h4 class="abd">Dr Abd Elnassser</h4>
              </label>
            </div>


             <!-- Obstetrics doc -->
             <div id="Obstetrics_docs">
              <label >
              <input type="radio" name="nature" >
              <img id="samya"  src="{{asset("surgeryDepartement/samya.jpeg")}}" alt="conference1">
              <h4 id="sam">Dr Samya Mohamed</h4>
            </label>

            <label >
              <input type="radio" name="nature" >
              <img id="aida"  src="{{asset("surgeryDepartement/Dr.Aida_.jpg")}}" alt="conference1">
              <h4 id="ad">Dr Aida </h4>
            </label>
            </div>

            <!-- neurological doc -->
            <div id="neurological_docs">
              <label >
              <input type="radio" name="nature" >
              <img id="nabeel"  src="{{asset("surgeryDepartement/dr.-Mohammed-Nabeel-scaled.jpg")}}" alt="conference1">
              <h4 id="n">Dr Mohammed Nabeel</h4>
            </label>

            <label >
              <input type="radio" name="nature" >
              <img id="wael"  src="{{asset("surgeryDepartement/wael mahmoud.jpeg")}}" alt="conference1">
              <h4 id="w">Dr Wael Mahmoud</h4>
            </label>
            </div>

            <!-- Orthopaedic doc -->
            <div id="Orthopaedic_doc">
              <label >
              <input type="radio" name="nature" >
              <img id="tayb"  src="{{asset("surgeryDepartement/ahmedeltayeb.png")}}" alt="conference1">
              <h4 id="t">Dr Ahmed Eltaib</h4>
            </label>

            <label >
              <input type="radio" name="nature" >
              <img id="mostafa"  src="{{asset("surgeryDepartement/MostafaEzzat.png")}}" alt="conference1">
              <h4 id="m">Dr Mostafa Ezzat</h4>
            </label>
            </div>


            <!-- dental -->
            <div id="dental_doc">
              <label >
              <input type="radio" name="nature" >
              <img id="Eyman"  src="{{asset("surgeryDepartement/Eyman eltantawy.jpeg")}}" alt="conference1">
              <h4 id="ey">Dr Eyman Eltantawy</h4>
            </label>

            <label >
              <input type="radio" name="nature" >
              <img id="gamal"  src="{{asset("surgeryDepartement/Khaled Gamal.png")}}" alt="conference1">
              <h4 id="g">Dr Khaled Gamal</h4>
            </label>
            </div>
        </form>
       </div>
       <div class="modal-footer">
         <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
       </div>
     </div>
   </div>
 </div>
    <script src="{{asset("styling/bootstrap/bootstrap.bundle.min.js")}}"></script>

 <script src="{{asset("Java Script/dashboard_patient.js")}}"></script>
</body>

</html>
