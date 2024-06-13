<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Package;

class PackageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Package::create([
            'gambar' => '1.jpg',
            'nama_paket' => 'Menganyam Bambu',
            'deskripsi' => 'Belajar menganyam untuk membuat kerajinan Bambu',
            'kegiatan' => 'Welcome Drink, Snack 1x, Belajar Menganyam Kerajinan Bambu, Makan dan Minum 1x',
            'harga' => 55000,
        ]);

        // Package 2
        Package::create([
            'gambar' => '2.jpg',
            'nama_paket' => 'Jelajah Desa',
            'deskripsi' => 'Jelajahi keindahan Desa Wisata Karangasem',
            'kegiatan' => 'Welcome Drink, Snack 1x, Jelajah Desa Karangasem, Makan dan Minum 1x',
            'harga' => 40000,
        ]);

        // Package 3
        Package::create([
            'gambar' => '3.jpg',
            'nama_paket' => 'Outbond Bambu',
            'deskripsi' => 'Jelajahi hutan pinus yang indah',
            'kegiatan' => 'Welcome Drink, Snack 1x, Outbond Bambu di Hutan Pinus, Makan dan Minum 1x',
            'harga' => 55000,
        ]);

        // Package 4
        Package::create([
            'gambar' => '4.jpg',
            'nama_paket' => 'Menginap di Desa',
            'deskripsi' => 'Pengalaman tenang dan autentik di tengah keindahan alam pedesaan yang memikat.',
            'kegiatan' => 'Welcome Drink, Homestay 1 malam, Snack 1x, Sunrise Tracking di Hutan Pinus, Menganyam / Melukis / Membatik Bambu, Makan dan Minum 2x',
            'harga' => 100000,
        ]);

        // Package 5
        Package::create([
            'gambar' => '5.jpg',
            'nama_paket' => 'Live In di Desa',
            'deskripsi' => 'Menikmati kehidupan sederhana, jauh dari kebisingan perkotaan, dan merasakan kedamaian.',
            'kegiatan' => 'Welcome Drink, Homestay 1 malam, Snack 2x, Sunrise Tracking di Hutan Pinus, Menganyam / Melukis / Membatik Bambu, Outbond Bambu di Hutan Pinus, Diskusi dengan Pengelola Desa Wisata, Makan dan Minum 3x',
            'harga' => 150000,
        ]);
    }
}
