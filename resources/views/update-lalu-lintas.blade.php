@extends('layouts.app')

@section('content')
    <section class="hero section">
        <div class="container section-title" data-aos="fade-up">
            <h2>Peta Jalur Mudik Baturaden<br /></h2>
        </div>

        <img style="width: 100vw; object-fit: fill" src="{{ asset('assets/images/lalu lintas.png') }}" alt="" />
    </section>

    <section class="hero section">
        <div class="container section-title" data-aos="fade-up">
            <h2>Peta Jalur Mudik Ajibarang<br /></h2>
        </div>

        <img style="width: 100vw; object-fit: fill" src="{{ asset('assets/images/lalu lintas2.jpg') }}" alt="" />
    </section>

    <section class="hero section">
        <div class="container section-title" data-aos="fade-up">
            <h2>Peta Jalur Mudik Wijahan<br /></h2>
        </div>

        <img style="width: 100vw; object-fit: fill" src="{{ asset('assets/images/lalu lintas3.png') }}" alt="" />
    </section>

    <div class="hero"></div>
@endsection
