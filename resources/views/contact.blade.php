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

                <div class="col-md-6 d-flex align-items-stretch">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1082.0771046956304!2d96.211285639356!3d19.745062936054744!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30c8ba20c4224d71%3A0x456efc0804476045!2sMandalay%20private%20general%20hospital!5e0!3m2!1sen!2smm!4v1609167092260!5m2!1sen!2smm" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                </div>

                <div class="col-md-6">
                    <div class="col-md-12 d-flex">
                        <div class="bg-light d-flex align-self-stretch box p-4">
                            <p><span>Address:</span> <b>14/40- 2th Street, Shwe Gyi Quarter, Pyinmana, Naypyitaw, Myanamar</b></p>
                        </div>
                    </div>
                    <div class="col-md-12 d-flex">
                        <div class="bg-light d-flex align-self-stretch box p-4">
                            <p>
                                <span>Phone:</span> <a href="tel://+959974228857">+ 959 97285 7586</a>
                                <span>Phone:</span> <a href="tel://+95 06721042">+ 95 067 21042</a>
                            </p>
                        </div>
                    </div>
                    <div class="col-md-12 d-flex">
                        <div class="bg-light d-flex align-self-stretch box p-4">
                            <p><span>Email:</span> <a href="mailto:info@mandalaypgh.com">info@mandalaypgh.com</a></p>
                        </div>
                    </div>
                    <div class="col-md-12 d-flex">
                        <div class="bg-light d-flex align-self-stretch box p-4">
                            <p><span>Website</span> <a href="#">mandalaypgh.com</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    </div>

@endsection

