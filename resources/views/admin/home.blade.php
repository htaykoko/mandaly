@extends('layouts.admin_master')

@section('content')
    <div class="container">        

        <div class="row departments">
            <div class="col-lg-4 order-lg-last d-flex align-items-stretch">
                <div class="img d-flex align-self-stretch" style="background-image: url({{ asset('assets/images/dept-1.jpg') }});"></div>
            </div>
            <div class="col-lg-8">
                <h2>Admin DashBoard</h2>
                <p>You are admin, so you are here to update your site UP-TO-DATE.</p>

                <div class="row mt-5 pt-2">

                    <div class="col-lg-6">
                        <a href="{{route('admin.doctors.index')}}">
                            <div class="services-2 d-flex">
                                <div class="icon mt-2 mr-3 d-flex justify-content-center align-items-center"><span class="icon-user-md"></span></div>
                                <div class="text">
                                    <h3>Doctors</h3>
                                    <p>Go to Doctor listing page to create, update and delete.</p>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-6">
                        <a href="{{route('admin.appointments.index')}}">
                            <div class="services-2 d-flex">
                                <div class="icon mt-2 mr-3 d-flex justify-content-center align-items-center"><span class="icon-send-o"></span></div>
                                <div class="text">
                                    <h3>Appointments</h3>
                                    <p>Let check appointment list.</p>
                                </div>
                            </div>
                        </a>
                    </div>

                    <div class="col-lg-6">
                        <a href="{{route('admin.specialist.index')}}">
                            <div class="services-2 d-flex">
                                <div class="icon mt-2 mr-3 d-flex justify-content-center align-items-center"><span class="flaticon-first-aid-kit"></span></div>
                                <div class="text">
                                    <h3>Specialist List</h3>
                                    <p>Specialist List By Physicians. Go to Specialist listing page to create, update and delete.</p>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-6">
                        <a href="{{route('admin.blogs.index')}}">
                            <div class="services-2 d-flex">
                                <div class="icon mt-2 mr-3 d-flex justify-content-center align-items-center"><span class="icon-newspaper-o"></span></div>
                                    <div class="text">
                                        <h3>Blogs</h3>
                                        <p>This is News, Event or Post, Go to this page to create, update and delete.</p>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection