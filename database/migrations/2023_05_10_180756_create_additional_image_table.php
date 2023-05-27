<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('additional_images', function (Blueprint $table) {
            $table->id();
            $table->string('image_path');
            $table->BigInteger('product_id');
        });
    

		DB::table('additional_images')->insert([
			[
				'product_id' => 1,
				'image_path' => 'src/product/img.png',
			],
			[
				'product_id' => 1,
				'image_path' => 'src/product/img.png',
			],
			[
				'product_id' => 1,
				'image_path' => 'src/product/img.png',
			],



			[
				'product_id' => 2,
				'image_path' => 'src/products/1.png',
			],
			[
				'product_id' => 2,
				'image_path' => 'src/products/1.png',
			],
			[
				'product_id' => 2,
				'image_path' => 'src/products/1.png',
			],



			
			[
				'product_id' => 3,
				'image_path' => 'src/products/2.png',
			],
			[
				'product_id' => 3,
				'image_path' => 'src/products/2.png',
			],
			[
				'product_id' => 3,
				'image_path' => 'src/products/2.png',
			],




			[
				'product_id' => 4,
				'image_path' => 'src/products/3.png',
			],
			[
				'product_id' => 4,
				'image_path' => 'src/products/3.png',
			],
			[
				'product_id' => 4,
				'image_path' => 'src/products/3.png',
			],
			
		
		]);
	}	

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('additional_images');
    }
};
