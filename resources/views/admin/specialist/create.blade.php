@extends('layouts.admin_master')

@section('content')
    <div class="container">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="{{ route("admin.home") }}">Home</a></li>
              <li class="breadcrumb-item"><a href="{{ route("admin.doctors.index") }}">Specialist List</a></li>
              <li class="breadcrumb-item active" aria-current="page">Create</li>
            </ol>
        </nav>
        <div class="row justify-content-center mt-3">
            <div class="row">
                <div class="col-lg-10 p-3 mb-2 bg-secondary text-white text-center">Create Specialist</div>
                <div class="col-md-10">
                    <form action="{{ route('admin.specialist.store') }}" class="ftco-animate" method="POST">
                        @csrf
                        @method('POST')
                        <div class="d-md-flex">
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Name" name="name">
                            </div>
                            <div class="form-group ml-md-4">
                                <input type="text" class="form-control" placeholder="Remark" name="remark">
                            </div>
                        </div>
                        
                        <div class="d-md-flex">
                            <div class="form-group">
                                <input type="submit" value="Create" class="btn btn-secondary py-3 px-4">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection