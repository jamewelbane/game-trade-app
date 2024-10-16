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
        Schema::create('account_listings', function (Blueprint $table) {
            $table->id();
            $table->string('listing_id')->unique();
            $table->string('title'); // Listing title for the account
            $table->text('description'); // Description of the account
            $table->decimal('price', 10, 2); // Price in PHP
            $table->boolean('negotiable')->default(0);
            $table->string('game'); // Game the account is for
            $table->string('usage'); // Use: Good for Main/Smurf
            $table->string('type'); // Type: Heavy Spender/Light Spender/Free to Play
            $table->string('platform'); // Platform: Desktop/Mobile/Both
            $table->unsignedBigInteger('user_id'); // Reference to the user who created the listing
            $table->timestamps();
        
            // Foreign key constraint
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });
        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('account_listings');
    }
};
