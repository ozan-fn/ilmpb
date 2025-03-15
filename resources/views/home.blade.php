@extends('layouts.app')

@section('content')
    <section id="hero" class="hero section">
        <div class="container position-relative" data-aos="fade-up" data-aos-delay="100">
            <div class="row gy-5 justify-content-between">
                <div class="col-lg-6 order-2 order-lg-1 d-flex flex-column justify-content-center">
                    <h4 align="center">
                        Selamat Mudik! Pastikan Perjalanan Anda Aman &
                        Nyaman
                    </h4>
                </div>
                <div class="col-lg-5 order-1 order-lg-2">
                    <div id="heroCarousel" class="carousel slide" data-bs-ride="carousel" data-bs-interval="1200">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="{{ asset('assets/images/selamat-datang.jpg') }}"
                                    class="d-block w-100" alt="Selamat Datang" />
                            </div>
                            <div class="carousel-item">
                                <img src="{{ asset('assets/images/pengingat.jpg') }}"
                                    class="d-block w-100" alt="Pengingat" />
                            </div>
                            <div class="carousel-item">
                                <img src="{{ asset('assets/images/110.jpg') }}" class="d-block w-100" alt="110" />
                            </div>
                            <div class="carousel-item">
                                <img src="{{ asset('assets/images/layanan-derek.jpg') }}"
                                    class="d-block w-100" alt="Layanan derek" />
                            </div>
                            <div class="carousel-item">
                                <img src="{{ asset('assets/images/cek keberadaan polisi di setiap sudut dengan aplikasi waze.jpg') }}"
                                    class="d-block w-100" alt="Image 1" />
                            </div>
                            <div class="carousel-item">
                                <img src="{{ asset('assets/images/cek secara berkala di aplikasi peta untuk mengantisipasi kemacetan saat mudik.jpg') }}"
                                    class="d-block w-100" alt="Image 1" />
                            </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#heroCarousel"
                            data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#heroCarousel"
                            data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                </div>
            </div>
        </div>

        {{-- Icon Boxes --}}
        <div class="icon-boxes position-relative" data-aos="fade-up" data-aos-delay="200">
            <div class="container position-relative">
                <div class="row gy-4 mt-5">
                    <div class="col-xl-3 col-md-6">
                        <div class="icon-box">
                            <div class="icon">
                                <img style="width: 60px;" src="{{ asset('assets/icon/customer.jpg') }}" alt="">
                            </div>
                            <h4 class="title">
                                <a href="layanan-mudik" class="stretched-link">Layanan Mudik</a>
                            </h4>
                        </div>
                    </div>

                    <div class="col-xl-3 col-md-6">
                        <div class="icon-box">
                            <div class="icon">
                                <img style="width: 60px;" src="{{ asset('assets/icon/traffic.jpg') }}" alt="">
                            </div>
                            <h4 class="title">
                                <a href="update-lalu-lintas" class="stretched-link">Update Lalu Lintas & Jalur
                                    Alternatif</a>
                            </h4>
                        </div>
                    </div>

                    <div class="col-xl-3 col-md-6">
                        <div class="icon-box">
                            <div class="icon">
                                <img style="width: 60px;" src="{{ asset('assets/icon/home.jpg') }}" alt="">
                            </div>
                            <h4 class="title">
                                <a href="/pos-pengamanan-mudik" class="stretched-link">Posko Pengamanan Mudik</a>
                            </h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
