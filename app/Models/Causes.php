<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Causes extends Model
{
    use HasFactory;

    public $table = 'causes';
    protected $fillable = [
        'main_img',
        'caption',
        'goal',
        'money_raised',
        'excerpt',
        'body',
        'author_name',
        'author_id'
    ];
}
