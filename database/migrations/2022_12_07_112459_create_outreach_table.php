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
        Schema::create('outreaches', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('outreach_faculty_department');
            $table->string('outreach_faculty_name');
            $table->string('outreach_activity');
            $table->string('outreach_status');
            $table->string('outreach_place');
            $table->string('outreach_date');
            $table->string('outreach_sponsors');
            $table->string('outreach_amount');
            $table->string('outreach_photos');
            $table->string('outreach_report');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('outreach');
    }
};
