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
        Schema::create('titles', function (Blueprint $table) {
            $table->id();
            $table->string('ukrainian_name');
            $table->string('original_name');
            $table->year('release_year');
            $table->text('description');
            $table->string('poster');
            $table->enum('status', ['ongoing', 'completed']);
            $table->enum('age_limit', ['0+', '6+', '13+', '16+', '18+']);
            $table->foreignId('user_id')->constrained('users');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
