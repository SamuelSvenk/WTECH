<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\ProductImage;
use App\Models\Product;
use App\Models\Image;

class ProductImageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $products = Product::all();
        $images = Image::all();

        $products[0]->images()->attach([$images[0]->id]);
        $products[1]->images()->attach([$images[0]->id]);
        $products[2]->images()->attach([$images[0]->id]);
        $products[3]->images()->attach([$images[1]->id]);
        $products[4]->images()->attach([$images[1]->id]);
        $products[5]->images()->attach([$images[2]->id]);
        $products[6]->images()->attach([$images[2]->id]);
        $products[7]->images()->attach([$images[3]->id]);
        $products[8]->images()->attach([$images[3]->id]);
        $products[9]->images()->attach([$images[4]->id]);
        $products[10]->images()->attach([$images[5]->id]);
        $products[11]->images()->attach([$images[6]->id]);
        $products[12]->images()->attach([$images[7]->id]);
        $products[13]->images()->attach([$images[8]->id]);
        $products[14]->images()->attach([$images[9]->id]);
    }
}
