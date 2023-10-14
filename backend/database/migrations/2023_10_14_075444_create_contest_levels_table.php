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
        Schema::create('contest_levels', function (Blueprint $table) {
            $table->id();
            $table->timestamp('contest_start_date')->comment('Начала конкурса');
            $table->timestamp('contest_end_date')->comment('Конец конкурса');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('contest_levels');
    }
};
