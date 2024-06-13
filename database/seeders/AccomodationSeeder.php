<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Accomodation;

class AccomodationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Accomodation::create([
            'gambar' => '1.jpg',
            'nama' => 'Homestay',
            'harga' => 50000,
        ]);

        Accomodation::create([
            'gambar' => '2.jpg',
            'nama' => 'Sewa Pendopo dan Soundsystem',
            'harga' => 500000,
        ]);

        Accomodation::create([
            'gambar' => '3.jpg',
            'nama' => 'Snack dan Minum',
            'harga' => 10000,
        ]);

        Accomodation::create([
            'gambar' => '4.jpg',
            'nama' => 'Makan Prasmanan / Box',
            'harga' => 25000,
        ]);

        Accomodation::create([
            'gambar' => '5.jpg',
            'nama' => 'Tumpeng Ayam Ingkung / 10 orang',
            'harga' => 250000,
        ]);

        Accomodation::create([
            'gambar' => '6.jpg',
            'nama' => 'Api Unggun',
            'harga' => 150000,
        ]);

        Accomodation::create([
            'gambar' => '7.jpg',
            'nama' => 'Outbond',
            'harga' => 25000,
        ]);

        Accomodation::create([
            'gambar' => '8.jpg',
            'nama' => 'Sewa Tenda Kemah',
            'harga' => 50000,
        ]);

        Accomodation::create([
            'gambar' => '9.jpg',
            'nama' => 'Menganyam Bambu',
            'harga' => 20000,
        ]);

        Accomodation::create([
            'gambar' => '10.jpg',
            'nama' => 'Membatik Anyaman Bambu',
            'harga' => 25000,
        ]);

        Accomodation::create([
            'gambar' => '11.jpg',
            'nama' => 'Melukis Caping',
            'harga' => 25000,
        ]);

        Accomodation::create([
            'gambar' => '12.jpg',
            'nama' => 'Belajar Gamelan',
            'harga' => 25000,
        ]);

        Accomodation::create([
            'gambar' => '13.jpg',
            'nama' => 'Membuat Wedang Sereh',
            'harga' => 10000,
        ]);
    }
}
