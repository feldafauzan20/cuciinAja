<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductCatalogSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('product_catalog')->insert([
            [
                'image' => 'https://example.com/image1.jpg',
                'title' => 'Cuci Kering',
                'price' => 15000,
                'category' => 'Pakaian',
                'description' => 'Layanan cuci kering untuk pakaian sehari-hari.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'image' => 'https://example.com/image2.jpg',
                'title' => 'Cuci Basah',
                'price' => 12000,
                'category' => 'Pakaian',
                'description' => 'Layanan cuci basah untuk pakaian yang tidak memerlukan setrika.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'image' => 'https://example.com/image3.jpg',
                'title' => 'Setrika Saja',
                'price' => 10000,
                'category' => 'Pakaian',
                'description' => 'Layanan setrika saja untuk pakaian yang sudah dicuci.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'image' => 'https://example.com/image4.jpg',
                'title' => 'Cuci Sepatu',
                'price' => 25000,
                'category' => 'Sepatu',
                'description' => 'Layanan cuci khusus untuk sepatu berbagai jenis.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'image' => 'https://example.com/image5.jpg',
                'title' => 'Cuci Karpet',
                'price' => 50000,
                'category' => 'Rumah Tangga',
                'description' => 'Layanan cuci karpet untuk kebersihan rumah Anda.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
