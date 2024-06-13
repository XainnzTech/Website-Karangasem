@extends('layouts.master')
@section('content')

@include('layouts.navbar')

{{-- Title Section Start --}}
<section class="flex flex-col justify-end bg-sunset" style="min-height: 20rem;">
    <main class="container-x w-full pb-10">
        <h2 class="text-3xl text-white mb-5">Sejarah Desa Wisata Karangasem</h2>
        <div class="w-full bg-[--primaryX] py-3 px-5 text-white rounded">
            <a href="/"><i class="fa fa-home me-1.5"></i> Beranda</a> /
            <a href="#">Profil</a>
        </div>
    </main>
</section>
{{-- Title Section End --}}

{{-- About Section Start --}}
<section class="grid place-items-center py-10">
    <main class="container-x w-full grid x-cols-3 gap-10">

        <div class="w-full col-span-2">
            <div class="w-full mb-5 img-bg" style="height: 20rem; background-image: url('{{ asset('img/gallery/1718198145.jpg') }}');">
            </div>
            <div class="text-justify">
                <p class="mb-3">
                    Pada jaman dahulu, ada keluarga yang dikepalai oleh Ki Honggo Wongso bersama istrinya Nyi Honggo Wongso dan dua anaknya Siti Sendari dan Raden Bagus Kuncung. Keluarga ini menyingkir dari Ibu Kota Mataram dan memilih hidup damai di sekitar Sendang Sinangka yang berada di Pedukuhan Tangkil. Karena terbiasa hidup di ibukota, mereka harus mengolah akal budinya untuk bertahan hidup. Jika ingin bertani, Ki Honggo Wongso tidak memilki kebiasaan bertani, karena keluarga Ki Honggo Wongso di ibu kota dahulu hidup dalam kecukupan sehingga keluarga tersebut kurang memiliki kemampuan bertani. Keluarga tersebut tidak memiliki kebiasaan bekerja di bawah sinar terik matahari, terlebih tanah di sekitar yang mereka tinggali tandus.
                </p>
                <p class="mb-3">
                    Hal tersebut membuat Ki Honggo Wongso memutar otak bagaimana bisa menafkahi keluarganya namun tanpa harus bekerja di bawah sinar terik matahari. Di sisi utara Sendang Sinongko terdapat banyak pohon bambu, maka dari itulah Ki Honggo Wongso membuat alat untuk memeras kelapa dari bambu yang kemudian kita kenal dengan kalo. KALO sesungguhnya berasal dari jarwo dhosol “Akale Lho”.  Dari situlah kemudian Ki Hongo Wongso membuat anyaman dari bambu, di antaranya Kalo, Tambir, Tampah, Kukusan yang menjadi produk utama kerajinan bambu tradisional yang masih terus diproduksi secara turun-temurun hingga saat ini.
                </p>
                <p class="mb-3">
                    Produksi kerajinan bambu yang dilakukan di masyarakat Kalurahan Muntuk adalah proses produksi rumahan. Oleh karena itu, muncul kebiasaan bekerja membuat kerajinan bambu di bawah pohon rindang sekitar rumah. Masyarakat bergerombol bersama-sama menganyam kerajinan bambu yang oleh warga diistilahkan “Nglembur” dan budaya tersebut masih lestari hingga saat ini.
                </p>
                <p class="mb-3">
                    Perkembangan berikutnya sekitar tahun 1980-an seorang yang berasal dari Bali bernama Pak Ketut, menemukan bahwa kerjinan bambu yang dijual di Pasar Imogiri sesungguhnya dibuat di Kalurahan Muntuk khususnya di Padukuhan Tangkil dan Karangasem.  Dari situlah Pak Ketut kemudian memesan berbagai macam bentuk kerajinan model baru,. Segala jenis kerajinan baru yang merupakan karya warga Pedukuhan Tangkil, Pak Saiful Mizan dibeli oleh Pak Ketut tersebut.
                </p>
                <p>
                    Berangkat dari situlah, bentuk-bentuk kerajinan bambu modern terus berkembang hingga saat ini. Tokoh awal dalam inovasi kerjinan bambu  tersebut di antaranya yaitu Judi Samsuri, Mujiyono (Almarhum), Saiful Mizan, Jumiyo, Mukimin (Almrhum), Mardimin, Supardiyono, Pujo Wiyono (Almarhum), dan Sabito. Kemampuan para pengrajin bambu di Pedukuhan Tangkil dan Karangasem tersebut menjadikan tokoh-tokoh seperti Saiful Mizan, Sabito, Pujo Wiyono (Almarhum), dan Supardiyono sering diundang ke berbagai daerah dan acara untuk mengajari menganyam.
                </p>
            </div>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-1 gap-3 w-full h-full col-span-2 md:col-span-1 border p-3">

            {{-- @for ($i = 1; $i <= 6; $i++) --}}
            <a href="/profil/kerajinan" class="flex w-full border shadow rounded" style="height: 8rem">
                <div class="w-2/5 h-full rounded-l img-bg" style="background-image: url('{{ asset('img/about/kerajinan.jpg') }}')"></div>
                <div class="w-3/5 p-2">
                    <p class="text-md">
                        Kerajinan Desa Karangasem
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
