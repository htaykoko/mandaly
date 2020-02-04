@extends('layouts.admin_master')

@section('content')
    <div class="container">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route("admin.home") }}">Home</a></li>
                <li class="breadcrumb-item"><a href="{{ route("admin.specialist.index") }}">Specialist List</a></li>
                <li class="breadcrumb-item active" aria-current="page">Edit Doctor</li>
            </ol>
        </nav>
        <div class="row justify-content-center mt-3">
            <div class="row">
                <div class="col-lg-10 p-3 mb-2 bg-secondary text-white text-center">Create Doctor</div>
                <div class="col-md-10">
                    <form action="{{ route('admin.specialist.update' , ['specialist' => $specialist]) }}" class="ftco-animate" method="POST">
                        @csrf
                        @method('PATCH')
                        <div class="d-md-flex">
                            <div class="form-group">
                                <div class="input-wrap">
                                    <div class="icon"><span class="ion-ios-calendar"></span>Name</div>
                                    <input type="text" class="form-control" placeholder="Name" name="name" value="{{ old('name') ? old('name') : $specialist->name }}">
                                </div>
                            </div>
                            <div class="form-group ml-md-4">
                                <div class="input-wrap">
                                    <div class="icon"><span class="ion-ios-calendar"></span>Degree</div>
                                    <input type="text" class="form-control" placeholder="remark" name="remark" value="{{ old('remark') ? old('remark') : $specialist->remark }}">
                                </div>
                            </div>
                        </div>
                        
                        <div class="d-md-flex">
                            <div class="form-group">
                                <div class="input-wrap">
                                    <input type="submit" value="Update" class="btn btn-secondary py-3 px-4">
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection