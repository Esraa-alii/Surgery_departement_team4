@extends('admindashboardlayout')

@section('css')
    <link rel="stylesheet" href="{{ asset('styling\css\dashboard.css') }}">
@endsection

@section('content')
    <div id="tasks"></div>
    <div id="doc_pat"></div>
    <div id="chartContainer"></div>
@endsection

@section('js')
    <script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>

    <script src={{ asset('styling/Java Script/dashboard_home.js') }}></script>
@endsection
