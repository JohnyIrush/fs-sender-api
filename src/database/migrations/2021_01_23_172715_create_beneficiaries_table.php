<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBeneficiariesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('beneficiaries', function (Blueprint $table) {
                //$table->engine = 'InnoDB';
                $table->id();
                $table->bigInteger('user_id')->unsigned();
                //$table->efficientUuid('uuid')->index();
                $table->string('name', 191);
                $table->string('address', 191);
                $table->string('city', 191);
                $table->string('state', 191)->nullable();
                $table->string('postal_code', 45);
                $table->string('country', 191);
                $table->string('bank_name', 191)->nullable();
                $table->string('branch_name', 191)->nullable();
                $table->string('account_number', 191)->nullable();
                $table->string('email', 191);
                $table->string('phone', 45);
                $table->bigInteger('created_by')->nullable()->unsigned();
                $table->bigInteger('updated_by')->nullable()->unsigned();
                $table->timestamps();
    
                //$table->index(["users_id"], 'fk_beneficiaries_users1_idx');
    
               /* $table->foreign('users_id', 'fk_beneficiaries_users1_idx')
                    ->references('id')->on('users')
                    ->onDelete('no action')
                    ->onUpdate('no action'); */
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('beneficiaries');
    }
}
