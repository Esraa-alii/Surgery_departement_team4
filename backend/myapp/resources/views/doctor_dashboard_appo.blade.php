@extends('doctordashboardlayout')

@section('css')
    <link rel="stylesheet" href="{{ asset('styling/css/doctor_dashboard_appo.css') }}">
@endsection

@section('content')
    {{-- {{ ddd($appointments) }} --}}
    @foreach ($appointments as $appointment)
        <div class="card m-auto my-4 p-5 rounded-3 w-75">
            <h2> {{ $appointment->patient->fname }} operation's details </h2><br>
            <p> surgery will be on : {{ $appointment->op_date->toFormattedDateString() }} </p>
            <p> Fees : {{ $appointment->cost }} LE </p>
            <p> Room number : {{ $appointment->room ? $appointment->room->name : 'Not yet decided' }}</p>
            <form class="m-auto" action="{{ url('deleteappointment/' . $appointment->id) }}" method="post">
                @csrf
                <button type="submit" class="cstm-btn px-5 py-1">Cancel</button>
            </form>
        </div>
    @endforeach
    </div>
@endsection

@section('js')
    <script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
    <script src="{{ asset('/Java Script/doctor_dashboard.js') }}"></script>
@endsection
