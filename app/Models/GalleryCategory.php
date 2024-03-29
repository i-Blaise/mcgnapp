<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GalleryCategory extends Model
{
    use HasFactory;

    public $table = 'gallerycategory';

    protected $fillable = [
        'category',
        'category_id',
    ];
}
