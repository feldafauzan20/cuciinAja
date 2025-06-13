<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\OrderCatalogs;

class OrderCatalogsSeeder extends Seeder
{
    public function run(): void
    {
        OrderCatalogs::create([
            'nama' => 'Budi Santoso',
            'notelp' => '08123456789',
            'nama_bank_pembayaran' => 'BCA',
            'jenis_pencucian' => 'Cuci Mobil',
            'price' => 150000,
            'upload_pembayaran' => 'budi_santoso_bca.jpg',
            'status' => 'pending',
        ]);
        OrderCatalogs::create([
            'nama' => 'Siti Aminah',
            'notelp' => '082233445566',
            'nama_bank_pembayaran' => 'BRI',
            'jenis_pencucian' => 'Cuci Mobil',
            'price' => 150000,
            'upload_pembayaran' => 'budi_santoso_bca.jpg',
            'status' => 'approved',
        ]);
        OrderCatalogs::create([
            'nama' => 'Andi Wijaya',
            'notelp' => '0811223344',
            'nama_bank_pembayaran' => 'Mandiri',
            'jenis_pencucian' => 'Cuci Mobil',
            'price' => 150000,
            'upload_pembayaran' => 'budi_santoso_bca.jpg',
            'status' => 'pending',
        ]);
    }
}