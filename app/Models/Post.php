<?php

namespace App\Models;

use App\Models\Tag;
use App\Models\Category;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Post extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'title',
        'content',
        'image'
    ];

    // Relation many-to-many avec Category
    public function categories()
    {
        return $this->belongsToMany(Category::class);
    }

    // Relation many-to-many avec Tag
    public function tags()
    {
        return $this->belongsToMany(Tag::class);
    }
}
