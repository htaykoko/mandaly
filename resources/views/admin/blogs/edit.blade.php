@extends('layouts.admin_master')

@section('css_file')
    <link href='https://cdn.jsdelivr.net/npm/froala-editor@3.0.5/css/froala_editor.pkgd.min.css' rel='stylesheet' type='text/css' />
@endsection

@section('content')
    <div class="container">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route("admin.home") }}">Home</a></li>
                <li class="breadcrumb-item"><a href="{{ route("admin.blogs.index") }}">Blogs List</a></li>
                <li class="breadcrumb-item active" aria-current="page">Edit Blog</li>
            </ol>
        </nav>
        <div class="row justify-content-center mt-3">
            <div class="row">
                <div class="col-md-12 p-3 mb-2 bg-secondary text-white text-center">Update Blog</div>
                <div class="col-md-12">
                    <form action="{{ route('admin.blogs.update' , ['blog' => $blog]) }}" class="ftco-animate" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PATCH')
                        <div class="d-md-flex">
                            <div class="col-md-12">
                                <div class="form-field">
                                    <div class="select-wrap">
                                        <div class="icon"><span class="ion-ios-calendar"></span></div>
                                        <input type="text" class="form-control appointment_date" placeholder="Entry Date" name="date" value="{{ old('name') ? old('name') : date("d-m-Y", strtotime($blog->date)) }}">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="d-md-flex">
                            <div class="col-md-12">
                                <div class="form-field">
                                    <div class="select-wrap">
                                        <div class="icon"><span class="ion-ios-phone-portrait"></span></div>
                                        <input type="text" class="form-control" placeholder="Post title" name="title" value="{{ old('title') ? old('title') : $blog->title }}">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="d-md-flex">
                            <div class="col-md-12">
                                <div class="form-field">
                                    <div class="select-wrap">
                                        <div class="icon"><span class="ion-ios-image"></span></div>
                                        <input type="file" class="form-control" name="title_image">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="d-md-flex">
                            <div class="col-md-12">
                                <div class="form-field">
                                    <div class="select-wrap">
                                        <div class="icon"><span class="ion-ios-text"></span></div>
                                        <select name="specialist_id" id="" class="form-control">
                                            <option value="">Select Blog Type</option>
                                            @foreach ($specialists as $specialist)
                                                <option value="{{$specialist->id}}" {{$specialist->id == $blog->specialist_id ? 'selected' : ''}}>{{$specialist->name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="d-md-flex">
                            <div class="col-md-12">
                                <div class="form-field">
                                    <div class="select-wrap">
                                        <div class="icon"><span class="ion-ios-phone-portrait"></span></div>
                                        <textarea name="body" id="description" class="form-control">{!! old('body') ? old('body') : $blog->body !!}</textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="d-md-flex">
                            <div class="col-md-12 ml-md-4">
                                <div class="input-wrap my-3">
                                    <input type="submit" value="Update" class="btn btn-secondary">
                                </div>
                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('js_file')
    <script src="https://cdn.ckeditor.com/4.13.0/full-all/ckeditor.js"></script>
    <script>
        $(function(){
            // initialize ckeditor
            CKEDITOR.replace('description');
        })
    </script>

@endsection
