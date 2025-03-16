@extends('layouts.app')

@section('content')
    <div class="hero section g-0 d-flex justify-content-center align-items-center row">
        <div class="container section-title" data-aos="fade-up">
            <h2>Layanan Mudik<br /></h2>
        </div>

        <div id="carouselExample" class="carousel slide col-sm-6 col-md-5 col-lg-4 " data-bs-ride="carousel" data-bs-interval="5000">
            <div class="carousel-inner">
                @foreach ($images as $img)
                    <div class="carousel-item @if ($loop->first) active @endif">
                        <img src="{{ Storage::url($img->path) }}" class="d-block w-100"
                            alt="Selamat Datang">
                    </div>
                @endforeach
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


{{--         

        <!-- Scroll Top -->
        <a
            href="#"
            id="scroll-top"
            class="scroll-top d-flex align-items-center justify-content-center"
            ><i class="bi bi-arrow-up-short"></i
        ></a>

        <!-- Preloader -->
        <div id="preloader"></div>

        <!-- Vendor JS Files -->
        <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="assets/vendor/php-email-form/validate.js"></script>
        <script src="assets/vendor/aos/aos.js"></script>
        <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
        <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
        <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
        <script src="assets/vendor/imagesloaded/imagesloaded.pkgd.min.js"></script>
        <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>

        <!-- Main JS File -->
        <script src="assets/js/main.js"></script>
    </body>
</html> --}}
