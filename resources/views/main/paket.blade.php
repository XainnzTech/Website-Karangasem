@extends('layouts.master')
@section('content')

@include('layouts.navbar')

{{-- Title Section Start --}}
<section class="bg-slate-900 flex flex-col justify-end bg-sunset" style="min-height: 20rem">
    <main class="container-x w-full pb-10">
        <h2 class="text-3xl text-white mb-5">Paket Wisata</h2>
        <div class="w-full bg-[--primaryX] py-3 px-5 text-white rounded">
            <a href="/"><i class="fa fa-home me-1.5"></i> Beranda</a> /
            <a href="#">Paket</a>
        </div>
    </main>
</section>
{{-- Title Section End --}}

<section class="py-10">
    <main class="container-x w-full">

        <div class="grid x-cols-4 gap-5">

            @forelse ($package as $p)
            <div class="grid w-full rounded" style="height: 20rem; border: 1px solid #ddd;">
                <div class="bg-slate-200 paket-img"
                    style="height: 10rem; background-image: url({{ asset('img/paket/' . $p->gambar) }}">
                </div>
                <div class="w-full flex flex-col justify-between px-3 pb-3">
                    <div class="">
                        <p class="text-xl mb-2">{{ $p->nama_paket }}</p>
                        <p>Rp {{ number_format($p->harga, 0, '.', '.') }}</p>
                    </div>
                    <div class="flex gap-2">
                        <button type="button" class="btn-x btn-x-primary text-center w-full modal-btn"
                            data-id="{{ $p->id }}">
                            <i class="fa fa-exclamation-circle text-sm"></i>
                            Detail
                        </button>
                        <a href="" class="btn-x btn-x-primary text-center w-full">
                            <i class="fa-brands fa-whatsapp"></i>
                            Order
                        </a>
                    </div>
                </div>
            </div>

            @empty
            <div class="w-full h-screen grid place-items-center col-span-4">
                <p class="text-2xl">
                    <i class="fa fa-hourglass me-5 animate-spin"></i>
                    Paket Tidak Tersedia
                </p>
            </div>
            @endforelse

        </div>

        {{-- <div class="w-full">
        {{ $package -> links('pagination::bootstrap-4') }}
    </div> --}}

    </main>
</section>

@include('layouts.footer')

@include('layouts.modal')
@endsection
