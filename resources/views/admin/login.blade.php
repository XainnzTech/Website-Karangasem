@extends('layouts.master')
@section('content')


{{-- Form Section Start --}}
<section class="grid place-items-center">
    <main class="bg-white rounded shadow" style="width: 20rem;">
        <div class="bg-[--primary] rounded-t text-white">
            <h3 class="text-xl py-3 px-5 font-semibold">Login Form</h3>
        </div>
        <form action="{{ route('account.login') }}" method="POST" class="p-5 border grid gap-3 rounded-b">
            @csrf

            <div class="flex items-center relative">
                <input type="text" placeholder="Username" name="username" class="w-full" required>
                <i class="fa fa-user absolute right-5 text-slate-300"></i>
            </div>
            <div class="flex items-center relative">
                <input type="password" placeholder="Password" name="password" class="w-full" required>
                <i class="fa fa-lock absolute right-5 text-slate-300"></i>
            </div>
            <div class="flex items-center gap-3 ml-1 text-slate-600">
                <input type="checkbox">
                Remember Me
            </div>
            <button type="submit" class="text-center btn-x btn-x-primary">Login</button>
        </form>
    </main>
</section>
{{-- Form Section End --}}

@if ( $errors->has('error') )
{{-- Modal Box Start --}}
<section class="min-h-screen w-full grid place-items-center fixed top-0 left-0" style="background-color: rgba(0, 0, 0, 0.7)" onclick="this.style.display = 'none';">
    <main class="bg-white rounded" style="width: 30rem; height: 10rem;">
        <div class="flex justify-between items-center px-5 py-3 bg-red-600 rounded-t">
            <h2 class="text-xl font-semibold">Fatal Error</h2>
            <a href="#" class="text-xl"><i class="fa fa-times"></i></a>
        </div>
        <div class="px-5 py-3">
            {{ $errors->first('error') }}
        </div>
    </main>
</section>
{{-- Modal Box End --}}
@endif

@endsection
