
@extends('layouts.master')

@section('bootstrap')
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
@endsection

@section('content')

@include('layouts.navbar2')

{{-- Form Edit --}}
<div class="container-x grid place-items-center w-full pt-6">
    <div class="w-full h-full flex items-center overflow-y-scroll">
        <main class="bg-white rounded m-auto border" style="width: 25rem;">
            <div class="flex items-center justify-between bg-slate-900 text-white px-7 py-2">
                <h2 class="text-2xl">Form Edit</h2>
            </div>
            <form action="{{ route('account.update', $account->id) }}" method="POST" class="w-full grid py-3 px-7">
                @csrf
                @method('PUT')

                <div class="mb-3">
                    <label for="username" class="form-label font-semibold"><span class="text-danger">*</span> Username</label>
                    <input type="text" id="username" class="form-control" placeholder="Username" name="username" value="{{ $account->username }}">
                </div>

                <div class="mb-3">
                    <label for="password" class="form-label font-semibold"><span class="text-danger">*</span> Password</label>
                    <input type="text" id="password" class="form-control" placeholder="Password" name="password" value="{{ unserialize(Illuminate\Support\Facades\Crypt::decryptString($account->password)) }}">
                </div>

                <div class="flex gap-3">
                    <a href="/admin/akun" class="btn btn-danger bg-danger w-100" id="back">Back</a>
                    <button type="submit" class="btn btn-primary bg-primary w-100">Update</button>
                </div>

            </form>
        </main>
    </div>
</div>

@endsection
