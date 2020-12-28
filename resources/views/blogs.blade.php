@extends('layouts.master')

@section('content')
    <div class="container">

        <section class="ftco-section bg-light">
            <div class="container">
                <div class="row">

                    @foreach ($blogs as $blog)
                        <div class="col-md-4 ftco-animate">
                            <div class="blog-entry">
                                <a href="{{ route('blogs.show', $blog) }}" class="block-20" style="background-image: url({{ url("storage/blogs/".$blog->id."/".$blog->title_image) }})">
                                    <div class="meta-date text-center p-2">
                                        <span class="day">{{ date('d', strtotime($blog->date)) }}</span>
                                        <span class="mos">{{ date('M', strtotime($blog->date)) }}</span>
                                        <span class="yr">{{ date('Y', strtotime($blog->date)) }}</span>
                                    </div>
                                </a>
                                <div class="text bg-white p-4">
                                    <h3 class="heading"><a href="{{ route('blogs.show', $blog) }}">{{ $blog->title }}</a></h3>
                                    <div class="d-flex align-items-center mt-4">
                                        <p class="mb-0"><a href="{{ route('blogs.show', $blog) }}" class="btn btn-primary">Read More <span class="ion-ios-arrow-round-forward"></span></a></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
                {{ $blogs->links() }}
            </div>
        </section>
    </div>
@endsection
