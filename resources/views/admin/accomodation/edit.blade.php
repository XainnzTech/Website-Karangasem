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
            <form action="{{ route('accomodation.update', $accomodation->id) }}" method="POST" enctype="multipart/form-data" class="w-full grid py-3 px-7 rounded-b">
                @csrf
                @method('PUT')

                <div class="mb-3 grid grid-cols-5 gap-3 w-full">
                    <div class="col-span-4">
                        <label for="gambar" class="form-label font-semibold"><span class="text-danger">*</span> Gambar</label>
                        <input type="file" id="gambar" class="form-control" name="gambar" value="{{ $accomodation->gambar }}">
                    </div>
                    <img src="{{ asset('img/fasilitas/' . $accomodation->gambar) }}" style="width: 100%; height: 4.7rem" class="border">
                </div>
                <div class="mb-3">
                    <label for="nama" class="form-label font-semibold"><span class="text-danger">*</span> Nama Fasilitas</label>
                    <input type="text" id="nama" class="form-control" placeholder="Masukkan Nama Fasilitas" name="nama" value="{{ $accomodation->nama }}">
                </div>
                <div class="mb-3">
                    <label for="harga" class="form-label font-semibold"><span class="text-danger">*</span> Harga</label>
                    <input type="number" id="harga" class="form-control" placeholder="Masukkan Harga" name="harga" value="{{ $accomodation->harga }}">
                </div>
                <div class="flex gap-3">
                    <a href="/admin/fasilitas" class="btn btn-danger bg-danger w-100">Back</a>
                    <button type="submit" class="btn btn-primary bg-primary w-100">Update</button>
                </div>
            </form>
        </main>
    </div>
</div>

@endsection
