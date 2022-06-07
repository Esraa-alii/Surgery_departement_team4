@extends('admindashboardlayout')

@section('css')
    <link rel="stylesheet" href="{{ asset('styling/css/dashboard_ad_appo.css') }}">
@endsection

@section('content')
    <table class="table">
        <thead class="thead-dark">
            <tr>
                <th scope="col">#</th>
                <th scope="col">Patient Name</th>
                <th scope="col">Patient SSN</th>
                <th scope="col">Doctor Name</th>
                <th scope="col">Doctor SSN</th>
                <th scope="col">Operation code</th>
                <th scope="col">Date</th>
                <th scope="col">Fees</th>

            </tr>
        </thead>
        <tbody>

            @foreach ($appointments as $appointment)
                <tr>
                    <th scope="row">{{ $loop->index + 1 }}</th>



                    <td>
                        {{ $appointment->patient?->fname }}
                    </td>
                    <td>
                        {{ $appointment->patient->ssn }}
                    </td>
                    <td>
                        {{ $appointment->doctor->fname }}
                    </td>
                    <td>
                        {{ $appointment->doctor->ssn }}
                    </td>
                    <td>
                        {{ $appointment->surgery_name }}
                    </td>
                    <td>
                        {{ $appointment->op_date->toFormattedDateString() }}

                    </td>
                    <td>
                        {{ $appointment->cost }}

                    </td>


                </tr>
            @endforeach

        </tbody>
    </table>
@endsection

@section('js')
    <script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
    <script src="{{ asset('styling/bootstrap/bootstrap.bundle.min.js') }}"></script>
@endsection
