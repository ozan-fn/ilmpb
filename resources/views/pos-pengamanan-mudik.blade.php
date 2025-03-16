@extends('layouts.app')

@section('content')
    <div class="hero section g-0 d-flex justify-content-center align-items-center row">
        <div class="container section-title" data-aos="fade-up">
            <h2>Pos Pengamanan Mudik<br /></h2>
        </div>

        <div id="carouselExample" class="carousel slide col-sm-6 col-md-5 col-lg-4" data-bs-ride="carousel" data-bs-interval="5000">
            <div class="carousel-inner">
                <div class="carousel-item">
                    <img src="{{ asset('assets/images/pospam/pospam ajibarang.jpg') }}" class="d-block w-100"
                        alt="..." />
                </div>
                <div class="carousel-item active">
                    <img src="{{ asset('assets/images/pospam/pospam kemranjen.jpg') }}" class="d-block w-100"
                        alt="..." />
                </div>
                <div class="carousel-item">
                    <img src="{{ asset('assets/images/pospam/pospam wangon.jpg') }}" class="d-block w-100" alt="..." />
                </div>
                <div class="carousel-item">
                    <img src="{{ asset('assets/images/pospam/posyan alun-alun purwokerto.jpg') }}" class="d-block w-100"
                        alt="..." />
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
@endsection
