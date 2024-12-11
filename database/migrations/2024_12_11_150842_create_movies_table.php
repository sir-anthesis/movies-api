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
        Schema::create('movies', function (Blueprint $table) {
            $table->id(); // Primary Key
            $table->string('title')->nullable(); // Foreign key referencing 'movies'
            $table->string('overview')->nullable(); // Note column
            $table->string('release_date')->nullable(); // Note column
            $table->timestamps(); // created_at and updated_at timestamps

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tb_movies');
    }
};
