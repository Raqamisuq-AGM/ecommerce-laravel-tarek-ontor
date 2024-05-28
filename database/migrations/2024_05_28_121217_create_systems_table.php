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
        Schema::create('systems', function (Blueprint $table) {
            $table->id();
            $table->string('company_name')->nullable();
            $table->string('slogan')->nullable();
            $table->string('email')->nullable();
            $table->string('phone')->nullable();
            $table->string('addr')->nullable();
            $table->string('working_hour')->nullable();
            $table->string('whatsapp')->nullable();
            $table->string('facebook')->nullable();
            $table->string('twitter')->nullable();
            $table->string('instagram')->nullable();
            $table->string('pinterest')->nullable();
            $table->string('dribble')->nullable();
            $table->string('linkedin')->nullable();
            $table->longText('about_us')->nullable();
            $table->longText('terms_condition')->nullable();
            $table->longText('refund_policy')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('systems');
    }
};
