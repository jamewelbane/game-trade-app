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
            $table->id(); // Primary key
            $table->string('title'); // Item title
            $table->text('description'); // Item description
            $table->decimal('price', 10, 2); // Price with 2 decimal points
            $table->string('game'); // Game name
            $table->string('type'); // Item type (e.g., in-game item, in-game currency)
            $table->string('image_path')->nullable(); // Path for the uploaded image
            $table->timestamps(); // Created at and updated at timestamps
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
