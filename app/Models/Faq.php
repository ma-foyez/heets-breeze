<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Faq extends Model
{
    use HasFactory;
    protected $table = 'faqs';
    protected $fillable  = ['question', 'answer', 'status', 'order'];

    public function packages()
    {
        return $this->hasMany(Package::class);
    }
}
