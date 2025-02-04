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
        Schema::create('shared_quizzes', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('quiz_id')->unique();
            $table->string('shared_key')->unique();
            $table->timestamps();

            $table->index(['quiz_id']);
            $table->index(['shared_key']);
            $table->foreign('quiz_id')->references('id')->on('quizzes');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('shared_quizes');
    }
};
