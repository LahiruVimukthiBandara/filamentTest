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
        Schema::create('employees', function (Blueprint $table) {
            $table->id();
            $table->foreignId('country_id');
            $table->foreign('country_id')->on('countries')->references('id')->cascadeOnDelete();
            $table->foreignId('city_id');
            $table->foreign('city_id')->on('cities')->references('id')->cascadeOnDelete();
            $table->foreignId('state_id');
            $table->foreign('state_id')->on('states')->references('id')->cascadeOnDelete();
            $table->foreignId('department_id');
            $table->foreign('department_id')->on('departments')->references('id')->cascadeOnDelete();
            $table->string('first_name');
            $table->string('last_name');
            $table->string('address');
            $table->char('zip_code');
            $table->date('dob');
            $table->date('join_date');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('employees');
    }
};
