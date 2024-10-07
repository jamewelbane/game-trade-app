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
        Schema::dropIfExists('item_listing');
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('item_listing', function (Blueprint $table) {
            //
        });
    }
};
