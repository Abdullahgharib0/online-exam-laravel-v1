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
        Schema::create('exams', function (Blueprint $table) {
            $table->id();
            $table->string('exam_name', 255);
            $table->integer('subject_id');
            $table->string('date', 255);
            $table->time('time' , $precision = 0);
            $table->integer('attempt');
            $table->float('marks')->default(0);
            $table->float('pass_marks')->default(0);
            $table->string('enterance_id', 255);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('exams');
    }
};
