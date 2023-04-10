<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Home extends Model
{
    use HasFactory;

    public $table = 'home';

    protected $fillable = [
        'home_slider_img', 'home_slider_caption', 'home_slider_text', 'video_link',  'donation_cause'
    ];
}
