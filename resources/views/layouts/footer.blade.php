
    <footer class="ftco-footer ftco-bg-dark ftco-section">
        <div class="container">
            <div class="row mb-5">
                <div class="col-md">
                    <div class="ftco-footer-widget mb-5">
                        <h2 class="ftco-heading-2 logo">Mandalay<br><span class="footer-logo">Private General</span><br><span>Hospital</span></h2>
                    </div>
                    <div class="ftco-footer-widget mb-5">
                        <div class="block-23 mb-3">
                            <ul>
                            <li><span class="icon icon-map-marker"></span><span class="text">14/40- 2th Street, Shwe Gyi Quarter, Pyinmana, Naypyitaw, Myanmar</span></li>
                            <li><a href="#"><span class="icon icon-phone"></span><span class="text">+ 959 974228857</span></a></li>
                            <li><a href="#"><span class="icon icon-envelope"></span><span class="text">info@mandalaypgh.com</span></a></li>
                            </ul>
                        </div>

                        {{-- <ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-3">
                            <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
                            <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
                            <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
                        </ul> --}}
                    </div>
                </div>
                <div class="col-md">
                    <div class="ftco-footer-widget mb-5 ml-md-4">
                    <h2 class="ftco-heading-2">Links</h2>
                    <ul class="list-unstyled">
                    <li><a href="{{ route("home") }}"><span class="ion-ios-arrow-round-forward mr-2"></span>Home</a></li>
                    <li><a href="{{ route("about") }}"><span class="ion-ios-arrow-round-forward mr-2"></span>About</a></li>
                    <li><a href="{{ route("services") }}"><span class="ion-ios-arrow-round-forward mr-2"></span>Services</a></li>
                    <li><a href="{{ route("appointment") }}"><span class="ion-ios-arrow-round-forward mr-2"></span>Appointment</a></li>
                    <li><a href="{{ route("contact") }}"><span class="ion-ios-arrow-round-forward mr-2"></span>Contact</a></li>
                    </ul>
                </div>

                </div>
                <div class="col-md">
                <div class="ftco-footer-widget mb-5">
                    <h2 class="ftco-heading-2">Recent Blog</h2>

                    @foreach ($blogs as $blog)
                    <div class="block-21 mb-4 d-flex">
                        <a class="blog-img mr-4" style="background-image: url({{asset('assets/images/image_1.jpg')}});"></a>
                        <div class="text">
                            <h3 class="heading"><a href="{{ route('blogs.show', ['blog'=>$blog]) }}">{{ $blog->title }}</a></h3>
                            <div class="meta text-white">
                                <div><span class="icon-calendar"></span> {{ date('M d, Y', strtotime($blog->date))}}</div>
                                <div><span class="icon-person"></span> {{ optional($blog->user)->name}}</div>
                                {{-- <div><a href="#"><span class="icon-chat"></span> 19</a></div> --}}
                            </div>
                        </div>
                    </div>

                    @endforeach

                </div>
                </div>
                <div class="col-md">
                    <div class="ftco-footer-widget mb-5">
                        <h2 class="ftco-heading-2">Opening Hours</h2>
                        <h3 class="open-hours pl-4"><span class="ion-ios-time mr-3"></span>We are open 24/7</h3>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 text-center">

                    <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                    Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="icon-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
                </div>
            </div>
        </div>
    </footer>
