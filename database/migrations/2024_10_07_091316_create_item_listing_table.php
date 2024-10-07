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
        Schema::create('item_listing', function (Blueprint $table) {
            $table->string('id')->primary(); // Primary key as a string
            $table->string('title'); // Title of the item
            $table->text('description'); // Description of the item
            $table->decimal('price', 10, 2); // Price of the item
            $table->string('game'); // Associated game
            $table->string('type'); // Type of item
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('item_listing');
    }
};
