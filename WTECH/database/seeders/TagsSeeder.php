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
            ["tag" => "activision"],
            ["tag" => "blizzard"],
            ["tag" => "nintendo"],
            ["tag" => "fps"],
            ["tag" => "moba"],
            ["tag" => "rpg"],
            ["tag" => "new"],
            ["tag" => "popular"],
        ];

        foreach ($tags as $tagsData) {
            $tag = new Tag();
            $tag->tag = $tagsData['tag'];
            $tag->save();
        }
    }
}
