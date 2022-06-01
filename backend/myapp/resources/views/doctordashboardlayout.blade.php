<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('styling/fontawesome-free-6.0.0-web/css/all.css') }}">

    <link rel="stylesheet" href="{{ asset('styling/bootstrap/bootstrap.min.css') }}">
    @yield('css')
    <title>Doctor dashboard</title>
</head>

<body>
    <div class="sidebar">
        @if (Auth::user()->profile_image == null)
            <img src="{{ asset('styling\css\img\blank-profile-picture-973460_640.png') }}" width="70px" height="180px"
                alt="profile" id="side_profile">
        @else
            <img src="{{ asset('uploads/pictures/' . Auth::user()->profile_image) }}" width="70px" height="180px"
                alt="profile" id="side_profile">
        @endif
        <h2>{{ Auth::user()->fname }}</h2>
        <p class="vertical_line"> </p>



        <a href="{{ route('doctortasks') }}"><i class=" icon fa-solid fa-list-check"></i>
            Tasks </a>
        <a href="{{ route('doctorappo') }}"><i class="icon fa-solid fa-calendar-check"></i> Appointments</a>
        <p class="vertical_line"> </p>

        <!-- <a href="../html/dashboard_ad_doctors.html"> <i class="icon fa-solid fa-user-doctor"></i> Doctors</a> -->
        <a href="{{ route('doctorpatients') }}"><i class="icon fa-solid fa-bed-pulse"></i> patient</a>
        <p class="vertical_line"> </p>

        <a href="{{ route('logout') }}"><i class=" icon  fa-solid fa-right-from-bracket"></i> Log out</a>
    </div>
    <div class="container">
        <div class="row">
            <div class="col">
                <h3 class="title"> Doctor Dashboard</h3>
            </div>
            <div class="  col-">
                <div class="right">

                    </span>
                    </button>
                </div>
            </div>

        </div>
    </div>

    <div class="contentt">
        @yield('content')
    </div>

    @yield('js')
</body>

</html>
