@extends('layouts.main')

@section('content')

<!-- Body main wrapper start -->
<main>
    <!-- Banner Section (Style Baru) -->
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
                            <h5 class="banner-4__subtitle title-glow mb-10 title-animation"><img src="{{ asset('assets/imgs/ask-quesiton/heart-3.png') }}" alt="Ikon Hati" class="img-fluid"> RSUD Sindangbarang</h5>
                            <h1 class="banner-4__title color-theme-black mb-20 title-animation">Berita & Artikel Kesehatan</h1>
                            <p class="mb-0">Dapatkan informasi, edukasi, promosi, dan video terbaru dari kami untuk menunjang kesehatan Anda.</p>
                        </div>
                    </div>
                    <div class="col-lg-5 col-xl-6">
                        <div class="banner-4__media">
                            <div class="banner-4__thumb wow clip-a-z">
                                <!-- Gambar banner dipertahankan sesuai permintaan -->
                                <img src="{{ asset('assets/imgs/banner-4/banner-4.png') }}" class="img-fluid" alt="Berita dan Artikel RSUD Sindangbarang">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Banner Section End -->

    <!-- Blog area start -->
    <section class="blog section-space">
        <div class="container">
            <div class="row mb-minus-30">
                <!-- Artikel 1: Berita -->
                <div class="col-xl-4 col-md-6">
                    <div class="blog__item mb-30">
                        <a href="{{ url('/artikel/detail-berita') }}" class="blog__item-media d-block position-relative overflow-hidden">
                            <div class="panel wow"></div>
                            <img class="img-fluid" src="{{ asset('assets/imgs/blog/blog-item-1.jpg') }}" alt="Kegiatan Bakti Sosial RSUD Sindangbarang">
                            <span class="blog__item-category">Berita</span>
                        </a>
                        <div class="blog__item-content">
                            <div class="blog__item-content-date mb-15 mb-xs-10"><i class="fa-solid fa-calendar-days"></i> <span>10 Juli 2024</span></div>
                            <h4 class="mb-15 mb-xs-10"><a href="{{ url('/artikel/detail-berita') }}">RSUD Sindangbarang Gelar Bakti Sosial Pemeriksaan Kesehatan Gratis</a></h4>
                            <p class="mb-40 mb-xs-30">Dalam rangka meningkatkan kesadaran kesehatan, kami mengadakan bakti sosial untuk masyarakat sekitar...</p>
                            <a class="rr-a-btn" href="{{ url('/artikel/detail-berita') }}">Baca Selengkapnya <i class="fa-solid fa-circle-plus"></i></a>
                        </div>
                    </div>
                </div>

                <!-- Artikel 2: Edukasi -->
                <div class="col-xl-4 col-md-6">
                    <div class="blog__item mb-30">
                        <a href="{{ url('/artikel/detail-edukasi') }}" class="blog__item-media d-block position-relative overflow-hidden">
                            <div class="panel wow"></div>
                            <img class="img-fluid" src="{{ asset('assets/imgs/blog/blog-item-2.jpg') }}" alt="Artikel edukasi kesehatan jantung">
                             <span class="blog__item-category">Edukasi</span>
                        </a>
                        <div class="blog__item-content">
                            <div class="blog__item-content-date mb-15 mb-xs-10"><i class="fa-solid fa-calendar-days"></i> <span>8 Juli 2024</span></div>
                            <h4 class="mb-15 mb-xs-10"><a href="{{ url('/artikel/detail-edukasi') }}">5 Tips Mudah Menjaga Kesehatan Jantung Anda Sehari-hari</a></h4>
                            <p class="mb-40 mb-xs-30">Kesehatan jantung adalah kunci hidup berkualitas. Simak beberapa tips mudah yang bisa Anda terapkan...</p>
                            <a class="rr-a-btn" href="{{ url('/artikel/detail-edukasi') }}">Baca Selengkapnya <i class="fa-solid fa-circle-plus"></i></a>
                        </div>
                    </div>
                </div>

                <!-- Artikel 3: Video -->
                <div class="col-xl-4 col-md-6">
                    <div class="blog__item mb-30">
                        <a href="https://www.youtube.com/watch?v=your-video-id" class="blog__item-media d-block position-relative overflow-hidden popup-video">
                            <div class="panel wow"></div>
                            <img class="img-fluid" src="{{ asset('assets/imgs/blog/blog-item-3.jpg') }}" alt="Video profil RSUD Sindangbarang">
                            <span class="blog__item-category video-category">Video</span>
                            <i class="fa-solid fa-play video-play-icon"></i>
                        </a>
                        <div class="blog__item-content">
                            <div class="blog__item-content-date mb-15 mb-xs-10"><i class="fa-solid fa-calendar-days"></i> <span>5 Juli 2024</span></div>
                            <h4 class="mb-15 mb-xs-10"><a href="https://www.youtube.com/watch?v=your-video-id" class="popup-video">Video Profil: Mengenal Lebih Dekat Layanan RSUD Sindangbarang</a></h4>
                            <p class="mb-40 mb-xs-30">Tonton video profil kami untuk melihat langsung berbagai fasilitas dan layanan unggulan yang kami sediakan...</p>
                            <a class="rr-a-btn" href="https://www.youtube.com/watch?v=your-video-id" class="popup-video">Tonton Video <i class="fa-solid fa-circle-play"></i></a>
                        </div>
                    </div>
                </div>

                <!-- Artikel 4: Promosi -->
                <div class="col-xl-4 col-md-6">
                    <div class="blog__item mb-30">
                        <a href="{{ url('/artikel/detail-promosi') }}" class="blog__item-media d-block position-relative overflow-hidden">
                            <div class="panel wow"></div>
                            <img class="img-fluid" src="{{ asset('assets/imgs/blog-2/blog-1.jpg') }}" alt="Promosi Medical Check Up">
                            <span class="blog__item-category promotion-category">Promosi</span>
                        </a>
                        <div class="blog__item-content">
                            <div class="blog__item-content-date mb-15 mb-xs-10"><i class="fa-solid fa-calendar-days"></i> <span>1 Juli 2024</span></div>
                            <h4 class="mb-15 mb-xs-10"><a href="{{ url('/artikel/detail-promosi') }}">Promo Spesial: Paket Medical Check-Up Lengkap Harga Terjangkau</a></h4>
                            <p class="mb-40 mb-xs-30">Manfaatkan promo terbatas kami untuk paket pemeriksaan kesehatan lengkap. Deteksi dini, hidup lebih sehat...</p>
                            <a class="rr-a-btn" href="{{ url('/artikel/detail-promosi') }}">Lihat Detail Promo <i class="fa-solid fa-circle-plus"></i></a>
                        </div>
                    </div>
                </div>

                <!-- Tambahkan artikel lainnya sesuai kebutuhan -->

            </div>

             {{-- <!-- Pagination (jika diperlukan) -->
            <div class="row">
                <div class="col-12">
                    <div class="pagination__wrapper mt-30">
                        <ul class="pagination__list">
                            <li><a href="#"><i class="fa-solid fa-angle-left"></i></a></li>
                            <li><a href="#" class="is-active">1</a></li>
                            <li><a href="#">2</a></li>
                            <li><a href="#">3</a></li>
                            <li><a href="#"><i class="fa-solid fa-angle-right"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- blog area end --> --}}

    <!-- CTA Section -->
    <section class="footer__cta footer__cta-bottom-up" style="background-color: #f8f9fa;">
        <div class="container">
            <div class="row mb-minus-30">
                <div class="col-md-12">
                    <div class="footer__cta-item mb-30 theme-bg-primary d-flex flex-lg-row flex-column align-items-lg-center text-center text-lg-start">
                        <div class="footer__cta-item-icon d-flex align-items-center justify-content-center">
                            <i class="fa-solid fa-phone-volume fa-3x" style="color: white;"></i>
                        </div>
                        <div class="footer__cta-item-text">
                            <h4 class="color-white mb-15 mb-10">Butuh Bantuan Medis Segera?</h4>
                            <p class="color-white mb-0">Tim gawat darurat kami siap melayani Anda 24 jam. Jangan ragu untuk menghubungi kami.</p>
                            <h3 class="color-white mt-20"><a href="tel:082130677599" style="color: white; text-decoration: none;">0821-3067-7599</a></h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

</main>
<!-- Body main wrapper end -->

@endsection
