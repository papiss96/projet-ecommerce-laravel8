<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    // use HasFactory;
    protected $fillable = [
        'id',
        'name',
        'category',
        'description',
         'quantite',
         'disponible',
        'vendeur_id',   
        'image_url',
        'price'

    ];

    public function orders(){
        return $this->hasMany(Order::class);
    }
}
