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
        Schema::table('account_listing_images', function (Blueprint $table) {
            // Drop the existing foreign key that references 'id'
            $table->dropForeign(['listing_id']);  // Adjust to the correct foreign key name if needed
            
            // Update the 'listing_id' column to reference 'listing_id' in 'account_listings' instead of 'id'
            // Optional: Rename 'listing_id' to 'ref_id' if desired
            $table->string('listing_id')->change();  // Ensure the data type matches 'listing_id' in 'account_listings'
            
            // Add the new foreign key to reference 'listing_id' in 'account_listings'
            $table->foreign('listing_id')->references('listing_id')->on('account_listings')->onDelete('cascade');
        });
    }
    
    public function down(): void
    {
        Schema::table('account_listing_images', function (Blueprint $table) {
            // Drop the foreign key that references 'listing_id'
            $table->dropForeign(['listing_id']);
            
            // Optional: Revert 'listing_id' back to the original foreign key referencing 'id'
            $table->foreign('listing_id')->references('id')->on('account_listings')->onDelete('cascade');
        });
    }
    
};
