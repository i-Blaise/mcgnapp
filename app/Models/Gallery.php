<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gallery extends Model
{
    use HasFactory;

    public $table = 'gallery';

    protected $fillable = [
        'image',
        'category',
        'category_id'
    ];

    // protected $casts = [
    //     'image' => 'array', // Assuming 'images' is stored as JSON in the database
    // ];
}
