<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
			$table->string('product_name');
			$table->string('product_image');
			$table->float('product_price');
			$table->BigInteger('manufacturer_id');
        });

		DB::table('products')->insert([
			[
				'product_name' => 'Гербіцид Комманд®',
				'product_image' => 'src/product/img.png',
				'product_price' => 1619.03,
				'manufacturer_id' => 1,
			],
			[
				'product_name' => 'Петунія Софістика F1',
				'product_image' => 'src/products/1.png',
				'product_price' => 20,
				'manufacturer_id' => 1,
			],
			[
				'product_name' => 'Скор 250 ЕС к.э.',
				'product_image' => 'src/products/2.png',
				'product_price' => 589,
				'manufacturer_id' => 1,
			],
			[
				'product_name' => 'СВИЧ',
				'product_image' => 'src/products/3.png',
				'product_price' => 200,
				'manufacturer_id' => 1,
			],
		]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
