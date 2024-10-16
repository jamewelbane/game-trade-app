<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ItemListingImage extends Model
{
    use HasFactory;

    protected $fillable = ['listing_id', 'image_path'];

    // ListingImage.php
    public function listing()
    {
        return $this->belongsTo(ItemListing::class, 'listing_id'); // Correctly reference 'listing_id'
    }
}
