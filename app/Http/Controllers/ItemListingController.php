<?php

namespace App\Http\Controllers;

use App\Models\ItemListing;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Models\ItemListingImage; 
use Illuminate\Routing\Controller;

class ItemListingController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'price' => 'required|numeric|min:0',
            'negotiable' => 'required|boolean',
            'game' => 'required|string',
            'type' => 'required|string',
            'images' => 'required|max:1',
            'images.*' => 'image|mimes:jpeg,png,jpg|max:1024', // Validate each image
        ]);
    
        // Get the user ID or use a default value
        $userId = 123;

        // Generate a unique listing_id
        $listingId = $this->generateUniqueListingId();
    
        // Create the item listing
        $listing = ItemListing::create([
            
            'title' => $request->input('title'),
            'description' => $request->input('description'),
            'price' => $request->input('price'),
            'negotiable' => $request->input('negotiable'),
            'game' => $request->input('game'),
            'type' => $request->input('type'),
            'user_id' => $userId, 
            'listing_id' => $listingId, 
        ]);
    

        if ($request->hasFile('images')) {
            foreach ($request->file('images') as $image) {
        
                $path = $image->store('images', 'public');

                // Create a new image record with the correct listing_id
                $listing->images()->create([
                    'listing_id' => $listing->listing_id,
                    'image_path' => $path,
                    
                ]);
            }
        }
    
      // After successful creation
        return redirect('/add-item')->with('success', 'Item listing created successfully');
    }


    /**
     * Generate a unique listing ID.
     *
     * @return string
     */
    private function generateUniqueListingId(): string
    {
        do {
            // Generate a new listing ID starting with "AC_"
            $listingId = 'ITM_' . Str::random(8); // Generates a random 8-character string
        } while (ItemListing::where('listing_id', $listingId)->exists()); // Check for uniqueness

        return $listingId; // Return the unique listing ID
    }
 
}
