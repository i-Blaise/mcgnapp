<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Donations extends Model
{
    use HasFactory;


    public $table = 'donations';


    protected $fillable = [
        'name',
        'phone_num', 
        'email', 
        'amount', 
        'cause_name', 
        'api_message',
        'code',
        'paylinkId',
        'paylinkUrl',
        'expiresAt',
    ];
}
