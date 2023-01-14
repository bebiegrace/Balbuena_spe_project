<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class gracebebie extends Model
{
    protected $fillable =[
        'name',
        'guardian',
        'address'
    ];

    use HasFactory;
}
