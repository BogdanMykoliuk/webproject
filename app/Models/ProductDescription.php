<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductDescription extends Model
{
    protected $fillable = [
		'product_description_title',
        'product_description_text',
		'product_id',
    ];

    public $timestamps = false;


	public function product(){
        return $this->belongsTo(Product::class);
    }
}
