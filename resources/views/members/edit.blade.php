@extends('layouts.layout') <!-- Adjust this based on your layout file -->

@section('content')
<div class="container mt-4">
    <div class="card">
        <div class="card-header">
            <h4>Member Form</h4>
        </div>
        <div class="card-body">
            @if ($errors->any())
                <div class="alert alert-danger">
                    <strong>Whoops!</strong> There were some problems with your input.<br><br>
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            @if (isset($member))
                <form action="{{ route('members.update', $member->id) }}" method="POST" enctype="multipart/form-data">
                @method('PUT')
                @else
                <form action="{{ route('members.store') }}" method="POST" enctype="multipart/form-data">
            @endif
            
                @csrf

                <!-- First Row: First Name, Middle Name, Last Name -->
                <div class="row mb-3">
                    <div class="col-12 col-md-4">
                        <div class="form-group">
                            <label for="first_name">First Name</label>
                            <input type="text" class="form-control" id="first_name" name="first_name" required placeholder="Enter first name" value="{{ old('first_name', $member->first_name ?? '') }}">
                        </div>
                    </div>
                    <div class="col-12 col-md-4">
                        <div class="form-group">
                            <label for="middle_name">Middle Name</label>
                            <input type="text" class="form-control" id="middle_name" name="middle_name" placeholder="Enter middle name" value="{{ old('middle_name', $member->middle_name ?? '') }}">
                        </div>
                    </div>
                    <div class="col-12 col-md-4">
                        <div class="form-group">
                            <label for="last_name">Last Name</label>
                            <input type="text" class="form-control" id="last_name" name="last_name" required placeholder="Enter last name" value="{{ old('last_name', $member->last_name ?? '') }}">
                        </div>
                    </div>
                </div>

                <!-- Second Row: Address -->
                <div class="row mb-3">
                    <div class="col-12">
                        <div class="form-group">
                            <label for="address">Address</label>
                            <textarea class="form-control" id="address" name="address" rows="3" required placeholder="Enter address" value="{{ old('address', $member->address ?? '') }}"></textarea>
                        </div>
                    </div>
                </div>

                <!-- Third Row: Email, Phone, Age -->
                <div class="row mb-3">
                    <div class="col-12 col-md-4">
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" class="form-control" id="email" name="email" required placeholder="Enter email id" value="{{ old('email', $member->email_id ?? '') }}">
                        </div>
                    </div>
                    <div class="col-12 col-md-4">
                        <div class="form-group">
                            <label for="phone">Phone</label>
                            <input type="text" class="form-control" id="phone" name="phone" required placeholder="Enter phone number" value="{{ old('phone_no', $member->phone_no ?? '') }}">
                        </div>
                    </div>
                    <div class="col-12 col-md-4">
                        <div class="form-group">
                            <label for="age">Age</label>
                            <input type="number" class="form-control" id="age" name="age" required placeholder="Enter age" value="{{ old('age', $member->age ?? '') }}">
                        </div>
                    </div>
                </div>

                <!-- Fourth Row: Gender, Date of Birth, Member Type -->
                <div class="row mb-3">
                    <div class="col-12 col-md-4">
                        <div class="form-group">
                            <label for="gender">Gender</label>
                            <select class="form-control" id="gender" name="gender" required>
                                <option value="" disabled selected>Select Gender</option>
                                <option value="male" {{ old('gender', $student->gender ?? '') == 'male' ? 'selected' : '' }}>Male</option>
                                <option value="female" {{ old('gender', $student->gender ?? '') == 'female' ? 'selected' : '' }}>Female</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-12 col-md-4">
                        <div class="form-group">
                            <label for="dob">Date of Birth</label>
                            <input type="date" class="form-control" id="dob" name="dob" required value="{{ old('dob', $member->dob ?? '') }}">
                        </div>
                    </div>
                    <div class="col-12 col-md-4">
                        <div class="form-group">
                            <label for="member_type">Member Type</label>
                            <select class="form-control" id="member_type" name="member_type" required>
                                <option value="" disabled selected>Select Member Type</option>
                                <option value="regular">Regular</option>
                                <option value="premium">Premium</option>
                            </select>
                        </div>
                    </div>
                </div>

                <!-- Submit Button -->
                <div class="row">
                    <div class="col text-center">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
