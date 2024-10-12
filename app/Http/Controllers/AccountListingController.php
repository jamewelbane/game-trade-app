<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AccountListing;
use Illuminate\Routing\Controller;


class AccountListingController extends Controller
{


    public function store(Request $request)
    {
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
        ]);

        // Handle multiple image uploads
        if ($request->hasFile('images')) {
            foreach ($request->file('images') as $image) {
                $path = $image->store('images', 'public');
                $listing->images()->create(['image_path' => $path]); // This will now use listing_id
            }
        }

        // After successful creation
        return redirect('/add-item')->with('success', 'Account listing created successfully');
    }
}
