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
        Schema::create('posts', function (Blueprint $table) {
            // $table->id();
            // $table->timestamps();
            $table->id(); // This creates the 'id' column (primary key, auto-increment)
            $table->string('name');
            $table->string('email')->unique();
            $table->integer('age');
            $table->string('city');
            $table->timestamps(); // This adds 'created_at' and 'updated_at' columns
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('posts');
    }
};