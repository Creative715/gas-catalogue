<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use App\Models\Image;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Support\Str;

class Product extends Model
{
    use HasFactory;

    protected $fillable =  ['title', 'seo_title', 'price', 'category_id', 'published', 'slug', 'description', 'img', 'content'];

    public function setSlugAttribute($slug)
    {
        $this->attributes['slug'] = Str::slug(mb_substr($this->title, 0, 140) . "-");
    }

    public function scopeAllPaginate($query, $numbers)
    {
        return $query->with('category')->latest()->where('published', '1')->paginate($numbers);
    }

    public function getContentPreview()
    {
        return Str::limit($this->content, 200);
    }

    public function createdAtForHumans()
    {
        return $this->created_at->diffForHumans();
    }

    public static function findBySlug(string $slug): self
    {
        return static::where('slug', $slug)->firstOrFail();
    }

    public function state(): HasOne
    {
        return $this->hasOne(State::class);
    }

    public function category(): BelongsTo
    {
        return $this->belongsTo('App\Models\Category', 'category_id');
    }

    public function images(): HasMany
    {
        return $this->hasMany(Image::class, 'product_id');
    }
}
