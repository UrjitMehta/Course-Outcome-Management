<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Casts\Attribute;

class Dynamic_que extends Model
{
    use HasFactory;
    protected $table='dynamic_inp1';
    protected $fillable = [
        'totalque',
        'totalco',
        'co',
        'marks',
    ];
    
    protected function co(): Attribute
    {
        return Attribute::make(
            get: fn ($value) => json_decode($value, true),
            set: fn ($value) => json_encode($value),
        );
    }  
    protected function marks(): Attribute
    {
        return Attribute::make(
            get: fn ($value) => json_decode($value, true),
            set: fn ($value) => json_encode($value),
        );
    }  
    
}
