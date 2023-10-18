<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class News extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function setSlugAttribute($slug)
    {
        $this->attributes['slug'] = Str::slug(mb_substr($this->title, 0, 140) . "-");
    }

    public function getContentPreview()
    {
        return Str::limit($this->content, 120);
    }
}
