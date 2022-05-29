@extends('doctordashboardlayout')

@section('css')
    <link rel="stylesheet" href="{{ asset('styling/css/doctor_dashboard_appo.css') }}">
@endsection

@section('content')
    <div class="details" id="d1">
        <h2> Patient name operation's details </h2><br>
        <p> surgery will be on : sun 28/5 </p>
        <p> surgery will be at : 9:00 AM </p>
        <p> Fees :4900 LE </p>
        <p> Room number : op126</p>
        <button id="cancle" onclick="toggleText()">Cancel</button>
    </div>
    <div class="details" id="d2">
        <h2> Patient name operation's details </h2><br>
        <p> surgery will be on : sun 28/5 </p>
        <p> surgery will be at : 9:00 AM </p>
        <p> Fees :4900 LE </p>
        <p> Room number : op126</p>
        <button id="cancle" onclick="toggleText()">Cancel</button>
    </div>
@endsection

@section('js')
    <script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
    <script src="{{ asset('/Java Script/doctor_dashboard.js') }}"></script>
@endsection
