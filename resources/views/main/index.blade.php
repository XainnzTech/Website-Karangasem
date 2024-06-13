@extends('layouts.master')
@section('content')

@include('layouts.navbar')

{{-- Hero Section Start --}}
<section class="bg-slate-900 flex items-center bg-hero">
    <main class="container-x w-full text-white text-justify md:text-center">
        <h2 class="text-3xl md:text-4xl mb-4">Selamat Datang di Website<br> Desa Wisata Karangasem</h2>
        <p class="w-full md:w-2/3 md:mx-auto text-lg mb-7">
            Temukan pesona Desa Karangasem, dengan kerajinan bambu unik dan keindahan alamnya. Jelajahi keramahan desa kami.
        </p>
        <a href="#about" class="btn-x btn-x-primary">Jelajahi <i class="fa fa-compass" aria-hidden="true"></i></></a>
    </main>
</section>
{{-- Hero Section End --}}

{{-- About Section Start --}}
<section class="flex items-center" id="about">
    <main class="container-x w-full grid x-cols-2 gap-5 lg:gap-10 py-10">

        <div class="w-full bg-slate-400 img" data-aos="fade-right" style="background: url('{{ asset('img/tugu.JPG') }}'); background-size: cover;"></div>

        <div class="w-full flex flex-col justify-center text-justify" data-aos="fade-left">
            <h2 class="text-2xl font-semibold mb-3">About</h2>
            <p class="mb-3">
                Desa wisata Karangasem merupakan desa wisata yang menampilkan keindahan alam yang berada di kawasan hutan pinus.
                Desa wisata ini menawarkan beberapa atraksi wisata menarik baik keindahan alam, adat, istiadat, kerajinan, dan kesenian.
            </p>
            <p class="mb-5">
                Unggulan dari desa wisata ini adalah sentra kerajinan bambu karena dapat ditemukan banyak tumbuhan bambu di daerah ini.
            </p>
            <a href="/profil" class="btn-x btn-x-primary w-max text-sm">View More <i class="fa fa-arrow-right"></i></a>
        </div>
    </main>
</section>
{{-- About Section End --}}

{{-- Contact Section Start --}}
<section class="flex items-center justify-center w-full bg-slate-900" style="min-height: 20rem;">
    <main class="container-x w-full h-full py-10 grid place-items-center" style="width: 50rem">
        <div class="w-full h-full p-10 bg-slate-200 text-center rounded">
            <h2 class="text-lg mb-7">Temukan lebih banyak tentang Desa Karangasem dan berbagai kegiatan menarik yang kami tawarkan.</h2>
            <a href="https://api.whatsapp.com/send?phone=6285726643029" target="_blank" class="btn-x btn-x-primary"><i class="fa-brands fa-whatsapp me-1"></i> Contact Us</a>
        </div>
    </main>
</section>
{{-- Contact Section End --}}

{{-- Paket Section Start --}}
<section class="flex items-center pt-10">
    <main class="container-x w-full grid x-cols-2 gap-10">
        <div class="text-justify md:text-center flex flex-col justify-center " data-aos="zoom-in">
            <h2 class="text-2xl mb-3 font-semibold">Paket Wisata</h2>
            <p class="mb-5">
                Nikmati beragam paket wisata di Desa Karangasem. Temukan keindahan alam, budaya, dan kerajinan bambu khas yang ditawarkan oleh desa kami.
            </p>
            <a href="/paket" class="btn-x btn-x-primary w-max md:mx-auto text-sm">View More <i class="fa fa-arrow-right"></i></a>
        </div>
        <div class="grid grid-cols-2 gap-3" data-aos="zoom-out">
            <div class="w-full bg-slate-400" style="height: 15rem; background: url('{{ asset('img/paket/menganyam.JPG') }}'); background-size: cover; background-position: center;"></div>
            <div class="w-full bg-slate-400" style="height: 15rem; background: url('{{ asset('img/paket/2.JPG') }}'); background-size: cover; background-position: center;"></div>
            <div class="w-full bg-slate-400" style="height: 15rem; background: url('{{ asset('img/paket/3.JPG') }}'); background-size: cover; background-position: center;"></div>
            <div class="w-full bg-slate-400" style="height: 15rem; background: url('{{ asset('img/paket/4.JPG') }}'); background-size: cover; background-position: center;"></div>
        </div>
    </main>
</section>
{{-- Paket Section End --}}

{{-- Fasilitas Section Start --}}
<section class="flex items-center">
    <main class="container-x w-full grid x-cols-2 gap-10">
        <div class="grid grid-cols-2 gap-3 order-1 sm:order-2" data-aos="fade-up-right">
            <div class="w-full img bg-slate-400" style="background: url('{{ asset('img/fasilitas/4.jpg') }}'); background-size: cover; background-position: center;"></div>
            <div class="w-full img bg-slate-400" style="background: url('{{ asset('img/fasilitas/8.jpg') }}'); background-size: cover; background-position: center;"></div>
        </div>
        <div class="flex flex-col justify-center text-justify md:text-center md:order-2" data-aos="fade-up-left">
            <h2 class="text-2xl font-semibold mb-3">Fasilitas</h2>
            <p class="mb-5">
                Desa Karangasem menyediakan berbagai fasilitas untuk kenyamanan Anda, termasuk penginapan yang nyaman, restoran dengan masakan lokal, dan area rekreasi untuk menikmati alam.
            </p>
            <a href="/fasilitas" class="btn-x btn-x-primary w-max text-sm md:mx-auto">Show More <i class="fa fa-arrow-right"></i></a>
        </div>
    </main>
</section>
{{-- Fasilitas Section End --}}

{{-- Gallery Section Start --}}
<section class="flex items-center pb-10">
    <main class="container-x w-full grid x-cols-2 gap-10">
        <div class="flex flex-col justify-center text-justify md:text-center">
            <h2 class="text-2xl font-semibold mb-3">Gallery</h2>
            <p class="mb-5">
                Jelajahi keindahan Desa Karangasem melalui galeri foto yang menawan. Nikmati momen-momen indah dan inspiratif yang kami bagikan dari berbagai sudut desa.
            </p>
            <a href="/gallery" class="btn-x btn-x-primary w-max text-sm md:mx-auto">Show More <i class="fa fa-arrow-right"></i></a>
        </div>
        <div class="w-full grid grid-cols-2 gap-3">
            <div class="w-full bg-slate-400" style="height: 15rem; background: url('{{ asset('img/gallery/1718197641.jpg') }}'); background-size: cover;"></div>
            <div class="w-full bg-slate-400" style="height: 15rem; background: url('{{ asset('img/gallery/1718197346.jpg') }}'); background-size: cover; background-position: center;"></div>
            <div class="w-full bg-slate-400 col-span-2" style="height: 15rem; background: url('{{ asset('img/gallery/1718198189.jpg') }}'); background-size: cover; background-position: center;"></div>
        </div>
    </main>
</section>
{{-- Gallery Section End --}}

{{-- Contact Section Start --}}
<section class="flex items-center justify-center w-full bg-slate-900" style="min-height: 20rem;">
    <main class="container-x w-full h-full py-10 grid place-items-center" style="width: 50rem">
        <div class="w-full h-full p-10 bg-slate-200 text-center rounded">
            <h2 class="text-lg mb-7">Temukan lebih banyak tentang Desa Karangasem dan dapatkan informasi lebih lanjut.</h2>
            <a href="https://api.whatsapp.com/send?phone=6285726643029" target="_blank" class="btn-x btn-x-primary"><i class="fa-brands fa-whatsapp me-1"></i> Contact Us</a>
        </div>
    </main>
</section>
{{-- Contact Section End --}}

{{-- Form Section Start --}}
<section class="flex items-center py-10">
    <main class="container-x w-full grid x-cols-2 gap-10">
        <div class="w-full img rounded border">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3951.765658113738!2d110.4427144!3d-7.919529299999993!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7a53d1151d9dff%3A0x145ee0df81c440f4!2skerajinan%20bambu%20karangasem%20muntuk%20dlingo!5e0!3m2!1sid!2sid!4v1710732486815!5m2!1sid!2sid" width="100%" height="100%"></iframe>
        </div>
        <div class="w-full flex flex-col justify-center">
            <div class="mb-5">
                <h2 class="text-2xl mb-2 font-semibold">Get In Touch</h2>
                <p>
                    Jika Anda memiliki pertanyaan atau saran, jangan ragu untuk menghubungi kami.
                </p>
            </div>
            <form action="{{ route('comment.store') }}" method="POST" class="grid gap-2">
                @csrf
                <div class="flex items-center relative">
                    <i class="fa fa-user absolute left-4 text-slate-300"></i>
                    <input type="text" placeholder="Name" name="name" class="w-full ps-11">
                </div>
                <div class="flex items-center relative">
                    <i class="fa fa-envelope absolute left-4 text-slate-300"></i>
                    <input type="email" placeholder="Email" name="email" class="w-full ps-11">
                </div>
                <div class="flex items-start relative">
                    <i class="fa fa-message absolute left-4 top-3.5 text-slate-300"></i>
                    <textarea placeholder="Message..." name="message" class="w-full ps-11" style="min-height: 200px"></textarea>
                </div>
                <button type="submit" class="btn-x btn-x-primary">Submit</button>
            </form>
        </div>
    </main>
</section>
{{-- Form Section End --}}

{{-- Footer Section Start --}}
@include('layouts.footer')
{{-- Footer Section End --}}

@endsection
