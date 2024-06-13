<style>
    @media (max-width: 768px) {
        ul {
            flex-direction: column;
            position: absolute;
            top: 100%;
            right: -100%;
            height: 100vh;
            background-color: rgba(255, 255, 255, 0.7);
            width: 15rem;
            padding: 1rem;
            gap: 0;
        }

        ul li a {
            display: block;
            padding: 0.5rem;
            border-radius: 3px;
        }

        ul li a:hover {
            background-color: rgba;
        }
    }
</style>

<nav class="bg-white shadow-sm sticky top-0 left-0 right-0">
    <main class="container-x flex items-center justify-between py-3 px-7">

        <h2 class="text-2xl font-semibold">Dashboard</h2>

        <ul class="flex lg:items-center gap-3 font-semibold relative" id="menu">
            <li><a href="/admin" class="{{ Request::is('admin') ? 'text-[--primary] active' : '' }}">Dashboard</a></li>
            <li><a href="/admin/paket" class="{{ Request::is('admin/paket') ? 'text-[--primary] active' : '' }}">Paket</a></li>
            <li><a href="/admin/fasilitas" class="{{ Request::is('admin/fasilitas') ? 'text-[--primary] active' : '' }}">Fasilitas</a></li>
            <li><a href="/admin/gallery" class="{{ Request::is('admin/gallery') ? 'text-[--primary] active' : '' }}">Gallery</a></li>
            <li><a href="/admin/komentar" class="{{ Request::is('admin/komentar') ? 'text-[--primary] active' : '' }}">Komentar</a></li>
            <li><a href="/admin/akun" class="{{ Request::is('admin/akun') ? 'text-[--primary] active' : '' }}">Pengguna</a></li>
            <li class="absolute lg:static bottom-32 right-7 left-7">
                <a href="{{ route('logout') }}" class="btn btn-danger lg:ms-6">
                    Logout
                    <i class="fa fa-sign-out ms-1" aria-hidden="true"></i>
                </a>
            </li>
        </ul>

        <div class="flex" id="menuBtn">
            <a href="#"><i class="fa fa-bars text-xl" aria-hidden="true"></i></a>
        </div>

    </main>
</nav>

<script>
    const menu = document.querySelector('#menu');
    const menuButton = document.querySelector('#menuBtn');

    document.querySelector('#menuBtn').onclick = (e) => {
        menu.classList.toggle('active');
        e.preventDefault();
    };

    document.addEventListener('click', function(e) {
        if(!menuButton.contains(e.target) && !menu.contains(e.target)) {
            menu.classList.remove('active')
        }
    });
</script>
