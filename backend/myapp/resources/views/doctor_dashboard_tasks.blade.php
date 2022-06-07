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
                <th scope="col">fees</th>
                <th scope="col">Status</th>


            </tr>
        </thead>
        <tbody>
            @foreach ($appointments as $appointment)
                <tr>
                    <th scope="row">1</th>
                    <td>{{ $appointment->patient->fname }}</td>
                    <form action="{{ route('appointment.update', $appointment) }}" method="post">
                        @csrf
                        <td>
                            <input type="text" name="surgery_name" required value="{{ $appointment->surgery_name }}">
                            @error('surgery_name')
                                <p class="small text-danger">{{ $message }}</p>
                            @enderror
                        </td>
                        <td>
                            <input name="op_date" type="date" required value="{{ $appointment->op_date }}">
                            @error('op_date')
                                <p class="small text-danger">{{ $message }}</p>
                            @enderror
                        </td>
                        <td>
                            <input name="cost" type="number" min="1200" max="20000" step="100" required
                                value="{{ $appointment->cost }}">
                            @error('cost')
                                <p class="small text-danger">{{ $message }}</p>
                            @enderror
                        </td>
                        <td>
                            <button class="btn btn-success" type="submit">Done</button>
                        </td>
                    </form>
                </tr>
            @endforeach


        </tbody>
    </table>
@endsection


@section('js')
    <script src="{{ asset('/Java Script/delete.js') }}"></script>
@endsection
