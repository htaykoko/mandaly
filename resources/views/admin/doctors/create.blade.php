@extends('layouts.admin_master')

@section('content')
    <div class="container">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="{{ route("admin.home") }}">Home</a></li>
              <li class="breadcrumb-item"><a href="{{ route("admin.doctors.index") }}">Doctors List</a></li>
              <li class="breadcrumb-item active" aria-current="page">Create</li>
            </ol>
        </nav>
        <div class="row justify-content-center mt-3">
            <div class="row">
                <div class="col-lg-10 p-3 mb-2 bg-secondary text-white text-center">Create Doctor</div>
                <div class="col-md-10">
                    <form action="{{ route('admin.doctors.store') }}" class="ftco-animate" method="POST">
                        @csrf
                        @method('POST')
                        <div class="d-md-flex">
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Name" name="name">
                            </div>
                            <div class="form-group ml-md-4">
                                <input type="text" class="form-control" placeholder="Degree" name="degree">
                            </div>
                        </div>
                        <div class="d-md-flex">
                            <div class="form-group">
                                <div class="form-field">
                                    <div class="select-wrap">
                                        <div class="icon"><span class="ion-ios-phone-portrait"></span></div>
                                        <input type="text" class="form-control" placeholder="Phone" name="mobile">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group ml-md-4">
                                <div class="select-wrap">
                                    <div class="icon"><span class="ion-ios-arrow-down"></span></div>
                                    <input type="text" class="form-control" placeholder="Licence No" name="licence_no">
                                </div>
                            </div>
                        </div>
                        <div class="d-md-flex">
                            <div class="form-group">
                                <div class="input-wrap">
                                    <div class="icon"><span class="ion-ios-calendar"></span></div>
                                    <input type="text" class="appointment_date form-control" placeholder="Licence Expired Date" name="licence_expired_date">
                                </div>
                            </div>
                            <div class="form-group ml-md-4">
                                <div class="input-wrap">
                                    <div class="icon"><span class="ion-md-calendar"></span></div>
                                    <input type="number" class="form-control" placeholder="Age" name="age" min="0">
                                </div>
                            </div>
                        </div>
                        <div class="d-md-flex">
                            <div class="form-group">
                                <div class="input-wrap">
                                    <div class="icon"><span class="ion-ios-clock"></span></div>
                                    <input type="text" class="form-control appointment_time" placeholder="Start Time" name="start_time">
                                </div>
                            </div>
                            <div class="form-group ml-md-4">
                                <div class="input-wrap">
                                    <div class="icon"><span class="ion-ios-clock"></span></div>
                                    <input type="text" class="form-control appointment_time" placeholder="End Time" name="end_time" >
                                </div>
                            </div>
                        </div>
                        <div class="d-md-flex">
                            <div class="form-group">
                                <div class="select-wrap">
                                    <select name="specialist_id" id="" class="form-control">
                                        @foreach ($specialists as $specialist)
                                            <option value="{{$specialist->id}}" >{{$specialist->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="form-group ml-md-4">
                                <div class="input-wrap">
                                    <input type="submit" value="Create" class="btn btn-secondary py-3 px-4">
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection