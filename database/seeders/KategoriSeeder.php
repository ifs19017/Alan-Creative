<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class KategoriSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $kategori = [
            [
                'kategori' => 'Cumi&Kerang',
                'gambar' => 'public/gambar/Kategori/cumi_n_kerang.png'
            ],
            [
                'kategori' => 'Sayuran',
                'gambar' => 'public/gambar/Kategori/sayuran.png'
            ],
            [
                'kategori' => 'Ikan',
                'gambar' => 'public/gambar/Kategori/ikan.png'
            ],
            [
                'kategori' => 'Minuman',
                'gambar' => 'public/gambar/Kategori/minuman.png'
            ],
            [
                'kategori' => 'Happy Hour',
                'gambar' => 'public/gambar/Kategori/happy_hour.jpg'
            ],
        ];

        DB::table('kategoris')->insert($kategori);
    }
}
