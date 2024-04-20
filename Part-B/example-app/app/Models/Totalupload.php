<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\Total as Authenticatable;
use Illuminate\Http\Request;

class Totalupload extends Model
{
    use HasFactory;



    protected $fillable = [
        'co',
        'marks',
        'percentage',
    ];
}