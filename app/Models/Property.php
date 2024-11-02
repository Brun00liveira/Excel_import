<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;   

class Property extends Model
{
    use HasFactory;

    protected $table = 'properties';

    protected $fillable = [
        'title',
        'description',
        'price',
        'area',
        'room',
        'parking',
        'address',
        'city',
        'state',
        'cep',
    ];

    public function photos()
    {
        return $this->hasMany(PropertyPhoto::class, 'property_id', 'id');
    }
}
