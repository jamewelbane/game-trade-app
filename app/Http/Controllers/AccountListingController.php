<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AccountListing;
use Illuminate\Routing\Controller;
use Illuminate\Support\Str;

class AccountListingController extends Controller
{
    public function store(Request $request)
    {
        // Validate the incoming request data
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'price' => 'required|numeric|min:0',
            'negotiable' => 'required|boolean',
            'game' => 'required|string',
            'usage' => 'required|string',
            'type' => 'required|string',
            'platform' => 'required|string',
            'images' => 'required|array|max:5', // Maximum of 5 images
            'images.*' => 'image|mimes:jpeg,png,jpg|max:1024', // Validate each image
        ]);

        // Get the user ID or use a default value
        $userId = 123;

        // Generate a unique listing_id
        $listingId = $this->generateUniqueListingId();

        // Create the account listing
        $listing = AccountListing::create([
            
            'title' => $request->input('title'),
            'description' => $request->input('description'),
            'price' => $request->input('price'),
            'negotiable' => $request->input('negotiable'),
            'game' => $request->input('game'),
            'usage' => $request->input('usage'),
            'type' => $request->input('type'),
            'platform' => $request->input('platform'),
            'user_id' => $userId, // Add user_id here
            'listing_id' => $listingId,
        ]);



        // Handle multiple image uploads
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
        return redirect('/new-listing-account')->with('success', 'Account listing created successfully');
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
            $listingId = 'ACC_' . Str::random(8); // Generates a random 8-character string
        } while (AccountListing::where('listing_id', $listingId)->exists()); // Check for uniqueness

        return $listingId; // Return the unique listing ID
    }
}
