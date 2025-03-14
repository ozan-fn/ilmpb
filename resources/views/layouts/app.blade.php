<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta content="width=device-width, initial-scale=1.0" name="viewport" />
        <title>Informasi Mudik Polresta Banyumas</title>
        <meta
            name="description"
            content="Informasi lengkap untuk mudik aman dan nyaman dari Polresta Banyumas"
        />
        <meta
            name="keywords"
            content="mudik, polresta, banyumas, keamanan, lalu lintas"
        />

        <!-- Favicons -->
        <link href="assets/img/favicon.png" rel="icon" />
        <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon" />

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com" rel="preconnect" />
        <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin />
        <link
            href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&family=Montserrat:wght@100;200;300;400;500;600;700;800;900&family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap"
            rel="stylesheet"
        />

        <!-- Vendor CSS Files -->
        <link
            href="assets/vendor/bootstrap/css/bootstrap.min.css"
            rel="stylesheet"
        />
        <link
            href="assets/vendor/bootstrap-icons/bootstrap-icons.css"
            rel="stylesheet"
        />
        <link href="assets/vendor/aos/aos.css" rel="stylesheet" />
        <link
            href="assets/vendor/glightbox/css/glightbox.min.css"
            rel="stylesheet"
        />
        <link
            href="assets/vendor/swiper/swiper-bundle.min.css"
            rel="stylesheet"
        />

        <!-- Main CSS File -->
        <link href="assets/css/main.css" rel="stylesheet" />

        <style>
            .floating-button {
                position: fixed;
                bottom: 20px;
                left: 20px;
                width: 50px;
                height: 50px;
                border-radius: 50%;
                display: flex;
                align-items: center;
                justify-content: center;
                box-shadow: 0 2px 5px rgba(0, 0, 0, 0.2);
                cursor: pointer;
            }
            .floating-button img {
                width: 40px;
                height: 40px;
                border-radius: 50%;
            }

            .floating-call-button {
                position: fixed;
                bottom: 80px;
                left: 20px;
                width: 50px;
                height: 50px;
                border-radius: 50%;
                background-color: #ffffff;
                display: flex;
                align-items: center;
                justify-content: center;
                box-shadow: 0 2px 5px rgba(0, 0, 0, 0.2);
                cursor: pointer;
                z-index: 40;
            }
            .floating-call-button img {
                width: 30px;
                height: 30px;
                border-radius: 50%;
            }
        </style>

        <script>
            function openWaze() {
                const location =
                    "https://waze.com/ul?ll=-7.403973,109.2291803&navigate=yes";
                window.open(location, "_blank");
            }

            window.onload = function () {
                setTimeout(() => {
                    window.scrollTo({ top: 300, behavior: "smooth" });
                    setTimeout(() => {
                        window.scrollTo({ top: 0, behavior: "smooth" });
                    }, 1000);
                }, 1000);
            };
        </script>
    </head>

    <body class="index-page">
        <!-- Header -->
        <header id="header" class="header fixed-top">
            <div class="branding d-flex align-items-center">
                <div
                    class="container position-relative d-flex align-items-center justify-content-between"
                >
                    <a href="/" class="logo d-flex align-items-center">
                        <img
                            src="{{ asset('assets/images/logo polresta.png') }}"
                            alt="Logo Polresta"
                        />
                        <img
                            src="{{
                                asset('assets/images/logo bebrayan3.png')
                            }}"
                            alt="Logo Bebrayan"
                        />
                        <h4 class="sitename">
                            Informasi Mudik Polresta Banyumas
                        </h4>
                    </a>

                    <nav id="navmenu" class="navmenu">
                        <ul>
                            <li><a href="/" class="active">Home</a></li>
                            <li><a href="tel:110">Butuh bantuan polisi?</a></li>
                            <li><a href="/layanan-mudik">Layanan Mudik</a></li>
                            <li><a href="/layanan-mudik">Layanan Mudik</a></li>
                        </ul>
                        <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
                    </nav>
                </div>
            </div>
        </header>

        <main class="main">
            <!--  -->
            @yield('content')
        </main>

        <div style="z-index: 40" class="floating-button" onclick="openWaze()">
            <img src="{{ asset('assets/images/waze.jpg') }}" alt="Waze" />
        </div>

        <div class="floating-call-button" onclick="callPolice()">
            <i class="bi bi-telephone-fill"></i>
            <p
                style="
                    position: absolute;
                    bottom: 40px;
                    left: 0;
                    background-color: rgba(0, 0, 0, 0.7);
                    color: #fff;
                    padding: 10px;
                    border-radius: 5px;
                "
                data-aos="fade-out"
                data-aos-duration="3000"
            >
                Butuh bantuan Polisi?
            </p>
        </div>

        <script>
            function callPolice() {
                window.location.href = "tel:110";
            }

            setTimeout(() => {
                const helpText = document.querySelector(
                    ".floating-call-button p"
                );
                if (helpText) {
                    helpText.remove();
                }
            }, 9000);
        </script>

        <!-- Footer Spacer -->
        <div class="hero"></div>

        <!-- Scroll Top Button -->
        <a
            href="#"
            id="scroll-top"
            class="scroll-top d-flex align-items-center justify-content-center"
        >
            <i class="bi bi-arrow-up-short"></i>
        </a>

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
</html>
