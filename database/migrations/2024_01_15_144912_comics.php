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
        Schema::create('comics', function (Blueprint $table) {
            $table->id();
            $table->foreignId('title_id')->constrained('titles');
            $table->enum('issue_type', ['regular', 'annual']);
            $table->integer('issue_number');
            $table->string('translator');
            $table->json('files'); // Зберігання файлів як JSON
            $table->enum('status', ['under_review', 'approved', 'rejected']);
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
