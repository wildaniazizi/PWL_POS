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
        $data = [
            [
                'barang_id' => 1,
                'kategori_id' => 1,
                'barang_kode' => 'TST',
                'barang_nama' => 'T-Shirt',
                'harga_beli' => 40000,
                'harga_jual' => 45000,
            ],
            [
                'barang_id' => 2,
                'kategori_id' => 1,
                'barang_kode' => 'KMJ',
                'barang_nama' => 'Kemeja',
                'harga_beli' => 75000,
                'harga_jual' => 80000,
            ],
            [
                'barang_id' => 3,
                'kategori_id' => 2,
                'barang_kode' => 'MJA',
                'barang_nama' => 'Meja',
                'harga_beli' => 350000,
                'harga_jual' => 400000,
            ],
            [
                'barang_id' => 4,
                'kategori_id' => 2,
                'barang_kode' => 'LMR',
                'barang_nama' => 'Lemari',
                'harga_beli' => 250000,
                'harga_jual' => 300000,
            ],
            [
                'barang_id' => 5,
                'kategori_id' => 1,
                'barang_kode' => 'CLN',
                'barang_nama' => 'Celana',
                'harga_beli' => 50000,
                'harga_jual' => 55000,
              ],
              [
                'barang_id' => 6,
                'kategori_id' => 1,
                'barang_kode' => 'JSK',
                'barang_nama' => 'Jaket',
                'harga_beli' => 100000,
                'harga_jual' => 110000,
              ],
              [
                'barang_id' => 7,
                'kategori_id' => 2,
                'barang_kode' => 'KRS',
                'barang_nama' => 'Kursi',
                'harga_beli' => 200000,
                'harga_jual' => 250000,
              ],
              [
                'barang_id' => 8,
                'kategori_id' => 2,
                'barang_kode' => 'SFA',
                'barang_nama' => 'Sofa',
                'harga_beli' => 500000,
                'harga_jual' => 600000,
              ],
              [
                'barang_id' => 9,
                'kategori_id' => 3,
                'barang_kode' => 'BKP',
                'barang_nama' => 'Buku Pelajaran',
                'harga_beli' => 25000,
                'harga_jual' => 30000,
              ],
              [
                'barang_id' => 10,
                'kategori_id' => 3,
                'barang_nama' => 'Alat Tulis',
                'barang_kode' => 'ATS',
                'harga_beli' => 15000,
                'harga_jual' => 20000,
              ],
        ];
        DB::table('m_barang')->insert($data);
    }
}
