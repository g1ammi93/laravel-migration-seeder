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
        Schema::create('trains', function (Blueprint $table) {
            $table->id();
            $table->string('company', 50);
            $table->string('departure_station', 100);
            $table->string('arrival_station', 100);
            $table->time('departure_time');
            $table->time('arrival_time');
            $table->date('departure_date');
            $table->smallInteger('train_code')->unsigned()->unique();
            $table->tinyInteger('carriages_number')->unsigned();
            $table->boolean('is_delayed')->default(0);
            $table->boolean('is_cancelled')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('trains');
    }
};
