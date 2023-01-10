<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Enquiries extends Model
{
    use HasFactory;

    public $table = 'enquiries';

    protected $fillable = [
        'name', 'phone_num', 'email', 'subject', 'message'
    ];
}
