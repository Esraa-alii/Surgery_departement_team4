@extends('doctordashboardlayout')

@section('css')
    <link rel="stylesheet" href="{{ asset('styling/css/doctor_dashboard_pat.css') }}">
@endsection

@section('content')
    <table class="table">
        <thead class="thead-dark">
            <tr>
                <th scope="col">#</th>
                <th scope="col">First Name</th>
                <th scope="col">Last Name</th>
                <th scope="col">SSN</th>
                <th scope="col">Mail</th>
                <th scope="col">Surgery</th>
                <!-- <th scope="col">Mail</th> -->
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
                <td>sjks@patient.com</td>
                <td>Surgery1</td>
                <td>012983</td>
                <td>female</td>
                <td><button id="delete" onclick="toggleText()">Delete</button></td>


            </tr>

        </tbody>
    </table>
@endsection



@section('js')
    <script src="{{ asset('/Java Script/delete.js') }}"></script>
@endsection
