<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Manufacturer extends Model
{
    protected $fillable = [
        'manufacturer_name',
        'manufacturer_logo',
    ];

    public $timestamps = false;


	public function products(){
        return $this->hasMany(Product::class);
    }
}
