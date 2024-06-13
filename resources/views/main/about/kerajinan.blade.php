@extends('layouts.master')
@section('content')

@include('layouts.navbar')

{{-- Title Section Start --}}
<section class="bg-slate-900 flex flex-col justify-end" style="min-height: 20rem">
    <main class="container-x w-full pb-10">
        <h2 class="text-3xl text-white mb-5">Kerajinan Desa Wisata Karangasem</h2>
        <div class="w-full bg-[--primary] py-3 px-5 text-white rounded">
            <a href="/">Beranda</a> /
            <a href="/profil">Profil</a> /
            <a href="#">Kerajinan</a>
        </div>
    </main>
</section>
{{-- Title Section End --}}

{{-- About Section Start --}}
<section class="grid place-items-center py-10">
    <main class="container-x w-full grid x-cols-3 gap-10">

        <div class="w-full col-span-2">
            <div class="w-full mb-5 img-bg" style="height: 20rem; background-image: url('{{ asset('img/about/kerajinan.jpg') }}');">
            </div>
            <div class="text-justify">
                <p class="mb-3">
                    Desa Karangasem juga dikenal sebagai Desa Bambu, nama tersebut diperoleh karena kekayaan alamnya yang melimpah, di mana bambu tumbuh dengan subur di sekitar wilayah tersebut. Di desa ini, bambu bukan hanya menjadi tanaman biasa, melainkan juga menjadi simbol kehidupan dan mata pencaharian utama bagi sebagian besar penduduknya. Bambu tumbuh melimpah di setiap sudut desa, menciptakan pemandangan yang memukau dan memberikan inspirasi bagi warga setempat.
                </p>
                <p class="mb-3">
                    Dengan kekayaan alam yang dimilikinya, 90% penduduk Desa Karangasem mengambil profesi sebagai pengrajin bambu. Mereka memiliki keahlian yang luar biasa dalam mengolah bambu menjadi berbagai macam kerajinan yang indah dan fungsional. Mulai dari perabotan rumah tangga, dekorasi, hingga aksesoris, setiap produk yang dihasilkan memancarkan keindahan alami bambu serta keahlian tangan yang terampil dari para pengrajinnya.
                </p>
                <p>
                    Keberhasilan pengrajin bambu Desa Karangasem tidak hanya bergantung pada keterampilan mereka, tetapi juga pada inovasi dalam pemasaran produk mereka. Dengan memanfaatkan teknologi, sebagian besar dari mereka menjual hasil kerajinan mereka melalui toko online. Hal ini memberi mereka akses ke pasar yang lebih luas dan memungkinkan mereka untuk memperluas jangkauan produk mereka secara global. Desa Karangasem menjadi contoh nyata bagaimana tradisi lokal dan teknologi modern dapat bersinergi untuk menciptakan keberlanjutan ekonomi dan budaya.
                </p>
            </div>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-1 gap-3 w-full h-full col-span-2 md:col-span-1 border p-3">

            {{-- @for ($i = 1; $i <= 6; $i++) --}}
            <a href="/profil" class="flex w-full border shadow rounded" style="height: 8rem">
                <div class="w-2/5 h-full rounded-l img-bg" style="background-image: url('{{ asset('img/about/sejarah.jpg') }}')"></div>
                <div class="w-3/5 p-2">
                    <p class="text-md">
                        Sejarah Desa Karangasem
                    </p>
                </div>
            </a>
            {{-- @endfor --}}

        </div>
    </main>
</section>
{{-- About Section End --}}

@include('layouts.footer')

@endsection
