<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateExampleLocationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('example_locations', function (Blueprint $table) {
            $table->id();
            $table->string('company_name', 13);
            $table->string('street', 28);
            $table->string('street_number', 5);
            $table->integer('postal_code');
            $table->string('city',45);
            $table->string('country',2);
            $table->string('latitude',10);
            $table->string('longitude',9);
            $table->string('email',35);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('example_locations');
    }
}
