<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Passport\HasApiTokens;

class Home extends Model
{
    protected $fillable = [
        'name', 'number_of_rooms', 'ap_floor', 'c'
    ];
}
