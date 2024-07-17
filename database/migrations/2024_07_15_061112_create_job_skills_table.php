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
        Schema::create('job_skills', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger( 'job_id');
            $table->foreign( columns: 'job_id')->references( columns: 'id')->on( table: 'jobs');
            $table->unsignedBigInteger( 'skill_id');
            $table->foreign( columns: 'skill_id')->references( columns: 'id')->on( table: 'skills');
            $table->boolean('status')->default(value: true);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('job_skills');
    }
};
