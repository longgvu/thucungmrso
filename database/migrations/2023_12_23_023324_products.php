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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('tittle');
            $table->string('link');
            $table->text('description');
            $table->string('image');
            $table->string('brand');
            $table->string('old_price');
            $table->string('new_price');
            $table->unsignedBigInteger('category_1_id');
            $table->unsignedBigInteger('category_2_id');
            $table->timestamps();
            $table->foreign('category_1_id')->references('id')->on('category_1s')->onDelete('cascade');
            $table->foreign('category_2_id')->references('id')->on('category_2s')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
