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
        Schema::create('pet_walks', function (Blueprint $table) {
            $table->id();
            $table->string('location');
            $table->date('walk_date');

            $table->unsignedBigInteger('pet_id');
            $table->foreign('pet_id')
            ->references('id')
            ->on('mascotas')
            ->onDelete('restrict')
            ->onUpdate('cascade');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pet_walks');
    }
};
