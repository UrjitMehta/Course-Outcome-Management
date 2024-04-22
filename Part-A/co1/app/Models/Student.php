<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\Student as Authenticatable;
use Illuminate\Http\Request;

class Student extends Model
{
    use HasFactory;
    // protected $table='student';
    protected $fillable = [
        'rollno',
        'name',
    ];
    
}
