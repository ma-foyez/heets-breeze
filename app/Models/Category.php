<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    protected $table = 'categories';
    protected $fillable  = ['title', 'status', 'order'];


    function subcategory() {
        return $this->hasMany(SubCategory::class,'cat_id','id');
    }
}
