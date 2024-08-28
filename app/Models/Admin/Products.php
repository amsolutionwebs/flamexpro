<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    use HasFactory;

     public function category()
    {
        return $this->belongsTo(ProductCategories::class, 'product_cat_id');
    }
}
