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
        Schema::create('proposals', function (Blueprint $table) {
            $table->string("proposal_id");
            $table->string('proposal_title')->primary();
            $table->string('proposal_authorityOrOrganization');
            $table->string('proposal_govtPrivate');
            $table->string('proposal_abstract');
            $table->string('proposal_fundingAmount');
            $table->string('proposal_submissionDate');
            $table->string('proposal_file');
            $table->string('proposal_faculty_group_id');
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
        Schema::dropIfExists('proposals');
    }
};
