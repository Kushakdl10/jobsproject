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
        Schema::create('user_skills', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger( 'skill_id');
            $table->foreign( columns: 'skill_id')->references( columns: 'id')->on( table: 'skills');
            $table->unsignedBigInteger( 'users_id');
            $table->foreign( columns: 'users_id')->references( columns: 'id')->on( table: 'users');
            $table->boolean('status')->default(value: true);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('user_skills');
    }
};
