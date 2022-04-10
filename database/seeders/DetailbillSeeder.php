<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DetailbillSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $detailbill = [
            [
                'nama' => 'Cah Tauge',
                'jumlah' => 1,
                'harga' => 15000,
            ],
            [
                'nama' => 'Gurame Asam Manis',
                'jumlah' => 1,
                'harga' => 69000,
            ],
            [
                'nama' => 'Nasi Putih',
                'jumlah' => 2,
                'harga' => 0,
            ],
            [
                'nama' => 'Es Jeruk Nipis',
                'jumlah' => 2,
                'harga' => 20000,
            ],
        ];

        DB::table('detailbills')->insert($detailbill);
    }
}
