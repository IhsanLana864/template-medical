@extends('layouts.main')

@section('content')
    <!-- Body main wrapper start -->
    <main>

        <!-- Banner Section -->
        <section class="banner-4">
            <div class="banner-4__c">
                <div class="container">
                    <div class="banner-4__bg-c">
                        <div class="banner-4__bg-left-top"></div>
                        <div class="banner-4__bg-left-bottom"></div>
                    </div>

                    <div class="banner-4__bg-c-2">
                        <div class="banner-4__bg-right-top"></div>
                        <div class="banner-4__bg-right-bottom"></div>

                    </div>
                    <div class="row">
                        <div class="col-lg-7 col-xl-6">
                            <div class="banner-4__content">
                                <h5 class="banner-4__subtitle title-glow mb-10 title-animation"><img
                                        src="assets/imgs/ask-quesiton/heart-3.png" alt="Ikon Hati" class="img-fluid"> RSUD
                                    Sindangbarang</h5>
                                <h1 class="banner-4__title color-theme-black mb-20 title-animation">Layanan & Fasilitas Kami
                                </h1>
                                <p class="mb-0">Kami menyediakan berbagai layanan kesehatan unggulan dan fasilitas
                                    penunjang modern untuk memastikan Anda mendapatkan perawatan terbaik.</p>
                            </div>
                        </div>

                        <div class="col-lg-5 col-xl-6">
                            <div class="banner-4__media">
                                <div class="banner-4__thumb wow clip-a-z">
                                    <img src="./assets/imgs/banner-4/banner-4.png" class="img-fluid" alt="image not found">
                                </div>

                                <div class="banner-4__box">
                                    <div class="circle">
                                        <div class="logo">
                                            <svg width="31" height="31" viewBox="0 0 31 31" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M23.9734 30.3114H1.17422C1.06611 30.3114 0.962431 30.2691 0.885989 30.1939C0.809546 30.1187 0.766602 30.0167 0.766602 29.9103V7.4302C0.766602 7.32381 0.809546 7.22177 0.885989 7.14654C0.962431 7.07132 1.06611 7.02905 1.17422 7.02905H23.9734C24.0815 7.02905 24.1852 7.07132 24.2616 7.14654C24.3381 7.22177 24.381 7.32381 24.381 7.4302V29.9103C24.381 30.0167 24.3381 30.1187 24.2616 30.1939C24.1852 30.2691 24.0815 30.3114 23.9734 30.3114ZM1.58183 29.5091H23.5658V7.82866H1.58183V29.5091Z"
                                                    fill="#169091" />
                                                <path
                                                    d="M30.371 23.606H7.5718C7.4637 23.606 7.36002 23.5638 7.28358 23.4885C7.20713 23.4133 7.16419 23.3113 7.16419 23.2049V15.4682C7.16419 15.3618 7.20713 15.2597 7.28358 15.1845C7.36002 15.1093 7.4637 15.067 7.5718 15.067H13.3762C13.4843 15.067 13.588 15.1093 13.6644 15.1845C13.7409 15.2597 13.7838 15.3618 13.7838 15.4682C13.7838 15.5746 13.7409 15.6766 13.6644 15.7518C13.588 15.827 13.4843 15.8693 13.3762 15.8693H7.97942V22.8037H29.9525V1.11259H7.96855V7.42926C7.96855 7.53565 7.9256 7.63768 7.84916 7.71291C7.77272 7.78814 7.66904 7.8304 7.56093 7.8304C7.45283 7.8304 7.34915 7.78814 7.27271 7.71291C7.19626 7.63768 7.15332 7.53565 7.15332 7.42926V0.711446C7.15332 0.605056 7.19626 0.503023 7.27271 0.427795C7.34915 0.352566 7.45283 0.310303 7.56093 0.310303H30.3601C30.4682 0.310303 30.5719 0.352566 30.6484 0.427795C30.7248 0.503023 30.7677 0.605056 30.7677 0.711446V23.1942C30.7699 23.3004 30.7295 23.4032 30.6553 23.4803C30.581 23.5573 30.4789 23.6025 30.371 23.606Z"
                                                    fill="#169091" />
                                                <path
                                                    d="M16.1292 16.739C15.8733 16.7396 15.6229 16.6654 15.4099 16.5258C15.1968 16.3862 15.0306 16.1876 14.9323 15.9551C14.8339 15.7225 14.8079 15.4665 14.8575 15.2194C14.9071 14.9723 15.0301 14.7452 15.2109 14.5669C15.3917 14.3886 15.6222 14.2671 15.8732 14.2178C16.1241 14.1684 16.3844 14.1935 16.6209 14.2898C16.8574 14.386 17.0596 14.5492 17.2018 14.7586C17.3441 14.968 17.42 15.2142 17.42 15.4661C17.42 15.8032 17.2841 16.1266 17.0421 16.3652C16.8001 16.6039 16.4718 16.7383 16.1292 16.739ZM16.1292 14.9981C16.0344 14.9975 15.9416 15.0248 15.8625 15.0763C15.7834 15.1278 15.7217 15.2013 15.6852 15.2874C15.6486 15.3735 15.6389 15.4684 15.6573 15.5599C15.6757 15.6515 15.7213 15.7356 15.7883 15.8016C15.8554 15.8675 15.9408 15.9124 16.0339 15.9305C16.1269 15.9486 16.2233 15.939 16.3108 15.9031C16.3983 15.8671 16.473 15.8064 16.5253 15.7286C16.5776 15.6508 16.6053 15.5594 16.6048 15.4661C16.6041 15.3422 16.5537 15.2235 16.4647 15.1359C16.3757 15.0483 16.2551 14.9988 16.1292 14.9981Z"
                                                    fill="#169091" />
                                            </svg>
                                        </div>
                                </div>
                            </div>
                        </div>
                        <div class="banner-4__bottom-text">
                            <h2>RSUD Sindangbarang</h2>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Main Categories of Services -->
        <section class="psychology psychology__top-space">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-xl-4">
                        <div class="psychology__item">
                            <div class="psychology__wrapper">
                                <img src="./assets/imgs/psychology/rawat-jalan.svg" alt="Ikon Rawat Jalan">
                                <h4>Instalasi Rawat Jalan</h4>
                            </div>
                            <p class="mb-0">Pelayanan medis oleh dokter spesialis dan umum di berbagai poliklinik tanpa
                                perlu menginap.</p>
                        </div>
                    </div>
                    <div class="col-lg-6 col-xl-4">
                        <div class="psychology__item">
                            <div class="psychology__wrapper">
                                <img src="./assets/imgs/psychology/rawat-inap.svg" alt="Ikon Rawat Inap">
                                <h4>Instalasi Rawat Inap</h4>
                            </div>
                            <p class="mb-0">Perawatan intensif dan observasi berkelanjutan dengan fasilitas kamar yang
                                nyaman dan lengkap.</p>
                        </div>
                    </div>
                    <div class="col-lg-6 col-xl-4">
                        <div class="psychology__item">
                            <div class="psychology__wrapper">
                                <img src="./assets/imgs/psychology/igd.svg" alt="Ikon Gawat Darurat">
                                <h4>Gawat Darurat 24 Jam</h4>
                            </div>
                            <p class="mb-0">Tim medis kami siap 24/7 untuk menangani kondisi darurat medis umum dan
                                kebidanan dengan cepat dan tepat.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Detailed Polyclinic Services -->
        <section class="latest-services-2 section-space__top ">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="section__title-wrapper mb-60 mb-30">
                            <h5 class="section__subtitle title-glow mb-15 mb-xs-10 title-animation"><img
                                    src="assets/imgs/ask-quesiton/heart-3.png" alt="Ikon Hati" class="img-fluid"> Poliklinik
                                Spesialis</h5>
                            <h2 class="section__title color-theme-black font-medium mb-10 title-animation">Temukan Layanan
                                Poliklinik Kami</h2>
                        </div>
                    </div>
                </div>
                <div class="row mb-minus-30">
                    <div class="col-xl-6">
                        <div class="latest-services-2__item">
                            <div class="latest-services-2__media wow clip-a-z">
                                <img src="./assets/imgs/latest-services-2/penyakit-dalam.jpg"
                                    alt="Poliklinik Penyakit Dalam">
                            </div>
                            <div class="latest-services-2__content">
                                <div class="latest-services-2__wrapper">
                                    <img src="./assets/imgs/latest-services-2/services-1.png" alt="ikon">
                                    <h4><a href="service-details.html">Poliklinik Penyakit Dalam</a></h4>
                                </div>
                                <p class="mb-0">Penanganan komprehensif untuk berbagai penyakit organ dalam dewasa,
                                    seperti diabetes, hipertensi, dan gangguan pencernaan.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6">
                        <div class="latest-services-2__item">
                            <div class="latest-services-2__media wow clip-a-z">
                                <img src="./assets/imgs/latest-services-2/bedah.jpg" alt="Poliklinik Bedah">
                            </div>
                            <div class="latest-services-2__content">
                                <div class="latest-services-2__wrapper">
                                    <img src="./assets/imgs/latest-services-2/services-2.png" alt="ikon">
                                    <h4><a href="service-details.html">Poliklinik Bedah</a></h4>
                                </div>
                                <p class="mb-0">Menyediakan layanan konsultasi dan tindakan bedah untuk berbagai kondisi
                                    medis yang memerlukan intervensi operatif.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6">
                        <div class="latest-services-2__item">
                            <div class="latest-services-2__media wow clip-a-z">
                                <img src="./assets/imgs/latest-services-2/obgyn.jpg"
                                    alt="Poliklinik Obstetri dan Ginekologi">
                            </div>
                            <div class="latest-services-2__content">
                                <div class="latest-services-2__wrapper">
                                    <img src="./assets/imgs/latest-services-2/services-3.png" alt="ikon">
                                    <h4><a href="service-details.html">Poliklinik Obstetri & Ginekologi</a></h4>
                                </div>
                                <p class="mb-0">Layanan kesehatan kewanitaan, mulai dari pemeriksaan kehamilan,
                                    persalinan, hingga penanganan masalah ginekologi.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6">
                        <div class="latest-services-2__item">
                            <div class="latest-services-2__media wow clip-a-z">
                                <img src="./assets/imgs/latest-services-2/gigi-mulut.jpg" alt="Poliklinik Gigi dan Mulut">
                            </div>
                            <div class="latest-services-2__content">
                                <div class="latest-services-2__wrapper">
                                    <img src="./assets/imgs/latest-services-2/services-4.png" alt="ikon">
                                    <h4><a href="service-details.html">Poliklinik Kesehatan Gigi & Mulut</a></h4>
                                </div>
                                <p class="mb-0">Perawatan gigi dan mulut untuk dewasa dan anak, termasuk pembersihan
                                    karang gigi, penambalan, dan pencabutan.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- latest-services-2 area end -->

        <!-- Facility Gallery Section -->
        <section class="our-portfolio-2 section-space__top">
            <div class="container">
                <div class="row mb-60 mb-xs-50 justify-content-center align-items-center">
                    <div class="col-lg-6">
                        <div class="section__title-wrapper mb-md-30 mb-sm-30 mb-xs-20">
                            <h5 class="section__subtitle title-glow mb-15 mb-xs-10 title-animation"><img
                                    src="assets/imgs/ask-quesiton/heart-3.png" alt="Ikon Hati" class="img-fluid"> Galeri
                                Fasilitas</h5>
                            <h2 class="section__title color-theme-black mb-0 title-animation">Kenyamanan Anda Prioritas
                                Kami</h2>
                        </div>
                    </div>
                    <div class="col-lg-6 d-flex justify-content-lg-end">
                        <a href="galeri.html" class="rr-btn">
                            <span class="btn-wrap">
                                <span class="text-one">Lihat Semua Galeri <i class="fa-solid fa-circle-plus"></i></span>
                                <span class="text-two">Lihat Semua Galeri <i class="fa-solid fa-circle-plus"></i></span>
                            </span>
                        </a>
                    </div>
                </div>
                <div class="swiper our-portfolio-2__active">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="our-portfolio-2__item position-relative overflow-hidden">
                                <div class="our-portfolio-2__item__content">
                                    <a href="portfolio-details.html" class="our-portfolio-2__item__content-media ">
                                        <img src="./assets/imgs/our-portfolio-2/ruang-tunggu.jpg"
                                            class="img-fluid wow clip-a-z" alt="Ruang Tunggu Pasien">
                                    </a>
                                    <div class="our-portfolio-2__item__wrapper">
                                        <div class="our-portfolio-2__item__text">
                                            <p>Kenyamanan</p>
                                            <h4 class="title-animation"><a href="portfolio-details.html">Ruang Tunggu
                                                    Pasien</a></h4>
                                        </div>
                                        <div class="our-portfolio-2__item__icon">
                                            <a href="portfolio-details.html"><i class="fa-solid fa-plus"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="our-portfolio-2__item position-relative overflow-hidden">
                                <div class="our-portfolio-2__item__content">
                                    <a href="portfolio-details.html" class="our-portfolio-2__item__content-media ">
                                        <img src="./assets/imgs/our-portfolio-2/ruang-rawat.jpg"
                                            class="img-fluid wow clip-a-z" alt="Ruang Rawat Inap">
                                    </a>
                                    <div class="our-portfolio-2__item__wrapper">
                                        <div class="our-portfolio-2__item__text">
                                            <p>Perawatan</p>
                                            <h4 class="title-animation"><a href="portfolio-details.html">Ruang Rawat
                                                    Inap</a></h4>
                                        </div>
                                        <div class="our-portfolio-2__item__icon">
                                            <a href="portfolio-details.html"><i class="fa-solid fa-plus"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="our-portfolio-2__item position-relative overflow-hidden">
                                <div class="our-portfolio-2__item__content">
                                    <a href="portfolio-details.html" class="our-portfolio-2__item__content-media ">
                                        <img src="./assets/imgs/our-portfolio-2/laboratorium.jpg"
                                            class="img-fluid wow clip-a-z" alt="Laboratorium">
                                    </a>
                                    <div class="our-portfolio-2__item__wrapper">
                                        <div class="our-portfolio-2__item__text">
                                            <p>Penunjang Medis</p>
                                            <h4 class="title-animation"><a href="portfolio-details.html">Laboratorium</a>
                                            </h4>
                                        </div>
                                        <div class="our-portfolio-2__item__icon">
                                            <a href="portfolio-details.html"><i class="fa-solid fa-plus"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="our-portfolio-2__scrollbar mt-80 mt-sm-60 mt-xs-45"></div>
                </div>
            </div>
        </section>
        <!-- our-portfolio-2 area end -->

    </main>
@endsection
