@extends('layouts.master')

@section('content')
    <div class="container">

        {{-- home image carousel --}}
        @include('home.carousel')

        {{-- services --}}
        @include('home.about')
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
  
        <section class="ftco-section testimony-section bg-light">
            <div class="container">
            <div class="row justify-content-center mb-5 pb-2">
                <div class="col-md-8 text-center heading-section ftco-animate">
                    <span class="subheading">Testimonials</span>
                <h2 class="mb-4">Our Patients Says About Us</h2>
                <p>Separated they live in. A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country</p>
                </div>
            </div>
            <div class="row ftco-animate justify-content-center">
                <div class="col-md-8">
                <div class="carousel-testimony owl-carousel">
                    <div class="item">
                    <div class="testimony-wrap d-flex">
                        <div class="user-img mr-4" style="background-image: url({{ asset('assets/images/person_1.jpg') }})">
                        </div>
                        <div class="text ml-2 bg-light">
                            <span class="quote d-flex align-items-center justify-content-center">
                            <i class="icon-quote-left"></i>
                        </span>
                        <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                        <p class="name">Racky Henderson</p>
                        <span class="position">Farmer</span>
                        </div>
                    </div>
                    </div>
                    <div class="item">
                    <div class="testimony-wrap d-flex">
                        <div class="user-img mr-4" style="background-image: url({{ asset('assets/images/person_2.jpg') }})">
                        </div>
                        <div class="text ml-2 bg-light">
                            <span class="quote d-flex align-items-center justify-content-center">
                            <i class="icon-quote-left"></i>
                        </span>
                        <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                        <p class="name">Henry Dee</p>
                        <span class="position">Businessman</span>
                        </div>
                    </div>
                    </div>
                    <div class="item">
                    <div class="testimony-wrap d-flex">
                        <div class="user-img mr-4" style="background-image: url({{ asset('assets/images/person_3.jpg') }})">
                        </div>
                        <div class="text ml-2 bg-light">
                            <span class="quote d-flex align-items-center justify-content-center">
                            <i class="icon-quote-left"></i>
                        </span>
                        <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                        <p class="name">Mark Huff</p>
                        <span class="position">Students</span>
                        </div>
                    </div>
                    </div>
                    <div class="item">
                    <div class="testimony-wrap d-flex">
                        <div class="user-img mr-4" style="background-image: url({{ asset('assets/images/person_4.jpg') }})">
                        </div>
                        <div class="text ml-2 bg-light">
                            <span class="quote d-flex align-items-center justify-content-center">
                            <i class="icon-quote-left"></i>
                        </span>
                        <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                        <p class="name">Rodel Golez</p>
                        <span class="position">Striper</span>
                        </div>
                    </div>
                    </div>
                    <div class="item">
                    <div class="testimony-wrap d-flex">
                        <div class="user-img mr-4" style="background-image: url({{ asset('assets/images/person_1.jpg') }})">
                        </div>
                        <div class="text ml-2 bg-light">
                            <span class="quote d-flex align-items-center justify-content-center">
                            <i class="icon-quote-left"></i>
                        </span>
                        <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                        <p class="name">Ken Bosh</p>
                        <span class="position">Manager</span>
                        </div>
                    </div>
                    </div>
                </div>
                </div>
            </div>
            </div>
        </section>

        {{-- consulting --}}
        <section class="ftco-section ftco-no-pt ftco-no-pb ftco-counter img" id="section-counter" style="background-image: url({{ asset('assets/images/bg_3.jpg') }});" data-stellar-background-ratio="0.5">
            <div class="container">
                <a href="{{ route("appointment") }}">
                    <div class="row justify-content-center">
                        <div class="col-md-6 py-5 pr-md-5">
                            <div class="heading-section text-center heading-section-white ftco-animate mb-5">
                                <span class="subheading">Consultation</span>
                                <h2 class="mb-4">Free Consultation</h2>
                                <p>Separated they live in. A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country</p>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
        </section>

        {{-- pricing --}}
        <section class="ftco-section bg-white">
            <div class="container">
                <a href="{{ route("pricing") }}">
                    <div class="row justify-content-center mb-5 pb-2">
                        <div class="col-md-8 text-center heading-section ftco-animate">
                            <span class="subheading">Pricing</span>
                            <h2 class="mb-4">Our Pricing</h2>
                            <p>Separated they live in. A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country</p>
                        </div>
                    </div>
                </a>
            </div>
        </section>

        {{-- blogs --}}
        <section class="ftco-section bg-light">
            <div class="container">
                <a href="{{ route("blogs.index") }}">
                    <div class="row justify-content-center mb-5 pb-2">
                        <div class="col-md-8 text-center heading-section ftco-animate">
                            <span class="subheading">Blog</span>
                            <h2 class="mb-4">Recent Blog</h2>
                            <p>Separated they live in. A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country</p>
                        </div>
                    </div>
                </a>
            </div>
        </section>

    </div>
@endsection
