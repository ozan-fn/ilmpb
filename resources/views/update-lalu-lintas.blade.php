@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row g-3 flex-column align-items-center">
        @php
            $jalurMudik = [
                ["title" => "Peta Jalur Mudik Baturaden", "image" => "assets/images/lalu lintas.png"],
                ["title" => "Peta Jalur Mudik Ajibarang", "image" => "assets/images/lalu lintas2.jpg"],
                ["title" => "Peta Jalur Mudik Wijahan", "image" => "assets/images/lalu lintas3.png"],
            ];
        @endphp

        @foreach ($jalurMudik as $jalur)
        <div class="col-sm-6 col-md-5 col-lg-4 d-flex justify-content-center align-items-center">
            <section class="hero section text-center w-100" style="max-width: 768px;">
                <div class="container section-title" data-aos="fade-up">
                    <h3>{{ $jalur['title'] }}</h3>
                </div>
                <img class="img-fluid w-100" src="{{ asset($jalur['image']) }}" alt="{{ $jalur['title'] }}">
            </section>
        </div>
        @endforeach
    </div>
</div>
@endsection
