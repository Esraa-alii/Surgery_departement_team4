@extends('admindashboardlayout')

@section('css')
    <link rel="stylesheet" href="{{ asset('styling/css/dashboard_ad_tasks.css') }}">
@endsection

@section('content')
    <table class="table">
        <thead class="thead-dark">
            <tr>
                <th scope="col">#</th>
                <th scope="col">Sender Name</th>
                <th scope="col">Task</th>
                <th scope="col">Status</th>


            </tr>
        </thead>
        <tbody>
            <tr id="Myid">
                <th scope="row">1</th>
                <td>Esraa</td>
                <td>task details</td>
                <td><button id="done" onclick="toggleText()">Done</button>
                </td>
            </tr>

            <tr id="Myid2">
                <th scope="row">2</th>
                <td>Esraa</td>
                <td>task details</td>
                <td><button id="done" onclick="toggleText2()">Done</button>
                </td>

            </tr>

        </tbody>
    </table>
@endsection

@section('js')
    <script src="{{ asset('styling/bootstrap/bootstrap.bundle.min.js') }}"></script>

    <script src="{{ asset('Java Script/delete.js') }}"></script>
@endsection
