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
        Schema::create('countries', function (Blueprint $table) {
            $table->id();
            $table->char('iso', 2);
            $table->string('name', 100);
            $table->string('nicename', 100);
            $table->char('iso3', 3)->nullable()->default('');
            $table->char('numcode', 6)->nullable()->default('');
            $table->char('phonecode', 5);
            $table->timestamps();
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
