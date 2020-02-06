@extends('layouts.admin_master')

@section('content')
    <div class="container">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="{{ route("admin.home") }}">Home</a></li>
              <li class="breadcrumb-item"><a href="{{ route("admin.doctors.index") }}">Posts List</a></li>
              <li class="breadcrumb-item active" aria-current="page">Create</li>
            </ol>
        </nav>
        <div class="row justify-content-center mt-3">
            <div class="row">
                <div class="col-lg-10 p-3 mb-2 bg-secondary text-white text-center">Create Posts</div>
                <div class="col-md-10">
                    <form action="{{ route('admin.blogs.store') }}" class="ftco-animate" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('POST')
                        <div class="d-md-flex">
                            <div class="form-group">
                                <div class="form-field">
                                    <div class="select-wrap">
                                        <div class="icon"><span class="ion-ios-calendar"></span></div>
                                        <input type="text" class="form-control appointment_date" placeholder="Entry Date" name="date">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="d-md-flex">
                            <div class="form-group">
                                <div class="form-field">
                                    <div class="select-wrap">
                                        <div class="icon"><span class="ion-ios-text"></span></div>
                                        <input type="text" class="form-control" placeholder="Blog title" name="title">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="d-md-flex">
                            <div class="form-group">
                                <div class="form-field">
                                    <div class="select-wrap">
                                        <div class="icon"><span class="ion-ios-image"></span></div>
                                        <input type="file" class="form-control" name="title_image">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="d-md-flex">
                            <div class="form-group">
                                <div class="form-field">
                                    <div class="select-wrap">
                                        <div class="icon"><span class="ion-ios-text"></span></div>
                                        <select name="specialist_id" id="" class="form-control">
                                            <option value="">Select Blog Type</option>
                                            @foreach ($specialists as $specialist)
                                                <option value="{{$specialist->id}}">{{$specialist->name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="d-md-flex">
                            <div class="form-group">
                                <div class="form-field">
                                    <div class="select-wrap">
                                        <div class="icon"><span class="ion-ios-text"></span></div>
                                        <textarea name="body" id="" cols="30" rows="10" class="form-control" placeholder="Post body"></textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="d-md-flex">
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