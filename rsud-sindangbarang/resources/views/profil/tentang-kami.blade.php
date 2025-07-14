@extends('layouts.main')

@section('content')

    <main>
        <div class="breadcrumb__area header__background-color breadcrumb__header-up breadcrumb-space overly overflow-hidden">
            {{-- PERBAIKAN DI SINI --}}
            <div class="breadcrumb__background" data-background="{{ asset('assets/imgs/breadcrumb/page-header-1.png') }}"></div>
            <div class="container">
                <div class="row align-items-center justify-content-between">
                    <div class="col-12">
                        <div class="breadcrumb__content text-center">
                            <h2 class="breadcrumb__title mb-15 mb-sm-10 mb-xs-5 color-white title-animation">Tentang Kami
                            </h2>
                            <div class="breadcrumb__menu">
                                <nav>
                                    <ul>
                                        <li><span><a href="{{ url('/') }}">Beranda</a></span></li>
                                        <li class="active"><span>Tentang Kami</span></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <section class="about-us-2 about-us-2__space">
            <div class="container">
                <div class="row d-flex align-items-center">
                    <div class="col-lg-6">
                        <div class="about-us-2__media">
                            <div class="about-us-2__media-image-1">
                                <a href="https://www.youtube.com/@RSUDSindangbarang" class="popup-video"
                                    data-effect="mfp-move-from-top vertical-middle">
                                    <i class="fa-solid fa-play zooming"></i>
                                </a>
                                {{-- PERBAIKAN DI SINI --}}
                                <img src="{{ asset('assets/imgs/about-us-2/about-us-1.jpg') }}" class="img-fluid" alt="image not found">
                            </div>
                            <div class="about-us-2__media-image-2">
                                {{-- PERBAIKAN DI SINI --}}
                                <img src="{{ asset('assets/imgs/about-us-2/about-us-2.jpg') }}" class="img-fluid" alt="image not found">
                                <div class="circle upDown">
                                    <svg width="111" height="111" viewBox="0 0 111 111" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path opacity="0.2" fill-rule="evenodd" clip-rule="evenodd"
                                            d="M110.785 60.6122L0.517544 60.6122C0.406443 59.4679 0.330326 58.31 0.302317 57.1451L111 57.1451C110.972 58.31 110.896 59.4679 110.785 60.6122ZM109.661 67.6711L1.6416 67.6711C1.38486 66.5272 1.16266 65.3689 0.975465 64.204L110.327 64.204C110.14 65.3689 109.918 66.5272 109.661 67.6711ZM107.545 74.7304L3.76465 74.7304C3.33425 73.5931 2.94589 72.4352 2.59905 71.2633L108.704 71.2633C108.364 72.4352 107.975 73.5931 107.545 74.7304ZM104.325 81.7892L6.98383 81.7892C6.36624 80.6589 5.79063 79.501 5.24913 78.3221L106.053 78.3221C105.519 79.501 104.936 80.6589 104.325 81.7892ZM99.7326 88.8551L11.5702 88.8551C10.7094 87.7317 9.89809 86.5809 9.13485 85.388L102.175 85.388C101.405 86.5809 100.593 87.7318 99.7326 88.8551ZM93.3218 95.9144L17.9809 95.9144C16.7873 94.8116 15.6427 93.6537 14.5536 92.4473L96.7492 92.4473C95.6601 93.6537 94.515 94.8116 93.3218 95.9144ZM83.8722 102.973L27.4236 102.973C25.6333 101.919 23.9131 100.761 22.2616 99.5061L89.0412 99.5062C87.3896 100.755 85.662 101.919 83.8722 102.973ZM64.2512 110.033C61.448 110.469 58.5757 110.698 55.6479 110.698C52.72 110.698 49.8478 110.469 47.0446 110.033C42.7224 109.36 38.5663 108.188 34.6321 106.565L76.6633 106.565C72.7294 108.188 68.5734 109.36 64.2512 110.033ZM0.517545 50.0858L110.785 50.0858C110.896 51.2302 110.972 52.3881 111 53.5529L0.302317 53.5529C0.330326 52.388 0.406444 51.2302 0.517545 50.0858ZM1.64862 43.02L109.654 43.02C109.918 44.1643 110.14 45.3222 110.327 46.4871L0.975467 46.4871C1.16266 45.3222 1.38487 44.1643 1.64862 43.02ZM3.76465 35.9611L107.538 35.9611C107.968 37.098 108.357 38.2564 108.704 39.4282L2.59905 39.4282C2.94589 38.2564 3.33425 37.098 3.76465 35.9611ZM6.99079 28.9018L104.318 28.9018C104.936 30.0322 105.512 31.19 106.046 32.3689L5.25614 32.3689C5.79064 31.19 6.37319 30.0322 6.99079 28.9018ZM11.5702 21.843L99.7326 21.843C100.593 22.9663 101.405 24.1172 102.175 25.3101L9.13486 25.3101C9.89809 24.1172 10.7094 22.9663 11.5702 21.843ZM17.981 14.7837L93.3218 14.7837C94.515 15.8795 95.6601 17.0443 96.7492 18.2508L14.5536 18.2508C15.6427 17.0443 16.7873 15.8794 17.981 14.7837ZM27.4236 7.71783L83.8722 7.71783C85.662 8.77907 87.3826 9.93693 89.0342 11.1849L22.2686 11.1849C23.9132 9.92992 25.6333 8.77906 27.4236 7.71783ZM47.0861 0.658978C49.8753 0.221974 52.7336 0.000198036 55.6479 0.00019829C58.5617 0.000198545 61.4205 0.221975 64.2097 0.65898C68.5459 1.3313 72.7154 2.50319 76.6563 4.12609L34.6391 4.12608C38.5799 2.50319 42.7499 1.33129 47.0861 0.658978Z"
                                            fill="#185EC8" />
                                    </svg>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="about-us-2__main-content">
                            <div class="section__title-wrapper about-us-2__content mb-60 mb-xs-50">
                                <h5 class="section__subtitle color-theme-primary mb-15 mb-xs-10 title-animation">
                                    {{-- PERBAIKAN DI SINI --}}
                                    <img src="{{ asset('assets/imgs/ask-quesiton/heart.png') }}" alt="icon not found" class="img-fluid">
                                    Tentang RSUD Sindangbarang</h5>
                                <h2 class="section__title mb-20 title-animation">Falsafah, Visi, dan Misi Kami</h2>
                                <p class="mb-0">Rumah Sakit memberikan pelayanan kesehatan Humanis dan Paripurna serta
                                    membina jaringan kemitraan dan rujukan guna meningkatkan derajat kesehatan masyarakat.
                                </p>
                            </div>
                            <div class="about-us-2__main-content__list">
                                {{-- ... (Konten lainnya) ... --}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="service-3 section-space__bottom">
            <div class="container">
                {{-- ... --}}
                <div class="row mb-minus-50 justify-content-center">
                    <div class="col-xl-3 col-lg-4 col-sm-6">
                        <div class="service-3__item mb-50">
                            <div class="service-3__item-header d-flex mb-40 mb-xs-35">
                                <div class="service-3__item-header-icon">
                                    {{-- PERBAIKAN DI SINI --}}
                                    <img class="img-fluid" src="{{ asset('assets/imgs/service-3/service-icon-1.png') }}"
                                        alt="icon not found">
                                </div>
                                <h4 class="mb-0">Profesional</h4>
                            </div>
                            <p class="mb-0">Bekerja dengan standar dan etika profesi tertinggi untuk hasil terbaik.</p>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-sm-6">
                        <div class="service-3__item mb-50">
                            <div class="service-3__item-header d-flex mb-40 mb-xs-35">
                                <div class="service-3__item-header-icon">
                                    {{-- PERBAIKAN DI SINI --}}
                                    <img class="img-fluid" src="{{ asset('assets/imgs/service-3/service-icon-2.png') }}"
                                        alt="icon not found">
                                </div>
                                <h4 class="mb-0">Visioner</h4>
                            </div>
                            <p class="mb-0">Selalu berinovasi dan memiliki pandangan ke depan untuk kemajuan layanan.</p>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-sm-6">
                        <div class="service-3__item mb-50">
                            <div class="service-3__item-header d-flex mb-40 mb-xs-35">
                                <div class="service-3__item-header-icon">
                                    {{-- PERBAIKAN DI SINI --}}
                                    <img class="img-fluid" src="{{ asset('assets/imgs/service-3/service-icon-3.png') }}"
                                        alt="icon not found">
                                </div>
                                <h4 class="mb-0">Kerjasama Tim</h4>
                            </div>
                            <p class="mb-0">Membangun kolaborasi yang solid antar staf untuk pelayanan yang terintegrasi.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="client-testimonial section-space overflow-hidden" style="background-color: #f8f9fa;">
            <div class="container">
                {{-- ... --}}
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <div class="client-testimonial__media">
                            {{-- PERBAIKAN DI SINI --}}
                            <img class="img-fluid" src="{{ asset('assets/imgs/client-testimonial/client-testimonial.png') }}"
                                alt="icon not found">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="client-testimonial__slider-wrapper">
                            <div class="swiper client-testimonial__slider">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <div class="client-testimonial__item">
                                            <div class="client-testimonial__item-icon mb-30 mb-xs-25">
                                                {{-- PERBAIKAN DI SINI --}}
                                                <img class="img-fluid" src="{{ asset('assets/imgs/client-testimonial/qoute.png') }}"
                                                    alt="icon not found">
                                            </div>
                                            {{-- ... --}}
                                            <div class="client-testimonial__item-author d-flex align-items-center">
                                                <div class="client-testimonial__item-author-thumb">
                                                    {{-- PERBAIKAN DI SINI --}}
                                                    <img class="img-fluid" src="{{ asset('assets/imgs/client-testimonial/thumb.png') }}"
                                                        alt="icon not found">
                                                </div>
                                                {{-- ... --}}
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="client-testimonial__item">
                                            <div class="client-testimonial__item-icon mb-30 mb-xs-25">
                                                {{-- PERBAIKAN DI SINI --}}
                                                <img class="img-fluid" src="{{ asset('assets/imgs/client-testimonial/qoute.png') }}"
                                                    alt="icon not found">
                                            </div>
                                            {{-- ... --}}
                                            <div class="client-testimonial__item-author d-flex align-items-center">
                                                <div class="client-testimonial__item-author-thumb">
                                                    {{-- PERBAIKAN DI SINI --}}
                                                    <img class="img-fluid" src="{{ asset('assets/imgs/client-testimonial/thumb.png') }}"
                                                        alt="icon not found">
                                                </div>
                                                {{-- ... --}}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="client-testimonial__slider-dot"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        </main>
    @endsection
