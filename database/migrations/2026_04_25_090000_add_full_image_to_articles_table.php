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
        if (!Schema::hasColumn('articles', 'full_image')) {
            Schema::table('articles', function (Blueprint $table) {
                $table->string('full_image')->nullable()->after('preview_image');
            });
        }
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        if (Schema::hasColumn('articles', 'full_image')) {
            Schema::table('articles', function (Blueprint $table) {
                $table->dropColumn('full_image');
            });
        }
    }
};
