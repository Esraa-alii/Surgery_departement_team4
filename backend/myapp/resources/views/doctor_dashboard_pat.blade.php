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
            @foreach ($appointments as $appointment)
                <tr id="Myid">
                    <th scope="row">1</th>
                    <td>{{ $appointment->patient->fname }}</td>
                    <td>{{ $appointment->patient->lname }}</td>
                    <td>{{ $appointment->patient->ssn }}</td>
                    <td>{{ $appointment->patient->email }}</td>
                    <td>{{ $appointment->surgery_name }}</td>
                    <td>{{ $appointment->patient->phone_number1 }}</td>
                    <td>{{ $appointment->patient->gender }}</td>
                    <form class="m-auto" action="{{ url('deleteappointment/' . $appointment->id) }}" method="post">
                        @csrf
                        <td><button type="submit" class="cstm-btn px-5 py-1">Delete</button></td>
                    </form>



                </tr>
            @endforeach

        </tbody>
    </table>
@endsection



@section('js')
    <script src="{{ asset('/Java Script/delete.js') }}"></script>
@endsection
