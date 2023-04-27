<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'description', 'price', "quantity", "platform"];

    public function tags()
    {
        return $this->belongsToMany(Tag::class);
    }
}
