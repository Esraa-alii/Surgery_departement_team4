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
                <th scope="col">Date</th>

                <th scope="col">Operation room</th>
                <th scope="col">Status</th>


            </tr>
        </thead>
        <tbody>
            @foreach ($appointments as $appointment)
                <tr>
                    <th scope="row">{{ $loop->index + 1 }}</th>

                    <form action="{{ route('appointment.updateroom', $appointment) }}" method="post">
                        @csrf
                        <td>
                            {{ $appointment->doctor?->fname }}
                        </td>
                        <td>
                            {{ $appointment->op_date->toFormattedDateString() }}

                        </td>
                        <td>
                            <select name="operation_room_id">
                                @foreach ($rooms as $room)
                                    <option value="{{ $room->id }}">{{ $room->name }}</option>
                                @endforeach

                            </select>
                        </td>
                        <td>
                            <button class="btn btn-success" type="submit">Done</button>
                        </td>
                    </form>
                </tr>
            @endforeach


        </tbody>
    </table>


    <table class="table" id="complaints">
        <thead class="thead-dark">
          <tr>
            {{-- <th scope="col">#</th> --}}
            <th scope="col">Sender E-mail</th>
            <th scope="col">complaints</th>
            <th scope="col">Status</th>


          </tr>
        </thead>
        @foreach($complains as $complain)
        <tbody>
          <tr id="Myid">
            {{-- <th scope="row" >1</th> --}}
            <td >{{$complain['email']}}</td>
            <td >{{$complain['complain']}}</td>
            <td ><button id="donee" onclick="toggleText()">Done</button>
            </td>
          </tr>
        </tbody>
        @endforeach
      </table>

@endsection

@section('js')
    <script src="{{ asset('styling/bootstrap/bootstrap.bundle.min.js') }}"></script>

    <script src="{{ asset('Java Script/delete.js') }}"></script>
@endsection
