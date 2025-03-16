@extends('layouts.app')


@section('content')
    <div style="padding-top: 80px;">
        <div style="min-height: 90vh;" class="relative container g-0 d-flex" data-aos="fade-up" data-aos-delay="100">
            <div class="row g-0 justify-content-between">
                <div
                    class="col-sm-6 col-md-6 col-lg-6 mt-5 mt-md-0 px-4 order-2 order-md-1 d-flex flex-column justify-content-center">
                    <h2 class="fw-bold mb-4">Selamat Mudik! Pastikan Perjalanan Anda Aman & Nyaman</h2>
                    <p class="lead">Temukan informasi lengkap dan layanan untuk perjalanan mudik Anda yang lebih aman dan
                        nyaman.</p>
                </div>
                <div class="col-sm-6 col-md-5 col-lg-4 order-1 order-md-2 d-flex justify-content-center align-items-center">
                    <div id="heroCarousel" class="carousel slide" data-bs-ride="carousel" data-bs-interval="1200">
                        <div class="carousel-inner">
                            <!-- Carousel Items -->
                            @foreach ($images as $img)
                                <div class="carousel-item @if ($loop->first) active @endif">
                                    <img src="{{ Storage::url($img->path) }}" class="d-block w-100 img-fluid"
                                        alt="">
                                </div>
                            @endforeach

                        </div>
                        <!-- Carousel Controls -->
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
        <div class="icon-boxes mt-5" data-aos="fade-up" data-aos-delay="200">
            <div class="container">
                <h3 class="text-center mb-4">Layanan Informasi Mudik</h3>
                <div class="row g-4">
                    <div class="col-lg-4 col-md-6">
                        <div
                            class="icon-box h-100 d-flex flex-column align-items-center text-center p-4 rounded shadow-sm transition-all hover-lift">
                            <div class="icon bg-light rounded-circle p-3 mb-3">
                                <img style="width: 60px; height: 60px; object-fit: contain;"
                                    src="{{ asset('assets/icon/customer.jpg') }}" alt="Layanan Mudik">
                            </div>
                            <h4 class="title fw-bold">Layanan Mudik</h4>
                            <p class="text-muted">Informasi layanan yang tersedia untuk pemudik selama perjalanan</p>
                            <a href="layanan-mudik" class="btn btn-primary mt-auto">Selengkapnya</a>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6">
                        <div
                            class="icon-box h-100 d-flex flex-column align-items-center text-center p-4 rounded shadow-sm transition-all hover-lift">
                            <div class="icon bg-light rounded-circle p-3 mb-3">
                                <img style="width: 60px; height: 60px; object-fit: contain;"
                                    src="{{ asset('assets/icon/traffic.jpg') }}" alt="Update Lalu Lintas">
                            </div>
                            <h4 class="title fw-bold">Jalur Alternatif & Update Lalu Lintas</h4>
                            <p class="text-muted">Informasi terkini tentang kondisi lalu lintas dan jalur alternatif</p>
                            <a href="update-lalu-lintas" class="btn btn-primary mt-auto">Selengkapnya</a>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 mx-auto">
                        <div
                            class="icon-box h-100 d-flex flex-column align-items-center text-center p-4 rounded shadow-sm transition-all hover-lift">
                            <div class="icon bg-light rounded-circle p-3 mb-3">
                                <img style="width: 60px; height: 60px; object-fit: contain;"
                                    src="{{ asset('assets/icon/home.jpg') }}" alt="Posko Pengamanan">
                            </div>
                            <h4 class="title fw-bold">Posko Pengamanan</h4>
                            <p class="text-muted">Lokasi posko pengamanan mudik yang siap membantu anda</p>
                            <a href="/pos-pengamanan-mudik" class="btn btn-primary mt-auto">Selengkapnya</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
