<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ItemListing extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'description',
        'price',
        'game',
        'type',
        'user_id',
    ];

    // Define the relationship with ListingImage
    public function images()
    {
        return $this->hasMany(ItemListingImage::class, 'listing_id'); 
    }
}
