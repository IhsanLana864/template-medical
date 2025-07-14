@extends('layouts.main')

@section('content')

<main>
    <div class="breadcrumb__area header__background-color breadcrumb__header-up breadcrumb-space overly overflow-hidden">
        {{-- Path diperbaiki menggunakan asset() --}}
        <div class="breadcrumb__background" data-background="{{ asset('assets/imgs/breadcrumb/page-header-1.png') }}"></div>
        <div class="container">
            <div class="row align-items-center justify-content-between">
                <div class="col-12">
                    <div class="breadcrumb__content text-center">
                        <h2 class="breadcrumb__title mb-15 mb-sm-10 mb-xs-5 color-white title-animation">Tim Dokter Kami</h2>
                        <div class="breadcrumb__menu">
                            <nav>
                                <ul>
                                    <li><span><a href="{{ url('/') }}">Beranda</a></span></li>
                                    <li class="active"><span>Daftar Dokter</span></li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="doctor-page section-space">
        <div class="container">
            <div class="row mb-minus-30">
                <div class="col-xl-4 col-md-6">
                    <div class="team__item team__item-doctor_page team__item-box_shadow mb-30">
                        <div class="team__item-media">
                            {{-- Path diperbaiki menggunakan asset() --}}
                            <img class="img-fluid" src="{{ asset('assets/imgs/doctor-page/doctor-1.jpg') }}" alt="Foto dr. M.Lucky N P, Sp.PD">
                        </div>
                        <div class="team__item-content">
                            <div class="team__item-content-left">
                                {{-- Link diperbaiki menggunakan url() --}}
                                <h4 class="mb-10"><a href="{{ url('profil/dokter/detail/1') }}">dr. M.Lucky N P, Sp.PD</a></h4>
                                <p class="mb-0">Dokter Spesialis Penyakit Dalam</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6">
                    <div class="team__item team__item-doctor_page team__item-box_shadow mb-30">
                        <div class="team__item-media">
                            <img class="img-fluid" src="{{ asset('assets/imgs/doctor-page/doctor-2.jpg') }}" alt="Foto dr. Teguh Karyadi, Sp.B">
                        </div>
                        <div class="team__item-content">
                            <div class="team__item-content-left">
                                <h4 class="mb-10"><a href="{{ url('profil/dokter/detail/2') }}">dr. Teguh Karyadi, Sp.B</a></h4>
                                <p class="mb-0">Dokter Spesialis Bedah</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6">
                    <div class="team__item team__item-doctor_page team__item-box_shadow mb-30">
                        <div class="team__item-media">
                            <img class="img-fluid" src="{{ asset('assets/imgs/doctor-page/doctor-3.jpg') }}" alt="Foto dr. Tendi Robby S, Sp.OG.">
                        </div>
                        <div class="team__item-content">
                            <div class="team__item-content-left">
                                <h4 class="mb-10"><a href="{{ url('profil/dokter/detail/3') }}">dr. Tendi Robby S, Sp.OG.</a></h4>
                                <p class="mb-0">Dokter Spesialis Obstetri & Ginekologi</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6">
                    <div class="team__item team__item-doctor_page team__item-box_shadow mb-30">
                        <div class="team__item-media">
                            <img class="img-fluid" src="{{ asset('assets/imgs/doctor-page/doctor-4.jpg') }}" alt="Foto dr. Azka Putra R, Sp.An">
                        </div>
                        <div class="team__item-content">
                            <div class="team__item-content-left">
                                <h4 class="mb-10"><a href="{{ url('profil/dokter/detail/4') }}">dr. Azka Putra R, Sp.An</a></h4>
                                <p class="mb-0">Dokter Spesialis Anestesi</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6">
                    <div class="team__item team__item-doctor_page team__item-box_shadow mb-30">
                        <div class="team__item-media">
                            <img class="img-fluid" src="{{ asset('assets/imgs/doctor-page/doctor-5.jpg') }}" alt="Foto drg. Ridho Akhri Prianto">
                        </div>
                        <div class="team__item-content">
                            <div class="team__item-content-left">
                                <h4 class="mb-10"><a href="{{ url('profil/dokter/detail/5') }}">drg. Ridho Akhri Prianto</a></h4>
                                <p class="mb-0">Dokter Gigi</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6">
                    <div class="team__item team__item-doctor_page team__item-box_shadow mb-30">
                        <div class="team__item-media">
                            <img class="img-fluid" src="{{ asset('assets/imgs/doctor-page/doctor-6.jpg') }}" alt="Foto dr. Fasya Sophia S">
                        </div>
                        <div class="team__item-content">
                            <div class="team__item-content-left">
                                <h4 class="mb-10"><a href="{{ url('profil/dokter/detail/6') }}">dr. Fasya Sophia S</a></h4>
                                <p class="mb-0">Dokter Umum</p>
                            </div>
                        </div>
                    </div>
                </div>
                 <div class="col-xl-4 col-md-6">
                    <div class="team__item team__item-doctor_page team__item-box_shadow mb-30">
                        <div class="team__item-media">
                            <img class="img-fluid" src="{{ asset('assets/imgs/doctor-page/doctor-1.jpg') }}" alt="Foto dr. Angela Virgini T">
                        </div>
                        <div class="team__item-content">
                            <div class="team__item-content-left">
                                <h4 class="mb-10"><a href="{{ url('profil/dokter/detail/7') }}">dr. Angela Virgini T</a></h4>
                                <p class="mb-0">Dokter Umum</p>
                            </div>
                        </div>
                    </div>
                </div>
                 <div class="col-xl-4 col-md-6">
                    <div class="team__item team__item-doctor_page team__item-box_shadow mb-30">
                        <div class="team__item-media">
                            <img class="img-fluid" src="{{ asset('assets/imgs/doctor-page/doctor-2.jpg') }}" alt="Foto dr. Hasnawati">
                        </div>
                        <div class="team__item-content">
                            <div class="team__item-content-left">
                                <h4 class="mb-10"><a href="{{ url('profil/dokter/detail/8') }}">dr. Hasnawati</a></h4>
                                <p class="mb-0">Dokter Umum</p>
                            </div>
                        </div>
                    </div>
                </div>
                 <div class="col-xl-4 col-md-6">
                    <div class="team__item team__item-doctor_page team__item-box_shadow mb-30">
                        <div class="team__item-media">
                            <img class="img-fluid" src="{{ asset('assets/imgs/doctor-page/doctor-3.jpg') }}" alt="Foto dr. Fajar Utama">
                        </div>
                        <div class="team__item-content">
                            <div class="team__item-content-left">
                                <h4 class="mb-10"><a href="{{ url('profil/dokter/detail/9') }}">dr. Fajar Utama</a></h4>
                                <p class="mb-0">Dokter Umum</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection
