<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('sectors', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('slug')->unique();
            $table->text('description')->nullable();
            $table->string('image')->nullable();
            $table->timestamps();
        });

        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->foreignId('sector_id')->constrained('sectors')->onDelete('cascade');
            $table->string('name');
            $table->string('slug');
            $table->string('category');
            $table->string('subtitle')->nullable();
            $table->string('tag')->nullable();
            $table->string('image');
            $table->text('what_it_is');
            $table->text('how_we_printed_it');
            $table->string('callout_text')->nullable();
            $table->text('specs'); // JSON or serialized specs
            $table->timestamps();

            // Prevent duplicate product slugs within the same sector
            $table->unique(['sector_id', 'slug']);
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('products');
        Schema::dropIfExists('sectors');
    }
};