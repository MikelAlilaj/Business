<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBusinessesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('businesses', function (Blueprint $table) {
            $table->id();
            $table->string('web_status')->nullable();
            $table->integer('user_id');
            $table->string('subject_name');
            $table->string('legale_status');
            $table->string('status');
            $table->string('description');
            $table->string('creation_year');
            $table->string('nuis');
            $table->integer('category_id');
            $table->string('phone');
            $table->string('email');
            $table->double('latitude')->nullable();
            $table->double('longtitude')->nullable();
            $table->string('official_address');
            $table->string('initial_capital');
            $table->string('company_service_description');
            $table->integer('state_id');
            $table->integer('city_id');
            $table->string('verified');

            $table->string('adm_first_name');
            $table->string('adm_last_name');
            $table->string('adm_phone');
            $table->string('adm_email');
            $table->string('adm_percentage');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('businesses');
    }
}
