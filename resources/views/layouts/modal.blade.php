{{-- Modal Box --}}
<section class="container-x hidden place-items-center w-full h-screen fixed left-0 top-0" style="background-color: rgba(0, 0, 0, 0.7); z-index: 100;" id="modal-box">
    <div class="w-full md:w-4/5 flex items-center h-full overflow-y-scroll py-10">
        <div class="w-full min-h-4/5 bg-white rounded">
            <div class="flex justify-between items-center py-3 px-7 bg-slate-900 text-white rounded-t">
                <h2 class="text-2xl font-semibold" id="modal-name"></h2>
                <i class="fa fa-times" id="close" style="cursor: pointer"></i>
            </div>
            <div class="grid x-cols-2 gap-5 md:gap-10 p-7">
                <div class="w-full paket-img modal-img bg-slate-200" style="background-image: url('');" id="modal-img"></div>
                <div class="">
                    <div class="grid gap-3">
                        <div>
                            <h3 class="text-lg font-semibold">Deskripsi</h3>
                            <h4 id="modal-description" class=" text-md"></h3>
                        </div>
                        <div>
                            <h3 class="text-lg font-semibold">Daftar Kegiatan</h3>
                            <ol id="modal-activities" class="list-disc pl-5 text-md"></ol>
                        </div>
                        <div>
                            <h3 class="text-lg font-semibold">Harga</h3>
                            <h4 id="modal-price" class="text-md"></h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<script>
    const modalBox = document.querySelector('#modal-box');
    const modalClose = document.querySelector('#close');
    const modalBtns = document.querySelectorAll('.modal-btn');

    modalBtns.forEach(btn => {
        btn.onclick = (e) => {
            const packageId = e.currentTarget.getAttribute('data-id');
            const package = {!! json_encode($package) !!}.find(p => p.id == packageId);

            if (package) {
                document.querySelector('#modal-name').textContent = package.nama_paket;
                document.querySelector('#modal-description').textContent = package.deskripsi;
                const formattedPrice = 'Rp ' + package.harga.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ".");
                document.querySelector('#modal-price').textContent = formattedPrice + " / orang ( Minimal 20 orang )";
                document.querySelector('#modal-img').style.backgroundImage = `url('{{ asset('img/paket/') }}/${package.gambar}')`;

                const activitiesList = document.querySelector('#modal-activities');
                activitiesList.innerHTML = '';
                package.kegiatan.split(',').forEach(activity => {
                    const listItem = document.createElement('li');
                    listItem.textContent = activity;
                    activitiesList.appendChild(listItem);
                });

                modalBox.style.display = 'grid';
            }
        };
    });

    modalClose.onclick = () => {
        modalBox.style.display = 'none';
    };
</script>
