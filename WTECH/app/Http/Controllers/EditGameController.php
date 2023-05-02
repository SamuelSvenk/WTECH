<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Tag;

class EditGameController extends Controller
{
    public function index($id)
    {
        $product = Product::find($id);
        $tags = Tag::all();

        return view('editgame', ["product" => $product, "tags" => $tags]);
    }
    
    public function edit($id, Request $request)
    {
        /*$request->validate([
            "image" => "image|mimes:jpg,png,jpeg,gif,svg|max:2048",
            "title" => "unique:products,title|min:1",
            "price" => "numeric|min:0",
            "quantity" => "numeric|min:0",
            "description" => "min:0",
            "more_info" => "min:0",
            "system_requirements" => "min:0",
        ]);*/

        $Product = Product::find($id);
        if ($request->has("image")) 
        {
            $image_path = $request->file('image')->store('image', 'public');
            $Product->image = $image_path;
        }

        $Product->title = $request->input("title");
        $Product->price = $request->input("price");
        $Product->quantity = $request->input("quantity");
        $Product->description = $request->input("description");
        $Product->more_info = $request->input("more_info");
        $Product->system_requirements = $request->input("system_requirements");
        $Product->release_date = $request->input("release_date");
        if ($request->has("platform"))
        {
            $Product->platform = $request["platform"];
        }
        
        $Product->save();

        if ($request->has("genre"))
        {
            $tag_g = Tag::where("tag", "like", $request["genre"]) -> firstorfail();
            $Product->tags()->attach([$tag_g->id]);
        }
        if ($request->has("devs"))
        {
            $tag_d = Tag::where("tag", "like",$request["devs"]) ->firstorfail();
            $Product->tags()->attach([$tag_d->id]);
        }
        if ($request->has("new"))
        {
            $tag_new = Tag::where("tag", "like",$request["new"]) ->firstorfail();
            $Product->tags()->attach([$tag_new->id]);
        }
        if ($request->has("pop"))
        {
            $tag_pop = Tag::where("tag", "like",$request["pop"]) ->firstorfail();
            $Product->tags()->attach([$tag_pop->id]);
        }

        $products = Product::paginate(12);

        return redirect('adminproducts')->with('products', $products);
    }
}
