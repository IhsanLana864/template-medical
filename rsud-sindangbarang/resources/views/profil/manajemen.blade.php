@extends('layouts.main')

@section('content')


<!-- Body main wrapper start -->
<main>
    <!-- Breadcrumb area start -->
    <div class="breadcrumb__area header__background-color breadcrumb__header-up breadcrumb-space overly overflow-hidden">
        <div class="breadcrumb__background" data-background="./assets/imgs/breadcrumb/page-header-1.png"></div>
        <div class="container">
            <div class="row align-items-center justify-content-between">
                <div class="col-12">
                    <div class="breadcrumb__content text-center">
                        <h2 class="breadcrumb__title mb-15 mb-sm-10 mb-xs-5 color-white title-animation">Manajemen</h2>
                        <div class="breadcrumb__menu">
                            <nav>
                                <ul>
                                    <li><span><a href="{{ url('/') }}">Beranda</a></span></li>
                                    <li class="active"><span>Manajemen</span></li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb area end -->

    <!-- Manajemen Section Start -->
    <section class="service-4 section-space">
        <div class="container">
             <div class="row">
                <div class="col-12">
                    <div class="section__title-wrapper text-center mb-60">
                         <h2 class="section__title color-theme-black mb-10 title-animation">Struktur Manajemen</h2>
                         <p>Tim manajemen yang berdedikasi untuk kemajuan RSUD Sindangbarang.</p>
                    </div>
                </div>
            </div>
            <div class="row mb-minus-30 justify-content-center">
                <!-- Manajemen 1 -->
                <div class="col-xl-4 col-lg-4 col-md-6">
                    <div class="service-4__item mb-30">
                        <div class="service-4__item-icon mb-40 mb-xs-20">
                            <img src="assets/imgs/service-4/services__item-1.png" alt="icon not found">
                        </div>
                        <div class="service-4__item-text">
                            <h4 class="mb-15 mb-xs-10 title-animation">dr. Linda Lindiawati, M.H</h4>
                            <p>Plt. Direktur</p>
                        </div>
                    </div>
                </div>
                <!-- Manajemen 2 -->
                <div class="col-xl-4 col-lg-4 col-md-6">
                    <div class="service-4__item mb-30">
                        <div class="service-4__item-icon mb-40 mb-xs-20">
                            <img src="assets/imgs/service-4/services__item-2.png" alt="icon not found">
                        </div>
                        <div class="service-4__item-text">
                            <h4 class="mb-15 mb-xs-10 title-animation">Imas Rohimah, S.ST.M.Kes</h4>
                            <p>Plt. Kasubag TU dan Kepegawaian</p>
                        </div>
                    </div>
                </div>
                <!-- Manajemen 3 -->
                <div class="col-xl-4 col-lg-4 col-md-6">
                    <div class="service-4__item mb-30">
                        <div class="service-4__item-icon mb-40 mb-xs-20">
                            <img src="assets\imgs\our-portfolio\our-portfolio-1.jpg"" alt="icon not found ya">
                        </div>
                        <div class="service-4__item-text">
                            <h4 class="mb-15 mb-xs-10 title-animation">Hendar Soleh, S.Kep, Ners</h4>
                            <p>Plt. Kasie Pelayanan Medik dan Keperawatan</p>
                        </div>
                    </div>
                </div>
                 <!-- Manajemen 4 -->
                <div class="col-xl-4 col-lg-4 col-md-6">
                    <div class="service-4__item mb-30">
                        <div class="service-4__item-icon mb-40 mb-xs-20">
                            <img src="assets/imgs/service-4/services__item-1.png" alt="icon not found">
                        </div>
                        <div class="service-4__item-text">
                            <h4 class="mb-15 mb-xs-10 title-animation">Herra Winy Permana, Amd.Kep.</h4>
                            <p>Plt. imKasie Penunjang Medik</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Manajemen Section End -->
</main>
<!-- Body main wrapper end -->

@endsection
