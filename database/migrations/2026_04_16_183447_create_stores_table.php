<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('stores', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('subdomain')->unique();
            $table->unsignedBigInteger('lunar_channel_id')->nullable();

            // Branding
            $table->string('logo_path')->nullable();
            $table->string('nav_layout')->default('left');
            $table->json('colors')->nullable();
            $table->string('font_family')->default('Inter');
            $table->string('font_custom')->nullable();

            // Features toggle array: ['calendar', 'countdown', 'roster']
            $table->json('features_enabled')->nullable();

            // Optional announcement banner
            $table->boolean('has_banner')->default(false);
            $table->string('banner_text')->nullable();

            // Events / Calendar — Repeater JSON
            // Schema: [{ name, event_date, location, show_countdown }]
            $table->json('events')->nullable();

            // Roster — Repeater JSON
            // Schema: [{ photo, name, meta }]
            $table->json('roster')->nullable();

            // Drives checkout specialization: 'school' | 'corporate' | 'fundraiser' | 'general'
            $table->string('store_type')->default('school');

            $table->boolean('is_active')->default(true);
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('stores');
    }
};
