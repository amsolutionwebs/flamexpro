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
        Schema::create('user_product_enquiries', function (Blueprint $table) {
            $table->id();
            $table->string('name',255)->nullable();
            $table->string('phone',255)->nullable();
            $table->string('email',255)->nullable();
            $table->string('requirement',255)->nullable();
            $table->string('address',255)->nullable();
            $table->string('status',200)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('user_product_enquiries');
    }
};
