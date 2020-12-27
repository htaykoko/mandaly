@extends('layouts.master')

@section('content')
    <div class="container">

        <section class="hero-wrap hero-wrap-2" style="background-image: url({{ asset('assets/images/bg_1.jpg') }});" data-stellar-background-ratio="0.5">
            <div class="overlay"></div>
            <div class="container">
                <div class="row no-gutters slider-text align-items-center justify-content-center">
                    <div class="col-md-9 ftco-animate text-center">
                        <h1 class="mb-2 bread">History</h1>
                        <p class="breadcrumbs"><span class="mr-2"><a href="{{ route("home") }}">Home <i class="ion-ios-arrow-forward"></i></a></span> <span>History <i class="ion-ios-arrow-forward"></i></span></p>
                    </div>
                </div>
            </div>
        </section>

        <div class="container">
            <section class="ftco-section">
                <div class="row justify-content-center mb-5 pb-2">
                    <div class="col-md-8 text-center heading-section ftco-animate">
                        <h2 class="mb-4">သမိုင်းအကျဉ်း</h2>
                        <p>မန္တလေး အထွေထွေေရာဂါကု ဆေးရုံကို(၇.၁.၂၀၀၀ - ၇.၁.၂၀၀၃) အထိ ရွှေချီရပ်ကွက်၊ (၇) လမ်း၊ အမှတ် (၁၁၂)တွင် တိုင်းကိုယ်ပိုင်ဆေးကုသရေးဂေဟာ စစ်ဆေးရေးအဖွဲ့နှင့် ပုဂ္ဂလိကကျန်းမာရေး လုပ်ငန်းဆိုင်ရာ ဗဟိုအဖွဲ့၏ ခွင့်ပြုချက်အရ စတင်တည်ထောင်ခဲ့ပါသည်။ ပျဉ်မနားမြို့၊ ရွှေချီရပ်ကွက်၊(၂)လမ်း ၊ အမှတ် ၁၄/၄၀ တွင် ၇.၁.၂၀၀၄ မှ ယနေ့အထိ ပြောင်းရွှေ့ဖွင့်လှစ် ဆေးကုသခဲ့ပါသည်။</p>
                    </div>
                </div>
            </section>
            <section class="ftco-section">
                <div class="row justify-content-center mb-5 pb-2">
                    <div class="col-md-8 text-center heading-section ftco-animate">
                       <img src="{{ asset("assets/images/owner/hospital.jpg") }}" class="d-block w-100" alt="hospital image">
                    </div>
                </div>
            </section>
        </div>

    </div>

@endsection

@section('js_file')
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
@endsection
