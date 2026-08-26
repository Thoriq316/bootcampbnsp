<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductSeeder extends Seeder
{
    public function run(): void
    {
        Product::create([
            'name' => 'ASUS VivoBook 14',
            'description' => 'Laptop ringan dengan performa cepat untuk kebutuhan kerja, kuliah, dan aktivitas harian.',
            'price' => 7499000,
            'stock' => 25,
            'image' => 'product.jpg',
            'category' => 'Laptop',
        ]);

        Product::create([
            'name' => 'Lenovo IdeaPad Slim 3',
            'description' => 'Laptop slim dengan desain modern dan performa stabil untuk produktivitas sehari-hari.',
            'price' => 6799000,
            'stock' => 18,
            'image' => 'product.jpg',
            'category' => 'Laptop',
        ]);

        Product::create([
            'name' => 'Logitech M331 Silent',
            'description' => 'Mouse wireless dengan teknologi silent click yang nyaman digunakan untuk bekerja.',
            'price' => 299000,
            'stock' => 50,
            'image' => 'product.jpg',
            'category' => 'Mouse',
        ]);

        Product::create([
            'name' => 'Logitech K380',
            'description' => 'Keyboard Bluetooth compact dengan desain minimalis dan dukungan multi-device.',
            'price' => 699000,
            'stock' => 28,
            'image' => 'product.jpg',
            'category' => 'Keyboard',
        ]);

        Product::create([
            'name' => 'JBL Tune 510BT',
            'description' => 'Headphone Bluetooth ringan dengan suara jernih dan daya tahan baterai panjang.',
            'price' => 599000,
            'stock' => 40,
            'image' => 'product.jpg',
            'category' => 'Audio',
        ]);

        Product::create([
            'name' => 'Samsung Galaxy A15',
            'description' => 'Smartphone dengan layar Super AMOLED dan baterai besar untuk penggunaan sehari-hari.',
            'price' => 2499000,
            'stock' => 30,
            'image' => 'product.jpg',
            'category' => 'Smartphone',
        ]);

        Product::create([
            'name' => 'Xiaomi Pad 6',
            'description' => 'Tablet berperforma tinggi dengan layar tajam yang cocok untuk multimedia dan produktivitas.',
            'price' => 4999000,
            'stock' => 15,
            'image' => 'product.jpg',
            'category' => 'Tablet',
        ]);

        Product::create([
            'name' => 'SanDisk Ultra 64GB',
            'description' => 'Flash drive berkapasitas 64GB untuk menyimpan dan memindahkan berbagai file dengan mudah.',
            'price' => 99000,
            'stock' => 70,
            'image' => 'product.jpg',
            'category' => 'Storage',
        ]);
    }
}