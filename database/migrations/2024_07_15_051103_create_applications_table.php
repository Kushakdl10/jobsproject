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
        Schema::create('applications', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger( 'user_id');
            $table->foreign( columns: 'user_id')->references( columns: 'id')->on( table: 'users');
            $table->unsignedBigInteger( 'jobs_id');
            $table->foreign( columns: 'jobs_id')->references( columns: 'id')->on( table: 'jobs');
            $table->boolean(column: 'status')->default(value: true);
            $table->softDeletes();
            $table->timestamps('applied_at');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('applications');
    }
};