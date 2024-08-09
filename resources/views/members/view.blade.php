@extends('layouts.layout') <!-- Adjust this based on your layout file -->

@section('content')
<div class="container mt-4">
    <div class="row">
        <!-- Member Profile Card -->
        <div class="col-md-6 mb-4">
            <div class="card shadow-lg">
                <div class="card-header bg-primary text-white">
                    <h4 class="mb-0">Member Profile</h4>
                </div>
                <div class="card-body">
                    <div class="row">
                        <!-- Profile Details -->
                        <div class="col-md-12">
                            <h5 class="text-primary">{{ $member->first_name }} {{ $member->middle_name ? $member->middle_name . ' ' : '' }}{{ $member->last_name }}</h5>
                            <p class="lead" style="font-size: 1rem;">Email: <strong>{{ $member->email_id }}</strong></p>
                            <p class="lead" style="font-size: 1rem;">Phone: <strong>{{ $member->phone_no }}</strong></p>
                            <p class="lead" style="font-size: 1rem;">Age: <strong>{{ $member->age }}</strong></p>
                            <p class="lead" style="font-size: 1rem;">Address: <strong>{{ $member->address }}</strong></p>
                            <p class="lead" style="font-size: 1rem;">Gender: <strong>{{ ucfirst($member->gender) }}</strong></p>
                            <p class="lead" style="font-size: 1rem;">Date of Birth: <strong>{{ \Carbon\Carbon::parse($member->dob)->format('j F, Y') }}</strong></p>
                            <p class="lead" style="font-size: 1rem;">Member Type: <strong>{{ ucfirst($member->member_type) }}</strong></p>
                        </div>
                    </div>
                </div>
                <div class="card-footer text-center">
                    <a href="{{ route('members.edit', $member->id) }}" class="btn btn-warning">Edit Profile</a>
                </div>
            </div>
        </div>
        
        <!-- Empty Card for Layout -->
        <div class="col-md-6 mb-4">
            <div class="card shadow-lg">
                <div class="card-header bg-secondary text-white">
                    <h4 class="mb-0">Empty Card</h4>
                </div>
                <div class="card-body">
                    <div class="row">
                        <!-- First Box -->
                        <div class="col-md-6 mb-2">
                            <div class="box p-3 bg-info text-white text-center">
                                <p class="mb-0">Total pending amount:</p> <span>10000</span>
                            </div>
                        </div>
                        <!-- Second Box -->
                        <div class="col-md-6 mb-2">
                            <div class="box p-3 bg-success text-white text-center">
                                <p class="mb-0">Total paid:</p> <span>10000</span>
                            </div>
                        </div>
                    </div>

                    <div>
                        <div class="table-responsive">
                            <div class="my-3 text-center">
                                <caption><strong>Pending amount summary:</strong></caption>
                            </div>
                            <table class="table">
                              <tr>
                                <th style="width:50%">Previous pendings:</th>
                                <td>$250.30</td>
                              </tr>
                              <tr>
                                <th>Current Pendings:</th>
                                <td>$10.34</td>
                              </tr>
                              <tr>
                                <th>Vihar donation:</th>
                                <td>$5.80</td>
                              </tr>
                              <tr>
                                <th>Other:</th>
                                <td>$5.80</td>
                              </tr>
                              <tr>
                                <th>Total:</th>
                                <td>$265.24</td>
                              </tr>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="card-footer text-center">
                    <!-- Optional footer content -->
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
