@extends('layouts.master')

@section('bootstrap')
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
@endsection

@section('content')

@include('layouts.navbar2')

{{-- Dashboard Section Start --}}
<section class="min-h-96 mt-6">
    <main class="container-x grid x-cols-3 w-full gap-3">

        <a href="/admin/paket" class="w-full h-40 grid grid-rows-4">
            <div class="bg-red-600 row-span-3 flex items-center justify-between p-4 rounded-t text-black">
                <div class="grid gap-2">
                    <h1 class="text-5xl">{{ $package }}</h1>
                    <h3 class="text-lg">Paket Wisata</h3>
                </div>
                <div class="grid place-items-center">
                    <i class="fa fa-people-group text-6xl text-red-800" aria-hidden="true"></i>
                </div>
            </div>
            <div class="bg-red-800 flex items-center justify-center px-4 rounded-b">
                <p class="text-white">Show More <i class="fa fa-arrow-right" aria-hidden="true"></i></p>
            </div>
        </a>

        <a href="/admin/fasilitas" class="w-full h-40 grid grid-rows-4">
            <div class="bg-emerald-600 row-span-3 flex items-center justify-between p-4 rounded-t text-black">
                <div class="grid gap-2">
                    <h1 class="text-5xl">{{ $accomodation }}</h1>
                    <h3 class="text-lg">Fasilitas</h3>
                </div>
                <div class="grid place-items-center">
                    <i class="fa fa-mountain-sun text-6xl text-emerald-800" aria-hidden="true"></i>
                </div>
            </div>
            <div class="bg-emerald-800 flex items-center justify-center px-4 rounded-b">
                <p class="text-white">Show More <i class="fa fa-arrow-right" aria-hidden="true"></i></p>
            </div>
        </a>

        <a href="/admin/gallery" class="w-full h-40 grid grid-rows-4">
            <div class="bg-purple-600 row-span-3 flex items-center justify-between p-4 rounded-t text-black">
                <div class="grid gap-2">
                    <h1 class="text-5xl">{{ $image }}</h1>
                    <h3 class="text-lg">Gambar</h3>
                </div>
                <div class="grid place-items-center">
                    <i class="fa fa-image text-6xl text-purple-800" aria-hidden="true"></i>
                </div>
            </div>
            <div class="bg-purple-800 flex items-center justify-center px-4 rounded-b">
                <p class="text-white">Show More <i class="fa fa-arrow-right" aria-hidden="true"></i></p>
            </div>
        </a>

        <a href="/admin/komentar" class="w-full h-40 grid grid-rows-4">
            <div class="bg-cyan-600 row-span-3 flex items-center justify-between p-4 rounded-t text-black">
                <div class="grid gap-2">
                    <h1 class="text-5xl">{{ $message }}</h1>
                    <h3 class="text-lg">Komentar</h3>
                </div>
                <div class="grid place-items-center">
                    <i class="fa fa-comments text-6xl text-cyan-800" aria-hidden="true"></i>
                </div>
            </div>
            <div class="bg-cyan-800 flex items-center justify-center px-4 rounded-b">
                <p class="text-white">Show More <i class="fa fa-arrow-right" aria-hidden="true"></i></p>
            </div>
        </a>

        <a href="/admin/akun" class="w-full h-40 grid grid-rows-4">
            <div class="bg-amber-600 row-span-3 flex items-center justify-between p-4 rounded-t text-black">
                <div class="grid gap-2">
                    <h1 class="text-5xl">{{ $account }}</h1>
                    <h3 class="text-lg">Pengguna</h3>
                </div>
                <div class="grid place-items-center">
                    <i class="fa fa-user text-6xl text-amber-800" aria-hidden="true"></i>
                </div>
            </div>
            <div class="bg-amber-800 flex items-center justify-center px-4 rounded-b">
                <p class="text-white">Show More <i class="fa fa-arrow-right" aria-hidden="true"></i></p>
            </div>
        </a>

    </main>
</section>
{{-- Dashboard Section End --}}

@endsection
