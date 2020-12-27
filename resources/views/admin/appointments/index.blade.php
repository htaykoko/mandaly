@extends('layouts.admin_master')

@section('content')
    <div class="container">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route("admin.home") }}">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">DashBoard</li>
            </ol>
        </nav>
        <div class="row justify-content-center mt-5">
            <div class="col-md-10">
                <div class="card">
                    <div class="card-header">
                        {{ __('Appointments List') }}
                    </div>

                    <div class="card-body">

                        <div class="table table-responsive">

                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Name</th>
                                        <th>Appointment Date</th>
                                        <th>Appointment Time</th>
                                        <th>Service</th>
                                        <th>Phone No</th>
                                        <th>Message</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($appointments as $index=>$appointment)
                                        <tr>
                                            <td class="text-right">{{ ++$index }}</td>
                                            <td class="">{{ $appointment->name }}</td>
                                            <td class="">{{ date('d M, Y', strtotime($appointment->appointment_date)) }}</td>
                                            <td class="">{{ $appointment->appointment_time }}</td>
                                            <td class="">{{ optional($appointment->specialist)->name }}</td>
                                            <td class="">{{ $appointment->phone_no }}</td>
                                            <td class="">{{ $appointment->message }}</td>

                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>

                        </div>

                    </div>
                    <div class="card-footer">
                        {{$appointments->links()}}
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
