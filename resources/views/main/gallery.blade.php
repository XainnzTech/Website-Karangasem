@extends('layouts.master')
@section('content')

@include('layouts.navbar')

{{-- Title Section Start --}}
<section class="bg-slate-900 flex flex-col justify-end bg-sunset" style="min-height: 20rem">
    <main class="container-x w-full pb-10">
        <h2 class="text-3xl text-white mb-5">Gallery Desa Wisata Karangasem</h2>
        <div class="w-full bg-[--primaryX] py-3 px-5 text-white rounded">
            <a href="/"><i class="fa fa-home me-1.5"></i> Beranda</a> /
            <a href="#">Gallery</a>
        </div>
    </main>
</section>
{{-- Title Section End --}}

{{-- Gallery Section Start --}}
<section class="py-10 min-h-80 grid place-items-center">
    <main class="container-x w-full flex flex-col justify-center gap-3">

        <div class="w-full max-h-44 relative wrapper">

            <i class="fa-solid fa-angle-left z-10" id="left"></i>

            <div class="carouselX max-h-44 grid grid-flow-col">
                @forelse ($image as $img)
                <div class="w-full h-44 bg-slate-400 card cursor-pointer opacity-90 hover:opacity-100 transition-all duration-200 overflow-y-hidden">
                    <img src="{{ asset('img/gallery/' . $img->gambar) }}" alt="{{ $img->judul }}" class="w-full h-full" onclick="myFunction(this);">
                </div>
                @empty
                <div class="w-full h-screen grid place-items-center col-span-4">
                    <p class="text-2xl">
                        <i class="fa fa-hourglass me-5 animate-spin"></i>
                        Fasilitas Tidak Tersedia
                    </p>
                </div>
                @endforelse
            </div>

            <i class="fa-solid fa-angle-right" id="right"></i>

        </div>

        <div class="hidden w-full bg-slate-200 overflow-hidden relative" style="height: 35rem">
            <div class="absolute top-0 right-0 text-white text-2xl cursor-pointer grid place-items-center w-12 h-12 duration-200 hover:bg-red-700" onclick="this.parentElement.style.display='none'">
                <i class="fa fa-times"></i>
            </div>
            <img id="expandedImg" style="height:100%; width: 100%;">
            <div class="absolute bottom-8 left-0 bg-black bg-opacity-50 text-white text-center text-2xl font-semibold px-5 py-2 w-full">
                <p id="imgtext"></p>
            </div>
        </div>

    </main>
</section>
{{-- Gallery Section End --}}

@include('layouts.footer')

<script>
    function myFunction(imgs) {
        var expandImg = document.getElementById("expandedImg");
        var imgText = document.getElementById("imgtext");
        expandImg.src = imgs.src;
        imgText.innerHTML = imgs.alt;
        expandImg.parentElement.style.display = "block";
    }
</script>

@endsection
