<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    protected $table ='categories';
    protected $fillable =[
        'id',
        'cate_name',
        'slug',


    ];

    public function articles(){
        // عندو
        return $this->hasMany(Article::class);
    }
    public function getRouteKeyName()
    {
        return 'slug';
    }


}
