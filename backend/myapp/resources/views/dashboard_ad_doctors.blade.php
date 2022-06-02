@extends('admindashboardlayout')

@section('css')
    <link rel="stylesheet" href="{{ asset('styling/css/dashboard_ad_doctors.css') }}">
@endsection

@section('content')
    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal" id="add">
        Add Doctor
    </button>

    <table class="table">
        <thead class="thead-dark">
            <tr>
                <th scope="col">#</th>
                <th scope="col">First Name</th>
                <th scope="col">Last Name</th>
                <th scope="col">SSN</th>
                <th scope="col">Mail</th>
                <th scope="col">phone</th>
                <th scope="col">Gender</th>
                <th scope="col"></th>
            </tr>
        </thead>
        <tbody>
            @foreach ($members as $member)
                @if ($member['Role'] == 'Doctor')
                    <tr id="Myid">
                        <th scope="row">1</th>
                        <td>{{ $member['fname'] }}</td>
                        <td>{{ $member['mname'] }}</td>
                        <td>{{ $member['ssn'] }}</td>
                        <td>{{ $member['email'] }}</td>
                        <td>{{ $member['phone_number1'] }}</td>
                        <td>{{ $member['gender'] }}</td>
                        <td><a id="delete" href={{ 'deletedoctor/' . $member['id'] }}>Delete</a></td>
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
                    <h3 class="modal-title" id="exampleModalLabel" style="margin:0;">Add doctor </h3>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form class="add-staff-form" action="{{ url('adddoctor') }}" autocomplete="on" method="post"
                        enctype="multipart/form-data">
                        @csrf
                        <!-- Name part -->
                        <label for="fname">First name:</label> <br>
                        <input type="text" id="fname" name="fname" required tabindex="1"
                            placeholder="Enter their first name" maxlength="20"> <br>

                        <label for="mname">Middle name:</label> <br>
                        <input type="text" id="mname" name="mname" required tabindex="2"
                            placeholder="Enter their Middle name" maxlength="20"> <br>

                        <label for="lname">Last name:</label><br>
                        <input type="text" id="lname" name="lname" required tabindex="3" placeholder="Enter their last name"
                            maxlength="25"> <br>
                        <!-- end of name part -->

                        <!-- birthdate part -->
                        <label for="birthdate">Birth date:</label> <br>
                        <input type="date" id="birth_date" name="birth_date" required><br>
                        <!-- gener part -->
                        <label for="gender">Gender:</label><br>
                        <select name="gender" id="gender" required>
                            <option value="male">Male</option>
                            <option value="female">Female</option>
                        </select>
                        <br>
                        <!-- ssn part -->
                        <label for="ssn">SSN: </label> <br>
                        <input type="number" id="ssn" name="ssn" required min="0" max="99999999999999"> <br>
                        {{-- email --}}
                        <label for="email"><b>Email</b></label> <br>
                        <input type="email" placeholder="Enter Email" name="email" required maxlength="50" tabindex="0">
                        <br>

                        <!-- password field -->
                        <label for="ppsw"><b>Password</b></label> <br>
                        <input type="password" placeholder="Enter Password" name="password" required maxlength="50"><br>

                        <!-- profile picture part -->
                        <label for="pfp">Upload your profile picture (Optional)</label> <br>
                        <input type="file" class="form-control" id="inputGroupFile04"
                            aria-describedby="inputGroupFileAddon04" aria-label="Upload" name="profile_image"
                            accept="image/*"> <br>
                        <!-- end of profile picutre part -->

                        <!-- Address part -->
                        {{-- <label for="city">City:</label> <br>
                        <input type="text" id="city" name="city" required> <br>

                        <label for="street">Street:</label> <br>
                        <input type="text" id="street" name="street" required> <br>

                        <label for="build_num">Building Number:</label> <br>
                        <input type="number" id="build_num" name="build_num" required> <br> --}}
                        <!-- end of address part   -->

                        <!-- phone numer part -->
                        <label for="num1">Phone Number 1:</label> <br>
                        <input type="tel" id="phone_number1" name="phone_number1" maxlength="11" minlength="11" required />
                        <br>

                        <label for="num2">Phone Number 2:</label> <br>
                        <input type="tel" id="phone_number2" name="phone_number2" minlength="11" maxlength="11" /> <br>
                        <!-- Submit button -->

                        <div class="modal-footer">
                            <button type="submit" class="btn btn-secondary">Submit</button>
                        </div>
                        @if ($errors->any())
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li class="text-red-500 text-xs">{{ $error }}</li>
                                @endforeach
                            </ul>
                        @endif
                    </form>

                </div>

            </div>
        </div>
    </div>

@endsection

@section('js')
    <script src="{{ asset('styling/bootstrap/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('Java Script/delete.js') }}"></script>
@endsection
