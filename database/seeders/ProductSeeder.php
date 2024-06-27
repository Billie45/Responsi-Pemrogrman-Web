<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Predefined products
        $products = [
            [
                'name' => 'Air Mineral Kemasan',
                'description' => 'Menggunakan Teknologi Double Injection, Sehingga Aman dan Terjaga Kemurniannya.',
                'price' => 5000,
                'stock' => 200,
                'jenis' => 'Minuman Kemasan',
                'image' => 'https://www.tirtamandiri.com/wp-content/uploads/2019/04/Jenis-jenis-air-minum-kemasan.jpg',
            ],
            [
                'name' => 'Beras 1 Kg',
                'description' => 'beras hasil dari pertanian asli dan menggunakan bibit unggul yang menciptakan beras super yang pulen dan tidak pera saat di masak.',
                'price' => 20000,
                'stock' => 150,
                'jenis' => 'Sembako',
                'image' => 'https://img.lazcdn.com/g/ff/kf/S9f1df9a761e044e3899fd404e1399f6fD.jpg_720x720q80.jpg',
            ],
            [
                'name' => 'Telur 1 Kg',
                'description' => 'Telur Ayam Negeri 1 Kg Grade A Peternakan Sendiri.',
                'price' => 10000,
                'stock' => 100,
                'jenis' => 'Sembako',
                'image' => 'https://www.static-src.com/wcsstore/Indraprastha/images/catalog/full//103/MTA-7476196/kebayoran_kebayoran_telur_ayam_negeri_-1_kg-_full02_c9o2wek4.jpg',
            ],
            [
                'name' => 'Minyak 1 liter',
                'description' => 'Minyak Goreng Kelapa Sawit Yang diproses secara higienis Dengan teknologi modern.',
                'price' => 12000,
                'stock' => 80,
                'jenis' => 'Sembako',
                'image' => 'https://www.static-src.com/wcsstore/Indraprastha/images/catalog/full//82/MTA-63012132/brd-27642_minyak-goreng-curah-1-liter-kemasan-botol-dan-sachet-plastik_full01.jpg',
            ],
            [
                'name' => 'Gula 1 Kg',
                'description' => 'Gula Kristal Putih Premium adalah gula terbuat dari tebu pilihan berkualitas terbaik.',
                'price' => 15000,
                'stock' => 50,
                'jenis' => 'Sembako',
                'image' => 'https://cdn.ralali.id/cdn-cgi/image/f=auto,w=250/assets/img/Libraries/288291_Gula-Pasir-Lokal-1-Kg_yACmadnJt1gwgltf_1565261232.png',
            ]
        ];

        // Insert predefined products
        foreach ($products as $product) {
            Product::create($product);
        }
    }
}
