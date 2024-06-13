@extends('layouts.master')

@section('bootstrap')
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
@endsection

@section('content')

@include('layouts.navbar2')

{{-- Table Section Start --}}
<section class="pt-6 min-h-96">
    <main class="container-x w-full">
        <div class="flex justify-between card-header border gap-2 font-semibold">
            <a href="#" id="modal-btn" class=" btn btn-primary"><i class="fa fa-plus"></i></a>
            {{ $image -> links('pagination::bootstrap-4') }}
        </div>
        <div class="overflow-x-scroll">
            <table class="table table-bordered w-full">
                <tr class="table-dark text-center align-middle">
                    <th>No</th>
                    <th>Gambar</th>
                    <th>Judul</th>
                    <th>Action</th>
                </tr>
                @foreach ($image as $img)
                <tr class="align-middle">
                    <td class="text-center">{{ $i++ }}</td>
                    <td><img src="{{ asset('img/gallery/' . $img->gambar) }}" style="width: 4.5rem; height: auto;" class="mx-auto"></td>
                    <td>{{ $img->judul }}</td>
                    <td>
                        <div class="flex justify-center gap-2">
                            <a href="{{ route('image.edit', $img->id) }}" class="btn btn-warning"><i class="fa fa-edit text-white"></i></a>
                            <form action="{{ route('image.destroy', $img->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger bg-danger" onclick="return confirm('Apakah Anda ingin menghapus data ini?')">
                                    <i class="fa fa-trash"></i>
                                </button>
                            </form>
                        </div>
                    </td>
                </tr>
                @endforeach
            </table>
        </div>
    </main>
</section>
{{-- Table Section End --}}

{{-- Modal Box --}}
<div class="container-x hidden place-items-center w-full min-h-screen fixed top-0" style="background-color: rgba(0, 0, 0, 0.7); z-index: 100;" id="modal">
    <div class="w-full h-full flex items-center overflow-y-scroll">
        <main class="bg-white rounded m-auto" style="width: 25rem;">
            <div class="flex items-center justify-between bg-slate-900 text-white px-7 py-2">
                <h2 class="text-2xl">Form</h2>
                <a href="#" id="close"><i class="fa fa-times text-white"></i></a>
            </div>
            <form action="{{ route('image.store') }}" method="POST" enctype="multipart/form-data" class="w-full grid py-3 px-7">
                @csrf

                <div class="mb-3">
                    <label for="gambar" class="form-label font-semibold"><span class="text-danger">*</span> Gambar</label>
                    <input type="file" id="gambar" class="form-control" name="gambar">
                </div>
                <div class="mb-3">
                    <label for="judul" class="form-label font-semibold"><span class="text-danger">*</span> Judul</label>
                    <input type="text" id="judul" class="form-control" placeholder="Masukkan Judul" name="judul">
                </div>
                <div class="flex gap-3">
                    <a href="#" class="btn btn-danger bg-danger w-100" id="back">Back</a>
                    <button type="submit" class="btn btn-primary bg-primary w-100">Submit</button>
                </div>

            </form>
        </main>
    </div>
</div>

<script>
    const modalButton = document.querySelector('#modal-btn');
    const modalBox = document.querySelector('#modal');

    document.querySelector('#modal-btn').onclick = (e) => {
        modalBox.style.display = 'grid';
        e.preventDefault();
    }

    document.querySelector('#close').onclick = (e) => {
        modalBox.style.display = 'none';
        e.preventDefault();
    }

    document.querySelector('#back').onclick = (e) => {
        modalBox.style.display = 'none';
        e.preventDefault();
    }

    window.onclick = (e) => {
        if (e.target === modalBox) {
            modalBox.style.display = 'none';
        }
    };
</script>

@endsection
