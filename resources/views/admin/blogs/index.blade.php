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
                        {{ __('Blogs List') }}
                        <span class="float-right">
                            <button class="btn btn-success"><a href="{{ route("admin.blogs.create") }}"> + Post</a></button>
                        </span>
                    </div>
    
                    <div class="card-body">
                        
                        <div class="table table-responsive">
    
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Date</th>
                                        <th>Title</th>
                                        <th>Blog Type</th>
                                        <th>Title Image</th>
                                        <th colspan="2" class="text-center">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($blogs as $index=>$blog)
                                        <tr>
                                            <td class="text-right">{{ ++$index }}</td>
                                            <td class="">{{ date("d-M-Y", strtotime($blog->date)) }}</td>
                                            <td class="">{{ $blog->title }}</td>
                                            <td class="">{{ optional($blog->specialist)->name }}</td>
                                            <td class="">{{ $blog->title_image }}</td>
                                            <td>
                                                <a href="{{ route("admin.blogs.edit", ["blog" => $blog]) }}" class="btn btn-md btn-info">Edit</a>
                                                
                                            </td>
                                            <td>
                                                <form action="{{ route("admin.blogs.destroy", ["blog" => $blog])}}" method="POST">
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
                        {{$blogs->links()}}
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection