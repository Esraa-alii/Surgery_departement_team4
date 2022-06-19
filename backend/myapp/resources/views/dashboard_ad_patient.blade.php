@extends('admindashboardlayout')

@section('css')
    <link rel="stylesheet" href="{{ asset('styling/css/dashboard_ad_patient.css') }}">
@endsection

@section('content')
    <!-- Button trigger modal -->


    <table class="table">
        <thead class="thead-dark">
            <tr>
                <th scope="col">#</th>
                <th scope="col">First Name</th>
                <th scope="col">Last Name</th>
                <th scope="col">SSN</th>
                <th scope="col">Mail</th>
                <th scope="col">Gender</th>
                <th scope="col">phone</th>
                <th scope="col">birth Date</th>
                <th scope="col"></th>


            </tr>
        </thead>
        <tbody>
            @foreach ($members as $member)
                @if ($member['Role'] == 'Patient')
                    <tr id="Myid">
                        <th scope="row">1</th>
                        <td>{{ $member['fname'] }}</td>
                        <td>{{ $member['mname'] }}</td>
                        <td>{{ $member['ssn'] }}</td>
                        <td>{{ $member['email'] }}</td>
                        <td>{{ $member['gender'] }}</td>
                        <td>{{ $member['phone_number1'] }}</td>
                        <td>{{ $member['birth_date'] }}</td>
                        {{-- <td><button id="delete" onclick="toggleText()">Delete</button></td> --}}
                        <td><a id="delete" href={{ 'deletepatient/' . $member['id'] }}>Delete</a></td>
                    </tr>
                @endif
            @endforeach
        </tbody>
    </table>
    </div>

    <!-- modal popup -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-l">
            <div class="modal-content">
                <div class="modal-header">
                    <h3 class="modal-title" id="exampleModalLabel" style="margin:0;">Add Patient </h3>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form class="add-patient-form" action="/addPatient.php" autocomplete="on" method="post">

                        <!-- Name part -->
                        <label for="fname">First name:</label> <br>
                        <input type="text" id="fname" name="fname" required tabindex="1" placeholder="Enter your first name"
                            maxlength="20"> <br>

                        <label for="mname">Middle name:</label> <br>
                        <input type="text" id="mname" name="mname" required tabindex="2"
                            placeholder="Enter your Middle name" maxlength="20"> <br>

                        <label for="lname">Last name:</label><br>
                        <input type="text" id="lname" name="lname" required tabindex="3" placeholder="Enter your last name"
                            maxlength="25"> <br>
                        <!-- end of name part -->

                        <!-- birthdate part -->
                        <label for="birth_date">Birth date:</label> <br>
                        <input type="date" id="birth_date" name="birth_date" required><br>

                        <!-- gender part -->
                        <label for="gender">Gender:</label><br>
                        <select name="gender" id="gender" required>
                            <option value="male">Male</option>
                            <option value="female">Female</option>
                        </select>
                        <br>

                        <!-- ssn part -->
                        <label for="ssn">SSN: </label> <br>
                        <input type="number" id="ssn" name="ssn" placeholder="Enter patient's SSN" required min="0"
                            max="99999999999999"> <br>

                        <!-- diagnosis part -->
                        <label for="diagnosis">Diagnosis:</label><br>
                        <input type="text" id="diagnosis" name="diagnosis" required tabindex="4"
                            placeholder="Enter patient's diagnosis."> <br>

                        <label for="insurance">Insurance provider:</label><br>
                        <input type="text" id="insurance" name="insurance" required tabindex="4"
                            placeholder="Enter patient's insurance info."> <br>

                        <!-- phone numer part -->
                        <label for="telphone">Phone Number 1:</label> <br>
                        <input type="tel" id="telephone1" name="telephone1" maxlength="11" minlength="11" required /> <br>

                        <label for="telphone">Phone Number 2:</label> <br>
                        <input type="tel" id="telephone2" name="telephone2" maxlength="11" minlength="11" /> <br>

                        <!-- entry Date part -->
                        <label for="enter_date">Date of admittance:</label> <br>
                        <input type="date" id="enter_date" name="enter_date" required> <br>

                        <!-- exit date part -->
                        <label for="exit_date">Date of discharge:</label> <br>
                        <input type="date" id="exit_date" name="exit_date"> <br>

                        <label for="exit_date">Uplode patient's scans.</label> <br>

                        <input type="file" class="form-control" id="inputGroupFile04"
                            aria-describedby="inputGroupFileAddon04" aria-label="Upload">

                        <label for="exit_date">Uplode patient's history.</label> <br>
                        <input type="file" class="form-control" id="inputGroupFile04"
                            aria-describedby="inputGroupFileAddon04" aria-label="Upload"><br>

                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Submit</button>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('js')
    <script src="{{ asset('styling/bootstrap/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('Java Script/delete.js') }}"></script>
@endsection
