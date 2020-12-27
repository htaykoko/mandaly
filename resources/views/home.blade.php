@extends('layouts.master')

@section('content')
    <div class="container">

        {{-- home image carousel --}}
        @include('home.carousel')

        {{-- services --}}
        {{-- @include('home.about') --}}
        <br>
        {{-- free consultation --}}
        <section class="ftco-intro" style="background-image: url({{ asset('assets/images/bg_3.jpg') }});" data-stellar-background-ratio="0.5">
            <div class="overlay"></div>
            <div class="container">
                <div class="row">
                    <div class="col-md-9">
                        <h2>We Provide Free Health Care Consultation</h2>
                        <p class="mb-0">Your Health is Our Top Priority with Comprehensive, Affordable medical.</p>
                        <p></p>
                    </div>
                    <div class="col-md-3 d-flex align-items-center">
                        <p class="mb-0"><a href="{{ route('appointment') }}" class="btn btn-secondary px-4 py-3">Free Consutation</a></p>
                    </div>
                </div>
            </div>
        </section>

        @include('home.services')

        {{-- qulifed doctors --}}
        <section class="ftco-section ftco-no-pt">
            <div class="container">
                <a href="{{ route("doctors") }}">
                    <div class="row justify-content-center mb-5 pb-2">
                        <div class="col-md-8 text-center heading-section ftco-animate">
                            <span class="subheading">Doctors</span>
                            <h2 class="mb-4">Our Qualified Doctors</h2>
                            <p>Separated they live in. A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country</p>
                        </div>
                    </div>
                </a>
            </div>
        </section>

        {{-- pricing --}}
        <section class="ftco-section bg-light">
            <div class="container">
                <a href="{{ route("pricing") }}">
                    <div class="row justify-content-center mb-5 pb-2">
                        <div class="col-md-8 text-center heading-section ftco-animate">
                            <span class="subheading">Pricing</span>
                            <h2 class="mb-4">Our Pricing</h2>
                            {{-- <p>Separated they live in. A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country</p> --}}
                        </div>
                    </div>
                </a>
            </div>
        </section>

        {{-- blogs --}}
        <section class="ftco-section bg-white">
            <div class="container">
                <a href="{{ route("blogs.index") }}">
                    <div class="row justify-content-center mb-5 pb-2">
                        <div class="col-md-8 text-center heading-section ftco-animate">
                            <span class="subheading">Blog</span>
                            <h2 class="mb-4">Recent Blog</h2>
                        </div>
                    </div>
                </a>
            </div>
        </section>

    </div>
@endsection
