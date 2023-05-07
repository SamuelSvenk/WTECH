<?php

namespace Database\seeders;

use Illuminate\Support\Facades\Storage;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Image;

class ImagesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $imageNames = [
            'gta5.png',
            "gta4.jpg",
            "rdr2.png",
            "bf1.png",
            "codbo2.png",
            "loz.jpg",
            "smg.jpg",
            "pla.jpg",
            "pbd.jpg",
            "psp.jpg",
        ];

        foreach ($imageNames as $imageName) {
            $image = new Image();
            $image->name = pathinfo($imageName, PATHINFO_FILENAME);
            $image->image_path = Storage::putFile('public/image', storage_path("app/public/original_images/$imageName"), "public");
            $image->save();
        }
    }
}
