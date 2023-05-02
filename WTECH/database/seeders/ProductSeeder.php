<?php

namespace Database\Seeders;
use App\Models\Product;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Carbon\Carbon;
use Storage\App\Public;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $products = [
            [
                'title' => 'GTA 5',
                'description' => 'Description for GTA 5',
                'price' => 9.99,
                "quantity" => 10,
                "platform" => "playstation",
            ],
            [
                'title' => 'Product 2',
                'description' => 'Description for Product 2',
                'price' => 29.99,
                "quantity" => 10,
                "platform" => "playstation",
            ],
            [
                'title' => 'Product 3',
                'description' => 'Description for Product 3',
                'price' => 8.99,
                "quantity" => 10,
                "platform" => "playstation",
            ],
            [
                'title' => 'Product 4',
                'description' => 'Description for Product 4',
                'price' => 7.99,
                "quantity" => 10,
                "platform" => "playstation",
            ],
            [
                'title' => 'Product 5',
                'description' => 'Description for Product 5',
                'price' => 6.99,
                "quantity" => 10,
                "platform" => "pc",
            ],
            [
                'title' => 'Product 6',
                'description' => 'Description for Product 6',
                'price' => 11.99,
                "quantity" => 10,
                "platform" => "pc",
            ],
            [
                'title' => 'Product 7',
                'description' => 'Description for Product 7',
                'price' => 12.99,
                "quantity" => 10,
                "platform" => "xbox",
            ],
            [
                'title' => 'Product 8',
                'description' => 'Description for Product 8',
                'price' => 13.99,
                "quantity" => 10,
                "platform" => "xbox",
            ],
            [
                'title' => 'Product 9',
                'description' => 'Description for Product 9',
                'price' => 14.99,
                "quantity" => 10,
                "platform" => "xbox",
            ],
            [
                'title' => 'Product 10',
                'description' => 'Description for Product 10',
                'price' => 15.99,
                "quantity" => 10,
                "platform" => "nintendo",
            ],
            [
                'title' => 'Product 11',
                'description' => 'Description for Product 11',
                'price' => 16.99,
                "quantity" => 10,
                "platform" => "nintendo",
            ],
            [
                'title' => 'Product 12',
                'description' => 'Description for Product 12',
                'price' => 17.99,
                "quantity" => 0,
                "platform" => "nintendo",
            ],
            [
                'title' => 'Product 13',
                'description' => 'Description for Product 13',
                'price' => 18.99,
                "quantity" => 0,
                "platform" => "nintendo",
            ],
            [
                'title' => 'Product 14',
                'description' => 'Description for Product 14',
                'price' => 19.99,
                "quantity" => 0,
                "platform" => "nintendo",
            ],
            [
                'title' => 'Product 15',
                'description' => 'Description for Product 15',
                'price' => 21.99,
                "quantity" => 0,
                "platform" => "nintendo",
            ],
        ]; 

        foreach ($products as $productData) {
            $product = new Product();
            $product->title = $productData['title'];
            $product->description = $productData['description'];
            $product->price = $productData['price'];
            $product->quantity = $productData['quantity'];
            $product->platform = $productData["platform"];
            $product->save();
        }
    }
}
