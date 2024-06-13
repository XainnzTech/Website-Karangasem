@extends('layouts.master')

@section('bootstrap')
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
@endsection

@section('content')

@include('layouts.navbar2')

{{-- Modal Box --}}
<div class="flex justify-center w-full min-h-screen">
    <div class="my-6">
         <main class="bg-white rounded border" style="width: 35rem;">
            <div class="flex items-center justify-between bg-slate-900 text-white px-7 py-2 rounded-t">
                <h2 class="text-2xl">Form Edit</h2>
            </div>
            <form action="{{ route('package.update', $package->id) }}" method="POST" enctype="multipart/form-data" class="w-full grid py-3 px-7 rounded-b">
                @csrf
                @method('PUT')

                <div class="mb-3 grid grid-cols-5 gap-3 w-full">
                    <div class="col-span-4">
                        <label for="gambar" class="form-label font-semibold"><span class="text-danger">*</span> Gambar</label>
                        <input type="file" id="gambar" class="form-control" name="gambar" value="{{ $package->gambar }}">
                    </div>
                    <img src="{{ asset('img/paket/' . $package->gambar) }}" style="width: 100%; height: 4.7rem">
                </div>
                <div class="mb-3">
                    <label for="nama_paket" class="form-label font-semibold"><span class="text-danger">*</span> Nama Paket</label>
                    <input type="text" id="nama_paket" class="form-control" placeholder="Masukkan Nama Paket" name="nama_paket" value="{{ $package->nama_paket }}">
                </div>
                <div class="mb-3">
                    <label for="harga" class="form-label font-semibold"><span class="text-danger">*</span> Harga</label>
                    <input type="number" id="harga" class="form-control" placeholder="Masukkan Harga" name="harga" value="{{ $package->harga }}">
                </div>
                <div class="mb-3">
                    <label for="deskripsi" class="form-label font-semibold"><span class="text-danger">*</span> Deskripsi</label>
                    <textarea id="deskripsi" name="deskripsi" class="form-control" placeholder="Masukkan Deskripsi" style="min-height: 10rem; max-height: 10rem;">{{ $package->deskripsi }}</textarea>
                </div>
                <div class="mb-3">
                    <label for="kegiatan" class="form-label font-semibold"><span class="text-danger">*</span> Kegiatan</label>
                    <textarea id="kegiatan" name="kegiatan" class="form-control" placeholder="Masukkan Kegiatan" style="min-height: 10rem; max-height: 10rem;">{{ $package->kegiatan }}</textarea>
                </div>
                <div class="flex gap-3">
                    <a href="/admin/paket" class="btn btn-danger bg-danger w-100">Back</a>
                    <button type="submit" class="btn btn-primary bg-primary w-100">Update</button>
                </div>
            </form>
        </main>
    </div>
</div>

@endsection
