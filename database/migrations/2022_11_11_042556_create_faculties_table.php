<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('faculties', function (Blueprint $table) {
            // auto increment id
            $table->id('faculty_id')->autoIncrement();
            $table->string('faculty_name');
            $table->string('faculty_department');
            $table->string('faculty_email')->unique();
            $table->string('faculty_password');
            $table->string('faculty_phone');
            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('faculties');
    }
};
