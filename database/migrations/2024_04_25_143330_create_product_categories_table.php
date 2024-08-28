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
        Schema::create('product_categories', function (Blueprint $table) {
            $table->id();
            $table->string('category_title',200);
            $table->string('category_seo_url',200);
            $table->longText('category_content')->nullable();
            $table->string('post_type',200)->nullable();
            $table->string('category_status',200);
            $table->string('category_image',200)->nullable();
            $table->string('sort_order',55)->default(0); 
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('product_categories');
    }
};
