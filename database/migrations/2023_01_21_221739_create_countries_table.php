<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('countries', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->integer('total_population');
            $table->string('capital');
            $table->string('demonym');
            $table->string('latitude');
            $table->string('longitude');
            $table->string('numeric_code');
            $table->foreignId('continent_id')->constrained();
            $table->foreignId('languaje_id')->constrained();
            $table->foreignId('religion_id')->constrained();
            $table->foreignId('currency_id')->constrained();
            $table->longText('description')->nullable();

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
        Schema::dropIfExists('countries');
    }
};
