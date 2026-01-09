<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('prodis', function (Blueprint $table) {
            if (!Schema::hasColumn('prodis', 'slug')) {
                $table->string('slug')->unique()->after('nama');
            }
        });
    }

    public function down(): void
    {
        Schema::table('prodis', function (Blueprint $table) {
            if (Schema::hasColumn('prodis', 'slug')) {
                $table->dropColumn('slug');
            }
        });
    }
};
