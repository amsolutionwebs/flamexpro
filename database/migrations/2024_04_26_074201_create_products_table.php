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
            $table->bigInteger('product_cat_id')->nullable();
            $table->string('product_title',200);
            $table->string('product_title_seo_url',200);
            $table->longText('product_content')->nullable();
            $table->string('seo_title',200);
            $table->string('meta_keywords',200);
            $table->string('meta_description',200);
            $table->string('product_image',200)->nullable();
            $table->string('sort_order',55)->default(0);
            $table->string('status',200); 
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
