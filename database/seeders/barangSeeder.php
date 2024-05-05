<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BarangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('barangs')->insert([
            [
                'kode_barang' => '0001',
                'nama_barang' => 'Creatine',
                'harga_barang'=> 250000,
                'deskripsi_barang' => 'Creatine Unflavoured',
                'satuan_barang_id' => 1
            ],
   ]);
}
}
