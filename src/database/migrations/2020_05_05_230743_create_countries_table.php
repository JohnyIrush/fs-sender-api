<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCountriesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up() {
		Schema::create('countries', function (Blueprint $table) {
			//$table->engine = 'InnoDB';
			$table->id();
			//$table->efficientUuid('uuid')->index();
			$table->string('name', 40);
			$table->string('country_code', 3);
			$table->string('dailing_code', 40);
			$table->string('currency', 40)->nullable();
			$table->string('currency_code', 20)->nullable();
			$table->timestamps();
			//$table->unique('country_code');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down() {
		Schema::dropIfExists('countries');
	}
}