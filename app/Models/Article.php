<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory;
    protected $fillable = ['title_en','category_id','content_en', 'image','title_ar','content_ar'];



    public function category()
    {
        // عندو
        return $this->belongsTo(Category::class);
    }
    // public function user()
    // {
    //     return $this->belongsTo(User::class);
    // }

    /**
     * The tags that belong to the post.
     */
    public function tags()
    {
        return $this->belongsToMany(Tag::class);
    }
}
