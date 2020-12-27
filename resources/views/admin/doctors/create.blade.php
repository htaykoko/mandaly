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
                    <form action="{{ route('admin.doctors.store') }}" class="ftco-animate" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('POST')
                        <div class="d-md-flex">
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Name" name="name" value="{{ old("name") }}">
                            </div>
                            <div class="form-group ml-md-4">
                                <input type="text" class="form-control" placeholder="Degree" name="degree" value="{{ old("degree") }}">
                            </div>
                        </div>
                        <div class="d-md-flex">
                            <div class="form-group">
                                <div class="form-field">
                                    <div class="select-wrap">
                                        <div class="icon"><span class="ion-ios-phone-portrait"></span></div>
                                        <input type="text" class="form-control" placeholder="Phone" name="mobile" value="{{ old("mobile") }}">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group ml-md-4">
                                <div class="select-wrap">
                                    <div class="icon"><span class="ion-ios-arrow-down"></span></div>
                                    <input type="text" class="form-control" placeholder="Licence No" name="licence_no" value="{{ old("licence_no") }}">
                                </div>
                            </div>
                        </div>
                        <div class="d-md-flex">
                            <div class="form-group">
                                <div class="input-wrap">
                                    <div class="icon"><span class="ion-ios-calendar"></span></div>
                                    <input type="text" class="appointment_date form-control" placeholder="Licence Expired Date" name="licence_expired_date" value="{{ old("licence_expired_date") }}">
                                </div>
                            </div>
                            <div class="form-group ml-md-4">
                                <div class="input-wrap">
                                    <div class="icon"><span class="ion-md-calendar"></span></div>
                                    <input type="number" class="form-control" placeholder="Age" name="age" min="0" value="{{ old("age") }}">
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
                                <div class="input-wrap">
                                    <div class="icon"><span class="ion-ios-image"></span></div>
                                    <input type="file" class="form-control" name="image_name">
                                </div>
                            </div>
                        </div>
                        <div class="d-md-flex">
                            <select name="specialist_id" id="" class="form-control col-md-9">
                                <option value="">Select specialist</option>
                                @foreach ($specialists as $specialist)
                                    <option value="{{$specialist->id}}" >{{$specialist->name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="d-md-flex">
                            <div class="form-group row">
                                <div class="col-md-10">
                                    <div class="icon"><span class="ion-ios-text"></span></div>
                                    <div class="select-wrap">
                                        <textarea name="remark" id="" cols="30" rows="5" class="form-control" placeholder="remark">{{ old("remark") }}</textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="d-md-flex">
                            <div class="form-group ml-md-4 justify-content-center">
                                <div class="input-wrap my-2">
                                    <input type="submit" value="Create" class="btn btn-secondary ">
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
