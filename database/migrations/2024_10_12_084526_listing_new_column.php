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
        Schema::table('account_listings', function (Blueprint $table) {
            $table->boolean('negotiable')->default(0)->after('price');
        });

        Schema::table('item_listings', function (Blueprint $table) {
            $table->boolean('negotiable')->default(0)->after('price');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('account_listings', function (Blueprint $table) {
            $table->dropColumn('negotiable');
        });
        Schema::table('item_listings', function (Blueprint $table) {
            $table->dropColumn('negotiable');
        });
    }
};
