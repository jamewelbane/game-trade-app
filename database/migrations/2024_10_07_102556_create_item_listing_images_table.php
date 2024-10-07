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
        Schema::create('item_listing_images', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('listing_id'); // Reference to the listing
            $table->string('image_path'); // Path to the uploaded image
            $table->timestamps();

            // Foreign key constraint
            $table->foreign('listing_id')->references('id')->on('item_listings')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('item_listing_images');
    }
};
