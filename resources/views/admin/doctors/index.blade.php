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
                            <button class="btn btn-success"><a href="{{ route("admin.doctors.create") }}"> + New</a></button>
                        </span>
                    </div>
    
                    <div class="card-body">
                        
                        <div class="table table-responsive">
    
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Name</th>
                                        <th>Degree</th>
                                        <th>Specialist</th>
                                        <th>Mobile Ph</th>
                                        <th>Licence No</th>
                                        <th colspan="2" class="text-center">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($doctors as $index=>$doctor)
                                        <tr>
                                            <td class="text-right">{{ ++$index }}</td>
                                            <td class="">{{ $doctor->name }}</td>
                                            <td class="">{{ optional($doctor->specialist)->name }}</td>
                                            <td>{{ $doctor->degree }}</td>
                                            <td>{{ $doctor->mobile }}</td>
                                            <td>{{ $doctor->licence_no }}</td>
                                           
                                            <td>
                                                <a href="{{ route("admin.doctors.edit", ["doctor" => $doctor]) }}" class="btn btn-md btn-info">Edit</a>
                                                
                                            </td>
                                            <td>
                                                <form action="{{ route("admin.doctors.destroy", ["doctor" => $doctor])}}" method="POST">
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
                        {{$doctors->links()}}
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection