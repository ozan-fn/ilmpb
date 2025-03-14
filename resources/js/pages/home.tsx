import logo_bebrayan from '@/assets/images/logo bebrayan.png';
import logo_polresta from '@/assets/images/logo polresta.png';
import pengingat1 from '@/assets/images/pengingat 1.jpg';
import selamat_datang from '@/assets/images/selamat datang.jpg';

import { type SharedData } from '@/types';
import { Head, usePage } from '@inertiajs/react';
import { Swiper, SwiperSlide } from 'swiper/react';

import 'swiper/css';
import 'swiper/css/navigation';
import 'swiper/css/pagination';

import { Autoplay, Pagination, Navigation } from 'swiper/modules';

export default function Welcome() {
    const { auth } = usePage<SharedData>().props;

    return (
        <>
            <Head title="Welcome">
                <link rel="preconnect" href="https://fonts.bunny.net" />
                <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />
            </Head>
            <header className="sticky top-0 z-10 h-16 w-full bg-zinc-900 text-sm text-white">
                <div className="mx-auto flex h-full w-full max-w-7xl flex-row items-center gap-2 px-4">
                    <img className="h-10 w-10 object-contain" src={logo_polresta} alt="logo" />
                    <img className="h-10 w-10 object-contain" src={logo_bebrayan} alt="logo" />

                    <div className="ml-4 flex flex-col font-semibold">
                        <p>INFORMASI MUDIK</p>
                        <p>POLRESTA BANYUMAS</p>
                    </div>
                </div>
            </header>

            <div className="mx-auto flex min-h-screen max-w-7xl flex-col bg-zinc-50 text-zinc-900">
                <div className="flex flex-col-reverse md:flex-row">
                    {/* Slogan */}
                    <div className="flex-1"></div>

                    {/* Image */}
                    <Swiper
                        autoplay={{
                            delay: 2500,
                            disableOnInteraction: true,
                        }}
                        loop
                        modules={[Autoplay]}
                        className="mySwiper max-w-sm"
                    >
                        <SwiperSlide>
                            <img src={selamat_datang} alt="" className="object-contain" />
                        </SwiperSlide>
                        <SwiperSlide>
                            <img src={pengingat1} alt="" className="object-contain" />
                        </SwiperSlide>
                    </Swiper>
                </div>
            </div>

            {/* Navigasi */}
            <div></div>
        </>
    );
}
