<?php

namespace Database\Seeders;
use App\Models\ProductsTags;
use App\Models\Product;
use App\Models\Tag;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductsTagsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $products = Product::all();

        $taga = Tag::where('tag', 'activision')->firstOrFail();
        $tagb = Tag::where("tag", "blizzard")->firstorfail();
        $tagn = Tag::where("tag", "nintendo")->firstorfail();
        $tagfps = Tag::where("tag", "fps")->firstorfail();
        $tagmoba = Tag::where("tag", "moba")->firstorfail();
        $tagrpg = Tag::where("tag", "rpg")->firstorfail();
        $tagnew = Tag::where("tag", "new")->firstorfail();
        $tagpop = Tag::where("tag", "popular")->firstorfail();

        $products[0]->tags()->attach([$taga->id, $tagfps->id, $tagnew->id]);
        $products[1]->tags()->attach([$taga->id, $tagfps->id, $tagnew->id]);
        $products[2]->tags()->attach([$taga->id, $tagfps->id, $tagnew->id]);
        $products[3]->tags()->attach([$taga->id, $tagfps->id, $tagnew->id]);
        $products[4]->tags()->attach([$taga->id, $tagfps->id, $tagnew->id]);
        $products[5]->tags()->attach([$tagb->id, $tagmoba->id, $tagpop->id]);
        $products[6]->tags()->attach([$tagb->id, $tagmoba->id, $tagpop->id]);
        $products[7]->tags()->attach([$tagb->id, $tagmoba->id, $tagpop->id]);
        $products[8]->tags()->attach([$tagb->id, $tagmoba->id]);
        $products[9]->tags()->attach([$tagb->id, $tagmoba->id]);
        $products[10]->tags()->attach([$tagn->id, $tagrpg->id]);
        $products[11]->tags()->attach([$tagn->id, $tagrpg->id]);
        $products[12]->tags()->attach([$tagn->id, $tagrpg->id]);
        $products[13]->tags()->attach([$tagn->id, $tagrpg->id]);
        $products[14]->tags()->attach([$tagn->id, $tagrpg->id]);
        
    }

    
}
