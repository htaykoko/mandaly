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
                        {{ __('Doctors List') }}
                        <span class="float-right">
                            <button class="btn btn-success"><a href="{{ route("admin.specialist.create") }}"> + New</a></button>
                        </span>
                    </div>
    
                    <div class="card-body">
                        
                        <div class="table table-responsive">
    
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Name</th>
                                        <th>Remark</th>
                                        <th colspan="2">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($specialists as $index=>$doctor)
                                        <tr>
                                            <td class="text-right">{{ ++$index }}</td>
                                            <td class="">{{ $doctor->name }}</td>
                                            <td class="">{{ $doctor->remark }}</td>
                                            <td>
                                                <a href="{{ route("admin.specialist.edit", ["specialist" => $doctor]) }}" class="btn btn-md btn-info">Edit</a>
                                            </td>
                                            <td>
                                                <form action="{{ route("admin.specialist.destroy", ["specialist" => $doctor])}}" method="POST">
                                                    @csrf
                                                    @method("DELETE")
                                                        <button class="btn btn-md btn-danger" onclick="return confirm('Are You Sure want to delete?')">Delete</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
    
                        </div>
    
                    </div>
                    <div class="card-footer">
                        {{$specialists->links()}}
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection