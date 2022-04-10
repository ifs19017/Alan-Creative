<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ListProdukSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $ListProduk = [
            [
                'nama' => 'Cumi Tepung',
                'gambar' => 'public/gambar/ListProduk/cumi_tepung.jpg',
                'harga' => 10000,
            ],
            [
                'nama' => 'Cumi Bakar',
                'gambar' => 'public/gambar/ListProduk/cumi_bakar.jpg',
                'harga' => 10000,
            ],
            [
                'nama' => 'Cumi Cabe Goreng',
                'gambar' => 'public/gambar/ListProduk/cumi_cabe_goreng.jpg',
                'harga' => 10000,
            ],
            [
                'nama' => 'Cah Kailan',
                'gambar' => 'public/gambar/ListProduk/cah_kailan.jpg',
                'harga' => 10000,
            ],
            [
                'nama' => 'Tahu Goreng',
                'gambar' => 'public/gambar/ListProduk/tahu_goreng.jpg',
                'harga' => 10000,
            ],
            [
                'nama' => 'Cah Tauge',
                'gambar' => 'public/gambar/ListProduk/cah_tauge.jpg',
                'harga' => 15000,
            ],
            [
                'nama' => 'Kerang Bambu',
                'gambar' => 'public/gambar/ListProduk/kerang_bambu.jpg',
                'harga' => 10000,
            ],
            [
                'nama' => 'Kepiting Padang',
                'gambar' => 'public/gambar/ListProduk/kepiting_padang.jpg',
                'harga' => 10000,
            ],
            [
                'nama' => 'Gurame Asam Manis',
                'gambar' => 'public/gambar/ListProduk/gurame_asam_manis.jpg',
                'harga' => 69000,
            ],
            [
                'nama' => 'Udang Bakar',
                'gambar' => 'public/gambar/ListProduk/udang_bakar.jpg',
                'harga' => 10000,
            ],
            [
                'nama' => 'Udang Saos Tiram',
                'gambar' => 'public/gambar/ListProduk/udang_saos_tiram.jpg',
                'harga' => 10000,
            ],
            [
                'nama' => 'Udang Mayones',
                'gambar' => 'public/gambar/ListProduk/udang_mayones.jpg',
                'harga' => 10000,
            ],
            [
                'nama' => 'Iced Tea',
                'gambar' => 'public/gambar/ListProduk/iced_tea.jpg',
                'harga' => 10000,
            ],
            [
                'nama' => 'Es Jeruk Nipis',
                'gambar' => 'public/gambar/ListProduk/es_jeruk_nipis.jpg',
                'harga' => 10000,
            ],
            [
                'nama' => 'Nasi Putih',
                'gambar' => 'public/gambar/ListProduk/nasi_putih.jpg',
                'harga' => 0,
            ],
        ];

        DB::table('list_produks')->insert($ListProduk);
    }
}
