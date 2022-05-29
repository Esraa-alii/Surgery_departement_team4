@extends('doctordashboardlayout')

@section('css')
    <link rel="stylesheet" href="{{ asset('styling/css/doctor_dashboard.css') }}">
@endsection

@section('content')
    <table class="table">
        <thead class="thead-dark">
            <tr>
                <th scope="col">#</th>
                <th scope="col">patient Name</th>
                <th scope="col">Surgery Name</th>
                <th scope="col">Date</th>
                <th scope="col">time</th>
                <th scope="col">fees</th>
                <th scope="col">Status</th>


            </tr>
        </thead>
        <tbody>
            <tr id="Myid">
                <th scope="row">1</th>
                <td>Esraa</td>
                <td>Surgery1</td>
                <form action="#">
                    <td><input type="date" required></td>
                    <td><input type="time" required></td>
                    <td><input type="number" min="1200" max="20000" step="100" required></td>
                    <td><button id="done" onclick="toggleText()" type="submit">Done</button></td>
                </form>
            </tr>

            <tr id="Myid2">
                <th scope="row">2</th>
                <td>Esraa</td>
                <td>Surgery1</td>
                <form action="#">
                    <td><input type="date" required></td>
                    <td><input type="time" required></td>
                    <td><input type="number" min="1200" max="20000" step="100" required></td>
                    <td><button id="done" onclick="toggleText2()" type="submit">Done</button></td>
                </form>
            </tr>

        </tbody>
    </table>
@endsection


@section('js')
    <script src="{{ asset('/Java Script/delete.js') }}"></script>
@endsection
