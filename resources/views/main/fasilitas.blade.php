@extends('layouts.master')
@section('content')

@include('layouts.navbar')

{{-- Title Section Start --}}
<section class="bg-slate-900 flex flex-col justify-end bg-sunset" style="min-height: 20rem">
    <main class="container-x w-full pb-10">
        <h2 class="text-3xl text-white mb-5">Fasilitas Desa Wisata Karangasem</h2>
        <div class="w-full bg-[--primaryX] py-3 px-5 text-white rounded">
            <a href="/"><i class="fa fa-home me-1.5"></i> Beranda</a> /
            <a href="#">Fasilitas</a>
        </div>
    </main>
</section>
{{-- Title Section End --}}

<section class="py-10">
    <main class="container-x w-full">

        <div class="grid x-cols-4 gap-5">

            @forelse ($accomodation as $a)
            <div class="w-full rounded relative overflow-hidden border" style="height: 17rem;">
                <div class="bg-slate-200 border bg-cover bg-center" style="height: 10rem; background-image: url('{{ asset('img/fasilitas/' . $a->gambar) }}');">
                    <div class="absolute -right-14 top-6 rotate-45 z-10 bg-black bg-opacity-70 w-52 py-2 text-center text-white">
                        <p>Rp {{ number_format($a->harga, 0, '.', '.') }}</p>
                    </div>
                </div>
                <div class="w-full flex flex-col px-3 pb-3">
                    <div class="my-3 mx-2">
                        <p class="text-xl">{{ $a->nama }}</p>

                    </div>
                    {{-- <a href="#" class="btn-x btn-x-primary text-center">
                        <i class="fa fa-exclamation-circle" aria-hidden="true"></i>
                        Detail
                    </a> --}}
                </div>
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

    </main>
</section>

@include('layouts.footer')

@endsection
