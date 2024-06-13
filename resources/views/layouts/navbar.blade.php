<nav class="bg-white shadow fixed w-full top-0 left-0 py-1">

    <main class="flex justify-between items-center container-x">

        <a href="/">
            <img src="{{ asset('img/logo2.png') }}" class="w-auto h-16">
        </a>

        <ul class="flex gap-3 font-semibold" id="menu">
            <li><a href="/" class="{{ Request::is('/') ? 'text-[--primary] active' : '' }} hover:text-[--primary]">Beranda</a></li>
            <li><a href="/profil" class="{{ Request::is('profil') ? 'text-[--primary] active' : '' }} hover:text-[--primary]">Profil</a></li>
            <li><a href="/paket" class="{{ Request::is('paket') ? 'text-[--primary] active' : '' }} hover:text-[--primary]">Paket</a></li>
            <li><a href="/fasilitas" class="{{ Request::is('fasilitas') ? 'text-[--primary] active' : '' }} hover:text-[--primary]">Fasilitas</a></li>
            <li><a href="/gallery" class="{{ Request::is('gallery') ? 'text-[--primary] active' : '' }} hover:text-[--primary]">Gallery</a></li>
        </ul>

        <div class="flex gap-3 text-lg">
            <a href="#" id="contactBtn"><i class="fa-solid fa-phone-flip"></i></a>
            <a href="#" id="timeBtn"><i class="fa fa-clock"></i></a>
            <a href="#" id="menuBtn"><i class="fa fa-bars"></i></a>
        </div>

        <div class="w-64 pb-3 bg-white absolute shadow" id="timeMenu">
            <div class="title w-full text-center bg-[--primary] py-2 text-white font-semibold">ONLINE HOURS</div>
            <div class="flex justify-between px-3 py-2">
                <ul>
                    <li class="mb-1.5">SENIN</li>
                    <li class="mb-1.5">SELASA</li>
                    <li class="mb-1.5">RABU</li>
                    <li class="mb-1.5">KAMIS</li>
                    <li class="mb-1.5">JUMAT</li>
                    <li class="mb-1.5">SABTU</li>
                    <li class="mb-1.5">AHAD</li>
                </ul>
                <ul>
                    <li class="mb-1.5">09.00 - 17.00</li>
                    <li class="mb-1.5">09.00 - 17.00</li>
                    <li class="mb-1.5">09.00 - 17.00</li>
                    <li class="mb-1.5">09.00 - 17.00</li>
                    <li class="mb-1.5">09.00 - 17.00</li>
                    <li class="mb-1.5">09.00 - 17.00</li>
                    <li class="mb-1.5">09.00 - 17.00</li>
                </ul>
            </div>
        </div>

        <div class="absolute bg-white grid shadow" id="contactMenu">
            <div class="text-center py-2 text-white bg-[--primary] font-semibold">CONTACT</div>
            <div class="grid gap-2 p-5">
                <h2 class="flex gap-3 items-center">
                    <i class="fa fa-phone"></i>
                    +62 857-2664-3029
                </h2>
                <h2 class="flex gap-3 items-center">
                    <i class="fa fa-envelope"></i>
                    karangasem@gmail.com
                </h2>
            </div>
        </div>

    </main>

</nav>
