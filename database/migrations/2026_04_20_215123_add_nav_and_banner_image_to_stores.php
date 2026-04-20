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
        Schema::table('stores', function (Blueprint $table) {
            // Banner image (full-width, shown below nav/banner-bar)
            $table->string('banner_image')->nullable()->after('banner_text');

            // Navigation links opt-in: JSON array of enabled section anchors e.g. ['catalog','events']
            $table->json('nav_links')->nullable()->after('nav_layout');

            // Sticky nav + banner bar
            $table->boolean('nav_sticky')->default(false)->after('nav_links');
        });
    }

    public function down(): void
    {
        Schema::table('stores', function (Blueprint $table) {
            $table->dropColumn(['banner_image', 'nav_links', 'nav_sticky']);
        });
    }
};
