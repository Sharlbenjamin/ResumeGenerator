<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::table('personals', function (Blueprint $table) {
            $table->unsignedBigInteger('first_phone_country_id')->nullable();
            $table->unsignedBigInteger('second_phone_country_id')->nullable();
        });
    }

    public function down()
    {
        Schema::table('personal_data', function (Blueprint $table) {
            $table->dropColumn('first_phone_country');
            $table->dropColumn('second_phone_country');
        });
    }
};