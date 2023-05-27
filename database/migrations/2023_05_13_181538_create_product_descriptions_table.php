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
        Schema::create('product_descriptions', function (Blueprint $table) {
            $table->id();
            $table->string('product_description_title');
            $table->text('product_description_text');
            $table->BigInteger('product_id');
        });


		DB::table('product_descriptions')->insert([
			[
				'product_description_title' => 'Генерал на полі',
				'product_description_text' => ' Генерал на полі. Досходовий гербіцид для боротьби з однорічними дводольними та деякими злаковими бур’янами в посівах ріпаку та інших культур.

				Діюча речовина: Кломазон, 480 г/л
				Препаративна форма: Концентрат емульсії
				Норма використання: 0,2-0,6 л/га
				Клас токсичності: 2.
				Термін зберігання: 2 роки. ',
				'product_id' => 1,
			],

			[
				'product_description_title' => 'Характеристики',
				'product_description_text' => ' Системний препарат потрапляє до рослини через гіпокотиль (підсім´ядольне колінце) та кореневу систему і рухається по ксилемі до листків;
				Проникаючи в рослину, припиняє процес утворення хлорофілу і каротину, тим самим зупиняє процес фотосинтезу;
				Знищує бур’яни та створює умови озимому ріпаку для доброго росту і розвитку в осінній період, усуваючи конкуренцію рослин за світло, вологу та поживні речовини на самих ранніх етапах органогенезу;
				Добре зв´язується у грунті та слабо промивається;
				Для комплексного захисту ріпаку зазвичай;
				Використовується у бакових сумішах із д.р. метазахлор та пропізохлор;
				В країнах Східної Європи (Чехія, Словаччина, Польща) використання Комманд® на посівах ріпаку є обов’язковим елементом в технології його вирощування;
				Широко використовується більше, ніж в 100 країнах світу на посівах ріпаку, сої, тютюну, перцю, моркви, картоплі, баштанних, бавовни та інших культур. ',
				'product_id' => 1,
			],
		]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('product_descriptions');
    }
};
