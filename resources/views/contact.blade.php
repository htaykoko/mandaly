@extends('layouts.master')

@section('content')


    <section class="hero-wrap hero-wrap-2" style="background-image: url({{ asset('assets/images/bg_1.jpg') }});" data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text align-items-center justify-content-center">
                <div class="col-md-9 ftco-animate text-center">
                    <h1 class="mb-2 bread">Contact Us</h1>
                    <p class="breadcrumbs"><span class="mr-2"><a href="{{ route("home") }}">Home <i class="ion-ios-arrow-forward"></i></a></span> <span>Contact <i class="ion-ios-arrow-forward"></i></span></p>
                </div>
            </div>
        </div>
    </section>

        <section class="ftco-section contact-section">
            <div class="container">
                <div class="row d-flex mb-5 contact-info">
                    <div class="col-md-12 mb-4">
                        <h2 class="h4">Contact Information</h2>
                    </div>
                    <div class="w-100"></div>
                    <div class="col-md-3 d-flex">
                        <div class="bg-light d-flex align-self-stretch box p-4">
                            <p><span>Address:</span> 14/40- 2th Street, Shwe Gyi Quarter, Pyinmana, Naypyitaw, Myanamar</p>
                        </div>
                    </div>
                    <div class="col-md-3 d-flex">
                        <div class="bg-light d-flex align-self-stretch box p-4">
                            <p>
                                <span>Phone:</span> <a href="tel://+959974228857">+ 959 97285 7586</a>
                                <span>Phone:</span> <a href="tel://+95 06721042">+ 95 067 21042</a>
                            </p>
                        </div>
                    </div>
                    <div class="col-md-3 d-flex">
                        <div class="bg-light d-flex align-self-stretch box p-4">
                            <p><span>Email:</span> <a href="mailto:info@mandalaypgh.com">info@mandalaypgh.com</a></p>
                        </div>
                    </div>
                    <div class="col-md-3 d-flex">
                        <div class="bg-light d-flex align-self-stretch box p-4">
                            <p><span>Website</span> <a href="#">mandalaypgh.com</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </div>

@endsection

{{-- @section('js_file')
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
@endsection --}}
