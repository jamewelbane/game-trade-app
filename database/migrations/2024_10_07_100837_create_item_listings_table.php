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
        Schema::create('item_listings', function (Blueprint $table) {
            $table->id();
            $table->string('listing_id')->unique();
            $table->string('title'); // Title of the listing
            $table->text('description'); // Description of the account
            $table->decimal('price', 10, 2); // Price of the account
            $table->boolean('negotiable')->default(0);
            $table->string('game'); // The game the account is for
            $table->string('type'); // Type of account (whale, light spender, etc.)
            $table->unsignedBigInteger('user_id'); // Reference to the user who is selling
            $table->timestamps();

            // Foreign key constraint to users table
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('item_listings');
    }
};
