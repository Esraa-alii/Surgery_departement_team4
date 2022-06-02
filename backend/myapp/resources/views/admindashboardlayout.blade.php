<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('styling/fontawesome-free-6.0.0-web/css/all.css') }}">

    <link rel="stylesheet" href="{{ asset('styling/bootstrap/bootstrap.min.css') }}">
    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
    @yield('css')

    <title>Document</title>
</head>

<body>
    <div class="sidebar">
        <img src="{{ asset('styling/css/img/blank-profile-picture-973460_640.png') }}" alt="profile"
            id="side_profile">

        <h2>{{ Auth::user()->fname }}</h2>
        <p class="vertical_line"> </p>


        <a href="{{ route('admindashboard') }}"><i class=" icon home fa-solid fa-house"> </i>Home</a>


        <a href="{{ route('admintasks') }}"><i class=" icon fa-solid fa-list-check"></i>
            Tasks </a>
        <a href="{{ route('adminappo') }}"><i class="icon fa-solid fa-calendar-check"></i> Appointments</a>
        <p class="vertical_line"> </p>

        <a href="{{ route('admindoctors') }}"> <i class="icon fa-solid fa-user-doctor"></i> Doctors</a>
        <a href="{{ route('adminpatients') }}"><i class="icon fa-solid fa-bed-pulse"></i> patient</a>
        <p class="vertical_line"> </p>

        <a href="{{ route('logout') }}"><i class=" icon  fa-solid fa-right-from-bracket"></i> Log out</a>
    </div>
    <div class="container">
        <div class="row">
            <div class="col d-flex">
                <h3 class="title mb-0"> Admin Dashboard</h3>
                <img class="p-0 align-self-center ms-2" src="{{asset("styling/css/img/bluelogo.ico")}}" style="width:25px; height:25px">
            </div>
        </div>
    </div>
    <div class="contentt">
        <img src="{{asset("styling/css/img/gray-and-white-gradient-abstract-vector.png")}}" alt="background" id="background">
        {{-- TODO --}}
        @if (session()->has('success'))
            <div x-data="{ show: true }" x-init="setTimeout(() => show = false, 4000)" x-show='show' class="alert alert-success">
                <strong>{{ session('success') }}</strong>
            </div>
        @endif
        @yield('content')


    </div>
    @yield('js')

</body>

</html>
