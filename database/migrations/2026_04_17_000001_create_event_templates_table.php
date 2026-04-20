<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('event_templates', function (Blueprint $table) {
            $table->id();
            $table->string('store_type');   // 'school' | 'corporate' | 'fundraiser' | 'general' | 'specialized'
            $table->string('category');     // e.g. 'academic', 'athletic', 'hr_culture'
            $table->string('category_label');
            $table->string('name');         // e.g. 'Spirit Week', 'Trade Show'
            $table->timestamps();

            $table->index(['store_type', 'category']);
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('event_templates');
    }
};
