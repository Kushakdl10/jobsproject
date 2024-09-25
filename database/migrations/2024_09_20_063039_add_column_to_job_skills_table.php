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
        Schema::table('jobSkills', function (Blueprint $table) {
            $table->unsignedBigInteger('job_id');
            $table->foreign('job_id')->references('id')->on('job');        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('job_skills', function (Blueprint $table) {
            //
        });
    }
};
