@extends('layouts.master')

@section('content')

    <section class="hero-wrap hero-wrap-2" style="background-image: url('{{ asset('assets/images/bg_1.jpg') }} ');" data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text align-items-center justify-content-center">
                <div class="col-md-9 ftco-animate text-center">
                    <h1 class="mb-2 bread">Blog Single</h1>
                    <p class="breadcrumbs"><span class="mr-2"><a href="{{ route('home') }}">Home <i class="ion-ios-arrow-forward"></i></a></span> <span class="mr-2"><a href="{{ route('blogs.index') }}">Blog <i class="ion-ios-arrow-forward"></i></a></span> <span>Blog Single <i class="ion-ios-arrow-forward"></i></span></p>
                </div>
            </div>
        </div>
    </section>

    <div class="container">

		<section class="ftco-section">
			<div class="container">
				<div class="row">
                    <div class="col-lg-8 ftco-animate">
                        <h2 class="mb-3">{{ $blog->title }}</h2>
                        <strong class="mb-3">Post Date: {{ date("d-m-Y", strtotime($blog->date)) }}</strong>
                        <p>{!! $blog->body !!}</p>
                        @if (!empty($blog->title))

                            <p>
                                <img src="{{ url('storage/blogs/'.$blog->id.'/'.$blog->title_image) }} " alt="" class="img-fluid">
                            </p>

                        @endif

                    </div>
                </div>
			</div>
        </section>
    </div>

@endsection
