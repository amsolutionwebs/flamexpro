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
        Schema::create('admins', function (Blueprint $table) {
            $table->id();
            $table->string('employee_id',200);
            $table->string('first_name',200);
            $table->string('last_name',200);
            $table->string('email_id',200);
            $table->string('mobile_number',200);
            $table->string('alternate_mobile_number',200);
            $table->string('whatsapp_number',200);
            $table->string('password',200);
            $table->string('age',200);
            $table->string('country_id',200);
            $table->string('state_id',200);
            $table->string('city',200);
            $table->string('pincode',200);
            $table->string('address',200);
            $table->string('profile_picture',200);
            $table->string('usertype',200);
            $table->string('company_name',200);
            $table->string('otp',200);
            $table->string('status',200);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('admins');
    }
};
