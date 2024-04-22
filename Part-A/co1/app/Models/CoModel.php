<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CoModel extends Model
{
    use HasFactory;
    protected $table='CoTable';
    protected $fillable = [
        'id',
        'Questions',
        'Co',
        'Marks',
        'CoIndex'
    ];
    
}
