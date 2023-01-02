<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Volunteers extends Model
{
    use HasFactory;

    public $table = 'volunteers';

    protected $fillable = [
        'full_name', 'phone_num', 'email', 'reason', 'event_name'
    ];
}
