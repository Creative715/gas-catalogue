<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use App\Models\Product;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Support\Str;

class Category extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'parent_id'];

    public function setSlugAttribute($slug)
    {
        $this->attributes['slug'] = Str::slug(mb_substr($this->title, 0, 140) . "-");
    }

    public function subcategories():HasMany
    {
        return $this->hasMany(Category::class, 'parent_id');
    }

    public function getContentPreview()
    {
        return Str::limit($this->description, 100);
    }

    // public function products(): HasMany
    // {
    //     return $this->hasMany(Product::class);
    // }

    public function products(): BelongsToMany
    {
        return $this->belongsToMany(Product::class, 'category_product', 'category_id', 'product_id');
    }
}
