<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Testimonials extends Model
{
    use HasFactory;
    protected $fillable = [
        'testimonials_name',
        'testimonials_position',
        'testimonials_content',
        'testimonials_image',
        'sort_order',
        'status',

    ];
}
