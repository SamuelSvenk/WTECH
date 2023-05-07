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
                'title' => 'GTA 5 (PC)',
                'description' => 'Description for GTA 5',
                'price' => 9.99,
                "quantity" => 10,
                "platform" => "pc",
                "more_info" => "more info about GTA 5",
                "system_requirements" => "system requirements for GTA 5",
            ],
            [
                'title' => 'GTA 5 (PS)',
                'description' => 'Description for GTA 5',
                'price' => 29.99,
                "quantity" => 10,
                "platform" => "playstation",
                "more_info" => "more info about GTA 5",
                "system_requirements" => "system requirements for GTA 5",
            ],
            [
                'title' => 'GTA 5 (XBOX)',
                'description' => 'Description for GTA 5',
                'price' => 8.99,
                "quantity" => 10,
                "platform" => "xbox",
                "more_info" => "more info about GTA 5",
                "system_requirements" => "system requirements for GTA 5",
            ],
            [
                'title' => 'GTA 4 (PS)',
                'description' => 'Description for GTA 4',
                'price' => 7.99,
                "quantity" => 10,
                "platform" => "playstation",
                "more_info" => "more info about GTA 4",
                "system_requirements" => "system requirements for GTA 4",
            ],
            [
                'title' => 'GTA 4 (PC)',
                'description' => 'Description for GTA 4',
                'price' => 6.99,
                "quantity" => 10,
                "platform" => "pc",
                "more_info" => "more info about GTA 4",
                "system_requirements" => "system requirements for GTA 4",
            ],
            [
                'title' => 'Red dead redemption 2 (PC)',
                'description' => 'Description for Red dead redemption 2',
                'price' => 11.99,
                "quantity" => 10,
                "platform" => "pc",
                "more_info" => "more info about Red dead redemption 2",
                "system_requirements" => "system requirements for Red dead redemption 2",
            ],
            [
                'title' => 'Red dead redemption (PS)',
                'description' => 'Description for Red dead redemption 2',
                'price' => 12.99,
                "quantity" => 10,
                "platform" => "playstation",
                "more_info" => "more info about Red dead redemption 2",
                "system_requirements" => "system requirements for Red dead redemption 2",
            ],
            [
                'title' => 'Battlefield 1(XBOX)',
                'description' => 'Description for Battlefield 1',
                'price' => 13.99,
                "quantity" => 10,
                "platform" => "xbox",
                "more_info" => "more info about Battlefield 1",
                "system_requirements" => "system requirements for Battlefield 1",
            ],
            [
                'title' => 'Battlefield 1 (PC)',
                'description' => 'Description for Battlefield 1',
                'price' => 14.99,
                "quantity" => 10,
                "platform" => "pc",
                "more_info" => "more info about Battlefield 1",
                "system_requirements" => "system requirements for Battlefield 1",
            ],
            [
                'title' => 'Call of Duty Black ops 2 (PS)',
                'description' => 'Description for Call of Duty Black ops 2',
                'price' => 15.99,
                "quantity" => 10,
                "platform" => "playstation",
                "more_info" => "more info about Call of Duty Black ops 2",
                "system_requirements" => "system requirements for Call of Duty Black ops 2",
            ],
            [
                'title' => 'Legend of Zelda: Breath of the wild',
                'description' => 'Description for Legend of Zelda: Breath of the wild',
                'price' => 16.99,
                "quantity" => 10,
                "platform" => "nintendo",
                "more_info" => "more info about Legend of Zelda: Breath of the wild",
                "system_requirements" => "system requirements for Legend of Zelda: Breath of the wild",
            ],
            [
                'title' => 'Super Mario Galaxy',
                'description' => 'Description for Super Mario Galaxy',
                'price' => 17.99,
                "quantity" => 0,
                "platform" => "nintendo",
                "more_info" => "more info about Super Mario Galaxy",
                "system_requirements" => "system requirements for Super Mario Galaxy",
            ],
            [
                'title' => 'Pokemon Legends Arceus',
                'description' => 'Description for Pokemon Legends Arceus',
                'price' => 18.99,
                "quantity" => 0,
                "platform" => "nintendo",
                "more_info" => "more info about Pokemon Legends Arceus",
                "system_requirements" => "system requirements for Pokemon Legends Arceus",
            ],
            [
                'title' => 'Pokemon Brilliant Diamond',
                'description' => 'Description for Pokemon Brilliant Diamond',
                'price' => 19.99,
                "quantity" => 0,
                "platform" => "nintendo",
                "more_info" => "more info about Pokemon Brilliant Diamond",
                "system_requirements" => "system requirements for Pokemon Brilliant Diamond",
            ],
            [
                'title' => 'Pokemon Shining Pearl',
                'description' => 'Description for Product Pokemon Shining Pearl',
                'price' => 21.99,
                "quantity" => 0,
                "platform" => "nintendo",
                "more_info" => "more info about Pokemon Shining Pearl",
                "system_requirements" => "system requirements for Pokemon Shining Pearl",
            ],
        ]; 

        foreach ($products as $productData) {
            $product = new Product();
            $product->title = $productData['title'];
            $product->description = $productData['description'];
            $product->price = $productData['price'];
            $product->quantity = $productData['quantity'];
            $product->platform = $productData["platform"];
            $product->more_info = $productData["more_info"];
            $product->system_requirements = $productData["system_requirements"];
            $product->save();
        }
    }
}
