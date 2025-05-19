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
        Schema::create('tours', function (Blueprint $table) {
            $table->Increments('id');
            $table->string('title');
            $table->text('description');
            $table->string('slug');
            $table->double('price');
            $table->string('vehicle');
            $table->string('departure_date');
            $table->string('return_date');
            $table->integer('tour_code');
            $table->string('tour_time');
            $table->string('image');
            $table->string('tour_from');
            $table->string('tour_to');
            $table->string('quantity');
            $table->integer('status');
            $table->integer('categories_id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tours');
    }
};
