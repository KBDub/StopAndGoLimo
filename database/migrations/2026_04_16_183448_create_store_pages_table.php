<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('store_pages', function (Blueprint $table) {
            $table->id();
            $table->foreignId('store_id')->constrained()->cascadeOnDelete();

            // '' = home, 'roster', 'events', 'gallery', etc.
            $table->string('slug')->default('');

            $table->string('title');

            // Ordered array of section keys to render on this page:
            // ['hero', 'countdown', 'banner', 'catalog', 'events', 'roster']
            $table->json('sections')->nullable();

            $table->boolean('is_active')->default(true);
            $table->integer('sort_order')->default(0);
            $table->timestamps();

            $table->unique(['store_id', 'slug']);
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('store_pages');
    }
};
