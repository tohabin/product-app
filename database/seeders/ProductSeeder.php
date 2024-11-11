<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Http\Controllers\ProductController;
use App\Models\Product;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $products = [
            [
                'product_id' => 'PROD001',
                'name' => 'Gaming Laptop',
                'description' => 'A powerful gaming laptop with NVIDIA graphics and 16GB RAM.',
                'price' => 1499.99,
                'stock' => 5,
                'image' => 'images/products/gaming_laptop.jpg',
            ],
            [
                'product_id' => 'PROD002',
                'name' => 'Wireless Mouse',
                'description' => 'Ergonomic wireless mouse with long battery life.',
                'price' => 29.99,
                'stock' => 50,
                'image' => 'images/products/wireless_mouse.jpg',
            ],
            [
                'product_id' => 'PROD003',
                'name' => 'Mechanical Keyboard',
                'description' => 'RGB mechanical keyboard with blue switches.',
                'price' => 89.99,
                'stock' => 20,
                'image' => 'images/products/mechanical_keyboard.jpg',
            ],
            [
                'product_id' => 'PROD004',
                'name' => '4K Monitor',
                'description' => 'A 27-inch 4K monitor with high color accuracy.',
                'price' => 399.99,
                'stock' => 10,
                'image' => 'images/products/4k_monitor.jpg',
            ],
            [
                'product_id' => 'PROD005',
                'name' => 'Noise-Canceling Headphones',
                'description' => 'Over-ear headphones with active noise canceling technology.',
                'price' => 199.99,
                'stock' => 15,
                'image' => 'images/products/noise_canceling_headphones.jpg',
            ],
        ];

        foreach ($products as $product) {
            Product::create($product);
        }
    }
}
