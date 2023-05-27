<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{

    protected $fillable = [
        'product_name',
        'product_image',
		'product_price',
		'manufacturer_id',
    ];

    public $timestamps = false;


	public function manufacturer(){
        return $this->belongsTo(Manufacturer::class);
    }

	public function additional_images(){
        return $this->hasMany(AdditionalImage::class);
		
    }

	public function product_description(){
        return $this->hasMany(ProductDescription::class);
	}
}
