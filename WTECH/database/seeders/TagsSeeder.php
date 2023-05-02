<?php

namespace Database\Seeders;
use App\Models\Tag;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TagsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $tags = [
            [
                "tag" => "activision",
                "category" => "developer",
            ],
            [
                "tag" => "blizzard",
                "category" => "developer",
            ],
            [
                "tag" => "nintendo",
                "category" => "developer",
            ],
            [
                "tag" => "fps",
                "category" => "genre",
            ],
            [
                "tag" => "moba",
                "category" => "genre",
            ],
            [
                "tag" => "rpg",
                "category" => "genre",
            ],
            [
                "tag" => "new",
                "category" => "other",
            ],
            [
                "tag" => "popular",
                "category" => "other",
            ],
        ];

        foreach ($tags as $tagsData) {
            $tag = new Tag();
            $tag->tag = $tagsData['tag'];
            $tag->category = $tagsData['category'];
            $tag->save();
        }
    }
}
