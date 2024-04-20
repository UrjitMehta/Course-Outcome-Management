<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\Upload as Authenticatable;
use Illuminate\Http\Request;

class Upload extends Model
{
    use HasFactory;



    protected $fillable = [
        'id',
        'rollno',
        'co1',
        'p_co1' ,
        'co2',
        'p_co2' ,
        'co3',
        'p_co3' ,
        'co4',
        'p_co4' ,
        'co5',
        'p_co5' ,  
    ];
}
