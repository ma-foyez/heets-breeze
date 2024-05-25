<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SubCategory extends Model
{
    use HasFactory;
    protected $table = 'sub_categories';
    protected $fillable  = ['title','cat_id', 'status', 'order'];


    function category() {
        return $this->hasOne(Category::class,'id','cat_id');
    }
}
