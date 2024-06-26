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
            $table->string('category')->nullable();
            $table->string('sub_category')->nullable();
            $table->string('brand')->nullable();
            $table->string('title')->nullable();
            $table->string('sku')->nullable();
            $table->string('price')->nullable();
            $table->longText('desc')->nullable();
            $table->longText('video_desc')->nullable();
            $table->longText('in_stock')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
