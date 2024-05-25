<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $table = 'products';
    protected $fillable  = ['title', 'description', 'status', 'order', 'product_category','product_sub_category', 'image'];
    public function category()
    {
        return $this->belongsTo(Category::class, 'product_category');
    }
    public function subcategory()
    {
        return $this->belongsTo(SubCategory::class, 'product_sub_category');
    }
}
