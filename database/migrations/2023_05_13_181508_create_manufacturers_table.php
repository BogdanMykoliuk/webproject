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
        Schema::create('manufacturers', function (Blueprint $table) {
            $table->id();
			$table->string('manufacturer_name');
			$table->string('manufacturer_logo');
        });


		DB::table('manufacturers')->insert([
			[
				'manufacturer_name' => 'ФМС УКРАЇНА',
				'manufacturer_logo' => 'src/FMC.png',
			],
		]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('manufacturers');
    }
};
