@extends('layouts.master')

@section('bootstrap')
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
@endsection

@section('content')

@include('layouts.navbar2')

{{-- Table Section Start --}}
<section class="pt-6 min-h-96">
    <main class="container-x w-full">
        <div class="overflow-x-scroll">
            <table border="1" class="table table-bordered w-full">
                <tr class="table-dark text-center align-middle">
                    <th>No</th>
                    <th>Nama</th>
                    <th>Email</th>
                    <th>Komentar</th>
                    <th>Action</th>
                </tr>
                @foreach ($comment as $c)
                <tr class="align-middle">
                    <td class="text-center">{{ $i++ }}</td>
                    <td>{{ $c->name }}</td>
                    <td>{{ $c->email }}</td>
                    <td>{{ $c->message }}</td>
                    <td>
                        <div class="flex justify-center gap-2">
                            {{-- <a href="" class="btn btn-warning"><i class="fa fa-edit text-white"></i></a> --}}
                            <form action="{{ route('comment.destroy', $c->id) }}" method="POST">
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

@endsection
