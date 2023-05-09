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
        Schema::create('exams_attempt', function (Blueprint $table) {
            $table->id();
            $table->integer('exam_id');
            $table->integer('user_id');
            $table->integer('status')->default(1);
            $table->float('marks')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('exams_attempt');
    }
};
