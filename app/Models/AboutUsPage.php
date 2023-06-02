<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AboutUsPage extends Model
{
    use HasFactory;

    public $table = 'aboutpage';
    protected $fillable = [
        'header_img'
    ];
}
