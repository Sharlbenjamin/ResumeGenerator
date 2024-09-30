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
        Schema::disableForeignKeyConstraints();

        Schema::create('personals', function (Blueprint $table) {
            $table->id();
            $table->string('first_name', 50);
            $table->string('last_name', 50);
            $table->string('middle_name', 50)->nullable();
            $table->string('first_phone', 15)->nullable();
            $table->string('second_phone', 15)->nullable();
            $table->string('email')->nullable();
            $table->longText('address')->nullable();
            $table->date('date_of_birth')->nullable();
            $table->string('nationality', 50)->nullable();
            $table->string('marital_status')->default('0');
            $table->string('gender')->default('0');
            $table->string('github')->nullable();
            $table->string('linked_in')->nullable();
            $table->string('instagram')->nullable();
            $table->string('facebook')->nullable();
            $table->string('behance')->nullable();
            $table->timestamps();
        });

        Schema::enableForeignKeyConstraints();
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('personals');
    }
};
