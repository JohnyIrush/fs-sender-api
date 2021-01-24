<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBeneficiarieReceivingMethodsTable extends Migration {
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up() {
		Schema::create('beneficiarie_receiving_methods', function (Blueprint $table) {
			$table->id();
			$table->bigInteger('beneficiary_id')->unsigned();
			$table->bigInteger('bank')->nullable()->unsigned();
			$table->bigInteger('agent')->nullable()->unsigned();
			$table->bigInteger('cash_pickup')->nullable()->unsigned();
			$table->string('mobile',191);
			$table->bigInteger('zipwallet')->nullable()->unsigned();
			$table->bigInteger('mobile_operator_id')->nullable()->unsigned();
			$table->bigInteger('created_by')->nullable()->unsigned();
			$table->bigInteger('updated_by')->nullable()->unsigned();
			$table->timestamps();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down() {
		Schema::dropIfExists('beneficiarie_receiving_methods');
	}
}
